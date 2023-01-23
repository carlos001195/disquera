<?php

include_once ("conf/conexion.php");

class Usuario extends Conexion  {

    public string $idusuario;
    private string $nombre;
    private string $correo;
    
    static function login($main,$pass){
        $conn=Conexion::DBConection();
             
        $SQ=$conn->prepare("SELECT idusuario,nombre,correo from usuario where correo=:correo  and pass=:pass");
            $SQ->bindParam(":correo",$main,PDO::PARAM_STR);
            $SQ->bindParam(":pass",$pass,PDO::PARAM_STR);
          $SQ->execute();
            

        return $c=$SQ->fetchAll(PDO::FETCH_CLASS);

    }

}