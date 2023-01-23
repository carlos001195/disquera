<?php


class Vista{

static function Vista($vista,array $Param=null){

  if(!$Param ==null){
  
    foreach ($Param as $key=>$value){
        $GLOBALS[$key]=$value;
    }    
  }
   include ("Vista/$vista.php");
 
}
  static function response($headers){

    foreach($headers as $header){
        $head.=header("$header\n");

    }
    return $response;
  }

  static function request($value){
    $methos=null;
     if (isset($_POST)  ){
     $request= $_POST[$value];
    }else if(isset($_GET)){
      $request= $_GET[$value];
    }

    $json=function () {
      return "aqui esat tu json";
    };

    return $json();
  }
  
}
