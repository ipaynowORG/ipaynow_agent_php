<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/paymentProto.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>PayRequestParams</code>
 */
class PayRequestParams extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string transId = 1;</code>
     */
    private $transId = '';
    /**
     * <code>uint64 amount = 2;</code>
     */
    private $amount = 0;
    /**
     * <code>string mhtField = 3;</code>
     */
    private $mhtField = '';
    /**
     * <code>string router = 4;</code>
     */
    private $router = '';
    /**
     * <code>.InvokeMode mode = 5;</code>
     */
    private $mode = 0;
    /**
     * <code>string channelType = 6;</code>
     */
    private $channelType = '';

    public function __construct() {
        \GPBMetadata\Proto\PaymentProto::initOnce();
        parent::__construct();
    }

    /**
     * <code>string transId = 1;</code>
     */
    public function getTransId()
    {
        return $this->transId;
    }

    /**
     * <code>string transId = 1;</code>
     */
    public function setTransId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transId = $var;
    }

    /**
     * <code>uint64 amount = 2;</code>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * <code>uint64 amount = 2;</code>
     */
    public function setAmount($var)
    {
        GPBUtil::checkUint64($var);
        $this->amount = $var;
    }

    /**
     * <code>string mhtField = 3;</code>
     */
    public function getMhtField()
    {
        return $this->mhtField;
    }

    /**
     * <code>string mhtField = 3;</code>
     */
    public function setMhtField($var)
    {
        GPBUtil::checkString($var, True);
        $this->mhtField = $var;
    }

    /**
     * <code>string router = 4;</code>
     */
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * <code>string router = 4;</code>
     */
    public function setRouter($var)
    {
        GPBUtil::checkString($var, True);
        $this->router = $var;
    }

    /**
     * <code>.InvokeMode mode = 5;</code>
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * <code>.InvokeMode mode = 5;</code>
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \InvokeMode::class);
        $this->mode = $var;
    }

    /**
     * <code>string channelType = 6;</code>
     */
    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * <code>string channelType = 6;</code>
     */
    public function setChannelType($var)
    {
        GPBUtil::checkString($var, True);
        $this->channelType = $var;
    }

}
