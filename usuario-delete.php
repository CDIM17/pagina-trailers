<?php

include('config/db.php');

$id= $_GET['id'];

$query = mysqli_query($mysqli,"delete  from usuarios where (id_usuario ='$id')");

if ($query) {
    header('location: user-crud.php');
}

?>