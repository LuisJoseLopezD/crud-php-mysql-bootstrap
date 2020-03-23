<?php

$usuario = "root";
$password = "";
$servidor = "localhost";

$connect = mysqli_connect($servidor,$usuario,$password); // connect to db

$database = "neumaticos";

mysqli_select_db($connect,$database); //selecionar db desde la conexion al servidor

$query = "SELECT * FROM productos2";

$result = mysqli_query($connect,$query); //seleccionar tabla desde phpmyadmin


?>