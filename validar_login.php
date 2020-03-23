<?php

$usuario = "root";
$password = "";
$servidor = "localhost";

$connect = mysqli_connect($servidor,$usuario,$password); // connect to db

$database = "neumaticos";

mysqli_select_db($connect,$database); //selecionar db desde la conexion al servidor

$query = "SELECT * FROM login";

$result = mysqli_query($connect,$query); //seleccionar tabla desde phpmyadmin

$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Seleccionar una columna (nombre y precio)
// FROM desde productos2 (la tabla)
// WHERE donde id (otra columna) coincida con VARIABLE


if ($usuario!=null && $password!=null){
    $entrar = "SELECT username, password FROM login
        WHERE usuario ='".$usuario."' AND  password ='".$password."'";
        mysqli_query($connect,$entrar);
        header("location: index.php");
        mysqli_close();
    
}else {
   echo "Error: usuario o contraseña incorrectos";
}

?>