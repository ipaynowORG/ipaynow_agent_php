<?php
require '../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: liuyu
 * Date: 10/13/17
 * Time: 10:44 AM
 */


        $testUrl = "http://bc-test.ipaynow.cn/gateway";
        $testKey = "013f81ac3ee1101b620031c00eac22ab53334c083c09fc191e05c29c9f0d26ad";
        $testMerchant="000100000000010000000000000001";
        $ipayNowClient = new DefaultIpayNowClient($testUrl, $testKey, $testMerchant);

        $batchqueryReqDto = new BatchQueryReqDto();

        $batchqueryReqDto->setAppId("1459846530407363");
        $batchqueryReqDto->setMhtOrderNo("123456");
        $batchqueryReqDto->setRefundDate("20170414");
        $batchqueryReqDto->setNowPage(1);
        $batchqueryReqDto->setPageSize(100);

        $dto = $ipayNowClient->agentPayRefundBatchQuery($batchqueryReqDto);
        var_dump($dto);



//class TestAgentPayRefundBatchQuery // extends PHPUnit_Framework_TestCase
//{
//
//    public function test()
//    {

//        $tmp="TestAgentPayRefundBatchQuery start.";
//        var_dump($tmp);
//
//        $testUrl = "http://bc-test.ipaynow.cn/gateway";
//        $testKey = "013f81ac3ee1101b620031c00eac22ab53334c083c09fc191e05c29c9f0d26ad";
//        $testMerchant="000100000000010000000000000001";
//        $ipayNowClient = new DefaultIpayNowClient($testUrl, $testKey, $testMerchant);
//
//        $batchqueryReqDto = new BatchQueryReqDto();
//
//        $batchqueryReqDto->setAppId("1459846530407363");
//        $batchqueryReqDto->setMhtOrderNo("123456");
//        $batchqueryReqDto->setRefundDate("20170414");
//        $batchqueryReqDto->setNowPage(1);
//        $batchqueryReqDto->setPageSize(100);
//
//        $dto = $ipayNowClient->agentPayRefundBatchQuery($batchqueryReqDto);
//        var_dump($dto);
//
//        $tmp="TestAgentPayRefundBatchQuery finished.";
//        var_dump($tmp);
//        $arr_age = array(18, 20, 25);
//        var_dump($arr_age);
//    }
//
//}