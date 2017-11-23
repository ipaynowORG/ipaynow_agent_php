<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/3
 * Time: 19:03
 */

//namespace com\ipaynow\sdk\api\dto;


class BalanceQueryRespDto extends TransRespBaseDto
{

    private $accountBalance;

    /**
     * @return mixed
     */
    public function getAccountBalance()
    {
        return $this->accountBalance;
    }

    /**
     * @param mixed $accountBalance
     */
    public function setAccountBalance($accountBalance)
    {
        $this->accountBalance = $accountBalance;
    }


}