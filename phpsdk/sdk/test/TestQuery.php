<?php
require '../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/5
 * Time: 15:22
 */
class TestQuery extends PHPUnit_Framework_TestCase
{
    public function test()
    {
  
        $testUrl = "http://bc-test.ipaynow.cn/gateway";
        $testKey = "013f81ac3ee1101b620031c00eac22ab53334c083c09fc191e05c29c9f0d26ad";
        $testMerchant = "000100000000010000000000000001";
        $ipayNowClient = new DefaultIpayNowClient($testUrl, $testKey, $testMerchant);
        $reqDto = new QueryReqDto();
        $reqDto->setMhtOrderNo("1501571753945");
        $reqDto->setAppId("1459846530407363");

        $reqDto->setRouter("00010000000003");

        $dto = $ipayNowClient->transQuery($reqDto);
 
        var_dump($dto);
    }
}