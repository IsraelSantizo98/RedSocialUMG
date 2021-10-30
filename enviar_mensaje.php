<?php
include('conexionDB.php');
include('session.php');
/*
$friend_id  = $_POST['friend_id'];
$my_message  = $_POST['my_message'];
$conn->query("insert into message(reciever_id,content,date_sended,sender_id) values('$friend_id','$my_message',NOW(),'$session_id')");
*/
$id_Amigos  = $_POST['id_Amigos'];
$mi_mensaje  = $_POST['mi_mensaje'];
$conn->query("insert into mensaje(id_receptor,contenido,fechaEnvio,id_emisor) values('$id_Amigos','$mi_mensaje',NOW(),'$session_id')");

?>
<script>alert('Mensaje Enviado');</script>
<script>window.location = 'mensajes.php'; </script>
