<?php
/**
 * Created by PhpStorm.
 * User: liuyu
 * Date: 10/12/17
 * Time: 7:08 PM
 */

class AgentPayRefundBatchQueryRespDto
{

    private $responseCode;

    private $responseMsg;
    
    private $mhtOrderNo;

    private $appId;

    private $nowPage;

    private $pageSize;

    private $countNums;

    private $countPages;

    private $agentPayRefundQueryRespFieldList;


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

    /**
     * @return mixed
     */
    public function getNowPage()
    {
        return $this->nowPage;
    }

    /**
     * @param mixed $nowPage
     */
    public function setNowPage($nowPage)
    {
        $this->nowPage = $nowPage;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getCountNums()
    {
        return $this->countNums;
    }

    /**
     * @param mixed $countNums
     */
    public function setCountNums($countNums)
    {
        $this->countNums = $countNums;
    }

    /**
     * @return mixed
     */
    public function getCountPages()
    {
        return $this->countPages;
    }

    /**
     * @param mixed $countPages
     */
    public function setCountPages($countPages)
    {
        $this->countPages = $countPages;
    }

    /**
     * @return mixed
     */
    public function getAgentPayRefundQueryRespFieldList()
    {
        return $this->agentPayRefundQueryRespFieldList;
    }

    /**
     * @param mixed $agentPayRefundQueryRespFieldList
     */
    public function setAgentPayRefundQueryRespFieldList($agentPayRefundQueryRespFieldList)
    {
        $this->agentPayRefundQueryRespFieldList = $agentPayRefundQueryRespFieldList;
    }








}