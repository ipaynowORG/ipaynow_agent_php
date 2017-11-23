<?php
/**
 * Created by PhpStorm.
 * User: liuyu
 * Date: 10/12/17
 * Time: 6:51 PM
 */

class AgentPayRefundQueryRespDto extends AgentPayRefundQueryRespField{

    private $responseCode;

    private $responseMsg;

    private $mhtOrderNo;

    private $appId;

    /**
     * @return mixed
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @param mixed $responseCode
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }

    /**
     * @return mixed
     */
    public function getResponseMsg()
    {
        return $this->responseMsg;
    }

    /**
     * @param mixed $responseMsg
     */
    public function setResponseMsg($responseMsg)
    {
        $this->responseMsg = $responseMsg;
    }

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




}