<?php
include('conexionDB.php');
include('session.php');
$content = $_POST['contenido'];
/*
$conn->query("insert into post (content,date_posted,member_id) values('$content',NOW(),'$session_id')");
header('location:home.php');*/

$conn->query("insert into publicacion (contenido,fecha_publicacion,id_miembros) values('$content',NOW(),'$session_id')");
header('location:home.php');
?>