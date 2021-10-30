<?php
include('conexionDB.php');
$get_id = $_GET['id'];
/*
$conn->query("delete from post where post_id='$get_id'");
header('location:home.php');
*/
$conn->query("delete from publicacion where id_publicacion='$get_id'");
header('location:home.php');
?>