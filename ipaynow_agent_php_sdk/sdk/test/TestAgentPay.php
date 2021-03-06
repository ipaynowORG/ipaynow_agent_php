<?php
require '../vendor/autoload.php';
//require 'ls';
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/5
 * Time: 15:22
 */
//class TestAgentPay extends PHPUnit_Framework_TestCase
//{
//
//    public function test()
//    {
        $testUrl = "http://bc-test.ipaynow.cn/gateway";
        //$testKey = "9fa6123e333d2aed44142df0d40bc5d9d8e18eec95287a953ba5b4503fd5e63c";
        $testKey = "013f81ac3ee1101b620031c00eac22ab53334c083c09fc191e05c29c9f0d26ad";
        $testMerchant="000100000000010000000000000001";
        $ipayNowClient = new DefaultIpayNowClient($testUrl, $testKey, $testMerchant);

        $agentPayReqDto = new AgentPayReqDto();
        $agentPayReqDto->setMhtOrderAmt(1);
        $agentPayReqDto->setAgentPayMemo("test");

        //$orderId = sprintf('%.0f', microtime(true) * 1000);
        //echo $orderId."\n";
        $agentPayReqDto->setAppId("1459846530407363");
        //$agentPayReqDto->setMhtOrderNo($orderId);
        $agentPayReqDto->setMhtOrderNo("14598465304073631");
        $agentPayReqDto->setMhtReqTime("20170222160347");
        $agentPayReqDto->setAccType("0");
        $agentPayReqDto->setPayeeName("王伟");
        $agentPayReqDto->setPayeeCardNo("6225881012340237");
        $agentPayReqDto->setPayeeCardUnionNo("");
        $agentPayReqDto->setPayChannelType("15");
        $agentPayReqDto->setInvokeMode(InvokeMode::SYNC);
        $agentPayReqDto->setNotifyUrl("http://mock-api.com/WmnE6LKJ.mock/tongzhi1");
        $dto = $ipayNowClient->agentPay($agentPayReqDto);
        var_dump($dto);
//    }
//}