<?php
include_once ("conf/conexion.php");

class Genero extends Conexion{

    public string $idgenero;
    public string $genero;
    private string $logo;
    private string $cantante;
    private string $idcantante;
    private string $Nombre;




    static function create(){
        try{
            $conn=Conexion::DBConection();
             
            $SQ=$conn->prepare("SELECT genero.idgenero,genero.genero,genero.logo,cantante.idcantante,cantante.Nombre FROM genero  inner join cantante  on genero.idgenero=cantante.idgenero
            order by genero.idgenero");
              $SQ->execute();
                
    
              $c=$SQ->fetchAll(PDO::FETCH_CLASS);
              
              return $c;
                
                
                
            
        }catch(PDOException $e){
             throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
            }
    
    
         return false;
    }
    /**
     * Get the value of idgenero
     */ 
    public function getIdgenero()
    {
        return $this->idgenero;
    }

    /**
     * Set the value of idgenero
     *
     * @return  self
     */ 
    public function setIdgenero($idgenero)
    {
        $this->idgenero = $idgenero;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of logo
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @return  self
     */ 
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }
}