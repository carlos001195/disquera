<?php


class Conexion{
    private static $conn;
    private static $HOST="localhost";

    private static $DB="Musica";

    private static $USER="root";

    private static $PASS="36AA5171B7";

    
    public static function DBConection(){
    try{
        self::$conn=new PDO("mysql:host=".self::$HOST.";dbname=".self::$DB,self::$USER,self::$PASS);
            
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        }
        catch (PDOException $e)
        {
            die("error en la base de datos");
        }
    return self::$conn;
     
    }
    /*
   
    function path_genero(array $param):string{
    
        try {
            $smtp=$this->$conn->prepare("INSERT INTO genero(idgenero,genero,logo) VALUES(:idgenero,:genero,:logo)");
            
            $smtp->execute(array("idgenero"=>$param[0],"genero"=>$param[1],"logo"=>$param[2]));
            $men= "listo";
    } catch (PDOException  $e) {
            $men=$e->getMessage();
        }
        catch(Exception $f){
            $men=$f->getMessage();
        }

        return $men;
        
    }
    
   
*/

 }


