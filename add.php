<?php

include 'action.php';
                            
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

if ($id!=null || $nombre!=null || $precio!=null){
    $insertar = "INSERT INTO productos2(id,nombre,precio) values('".$id."','".$nombre."','".$precio."')";
    mysqli_query($connect,$insertar); // hacemos de nuevo la consulta insertando los datos
    header("location: index.php");
    
}

?>