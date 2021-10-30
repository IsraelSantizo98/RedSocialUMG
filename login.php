<?php
include('conexionDB.php');
$nombreUsuario = $_POST['nombreUsuario'];
$contrasena = $_POST['contrasena'];

$query = $conn->query("select * from miembros where nombreUsuario = '$nombreUsuario' and contrasena = '$contrasena'");
$count = $query->rowcount();
$row = $query->fetch();
if ($count > 0){
session_start();
$_SESSION['id'] = $row['id_miembros'];
    header('location:home.php');
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}else{
    header('location:index.php'); 
}
?>