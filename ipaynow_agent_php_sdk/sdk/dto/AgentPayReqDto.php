<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/3
 * Time: 15:46
 */

//namespace com\ipaynow\sdk\api\dto;


class AgentPayReqDto extends TransReqBaseDto
{


    /**
     * @ApiField(isRequired=true)
     */
    private $appId;

    /**
     * @ApiField(isRequired=true)
     */
    private $accType;

    /**
     * @ApiField(isRequired = true)
     */
    private $payeeName;

    /**
     * @ApiField(isRequired = true)
     */
    private $payeeCardNo;

    /**
     * @ApiField(isRequired = false)
     */
    private $payeeCardUnionNo;

    /**
     * @ApiField(isRequired = true)
     */
    private $agentPayMemo;

    /**
     * @ApiField(isRequired = true)
     */
    private $notifyUrl;

    /**
     * @ApiField(isRequired = true)
     */
    private $payChannelType;


    /**
     * @ApiField(isRequired = true)
     */
    private $deviceType = "13";

    /**
     * @ApiField(isRequired = true)
     */
    private $mhtReqTime;

    /**
     * @return mixed
     */
    public function getAccType()
    {
        return $this->accType;
    }

    /**
     * @param mixed $accType
     */
    public function setAccType($accType)
    {
        $this->accType = $accType;
    }

    /**
     * @return mixed
     */
    public function getPayeeName()
    {
        return $this->payeeName;
    }

    /**
     * @param mixed $payeeName
     */
    public function setPayeeName($payeeName)
    {
        $this->payeeName = $payeeName;
    }

    /**
     * @return mixed
     */
    public function getPayeeCardNo()
    {
        return $this->payeeCardNo;
    }

    /**
     * @param mixed $payeeCardNo
     */
    public function setPayeeCardNo($payeeCardNo)
    {
        $this->payeeCardNo = $payeeCardNo;
    }

    /**
     * @return mixed
     */
    public function getPayeeCardUnionNo()
    {
        return $this->payeeCardUnionNo;
    }

    /**
     * @param mixed $payeeCardUnionNo
     */
    public function setPayeeCardUnionNo($payeeCardUnionNo)
    {
        $this->payeeCardUnionNo = $payeeCardUnionNo;
    }

    /**
     * @return mixed
     */
    public function getAgentPayMemo()
    {
        return $this->agentPayMemo;
    }

    /**
     * @param mixed $agentPayMemo
     */
    public function setAgentPayMemo($agentPayMemo)
    {
        $this->agentPayMemo = $agentPayMemo;
    }

    /**
     * @return mixed
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * @param mixed $notifyUrl
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }

    /**
     * @return mixed
     */
    public function getPayChannelType()
    {
        return $this->payChannelType;
    }

    /**
     * @param mixed $payChannelType
     */
    public function setPayChannelType($payChannelType)
    {
        $this->payChannelType = $payChannelType;
    }

    /**
     * @return mixed
     */
    public function getMhtReqTime()
    {
        return $this->mhtReqTime;
    }

    /**
     * @param mixed $mhtReqTime
     */
    public function setMhtReqTime($mhtReqTime)
    {
        $this->mhtReqTime = $mhtReqTime;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param mixed $appId
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    /**
     * @return mixed
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @param mixed $deviceType
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
    }



}