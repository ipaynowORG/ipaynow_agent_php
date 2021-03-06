<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/transactionProto.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>SignedTransaction</code>
 */
class SignedTransaction extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bytes transaction = 1;</code>
     */
    private $transaction = '';
    /**
     * <code>bytes signature = 2;</code>
     */
    private $signature = '';
    /**
     * <code>.Crypto crypto = 3;</code>
     */
    private $crypto = 0;

    public function __construct() {
        \GPBMetadata\Proto\TransactionProto::initOnce();
        parent::__construct();
    }

    /**
     * <code>bytes transaction = 1;</code>
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * <code>bytes transaction = 1;</code>
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction = $var;
    }

    /**
     * <code>bytes signature = 2;</code>
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * <code>bytes signature = 2;</code>
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->signature = $var;
    }

    /**
     * <code>.Crypto crypto = 3;</code>
     */
    public function getCrypto()
    {
        return $this->crypto;
    }

    /**
     * <code>.Crypto crypto = 3;</code>
     */
    public function setCrypto($var)
    {
        GPBUtil::checkEnum($var, \Crypto::class);
        $this->crypto = $var;
    }

}

