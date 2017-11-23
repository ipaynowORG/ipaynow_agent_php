<?php

/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/3
 * Time: 16:01
 */
include('../exception/IpayNowException.php');
include('../annotation/ApiKey.php');
class TransactionExecuteUtil
{
        public static function getMhtField($object, $className){
            $mhtField = '';
            $mhtFieldJSON = null;
            $currentClass = new ReflectionClass($className);
            $parentClass = $currentClass->getParentClass();

            if($parentClass == null){
                global $mhtFieldJSON;

                $currentClassMhtFieldJSON = TransactionExecuteUtil::getMhtFieldInternal($object, $currentClass);
                $mhtFieldJSON = $currentClassMhtFieldJSON;
            }else{
                global $mhtFieldJSON;

                $currentClassMhtFieldJSON = TransactionExecuteUtil::getMhtFieldInternal($object, $currentClass);
                $parentClassMhtFieldJSON = TransactionExecuteUtil::getMhtFieldInternal($object, $parentClass);
                $mhtFieldJSON = TransactionExecuteUtil::add($currentClassMhtFieldJSON, $parentClassMhtFieldJSON);
            }

            $mhtField= json_encode($mhtFieldJSON);

            return $mhtField;
        }

        private static function getMhtFieldInternal($object, $reflectionClass){
            $mhtFieldJSON = null;
            $privateProperties = $reflectionClass->getProperties(ReflectionProperty::IS_PRIVATE);
            foreach($privateProperties as $privateProperty){
                $docComment = $privateProperty->getDocComment();
                $docComment = str_replace(" ","",$docComment);
                $apiKey = new ApiKey();
                $apiKey->setAnnotation($docComment);
                $isKey = $apiKey->getIsKey();
                $isRequired = $apiKey->getIsRequired();
                $privateProperty->setAccessible(true);
                $privatePropertyValue = $privateProperty->getValue($object);
                $privatePropertyName = $privateProperty->getName();

                if($isRequired == 1 && (!isset($privatePropertyValue) || is_null($privatePropertyValue) || empty($privatePropertyValue)) && $privatePropertyValue!== "0" && $privatePropertyValue!== 0  ){
                    throw new IpayNowException($privatePropertyName." must not null");
                }
                if($isKey == 0){
                    global $mhtFieldJSON;
                    $mhtFieldJSON[$privatePropertyName] = $privatePropertyValue;
                }
            }
            return $mhtFieldJSON;
        }

        private static function add($addLeft, $addRight){

            $result = null;


            if(!empty($addLeft)){
                foreach ($addLeft as $key => $value) {
                    global $result;
                    $result[$key] = $value;
                }
            }
            if(!empty($addRight)){
                foreach ($addRight as $key => $value) {
                    global $result;
                    $result[$key] = $value;
                }
            }

            return $result;
        }

}