<?php

include 'action.php';

if (isset($_GET['id'])) {
$id4 = $_GET['id'];
} else {
$id4 = "";
}

$delete = "DELETE FROM productos2 WHERE id='".$id4."'";
mysqli_query($connect,$delete);
header("location: index.php");

?>