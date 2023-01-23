<?php


class Router{
    
    static function router($url,$method){
        /*
        $a=explode("/",$url);
        
        $b=explode("/",$_SERVER["REQUEST_URI"]);
    
        print_r($resultado = array_diff_assoc($a, $b));
        exit();
        
          print_r( $a);
          print_r( $b);
          */
             

        if(self::url($url)){
           
            if (file_exists("controller/$method[0]_controller.php")){
                
                include("controller/$method[0]_controller.php");  
                $class="Controller_$method[0]"; $metod=$method[1];

                if(method_exists($class,$method[1])) {
                  
                    $class::$metod();
                }
              
            } 
            exit();
        }
      
    }
    


     static function error_404(){
        $a=explode("/",$_SERVER["REQUEST_URI"],3);
        $b=explode(".",end($a));
    
        
        if (file_exists($a[2])){
                if(end($b)=="css")header("Content-type: text/css");
            
                if(end($b)=="js") header("Content-type: text/js");
                
             include $a[2];
            }else{
            echo '<img src="https://img.freepik.com/vector-premium/fondo-pagina-error-404-distorsion_23-2148086227.jpg?w=2000">';
            
            
        }
    
        
        exit();

    }
    
    static function url($path){


      if ($_SERVER['REQUEST_URI']== $path  ){
           return true;
        }
        
        return false;
    
    }

    


}