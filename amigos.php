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
    <title>Amigos</title>
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
                        <li class="nav-item"><a class="nav-link active disabled" href="amigos.php">Amigos</a></li>
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
	<h2 class="display-2 text-center">Mis amigos</h2>
	<div class="container-xxl d-grid gap-2 d-flex justify-content-end">
		<div class="row row-cols-1 row-cols-lg-2 g-4">
			<?php
			$query = $conn->query("select miembros.id_miembros , miembros.primerNombre , miembros.apellido , miembros.imgPerfil, miembros.genero, miembros.cumpleanos, miembros.no_celular, amigos.id_Amigos   from miembros  , amigos
			where amigos.id_miAmigo = '$session_id' and miembros.id_miembros = amigos.miPropio_id
			OR amigos.miPropio_id = '$session_id' and miembros.id_miembros = amigos.id_miAmigo");
			while($row = $query->fetch()){
				$friend_name = $row['primerNombre']." ".$row['apellido'];
				$friend_gender = $row['genero'];
				$friend_birthdate = $row['cumpleanos'];
				$friend_tel = $row['no_celular'];
				$friend_image = $row['imgPerfil'];
				$id = $row['id_Amigos'];
			?>
			<div class="col-12">
				<div class="card mb-3">
					<div class="row g-0" >
						<div class="col-12 ">
							<img src="<?php echo $friend_image; ?>" class="rounded-start card-img-top" alt="Fot perfil amigo" style="max-width: 250px; max-height: 250px">
						</div>
					<div class="row">
						<div class="col-12 ">
							<div class="card-body">
								<div class="row">
									<div class="col-6">
										<h5 class="">Nombre</h5>
										<p class="m-0"><?php echo $friend_name; ?></p>
										<h5>Genero</h5>
										<p><?php echo $friend_gender; ?></p>
									</div>
									<div class="col-6">
										<h5>Cumpleaños</h5>
										<p><?php echo $friend_birthdate; ?></p>
										<h5>Telefono</h5>
										<p><?php echo $friend_tel; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
						<a href="eliminar_amigo.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Eliminar</a>
					</div>
				</div>
			</div>
			<?php } ?>	
		</div>
	</div>
	<!-- prueba -->         
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>