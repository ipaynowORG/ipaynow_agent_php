<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/transactionProto.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>Content</code>
 */
class Content extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string nonce = 1;</code>
     */
    private $nonce = '';
    /**
     * <code>uint64 gas = 2;</code>
     */
    private $gas = 0;
    /**
     * <code>uint64 value = 3;</code>
     */
    private $value = 0;
    /**
     * <code>bytes data = 4;</code>
     */
    private $data = '';

    public function __construct() {
        \GPBMetadata\Proto\TransactionProto::initOnce();
        parent::__construct();
    }

    /**
     * <code>string nonce = 1;</code>
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * <code>string nonce = 1;</code>
     */
    public function setNonce($var)
    {
        GPBUtil::checkString($var, True);
        $this->nonce = $var;
    }

    /**
     * <code>uint64 gas = 2;</code>
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * <code>uint64 gas = 2;</code>
     */
    public function setGas($var)
    {
        GPBUtil::checkUint64($var);
        $this->gas = $var;
    }

    /**
     * <code>uint64 value = 3;</code>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <code>uint64 value = 3;</code>
     */
    public function setValue($var)
    {
        GPBUtil::checkUint64($var);
        $this->value = $var;
    }

    /**
     * <code>bytes data = 4;</code>
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * <code>bytes data = 4;</code>
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;
    }

}

