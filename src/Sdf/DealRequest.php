<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: svc_dealer.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.DealRequest</code>
 */
class DealRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.luban.Trade Trade = 1;</code>
     */
    private $Trade = null;
    /**
     * Generated from protobuf field <code>repeated .luban.StockDiff StockDiff = 2;</code>
     */
    private $StockDiff;

    public function __construct() {
        \GPBMetadata\SvcDealer::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.luban.Trade Trade = 1;</code>
     * @return \Shopex\Luban\Sdf\Trade
     */
    public function getTrade()
    {
        return $this->Trade;
    }

    /**
     * Generated from protobuf field <code>.luban.Trade Trade = 1;</code>
     * @param \Shopex\Luban\Sdf\Trade $var
     * @return $this
     */
    public function setTrade($var)
    {
        GPBUtil::checkMessage($var, \Shopex\Luban\Sdf\Trade::class);
        $this->Trade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.StockDiff StockDiff = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStockDiff()
    {
        return $this->StockDiff;
    }

    /**
     * Generated from protobuf field <code>repeated .luban.StockDiff StockDiff = 2;</code>
     * @param \Shopex\Luban\Sdf\StockDiff[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStockDiff($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Shopex\Luban\Sdf\StockDiff::class);
        $this->StockDiff = $arr;

        return $this;
    }

}
