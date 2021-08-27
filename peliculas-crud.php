<?php

include ('config/db.php');

$result = mysqli_query($mysqli,'select *  from peliculas');



?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/star.png" />
    <link rel="stylesheet" href="css/admin-crud.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Peliculas-Mantenimiento</title>
</head>


<body>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin-crud.php">ADMINISTRADORES</a></li>
    <li class="breadcrumb-item"><a href="user-crud.php">USUARIOS</a></li>
    <li class="breadcrumb-item"><a href="peliculas-crud.php">PELICULAS</a></li>
    <li class="breadcrumb-item"><a href="PantallaPrincipal.php">PANTALLA PRINCIPAL</a></li>
  </ol>
</nav>
<h1 class="titulo"><strong>Películas</strong> </h1>
<div class ="col-lg-3"> 
<form action="add-movie.php" method="post">

<br>
<input type="text" class="form-control formulario" placeholder="Nombre de la película" require name="nombre">
<br>
<input type="text" class="form-control formulario" placeholder="Generos de la película" require name="genero">
<br>
<input type="text" class="form-control formulario" placeholder="Descripción de película" require name="descripcion">
<br>
<input  type="text" class="form-control formulario" placeholder="Trailer de la pelicula" require name="trailer">
<br>
<input  type="file" class="formulario" placeholder="imagen de la pelicua" require name="imagen">
   <br>  <br>

<input type="submit" value="Agregar" class="btn btn-primary btncrear">
</form>
</div>
<br>
<div class="col-lg-8">
<table class="table table-striped table-dark tabla">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Genero</th>
      <th scope="col">Descripción</th>
      <th scope="col">Trailer</th>
      <th scope="col">Imagen</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row){ ?>
    <tr>
      <td><?php echo $row['nombre']; ?></td>

      <td><?php echo $row['genero']; ?></td>

      <td><?php echo $row['descripcion']; ?></td>

      <td><?php echo $row['trailer']; ?></td>

      <td><?php echo $row['imagen']; ?></td>
     
      <td><a href="edit-movie.php?id=<?php echo $row['id_pelicula']?>" class="btn btn-primary">Editar</a></td>
     
      <td><a href="delete-movie.php?id=<?php echo $row['id_pelicula']?>" class="btn btn-danger" >Delete</a></td>
    </tr>
        <?php }?>
    </tbody>
  
</table>
              
              
              </div>
                </div>
                    </div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>

</html>