<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: svc_dealer.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.TradeInfoRequest</code>
 */
class TradeInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Tid = 1;</code>
     */
    private $Tid = '';

    public function __construct() {
        \GPBMetadata\SvcDealer::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string Tid = 1;</code>
     * @return string
     */
    public function getTid()
    {
        return $this->Tid;
    }

    /**
     * Generated from protobuf field <code>string Tid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tid = $var;

        return $this;
    }

}

