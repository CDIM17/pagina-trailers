<?php

include('config/db.php');

$id= $_GET['id'];

$query = mysqli_query($mysqli,"delete from peliculas where (id_pelicula ='$id')");

if ($query) {
    header('location: peliculas-crud.php');
}

?>