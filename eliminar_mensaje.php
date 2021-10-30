<?php
include('conexionDB.php');
$get_id = $_GET['id'];
/*
$conn->query("delete from message where message_id = '$get_id'");
header('location:mensajes.php');*/
$conn->query("delete from mensaje where id_mensaje = '$get_id'");
header('location:mensajes.php');

?>