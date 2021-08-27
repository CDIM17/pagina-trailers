<?php
include('config/db.php');
$correo=$_POST['correo'];
$pass=$_POST['pass'];
session_start();
$_SESSION['correo']=$correo;

$conexion=mysqli_connect("localhost","root","","pelipruebas");

$consulta="SELECT*FROM usuarios where correo='$correo' and pass='$pass'";
$resultado=mysqli_query($conexion,$consulta);
$datos=mysqli_num_rows($resultado);

$consultaAdmin="SELECT*FROM administradores where correo='$correo' and pass='$pass'";
$resultadoAdmin=mysqli_query($conexion,$consultaAdmin);
$datosAdmin=mysqli_num_rows($resultadoAdmin);

if($datos){
  
    header("location:PantallaPrincipal.php");

}elseif($datosAdmin){
    header("location:admin-crud.php");
}
    else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad" style = "color:red">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

