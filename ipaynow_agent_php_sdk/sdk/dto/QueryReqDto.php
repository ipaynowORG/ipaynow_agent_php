<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/3
 * Time: 19:22
 */

//namespace com\ipaynow\sdk\api\dto;


class QueryReqDto
{
    private $appId;
    private $mhtOrderNo;
//    private $mhtReqTime;
    private $router = "00010000000003";

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

    public function getMhtReqTime()
    {
        return $this->mhtReqTime;
    }
     */
    /**
     * @param mixed $mhtReqTime

    public function setMhtReqTime($mhtReqTime)
    {
        $this->mhtReqTime = $mhtReqTime;
    }
     */
    /**
     * @return string
     */
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * @param string $router
     */
    public function setRouter($router)
    {
        $this->router = $router;
    }


}