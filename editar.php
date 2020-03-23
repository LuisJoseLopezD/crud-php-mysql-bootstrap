<?php

include 'action.php';

$id4 = $_GET['id'];

$query3 = "SELECT * FROM productos2 WHERE id='".$id4."'";
$result3 = mysqli_query($connect,$query3);

while ($fila2 = mysqli_fetch_assoc($result3)){
    
    ?>
     <div>
     
      <form>      
            <div>
                <input name="id" type="hidden" value="<?php echo $fila2['id'] ?>">
            </div>
        <label>Nombre</label>
            <div>
                <input name="nombre" type="text" value="<?php echo $fila2['nombre'] ?>">
            </div>

        <label>Precio</label>
            <div>
                <input name="precio" type="text" value="<?php echo $fila2['precio'] ?>">
            </div>
            
            <input type="submit" value="Actualizar" />
            <a href="index.php"><input type="button" value="Regresar"/></a>
        </form>  

<?php } ?>

</div>

<?php 

// SOLUCIONAR ERROR "Notice: Undefined index:" 
// porque que estamos accediendo a un array cuyo indice no existe. 
// funcion isset en php: comprobar si una variable está definida
// Lo solucionamos de esta forma:

if (isset($_GET['id'])) {
$id3 = $_GET['id'];
} else {
$id3 = "";
}

if (isset($_GET['nombre'])) {
$nombre3 = $_GET['nombre'];
} else {
$nombre3 = "";
}

if (isset($_GET['precio'])) {
$precio3 = $_GET['precio'];
} else {
$precio3 = "";
}

if ($id3!=null || $nombre3!=null || $precio3!=null){
    $insertar2 = "UPDATE productos2 SET nombre='".$nombre3."', precio='".$precio3."' WHERE id='".$id3."'";
    mysqli_query($connect,$insertar2); // hacemos de nuevo la consulta insertando los datos
}

?>

