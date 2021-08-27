<?php

include ('config/db.php');

$result = mysqli_query($mysqli,'select *  from administradores');

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="img/star.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin-crud.css">
    <title>Administradores</title>
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

 <form action="admin-add.php" method="post">
 <h1 class="titulo"><strong>ADMINISTRADOR</strong> </h1>
<br>
<div class ="col-lg-3"> 

<input type="text" class="form-control formulario" placeholder="NOMBRE DE ADMINISTRADOR" require name="usuario">
<br>
<input type="text" class="form-control formulario" placeholder="PASSWORD" require name="pass">
<br>
<input type="text" class="form-control formulario" placeholder="CORREO" require name="correo">
</div>
<br>
<input type="submit" value="Agregar" class="btn btn-primary btncrear">
 </form>
 <br>
     
<div class="col-lg-8">
<table class="table table-striped table-dark tabla">
  <thead>
    <tr>
      <th scope="col">USUARIO ADMINISTRADOR</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">CORREO</th>
      <th scope="col">Acciones</th>


    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $row){ ?>
    <tr>
      <td><?php echo $row['usuario']; ?></td>

      <td><?php echo $row['pass']; ?></td>

      <td><?php echo $row['correo']; ?></td>
     
      <td><a href="admin-edit.php?id=<?php echo $row['id_admin']?>" class="btn btn-primary">Editar</a></td>
     
      <td><a href="admin-delete.php?id=<?php echo $row['id_admin']?>" class="btn btn-danger" >Delete</a></td>
    </tr>
        <?php }?>
    </tbody>
  
</table>

</body>
</html>          
              
              









   

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>

</html>