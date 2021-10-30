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
    <title>Perfil</title>
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
                        <li class="nav-item"><a class="nav-link active  disabled" href="perfil.php">Perfil</a></li>
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
	<!-- container grid -->
	<div class="container-xxl border p-3">
		<h2 class="text-center display-1 mb-4">Informacion</h2>
		<div class="row">
			<div class="col-md-6 col-sm-12 mb-4">
				<img src="<?php echo $imgPerfil; ?>" alt="Photo Profile" class="img-fluid">
				<div class="container d-grid gap-2 d-md-flex justify-content-md-center flex-md-column flex-lg-row mt-4">
					<a class="btn btn-success mx-4 m-b-md-4" href="cambiar_foto.php"><i class="bi bi-camera me-2"></i>Cambiar Foto</a>
					<a class="btn btn-primary text-right mx-4" href="editar_perfil.php"><i class="bi bi-pencil me-2"></i>Editar</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<?php
					$query = $conn->query("select * from miembros where id_miembros = '$session_id'");
					$row = $query->fetch();
					$id = $row['id_miembros'];
				?>
				<p class="fw-bold mb-2">Nombre: <?php echo "<span class='fw-normal'>".$row['primerNombre']." ".$row['apellido']."</span>";?>
				<p class="fw-bold mb-2">Género: <?php echo "<span class='fw-normal'>".$row['genero']."</span>" ;?></p>
				<p class="fw-bold mb-2">Fecha de Nacimiento: <?php echo "<span class='fw-normal'>".$row['cumpleanos']."</span>" ;?></p>
				<p class="fw-bold mb-2">Dirección: <?php echo "<span class='fw-normal'>".$row['direccion']."</span>" ;?></p>
				<p class="fw-bold mb-2">Número de Contacto: <?php echo "<span class='fw-normal'>".$row['no_celular']."</span>" ;?></p>
				<p class="fw-bold mb-2">Estado: <?php echo "<span class='fw-normal'>".$row['estado']."</span>" ;?></p>
				<p class="fw-bold mb-2">Trabajo: <?php echo "<span class='fw-normal'>".$row['trabajo']."</span>" ;?></p>
				<p class="fw-bold mb-2">Religión: <?php echo "<span class='fw-normal'>".$row['religion']."</span>" ;?></p>
			</div>
		</div>
	</div><!-- /continer profile -->
	<!-- /container grid -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    </body>
</html>