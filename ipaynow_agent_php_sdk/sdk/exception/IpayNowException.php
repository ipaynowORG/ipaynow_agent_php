<?php

/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/3
 * Time: 16:13
 */
class IpayNowException extends Exception
{
    public function __construct($message, $code = 0) {
        parent::__construct($message, $code);
    }

    public function __toString() {
        return __CLASS__.':['.$this->code.']:'.$this->message.'\n';
    }
}