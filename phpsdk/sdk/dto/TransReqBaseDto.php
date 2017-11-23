<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/6/29
 * Time: 16:10
 */

//namespace com\ipaynow\sdk\api\dto;


class TransReqBaseDto
{

    /**
     * @ApiField(isKey = true,isRequired = true)
     */
    private $mhtOrderNo;

    /**
     * @ApiField(isKey=true,isRequired=true)
     */
    private $mhtOrderAmt;

    /**
     * @ApiField(isKey = true,isRequired = true)
     */
    private $router = "00010000000003";
    /**
     * @ApiField(isKey = true,isRequired = true)
     */
    private $invokeMode;

    /**
     * @return mixed
     */
    public function getMhtOrderNo()
    {
        return $this->mhtOrderNo;
    }

    /**
     * @param mixed $mhtOrderNo
     */
    public function setMhtOrderNo($mhtOrderNo)
    {
        $this->mhtOrderNo = $mhtOrderNo;
    }

    /**
     * @return mixed
     */
    public function getMhtOrderAmt()
    {
        return $this->mhtOrderAmt;
    }

    /**
     * @param mixed $mhtOrderAmt
     */
    public function setMhtOrderAmt($mhtOrderAmt)
    {
        $this->mhtOrderAmt = $mhtOrderAmt;
    }

    /**
     * @return mixed
     */
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * @param mixed $router
     */
    public function setRouter($router)
    {
        $this->router = $router;
    }

    /**
     * @return mixed
     */
    public function getInvokeMode()
    {
        return $this->invokeMode;
    }

    /**
     * @param mixed $invokeMode
     */
    public function setInvokeMode($invokeMode)
    {
        $this->invokeMode = $invokeMode;
    }



}