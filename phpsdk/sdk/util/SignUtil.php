<?php

/**
 * Created by PhpStorm.
 * User: ipaynow0407
 * Date: 2017/7/3
 * Time: 16:01
 */
class SignUtil
{
        public static function sign($privateKey, $msg){
            $msg32 = keccak_hash($msg,256);
            $privKey = pack("H*", $privateKey);
            $signature = '';
            $context = secp256k1_context_create(SECP256K1_CONTEXT_SIGN | SECP256K1_CONTEXT_VERIFY);
            if (secp256k1_ecdsa_sign($context, $signature, $msg32, $privKey) != 1) {
                throw new \Exception("Failed to create signature");
            }
            $serialized = '';
            secp256k1_ecdsa_signature_serialize_der($context, $serialized, $signature);

            $signature_t='';
            secp256k1_ecdsa_sign_recoverable($context,$signature_t,$msg32,$privKey);
            $recid = '';
            secp256k1_ecdsa_recoverable_signature_serialize_compact($context, $signature_t, $signature, $recid);
            $result= bin2hex($serialized);
            $length=strlen($result);
            $R=substr( $result,$length-132,64);
            $S=substr( $result,$length-64,64);
            $result=pack("H*", $R).pack("H*", $S).chr($recid);
            return $result;
        }
        static function hexToStr($hex){
            $string=pack("H*", $hex);
//            for ($i=0; $i < strlen($hex)-1; $i+=2){
//                $string .= chr(hexdec($hex[$i].$hex[$i+1]));
//            }
            return $string;
        }
}