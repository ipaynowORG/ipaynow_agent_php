<?php
require '../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: liuyu
 * Date: 10/13/17
 * Time: 10:20 AM
 */


    $testUrl = "http://bc-test.ipaynow.cn/gateway";
    $testKey = "013f81ac3ee1101b620031c00eac22ab53334c083c09fc191e05c29c9f0d26ad";
    $testMerchant="000100000000010000000000000001";
    $ipayNowClient = new DefaultIpayNowClient($testUrl, $testKey, $testMerchant);

    $agentPayReqDto = new QueryReqDto();

    $agentPayReqDto->setAppId("1459846530407363");
    $agentPayReqDto->setMhtOrderNo("gzh20170414145229wiY2pCpjlk8pwuKK");
    $dto = $ipayNowClient->agentPayRefundQuery($agentPayReqDto);
    var_dump($dto);


    $tmp="TestAgentPayRefundQuery finished.";
    var_dump($tmp);

//class TestAgentPayRefundQuery
//{


//
//    {
//        $testUrl = "http://bc-test.ipaynow.cn/gateway";
//        $testKey = "013f81ac3ee1101b620031c00eac22ab53334c083c09fc191e05c29c9f0d26ad";
//        $testMerchant="000100000000010000000000000001";
//        $ipayNowClient = new DefaultIpayNowClient($testUrl, $testKey, $testMerchant);
//
//        $agentPayReqDto = new QueryReqDto();
//
//        $agentPayReqDto->setAppId("1459846530407363");
//        $agentPayReqDto->setMhtOrderNo("gzh20170414145229wiY2pCpjlk8pwuKK");
//        $dto = $ipayNowClient->agentPayRefundQuery($agentPayReqDto);
//        var_dump($dto);
//
//
//        $tmp="TestAgentPayRefundQuery finished.";
//        var_dump($tmp);
//    }
//}