<?php

include ('config/db.php');
$id = $_GET['id'];
$result =  mysqli_query($mysqli,"select * from administradores where id_admin = '$id'");
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $usuario =$_POST['usuario'];
    $pass =$_POST['pass'];
    $correo =$_POST['correo'];
    $result = mysqli_query($mysqli,"update administradores set usuario = '$usuario' where  id_admin = '$id' ");
    $result = mysqli_query($mysqli,"update administradores set pass = '$pass' where  id_admin = '$id' ");
    $result = mysqli_query($mysqli,"update administradores set correo = '$correo' where  id_admin = '$id' ");
 
if ($result) 
{
   header('location: admin-crud.php');
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
      <h1 class="text-center"><strong>Editar Administradores</strong></h1>
      <br>
      <label for="usuario">NOMBRE DE USUARIO ADMINISTRADOR</label>
      <input type="text" placeholder="" value="<?php echo $row['usuario'];?>" name="usuario" class="form-control">
      <br>
      <label for="password">PASSWORD</label>
      <input type="text" placeholder="" value="<?php echo $row['pass'];?>" name="pass" class="form-control">
      <br>
      <label for="correo">CORREO</label>
      <input type="text" placeholder="" value="<?php echo $row['correo'];?>" name="correo" class="form-control">
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