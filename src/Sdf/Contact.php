<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: support.proto

namespace Shopex\Luban\Sdf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>luban.Contact</code>
 */
class Contact extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     */
    private $Name = '';
    /**
     * Generated from protobuf field <code>.luban.Gender Gender = 2;</code>
     */
    private $Gender = 0;
    /**
     * Generated from protobuf field <code>string Phone = 3;</code>
     */
    private $Phone = '';

    public function __construct() {
        \GPBMetadata\Support::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.luban.Gender Gender = 2;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * Generated from protobuf field <code>.luban.Gender Gender = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkEnum($var, \Shopex\Luban\Sdf\Gender::class);
        $this->Gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Phone = 3;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Generated from protobuf field <code>string Phone = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->Phone = $var;

        return $this;
    }

}

