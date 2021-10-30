<?php 
include('conexionDB.php'); 
include('session.php');
?>    
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <title>Red Social</title>
</head>  
<body>
	<!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container-xxl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="perfil.php">Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" href="fotos.php">Fotos</a></li>
                        <li class="nav-item"><a class="nav-link" href="amigos.php">Amigos</a></li>
                        <li class="nav-item"><a class="nav-link active  disabled" href="mensajes.php">Mensajes</a></li>
                        <li class="nav-item"><a class="nav-link" href="nosotros.php">Integrantes</a></li>
                        <li class="nav-item"><a class="nav-link" href="cerrar_session.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
        <div class="container-xxl">
            <form class="d-flex ms-auto" method="post" action="search.php">
                <input class="form-control me-2" type="search" name="search" placeholder="Buscar" aria-label="Search">
            </form>
        </div>
    </nav>
    <!-- /Navbar -->
    <div class="container-lg">
        <h2 class="text-center display-2">Mensajes</h2>
        <div class="row">
            <div class="col-md-12">
                <h2>Amigos</h2>
                <form method="post" id="send_message" action="enviar_mensaje.php">
                    <select name="id_Amigos" class="form-select" required>
                        <option value="" disabled selected >Seleccione</option>
                        <?php
                            $query = $conn->query("select miembros.id_miembros , miembros.primerNombre , miembros.apellido , miembros.imgPerfil , amigos.id_Amigos   from miembros  , amigos where amigos.id_miAmigo = '$session_id' and miembros.id_miembros = amigos.miPropio_id OR amigos.miPropio_id = '$session_id' and miembros.id_miembros = amigos.id_miAmigo");
                            while($row = $query->fetch()){
                                $friend_name = $row['primerNombre']." ".$row['apellido'];
                                $friend_image = $row['imgPerfil'];
                                $id = $row['id_miembros'];
                        ?>
                        <option value="<?php echo $id; ?>"><?php echo $friend_name; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-12 mt-2">
                    <h2>Mensaje</h2>
                    <textarea name="mi_mensaje" class="form-control" placeholder="Escriba su mensaje" required></textarea>
                    <div class="container d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-success my-4">Enviar Mensaje<i class="bi bi-chat-left-text ms-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container-lg">
        <h2 class="text-center display-2">Mensajes recibidos</h2>
        <div class="row">
            <div class="col-md-12">
                <?php 
				    $query = $conn->query("select * from mensaje LEFT JOIN 
                    miembros on mensaje.id_emisor = miembros.id_miembros where id_receptor = '$session_id'");
                    while($row = $query->fetch()){
                        $id = $row['id_mensaje'];
				?>
                <div class="card">
                    <div class="row g-0 m-4">
                        <div class="col-md-4">
                            <img src="<?php echo $row['imgPerfil']; ?>" class="img-fluid rounded-start" alt="Foto perfil">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['primerNombre']." ".$row['apellido']; ?></h5>
                                <p class="card-text"><?php echo $row['contenido']; ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo $row['fechaEnvio']; ?></small></p>
                            </div>
                            <a href="eliminar_mensaje.php<?php echo '?id='.$id; ?>" class="btn btn-danger mx-4">Eliminar<i class="bi bi-trash ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>