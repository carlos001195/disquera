<?php
include_once "plantilla.php";
class Controller_crud_Media {

    
    static function  upload_main(){
        
        //Vista::response(["Content-Type: application/json; charset=utf-8"]);

       print(Vista::request("song"));

}}
