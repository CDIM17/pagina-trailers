<?php

include ('config/db.php');
$id = $_GET['id'];
$result =  mysqli_query($mysqli,"select * from peliculas where id_pelicula = '$id'");
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $pelicula = $_POST['pelicula'];
    $genero = $_POST['genero'];
    $descripcion = $_POST['descripcion'];
    $trailer_link = $_POST['trailer'];
    $trailer= "https://www.youtube.com/watch?v=".$trailer_link;
    $imagen = $_POST['imagen'];
   
    $result = mysqli_query($mysqli,"update peliculas set nombre = '$pelicula' where  id_pelicula = '$id' ");
    $result = mysqli_query($mysqli,"update peliculas set genero = '$genero' where  id_pelicula = '$id' ");
    $result = mysqli_query($mysqli,"update peliculas set descripcion = '$descripcion' where  id_pelicula = '$id' ");
    $result = mysqli_query($mysqli,"update peliculas set trailer = '$trailer' where  id_pelicula = '$id' ");
    $result = mysqli_query($mysqli,"update peliculas set imagen = '$imagen' where  id_pelicula = '$id' ");
if ($result) 
{
   header('location: peliculas-crud.php');
}


}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/star.png" />
    <title>MovieStar</title>
</head>

<style>
.n{


    margin-top: 100px;
}
</style>

<body>
           
        <div class="container">
      <div class="row n">
      <div class="col-xs-12 col-lg-5">
      <form action="" method="post">
      <h1 class="text-center"><strong>Editar película</strong></h1>
      <br>
      <label for="pelicula">Película</label>
      <input type="text" placeholder="" value="<?php echo $row['nombre'];?>" name="pelicula" class="form-control">
      <br>
      <label for="genero">Géneros</label>
      <input type="text" placeholder="" value="<?php echo $row['genero'];?>" name="genero" class="form-control">
      <br>
      <label for="descripcion">Descripción</label>
      <input type="text" placeholder="" value="<?php echo $row['descripcion'];?>" name="descripcion" class="form-control">
      
      <label for="trailer">Trailer</label>
      <input type="text" placeholder="" value="<?php echo $row['trailer'];?>" name="trailer" class="form-control">
      <br>
      
      <label for="descripcion">Imagen</label>
      <input type="file" placeholder="" value="<?php echo $row['imagen'];?>" name="imagen" class="form-control">
      <br>
     
      <input type="submit" name="editar" value="Editar" class="btn btn-primary btn-block">
      </form>
      </div>
      </div>
      </div>
            
                    


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>