<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/reqParamProto.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>Param</code>
 */
class Param extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.METHOD method = 1;</code>
     */
    private $method = 0;
    /**
     * <code>.SignedTransaction sign = 2;</code>
     */
    private $sign = null;

    public function __construct() {
        \GPBMetadata\Proto\ReqParamProto::initOnce();
        parent::__construct();
    }

    /**
     * <code>.METHOD method = 1;</code>
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * <code>.METHOD method = 1;</code>
     */
    public function setMethod($var)
    {
        GPBUtil::checkEnum($var, \METHOD::class);
        $this->method = $var;
    }

    /**
     * <code>.SignedTransaction sign = 2;</code>
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * <code>.SignedTransaction sign = 2;</code>
     */
    public function setSign(&$var)
    {
        GPBUtil::checkMessage($var, \SignedTransaction::class);
        $this->sign = $var;
    }

}

