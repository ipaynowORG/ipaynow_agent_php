<?php
require '../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/5
 * Time: 15:22
 */
class TestAgentReceive extends PHPUnit_Framework_TestCase
{

    public function test()
    {
        $testUrl = "http://bc-test.ipaynow.cn/gateway";
        
        $testKey = "013f81ac3ee1101b620031c00eac22ab53334c083c09fc191e05c29c9f0d26ad";
        $testMerchant="000100000000010000000000000001";
        $ipayNowClient = new DefaultIpayNowClient($testUrl, $testKey, $testMerchant);

        $agentReceiveReqDto = new AgentReceiveReqDto();
        $agentReceiveReqDto->setAppId("1459846530407363");
      
        $agentReceiveReqDto->setMhtOrderAmt(2007);
        $orderId = sprintf('%.0f', microtime(true) * 1000);
        echo $orderId.'\n';
        $agentReceiveReqDto->setMhtOrderNo($orderId);
        $agentReceiveReqDto->setMhtReqTime("20170307100313");
        $agentReceiveReqDto->setMhtUserId("123");
        $agentReceiveReqDto->setMhtUserCardId("21231");
        $agentReceiveReqDto->setCardNo("333333333333333333");
        $agentReceiveReqDto->setCardOwner("张三");
        $agentReceiveReqDto->setCardType("0001");
        $agentReceiveReqDto->setCardIdenType("0001");
        $agentReceiveReqDto->setCardIdenNo("33333333333333333333");
        $agentReceiveReqDto->setCardPhoneNo("333333333333");
        $agentReceiveReqDto->setAgentPayMemo("test");
        $agentReceiveReqDto->setPayChannelType("14");
        $agentReceiveReqDto->setInvokeMode(InvokeMode::SYNC);
        $agentReceiveReqDto->setAccType("0");
        $agentReceiveReqDto->setNotifyUrl("http://mock-api.com/WmnE6LKJ.mock/tongzhi1");
        $dto = $ipayNowClient->agentReceive($agentReceiveReqDto);
        var_dump($dto);
    }
}