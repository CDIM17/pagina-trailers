<?php

include('config/db.php');

if(!empty($_POST['usuario'])&& !empty($_POST['pass'])&& !empty($_POST['correo'])){

    $usuario =$_POST['usuario'];
    $pass =$_POST['pass'];
    $correo =$_POST['correo'];
    $query = mysqli_query($mysqli," insert into usuarios (usuario,pass,correo) values('$usuario','$pass','$correo')");

    if ($query) {
        header('location: index.html');
    }
}

?>