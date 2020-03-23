<?php
    mysqli_close();
    function salir(){
       $x = header("location: login.php");
        return $x;
}
salir();

?>