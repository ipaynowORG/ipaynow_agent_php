<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/3
 * Time: 19:27
 */

//namespace com\ipaynow\sdk\api\dto;


class TransRespDto extends TransRespBaseDto
{


    private $nowPayOrderNo;
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