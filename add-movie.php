<?php

include('config/db.php');

if(!empty($_POST['nombre']) && !empty($_POST['genero']) && !empty($_POST['descripcion'])&&!empty($_POST['imagen']) && !empty($_POST['trailer'])){

    $nombre =$_POST['nombre'];
    $generos =$_POST['genero'];
    $descripcion =$_POST['descripcion'];
    $imagen =$_POST['imagen'];
    $destino= "img/".$imagen;
    $trailer_link = $_POST['trailer'];
    $trailer= "https://www.youtube.com/watch?v=".$trailer_link;
    $query = mysqli_query($mysqli," insert into peliculas (nombre,genero,descripcion,link_pelicula,imagen,trailer) values('$nombre','$generos','$descripcion','$destino','$imagen','$trailer')");

    if ($query) {
        header('location:peliculas-crud.php');
    }
}

if(isset($_FILES['imagen'])){

    $nombreImg=$_FILES['imagen']['name'];
    $rutaImg=$_FILES['imagen']['tmp_name'];
    $destino= "img/".$nombreImg;
    
    if(copy($rutaImg,$destino)){

        $sql = "INSERT INTO peliculas (imagen, link_pelicula) VALUES ('$nombreImg','$destino')";

        $res = mysqli_query($cn,$sql);
    
        if($res){
    
            header('location:PantallaPrincipal.html');
    
        }
        else{
    
            die("ERROR".mysqli_error($cn));
    
        }

    }
   
}

?>
