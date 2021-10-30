<?php
include('conexionDB.php');
$get_id = $_GET['id'];
/*$conn->query("delete from photos where photos_id='$get_id'");
header('location:fotos.php');*/
$conn->query("delete from fotos where id_fotos='$get_id'");
header('location:fotos.php');
?>