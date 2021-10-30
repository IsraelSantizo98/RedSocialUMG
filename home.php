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
                        <li class="nav-item"><a class="nav-link active  disabled" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="perfil.php">Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" href="fotos.php">Fotos</a></li>
                        <li class="nav-item"><a class="nav-link" href="amigos.php">Amigos</a></li>
                        <li class="nav-item"><a class="nav-link" href="mensajes.php">Mensajes</a></li>
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
    <!-- Comentar -->
    <div class="container-xxl d-flex flex-column justify-content-center align-items-center">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $imgPerfil; ?>"  class="rounded" alt="Profile image" width="100%" height="100%">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form method="post" action="publicar.php">
                            <textarea name="contenido" class="form-control" placeholder="En que estas pensando?" style="height: 100px"></textarea>
                            <div class="container d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-info mt-4 text-right">Compartir <i class="bi bi-share-fill"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Comentar -->
    <!-- Messages -->
    <div class="container-xxl">
        <h2 class="text-center display-1 mb-4">Publicaciones</h2>
        <?php
	    $query = $conn->query("select * from publicacion LEFT JOIN miembros on miembros.id_miembros = publicacion.id_miembros order by id_publicacion DESC");
        while($row = $query->fetch()){
            $posted_by = $row['primerNombre']." ".$row['apellido'];
            $posted_by_id = $row['id_miembros'];
            $posted_image = $row['imgPerfil'];
            $id = $row['id_publicacion'];
	?>
    <div class="w-100 card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo $posted_image; ?>" class="img-fluid rounded" alt="Profile image" width="250px" height="250px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text"><?php echo $row['contenido']; ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $row['fecha_publicacion']; ?></small></p>
                    <a href="perfil_amigo.php?id=<?php echo $posted_by_id?>" class="btn btn-outline-success"><?php echo $posted_by; ?></a>
                    <?php
                        if($session_id ==  $posted_by_id){
                        //echo($session_id);
                    ?>
                    <a href="eliminar_publicacion.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Eliminar<i class="bi bi-trash"></i></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<!--/Messages-->           
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>