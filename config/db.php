<?php


$mysqli = new mysqli('localhost', 'root', '', 'pelipruebas');
if ($mysqli->connect_errno){
	die("Error al conectarse con la base de datos " . $mysqli->connect_error);
}



?>