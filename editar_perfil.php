<?php include('conexionDB.php'); ?>
<?php include('session.php'); ?>   
<!DOCTYPE html>
<html lang="es"> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
	<title>Editar Perfil</title>
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
	<div class="container-xxl">
		<h2 class="display-2 text-center">Perfil</h2>
		<form action="cambiar_informacion.php" method="post" class="border p-3">
			<div class="row">
				<?php
					$query = $conn->query("select * from miembros where id_miembros = '$session_id'");
					$row = $query->fetch();
					$id = $row['id_miembros'];
				?>
				<div class="col">
					<input type="hidden" name="id_miembros" value="<?php echo $id; ?>">
					<label class="form-label fs-5" for="username">Usuario</label>
					<input type="text" class="form-control" name="nombreUsuario" value="<?php echo $row['nombreUsuario']; ?>">
					<label for="firstname" class="form-label fs-5">Nombre</label>
					<input type="text" class="form-control" name="primerNombre" value="<?php echo $row['primerNombre']; ?>">
					<label for="lastname" class="form-label fs-5">Apellido</label>
					<input type="text" class="form-control" name="apellido" value="<?php echo $row['apellido']; ?>">
					<label class="form-label fs-5" for="mobile">Telefono</label>
					<input name="no_celular" class="form-control" type="text" value="<?php echo $row['no_celular']; ?>">
					<label class="form-label fs-5" for="work">Trabajo</label>
					<input name="trabajo" class="form-control" type="text" value="<?php echo $row['trabajo']; ?>">
					
				</div>
				<div class="col">
					<label for="gender" class="form-label fs-5">Genero</label>
					<select name="genero" class="form-select">
						<option><?php echo $row['genero']; ?></option>
						<option>Hombre</option>
						<option>Mujer</option>
					</select>
					<label class="form-label fs-5" for="birthdate">Fecha Nacimiento</label>
					<input name="cumpleanos" class="form-control" type="text" value="<?php echo $row['cumpleanos']; ?>">
					<label class="form-label fs-5" for="address">Direccion</label>
					<input name="direccion" class="form-control" type="text" value="<?php echo $row['direccion']; ?>">
					<label class="form-label fs-5" for="status">Estado</label>
					<input name="estado" class="form-control" type="text" value="<?php echo $row['estado']; ?>">
					<label class="form-label fs-5" for="religion">Religion</label>
					<input name="religion" class="form-control" type="text" value="<?php echo $row['religion']; ?>">
				</div>
			</div>
			<div class="container d-grid gap-2 d-md-flex justify-content-md-end">
				<button name="save" class="btn btn-success mt-4 px-4">Guardar<i class="bi bi-archive ms-2"></i></button>
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>