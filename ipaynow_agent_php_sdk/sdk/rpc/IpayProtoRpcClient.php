<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/6/29
 * Time: 19:32
 */

include_once('../proto/ReqParam.php');


class IpayProtoRpcClient
{
    private $reqUrl;

    private $timeout = 30;

    public function __construct($reqUrl)
    {
        $this->reqUrl = $reqUrl;
    }

    /**
     * @return mixed
     */
    public function getReqUrl()
    {
        return $this->reqUrl;
    }

    /**
     * @param mixed $reqUrl
     */
    public function setReqUrl($reqUrl)
    {
        $this->reqUrl = $reqUrl;
    }

    public function execute($data) {

        $header[0] = "Content-Type: application/x-protobuf";
        $header[1] = "Accept: application/x-protobuf";
        $ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL, $this->reqUrl);//抓取指定网页
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT,$this->timeout);

        $data = curl_exec($ch);//运行curl
        curl_close($ch);
        $reqParam = new ReqParam();

        $reqParam->mergeFromString($data);
        $msg = $reqParam->getMsg();

        return $msg;
    }
}