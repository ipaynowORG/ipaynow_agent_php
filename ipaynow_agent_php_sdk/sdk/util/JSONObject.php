<?php
/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/3
 * Time: 11:07
 */


//include('dto/TransReqBaseDto.php');
//include('dto/TransRespBaseDto.php');
//include('dto/AgentPayOrReceiveQueryResDto.php');

class JSONObject
{
        public static function parse($className, $jsonString){
            $reflectionClass = new ReflectionClass($className);
            $instance  = $reflectionClass->newInstance();
            $jsonobject = json_decode($jsonString);
            foreach($jsonobject as $key => $value){
                JSONObject::setProperty($reflectionClass, $instance, $key, $value);
            }
            return $instance;
        }

        private static function setProperty($reflectionClass, $instance, $key, $value){
            $parentClass = $reflectionClass->getParentClass();
            $parentReturn = false;
            if(!empty($parentClass)){
                global $parentReturn;
                $parentReturn = JSONObject::setProperty($parentClass, $instance, $key, $value);
            }
            if($parentReturn == false){
                try{
                    $property = $reflectionClass->getProperty($key);
                    $property->setAccessible(true);
                    $property->setValue($instance, $value);
                    $parentReturn = true;
                }catch(ReflectionException $e){
                   // echo $e->getMessage();
                }
            }
            return $parentReturn;
        }

}