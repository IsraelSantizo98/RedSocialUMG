<?php
include('conexionDB.php');

$id_miembros = $_POST['id_miembros'];
$nombreUsuario = $_POST['nombreUsuario'];
$primerNombre = $_POST['primerNombre'];
$apellido = $_POST['apellido'];
$genero = $_POST['genero'];
$direccion = $_POST['direccion'];
$cumpleanos = $_POST['cumpleanos'];
$no_celular = $_POST['no_celular'];
$estado = $_POST['estado'];
$trabajo = $_POST['trabajo'];
$religion = $_POST['religion'];

$conn->query("update miembros set nombreUsuario = '$nombreUsuario',primerNombre = '$primerNombre',apellido='$apellido',genero='$genero',direccion='$direccion',
cumpleanos='$cumpleanos',no_celular='$no_celular',estado='$estado',trabajo='$trabajo',religion='$religion' where id_miembros = '$id_miembros'
");

?>
<script>
    alert('Se cambio su informacion de perfil');
    //sleep(10s);
	window.location = 'perfil.php<?php echo '?id='.$id_miembros; ?>';
</script>