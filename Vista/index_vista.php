<?php
 header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

include(__DIR__."resource/resource.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="public/css/stylesp.css" rel="stylesheet" />
    <title>Index</title>
</head>
<body>
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Sitio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>

        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>  
      
      <li class="nav-item">
          <a class="nav-link " href="login">login</a>
        </li>

      
      </ul>
      
    </div>
  </div>
</nav>
<section class="d-flex justify-content-around">
<?php 

$genero=null;

foreach ( $GLOBALS["albums"] as $k=>$v){
    $card='<div class="card text-white bg-dark mb-3" style="width: 18rem;">
    <img class="card-img-top rounded" src="'.$v->logo.'" alt="Card image cap">
    <div class="card-body ">
      <h5 class="card-title">'.strtoupper($v->genero).'</h5>
    </div>
    <ul class="list-group list-group-flush">

';
    
    if($genero==null){      //el primero
  
        $genero=$v->idgenero; //el primero
        $menu.=$card;
    } 

    if($v->idgenero!=$genero){
    
        $menu.="</ul></div>".  $card;      //cuando aparace otro genero
        $genero=$v->idgenero;
        
         }
       
   if($v->idgenero==$genero){  //llenar artistas
          $menu.='<li class="list-group-item text-info">'. strtoupper( $v->Nombre).'</li>';
          
        } 



        }
            echo $menu."</ul></div>";

            
?>

      </section>
<div>

<div>



   
<style>
    .box{
        display:flexbox;
        background-color:rgb(233,6,2);
    }
        .div-box{
            display:  inline-block;
            position: relative; 
            width: 200px;
            height: 200px;
            cursor: grab;
            border: 12px solid rgba(red, green, blue, alpha);
            margin-left:10px; 
            background-color:rgb(33,46,222);

        }
      
        .div-box > img{
            display: block;  
            
            width: 18vw;
            height:18vh;
        }

        label{
            text-align:"center";
        }
    </style>



<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>

</body>



</html>



      