<?php include('conexionDB.php'); ?>
<?php include('session_friend.php'); ?>   
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
	<div class="container p-3 ">
		<div class="row">
			<div class="col-4 mb-4">
				<img src="<?php echo $image; ?>" alt="Photo Profile" class="img-fluid">
			</div>
			<div class="col-8">
				<h2>Informacion</h2>
				<?php
					$posted_by_id = ($_GET['id']);
					$query = $conn->query("select * from miembros where id_miembros = '$posted_by_id '");
					$row = $query->fetch();
					$id = $row['id_miembros'];
				?>
				<p>Nombre: <?php echo $row['primerNombre']." ".$row['apellido']; ?>
				<p>Género: <?php echo $row['genero']; ?></p>
				<p>Fecha de Nacimiento: <?php echo $row['cumpleanos']; ?></p>
				<p>Dirección: <?php echo $row['direccion']; ?></p>
				<p>Número de Contacto: <?php echo $row['no_celular']; ?></p>
				<p>Estado: <?php echo $row['estado']; ?></p>
				<p>Trabajo: <?php echo $row['trabajo']; ?></p>
				<p>Religión: <?php echo $row['religion']; ?></p>
			</div>
		</div>
	</div><!-- /continer profile -->     
</body>
</html>