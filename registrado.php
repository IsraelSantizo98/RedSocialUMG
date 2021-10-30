<?php
include('conexionDB.php');
?>
<?php
$username = $_POST['nombreUsuario'];
$password = $_POST['contrasena'];
$firstname = $_POST['primerNombre'];
$lastname = $_POST['apellido'];
$gender = $_POST['genero'];

$conn->query("insert into miembros (nombreUsuario,contrasena,primerNombre,apellido,genero,imgPerfil) values ('$username','$password','$firstname','$lastname','$gender','images/No_Photo_Available.jpg')");	
?>
<script>
	alert('Registro satisfactorio, ingresa con tus credenciales');
	window.location = 'index.php';
</script>