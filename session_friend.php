<?php
session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}
$session_id = $_SESSION['id'];
$posted_by_id = ($_GET['id']);
$session_query = $conn->query("select * from miembros where id_miembros = '$posted_by_id'");
$user_row = $session_query->fetch();
$username = $user_row['primerNombre']." ".$user_row['apellido'];
$image = $user_row['imgPerfil'];
?>