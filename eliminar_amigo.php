<?php
include('conexionDB.php');
$id = $_GET['id'];
/*
	$conn ->query("delete from friends where friends_id = '$id'");
	header('location:amigos.php');*/
	$conn ->query("delete from amigos where id_Amigos = '$id'");
	header('location:amigos.php');

?>