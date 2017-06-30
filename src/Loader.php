<?php
namespace Shopex\Luban;

use ActiveCollab\Etcd;

class Loader {

	public $conns = array();
	private $srvs = array();
	private $etcd_client;

	function etcd($etcd_url) {
		$this->etcd_client = new Etcd\Client($etcd_url);
		$n = $this->etcd_client->dirInfo('/luban/nodes');
		foreach($n['node']['nodes'] as $srv){
			if($srv['dir']){
				$srvname = basename($srv['key']);
				$l = $this->etcd_client->dirInfo($srv['key']);
				$nodes = [];
				if(isset($l['node']['nodes'])){
					foreach($l['node']['nodes'] as $node){
						$nodes[] = basename($node['key']);
					}
				}
				$this->srvs[$srvname] = $nodes;
			}
		}
	}

	function bus(){
		return $this->etcd_client;
	}


	function services(){
		$srvs = array_keys($this->srvs);
		sort($srvs);
		return $srvs;
	}

	function nodes(){
		$nodes = [];
		$n = $this->etcd_client->dirInfo('/luban/nodes');
		foreach($n['node']['nodes'] as $srv){
			if($srv['dir']){
				$srvname = basename($srv['key']);
				$l = $this->etcd_client->dirInfo($srv['key']);
				if(isset($l['node']['nodes'])){
					foreach($l['node']['nodes'] as $node){
						$addr = basename($node['key']);
						$host = explode(':', $addr)[0];
						$nodes[$host][] = $srvname;
					}
					sort($nodes[$host]);
				}
			}
		}
		ksort($nodes);
		return $nodes;
	}

	function s($name){
		if(!array_key_exists($name, $this->conns)){
			if($this->srvs[$name]){
				if($this->srvs[$name]){
					$addr = 'tcp://'.$this->srvs[$name][array_rand($this->srvs[$name], 1)];
					$this->conns[$name] = Proxy::create($addr, false);
				}
			}
		}
		return isset($this->conns[$name])?$this->conns[$name]:"";
	}

}

class LubanException extends \Exception{

}

class Proxy {

	static public function create($uriList, $async = true){
		$obj = new Proxy($uriList, $async);
		return $obj;
	}

	function __construct($uriList, $async = true){
		$this->core = \Hprose\Client::create($uriList, $async);
	}

	function __call($name, $arguments){
		$ret = call_user_func_array([$this->core, $name], $arguments);
		if(isset($ret->error) && $ret->error){
			throw new LubanException($ret->error);
		}elseif(isset($ret->data)){
			return $ret;
		}
	}

}

