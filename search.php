<?php

include 'action.php';

$search = $_POST['search'];

// Seleccionar una columna (nombre y precio)
// FROM desde productos2 (la tabla)
// WHERE donde id (otra columna) coincida con VARIABLE


if ($search!=null){
    $seleccionar = "SELECT nombre, precio FROM productos2
        WHERE id ='".$search."'"; 
    $result2 = mysqli_query($connect,$seleccionar);

}else {
   echo "Error encontrando producto";
}

while ($colum = mysqli_fetch_array($result2))
 {
    echo "<h2>";
    echo "<p>El nombre y el precio del producto con el codigo $search es:</p>";
    echo "Nombre: ";
    echo $colum['nombre'];
    echo "<br>";
    echo "Precio: ";
    echo $colum['precio'];
    echo "</h2>";
}

?>