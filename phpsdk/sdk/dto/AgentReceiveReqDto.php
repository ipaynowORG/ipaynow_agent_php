<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/3
 * Time: 18:57
 */

//namespace com\ipaynow\sdk\api\dto;


class AgentReceiveReqDto extends TransReqBaseDto
{

    /**
     * @ApiField(isRequired = true)
     */
    private $appId;

    /**
     * @ApiField(isRequired = true)
     */
    private $agentPayMemo;
    /**
     * @ApiField(isRequired = true)
     */
    private $mhtUserId;    // 持卡人信息
    /**
     * @ApiField(isRequired = true)
     */
    private $mhtUserCardId;// 商户持卡人信息编号
    /**
     * @ApiField(isRequired = true)
     */
    private $cardOwner;    // 持卡人姓名
    /**
     * @ApiField(isRequired = true)
     */
    private $cardType;     // 银行卡类别
    /**
     * @ApiField(isRequired = true)
     */
    private $cardNo;       // 银行卡号
    /**
     * @ApiField(isRequired = false)
     */
    private $cvv2;
    /**
     * @ApiField(isRequired = false)
     */
    private $validThru;
    /**
     * @ApiField(isRequired = true)
     */
    private $cardIdenType;
    /**
     * @ApiField(isRequired = true)
     */
    private $cardIdenNo;
    /**
     * @ApiField(isRequired = true)
     */
    private $cardPhoneNo;
    /**
     * @ApiField(isRequired = true)
     */
    private $accType;
    /**
     * @ApiField(isRequired = true)
     */
    private $notifyUrl;

    /**
     * @ApiField(isRequired = true)
     */
    private $payChannelType="14";

    /**
     * @ApiField(isRequired = true)
     */
    private $deviceType = "12";
    /**
     * @ApiField(isRequired = false)
     */
    private $mhtReqTime;

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
    public function getMhtUserId()
    {
        return $this->mhtUserId;
    }

    /**
     * @param mixed $mhtUserId
     */
    public function setMhtUserId($mhtUserId)
    {
        $this->mhtUserId = $mhtUserId;
    }

    /**
     * @return mixed
     */
    public function getMhtUserCardId()
    {
        return $this->mhtUserCardId;
    }

    /**
     * @param mixed $mhtUserCardId
     */
    public function setMhtUserCardId($mhtUserCardId)
    {
        $this->mhtUserCardId = $mhtUserCardId;
    }

    /**
     * @return mixed
     */
    public function getCardOwner()
    {
        return $this->cardOwner;
    }

    /**
     * @param mixed $cardOwner
     */
    public function setCardOwner($cardOwner)
    {
        $this->cardOwner = $cardOwner;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param mixed $cardType
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
    }

    /**
     * @return mixed
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * @param mixed $cardNo
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return mixed
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }

    /**
     * @param mixed $cvv2
     */
    public function setCvv2($cvv2)
    {
        $this->cvv2 = $cvv2;
    }

    /**
     * @return mixed
     */
    public function getValidThru()
    {
        return $this->validThru;
    }

    /**
     * @param mixed $validThru
     */
    public function setValidThru($validThru)
    {
        $this->validThru = $validThru;
    }

    /**
     * @return mixed
     */
    public function getCardIdenType()
    {
        return $this->cardIdenType;
    }

    /**
     * @param mixed $cardIdenType
     */
    public function setCardIdenType($cardIdenType)
    {
        $this->cardIdenType = $cardIdenType;
    }

    /**
     * @return mixed
     */
    public function getCardIdenNo()
    {
        return $this->cardIdenNo;
    }

    /**
     * @param mixed $cardIdenNo
     */
    public function setCardIdenNo($cardIdenNo)
    {
        $this->cardIdenNo = $cardIdenNo;
    }

    /**
     * @return mixed
     */
    public function getCardPhoneNo()
    {
        return $this->cardPhoneNo;
    }

    /**
     * @param mixed $cardPhoneNo
     */
    public function setCardPhoneNo($cardPhoneNo)
    {
        $this->cardPhoneNo = $cardPhoneNo;
    }

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