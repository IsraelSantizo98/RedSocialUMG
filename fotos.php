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
    <title>Mis Fotos</title>
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
                        <li class="nav-item"><a class="nav-link active  disabled" href="fotos.php">Fotos</a></li>
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
	<!-- imagenes -->
	<div class="container">
		<h2 class="display-2 text-center">Mis Fotos</h2>
		<div class="d-flex flex-column bd-highlight mb-3">
			<form id="photos" method="POST" enctype="multipart/form-data" class="form-control border-0">
				<input type="file" name="image" class="form-control form-control-lg" required>
				<div class="container d-grid gap-2 d-md-flex justify-content-md-end">
					<button type="submit" name="submit" class="btn btn-success mt-4 px-3">Publicar<i class="bi bi-cloud-arrow-up ms-2"></i></button>
				</div>
			</form>
			<?php 
				if (isset($_POST['submit'])) {
					$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name = addslashes($_FILES['image']['name']);
					$image_size = getimagesize($_FILES['image']['tmp_name']);
					move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
					$location = "upload/" . $_FILES["image"]["name"];
					$conn->query("insert into fotos (rutaUbicacion,id_miembros) values ('$location','$session_id')");
					echo "<script>
					alert('Se guardo correctamente');
					window.location = 'fotos.php';
				</script>";}
			?>

			<div class="container-xxl mt-4">
				<?php
					$query = $conn->query("select * from fotos where id_miembros='$session_id'");
					while($row = $query->fetch()){
					$id = $row['id_fotos'];
				?>
				<div class="card border-0">
					<img src="<?php echo $row['rutaUbicacion']; ?>" class="img-fluid" alt="Photo">
					<a class="btn btn-danger my-4" href="eliminar_foto.php<?php echo '?id='.$id; ?>">Eliminar</a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- /imagenes -->           
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>         
</body>
</html>