<?php

namespace App\Utils;

class UtilsHashUrl
{
 

    public static function hashEncode($downloadUrl)
    {
        if($downloadUrl){
        //expiration for the url is half an hour
        $hmac = hash_hmac('sha1', $data, $this->secretKey, true);
        return env('VIDEO_ACCESS_KEY') . ':' . base64_urlSafeEncode($hmac);
        }
    }
    public static function privateDownloadUrl($baseUrl, $expires = 3600){
        $deadline = time() + $expires;
        $pos = strpos($baseUrl, '?');
        if ($pos !== false) {
            $baseUrl .= '&e=';
        } else {
            $baseUrl .= '?e=';
        }
        $baseUrl .= $deadline;
        $token = $this->hashEncode($baseUrl);
        return "$baseUrl&token=$token";
    }
   
}