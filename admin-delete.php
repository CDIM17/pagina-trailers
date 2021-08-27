<?php

include('config/db.php');

$id= $_GET['id'];

$query = mysqli_query($mysqli,"delete  from administradores where (id_admin ='$id')");

if ($query) {
    header('location: admin-crud.php');
}

?>