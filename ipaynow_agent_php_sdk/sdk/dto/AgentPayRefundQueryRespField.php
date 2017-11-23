<?php
/**
 * Created by PhpStorm.
 * User: liuyu
 * Date: 10/12/17
 * Time: 6:55 PM
 */

class AgentPayRefundQueryRespField{

    private $nowPayOrderNo;

    private $originalMhtOrderNo;

    private $originalNowPayOrderNo;

    private $payeeAccType;

    private $payeeName;

    private $payeeCardNo;

    private $payeeCardUnionNo;

    private $refundDate;

    private $refundCode;

    private $refundMsg;

    private $transStatus;

    /**
     * @return mixed
     */
    public function getNowPayOrderNo()
    {
        return $this->nowPayOrderNo;
    }

    /**
     * @param mixed $nowPayOrderNo
     */
    public function setNowPayOrderNo($nowPayOrderNo)
    {
        $this->nowPayOrderNo = $nowPayOrderNo;
    }

    /**
     * @return mixed
     */
    public function getOriginalMhtOrderNo()
    {
        return $this->originalMhtOrderNo;
    }

    /**
     * @param mixed $originalMhtOrderNo
     */
    public function setOriginalMhtOrderNo($originalMhtOrderNo)
    {
        $this->originalMhtOrderNo = $originalMhtOrderNo;
    }

    /**
     * @return mixed
     */
    public function getOriginalNowPayOrderNo()
    {
        return $this->originalNowPayOrderNo;
    }

    /**
     * @param mixed $originalNowPayOrderNo
     */
    public function setOriginalNowPayOrderNo($originalNowPayOrderNo)
    {
        $this->originalNowPayOrderNo = $originalNowPayOrderNo;
    }

    /**
     * @return mixed
     */
    public function getPayeeAccType()
    {
        return $this->payeeAccType;
    }

    /**
     * @param mixed $payeeAccType
     */
    public function setPayeeAccType($payeeAccType)
    {
        $this->payeeAccType = $payeeAccType;
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
    public function getRefundDate()
    {
        return $this->refundDate;
    }

    /**
     * @param mixed $refundDate
     */
    public function setRefundDate($refundDate)
    {
        $this->refundDate = $refundDate;
    }

    /**
     * @return mixed
     */
    public function getRefundCode()
    {
        return $this->refundCode;
    }

    /**
     * @param mixed $refundCode
     */
    public function setRefundCode($refundCode)
    {
        $this->refundCode = $refundCode;
    }

    /**
     * @return mixed
     */
    public function getRefundMsg()
    {
        return $this->refundMsg;
    }

    /**
     * @param mixed $refundMsg
     */
    public function setRefundMsg($refundMsg)
    {
        $this->refundMsg = $refundMsg;
    }

    /**
     * @return mixed
     */
    public function getTransStatus()
    {
        return $this->transStatus;
    }

    /**
     * @param mixed $transStatus
     */
    public function setTransStatus($transStatus)
    {
        $this->transStatus = $transStatus;
    }






}