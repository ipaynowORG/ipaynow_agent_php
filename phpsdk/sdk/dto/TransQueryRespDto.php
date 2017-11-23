<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/3
 * Time: 19:25
 */

//namespace com\ipaynow\sdk\api\dto;


class TransQueryRespDto extends TransRespBaseDto
{
    /**
     * 现在支付流水号
     */
    private $nowPayOrderNo;
    /**
     * 交易类型
     */
    private $transType;
    /**
     * 交易金额
     */
    private $mhtOrderAmt;

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
    public function getTransType()
    {
        return $this->transType;
    }

    /**
     * @param mixed $transType
     */
    public function setTransType($transType)
    {
        $this->transType = $transType;
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