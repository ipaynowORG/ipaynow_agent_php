<?php
require '../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: liuyu
 * Date: 7/26/17
 * Time: 6:25 PM
 */

class TestBalanceQuery extends PHPUnit_Framework_TestCase
{
    public function test()
    {
    
        $testUrl = "http://bc-test.ipaynow.cn/gateway";
        $testKey = "013f81ac3ee1101b620031c00eac22ab53334c083c09fc191e05c29c9f0d26ad";
        $testMerchant = "000100000000010000000000000001";
        $ipayNowClient = new DefaultIpayNowClient($testUrl, $testKey, $testMerchant);
        $reqDto = new QueryReqDto();
        $reqDto->setMhtOrderNo("1501570360969");
        $reqDto->setAppId("1459846530407363");
        $reqDto->setMhtReqTime("20170222160317");
        $reqDto->setRouter("00010000000003");

        $dto = $ipayNowClient->balanceQuery($reqDto);

        var_dump($dto);
    }
}