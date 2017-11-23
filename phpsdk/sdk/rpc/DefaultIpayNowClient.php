<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/6/29
 * Time: 16:04
 */
//namespace com\ipaynow\sdk\api\rpc;
/*
require 'vendor/autoload.php';
include_once('GPBMetadata/Proto/Param.php');
include_once('GPBMetadata/Proto/PaymentProto.php');
include_once('GPBMetadata/Proto/ReqParamProto.php');
include_once('GPBMetadata/Proto/TransactionProto.php');
include_once('proto/Content.php');
include_once('proto/Crypto.php');
include_once('proto/METHOD.php');
include_once('proto/Param.php');
include_once('proto/PayInvoke.php');
include_once('proto/PayInvokeMethod.php');
include_once('proto/ReqParam.php');
include_once('proto/SignedTransaction.php');
include_once('proto/Status.php');
include_once('proto/Transaction.php');
include_once('proto/InvokeMode.php');
include_once('util/TransactionExecuteUtil.php');
include_once('dto/TransReqBaseDto.php');
include_once('dto/TransRespBaseDto.php');
include_once('dto/AgentPayOrReceiveQueryResDto.php');
include_once('dto/AgentPayReqDto.php');
include_once('rpc/IpayProtoRpcClient.php');
*/
class DefaultIpayNowClient

{

    private $serverUrl;

    private $privateKey;

    private $merchantId;

    function __construct($serverUrl,$privateKey, $merchantId)
    {
        $this->serverUrl = $serverUrl;
        $this->privateKey = $privateKey;
        $this->merchantId = $merchantId;
    }

    public function agentPay($agentPayReqDto)
    {

        $mhtField = TransactionExecuteUtil::getMhtField($agentPayReqDto,'AgentPayReqDto');
      //  ECKey ecKey = ECKey.fromPrivate(new BigInteger(privateKey, 16));
        $payRequestParams = new PayRequestParams();
        $payRequestParams->setMhtField($mhtField);
        $payRequestParams->setTransId($agentPayReqDto->getMhtOrderNo());
        $payRequestParams->setChannelType("15");
        $payRequestParams->setAmount($agentPayReqDto->getMhtOrderAmt());
        $payRequestParams->setRouter($agentPayReqDto->getRouter());
        $payRequestParams->setMode($agentPayReqDto->getInvokeMode());

        $payInvoke = new PayInvoke();
        $payInvoke->setMethod(PayInvokeMethod::PAY_REQUEST_METHOD);
        $payInvoke->setParams($payRequestParams->serializeToString());

        $content = new Content();
        $content->setData($payInvoke->serializeToString());
        $content->setNonce($this->merchantId."_".$agentPayReqDto->getMhtOrderNo()."_15");

        $transaction = new Transaction();
        $transaction->setContent($content->serializeToString());
        $transaction->setFrom($this->merchantId);
        $transaction->setTo("3");
      //  byte[] sign = ecKey.sign(HashUtil.sha3(transaction.toByteArray())).toByteArray();
        $signedTransaction = new SignedTransaction();
        $signedTransaction->setTransaction($transaction->serializeToString());
        $signedTransaction->setCrypto(Crypto::SECP);

        $signedTransaction->setSignature(SignUtil::sign($this->privateKey,$transaction->serializeToString()));

        $param = new Param();
        $param->setMethod(METHOD::TRANS);
        $param->setSign($signedTransaction);

        $ipayProtoRpcClient = new IpayProtoRpcClient($this->serverUrl);
        $responseMsg = $ipayProtoRpcClient->execute($param->serializeToString());
        $transRespDto = JSONObject::parse("TransRespDto", $responseMsg);
        $transRespDto->setMhtOrderNo($agentPayReqDto->getMhtOrderNo());
        return $transRespDto;
    }

    public function agentReceive($agentReceiveReqDto)
    {
        //ECKey ecKey = ECKey.fromPrivate(new BigInteger(privateKey, 16));
        $mhtField = TransactionExecuteUtil::getMhtField($agentReceiveReqDto,'AgentReceiveReqDto');

        $payRequestParams = new PayRequestParams();
        $payRequestParams->setMhtField($mhtField);
        $payRequestParams->setTransId($agentReceiveReqDto->getMhtOrderNo());
        $payRequestParams->setChannelType("14");
        $payRequestParams->setAmount($agentReceiveReqDto->getMhtOrderAmt());
        $payRequestParams->setRouter($agentReceiveReqDto->getRouter());
        $payRequestParams->setMode($agentReceiveReqDto->getInvokeMode());

        $payInvoke = new PayInvoke();
        $payInvoke->setMethod(PayInvokeMethod::PAY_REQUEST_METHOD);
        $payInvoke->setParams($payRequestParams->serializeToString());

        $content = new Content();
        $content->setData($payInvoke->serializeToString());
        $content->setNonce($this->merchantId."_".$agentReceiveReqDto->getMhtOrderNo()."_14");

        $transaction = new Transaction();
        $transaction->setContent($content->serializeToString());
        $transaction->setFrom($this->merchantId);
        $transaction->setTo("3");

        //  byte[] sign = ecKey.sign(HashUtil.sha3(transaction.toByteArray())).toByteArray();
        $signedTransaction = new SignedTransaction();
        $signedTransaction->setTransaction($transaction->serializeToString());
        $signedTransaction->setCrypto(Crypto::SECP);
        $signedTransaction->setSignature(SignUtil::sign($this->privateKey,$transaction->serializeToString()));

        $param = new Param();
        $param->setMethod(METHOD::TRANS);
        $param->setSign($signedTransaction);

        $ipayProtoRpcClient = new IpayProtoRpcClient($this->serverUrl);
        $responseMsg = $ipayProtoRpcClient->execute($param->serializeToString());

        $transRespDto = JSONObject::parse("TransRespDto", $responseMsg);
        $transRespDto->setMhtOrderNo($agentReceiveReqDto->getMhtOrderNo());
        return $transRespDto;
    }

    public function transQuery($reqDto){

        $queryDetailParams = new QueryDetailParams();
        $queryDetailParams->setAppId($reqDto->getAppId());
        $queryDetailParams->setRouter($reqDto->getRouter());
        $queryDetailParams->setTransId($reqDto->getMhtOrderNo());

        $payInvoke = new PayInvoke();
        $payInvoke->setMethod(PayInvokeMethod::QUERY_METHOD);
        $payInvoke->setParams($queryDetailParams->serializeToString());

        $content = new Content();
        $content->setData($payInvoke->serializeToString());
        $content->setNonce($this->merchantId."_".$reqDto->getMhtOrderNo());

        $transaction = new Transaction();
        $transaction->setContent($content->serializeToString());
        $transaction->setFrom($this->merchantId);
        $transaction->setTo("3");

        $signedTransaction = new SignedTransaction();
        $signedTransaction->setTransaction($transaction->serializeToString());
        $signedTransaction->setCrypto(Crypto::SECP);
        $signedTransaction->setSignature(SignUtil::sign($this->privateKey,$transaction->serializeToString()));

        $param = new Param();
        $param->setMethod(METHOD::QUERY_TRANS_DETAIL);
        $param->setSign($signedTransaction);

        $ipayProtoRpcClient = new IpayProtoRpcClient($this->serverUrl);
        $responseMsg = $ipayProtoRpcClient->execute($param->serializeToString());
        $dto = JSONObject::parse("TransQueryRespDto", $responseMsg);
        return $dto;
    }

    private function toTransQueryRespDto($responseMsg){
        $responseMsgJSON = json_decode($responseMsg);
        var_dump($responseMsgJSON);
        $dto = new TransQueryRespDto();
        $dto->setAppId($responseMsgJSON->appId);
        $dto->setNowPayOrderNo($responseMsgJSON->nowPayOrderNo);
        $dto->setTransType($responseMsgJSON->transType);
        $dto->setMhtOrderAmt($responseMsgJSON->mhtOrderAmt);
        $dto->setTransStatus($responseMsgJSON->transStatus);
        $dto->setResponseCode($responseMsgJSON->responseCode);
        $dto->setMhtOrderNo($responseMsgJSON->mhtOrderNo);
        return $dto;
    }

    private function toBalanceQueryRespDto($responseMsg){
        $responseMsgJSON = json_decode($responseMsg);
        $dto = new BalanceQueryRespDto();

        $dto->setAppId($responseMsgJSON->appId);
        $dto->setResponseCode($responseMsgJSON->responseCode);
        $dto->setResponseMsg($responseMsgJSON->responseMsg);
        $dto->setMhtOrderNo($responseMsgJSON->mhtOrderNo);
        $dto->setAccountBalance($responseMsgJSON->accountBalance);
        return $dto;
    }

    public function balanceQuery($reqDto){

        $queryDetailParams = new QueryDetailParams();
        $queryDetailParams->setAppId($reqDto->getAppId());
        $queryDetailParams->setRouter($reqDto->getRouter());
        $queryDetailParams->setTransId($reqDto->getMhtOrderNo());

        $payInvoke = new PayInvoke();
        $payInvoke->setMethod(PayInvokeMethod::QUERY_METHOD);
        $payInvoke->setParams($queryDetailParams->serializeToString());

        $content = new Content();
        $content->setData($payInvoke->serializeToString());
        $content->setNonce($this->merchantId."_".$reqDto->getMhtOrderNo());

        $transaction = new Transaction();
        $transaction->setContent($content->serializeToString());
        $transaction->setFrom($this->merchantId);
        $transaction->setTo("3");

        $signedTransaction = new SignedTransaction();
        $signedTransaction->setTransaction($transaction->serializeToString());
        $signedTransaction->setCrypto(Crypto::SECP);
        $signedTransaction->setSignature(SignUtil::sign($this->privateKey,$transaction->serializeToString()));

        $param = new Param();
        $param->setMethod(METHOD::QUERY_BALANCE_V1);
        $param->setSign($signedTransaction);

        $ipayProtoRpcClient = new IpayProtoRpcClient($this->serverUrl);
        $responseMsg = $ipayProtoRpcClient->execute($param->serializeToString());
        $dto = JSONObject::parse("BalanceQueryRespDto", $responseMsg);
        $dto->setAppId($reqDto->getAppId());
        return $dto;
    }
}