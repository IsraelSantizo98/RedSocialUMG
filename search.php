<?php include('conexionDB.php'); ?>      
<?php include('session.php'); ?>
<?php $search = $_POST['search']; ?>
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <title>Buscar</title>
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
	<!-- Perfil amigos -->
	<div class="container-md d-flex flex-column align-items-center  border-0">
    <h1 class="display-1 text-center mb-4">Agregar amigos</h1>
    <?php
    $query = $conn->query("select  * from miembros where primerNombre LIKE '%$search%' or apellido  LIKE '%$search%'");
		$count = $query->rowcount();
		if ($count > 0){ 
			while($row = $query->fetch()){
				$posted_by = $row['primerNombre']." ".$row['apellido'];
				$friend_gender = $row['genero'];
				$friend_birthdate = $row['cumpleanos'];
				$friend_tel = $row['no_celular'];
				$posted_image = $row['imgPerfil'];
				$friend_id = $row['id_miembros'];
    ?>
    <div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card mb-3 border-0" style="max-width: 800px;">
				<div class="row g-0">
					<div class="col-md-6">
					<img src="<?php echo $posted_image; ?>" class="img-fluid rounded-start mb-4" alt="Foto perfil">
				</div>
				<div class="col-md-6">
					<div class="card-body">
						<div class="row">
							<div class="col">
								<h5 class="">Nombre</h5>
								<p class="m-0"><?php echo $posted_by; ?></p>
								<h5>Genero</h5>
								<p><?php echo $friend_gender; ?></p>
							</div>
							<div class="col">
								<h5>Cumpleaños</h5>
								<p><?php echo $friend_birthdate; ?></p>
								<h5>Telefono</h5>
								<p><?php echo $friend_tel; ?></p>
							</div>
						</div>
					</div>
				</div>
				<form method="post" action="agregar_amigo.php">
					<input type="hidden" name="id_miAmigo" value="<?php echo 	$friend_id; ?>">
					<?php 
						$query1 = $conn->query("select * from amigos where id_miAmigo = '$friend_id' and miPropio_id = '$session_id'");
						$count1 = $query1->rowcount();
						if ($count1 > 0){ echo"<p class='badge bg-primary mx-4 p-3 fs-6'><i class='bi bi-person-check me-2 fs-6'></i>Ya son amigos </p>"; }else{
					?>	
					<button  class="btn btn-info mx-4 mb-4 p-3"><i class="bi bi-person-plus me-2 fs-6"></i>Agregar amigos</button>
					<?php } ?>
				</form>
			</div>
		</div>
	</div>
</div>
<?php } }else{ ?>
<div class="container ">
    <div class="row">
		<div class="col text-center">
			<img src="images/resultados.svg" class="text-center" alt="Sin resultados">
			<h2 class="display-4 text-center">No hay resultados</h2>
		</div>
    </div>
</div>
<?php } ?>
</div>
<!-- /Perfil amigos -->            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>