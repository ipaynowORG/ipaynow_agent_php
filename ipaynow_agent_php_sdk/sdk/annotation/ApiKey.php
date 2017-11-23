<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/6/29
 * Time: 19:00
 */
class ApiKey
{
    private $isKey = 0;

    private $isRequired = 0;

    /**
     * @return mixed
     */
    public function getIsKey()
    {
        return $this->isKey;
    }

    /**
     * @return mixed
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    public function setAnnotation($annotation){
        $annotation = str_replace(" ","",$annotation);
        $rule ='/@ApiField(.*)/';
        preg_match($rule, $annotation, $result);
        $apiKey = $result[0];

        $start = strpos($apiKey,"(");
        $end = strpos($apiKey,")");
        $apiKeyWeWant = substr($apiKey, $start + 1, $end - $start - 1);
        $keyValues = explode(",",$apiKeyWeWant);

        for($i = 0; $i < count($keyValues); $i++){
            $keyvalue = $keyValues[$i];
            $key = explode("=",$keyvalue)[0];
            $value = explode("=",$keyvalue)[1];
            if($key == "isKey" && $value == "true"){
                $this->isKey = 1;
            }else if($key == "isRequired" && $value == "true"){
                $this->isRequired = 1;
            }
        }
    }
}