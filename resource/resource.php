<?php

class Resource 
{

    static function resource($url){
    return ("resource/public/".$url);
    }

    static function url($url){
        return (self::Protocol_Http().$_SERVER['SERVER_NAME']."$url");
        }


       static function Protocol_Http(){
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $url ="https://"; 
            }else{
              $url  ="http://"; 
            }
        return $url;
       } 
}