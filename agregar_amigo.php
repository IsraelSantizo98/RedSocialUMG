<?php include('conexionDB.php'); ?>
<?php include('session.php'); ?>
<?php

	
	$id_miAmigo = $_POST['id_miAmigo'];
	$conn ->query("insert into amigos (miPropio_id,id_miAmigo) values('$session_id','$id_miAmigo')");
 	header('location:amigos.php'); 
?>