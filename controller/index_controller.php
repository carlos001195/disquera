<?php

include("modelo/Genero.php");
include_once "plantilla.php";
class Controller_index {

    static function  index_main(){
            $datos= Genero::create();
        
            
            
       Vista::Vista("index_vista",["albums"=>$datos,"mensaje"=>"ella me ama <a href='https://www.facebook.com/DeleydaMancinesTrujillo'>ir</a>"]);
}
static function  login(){
    $datos= Genero::create();

    
    
Vista::Vista("login_vista");
}

}