<?php
include_once "plantilla.php";
include_once "modelo/usuario.php";

class Controller_login {

    static function  login_main(  ){
        
        Vista::Vista("login_vista");
    }

    static function  login(  ){

     if ($_SERVER['REQUEST_METHOD']=="POST"){
    
            if(Usuario::login($_POST["mail"],$_POST["password"]))
                header("location:/disquera/index");
            else{
                session_start();
                $_SESSION["error_login"]="Error usuario incorrecto";
                session_commit();
                header("location:/disquera/login");
            }

     }else {
        header("Location: /index");
     }
        
    }


}