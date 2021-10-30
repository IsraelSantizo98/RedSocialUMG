<?php 

?>    
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <title>Integrantes</title>
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
                        <li class="nav-item"><a class="nav-link active  disabled" href="nosotros.php">Integrantes</a></li>
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
    <div class="container-sm d-flex justify-content-center align-items-center mt-4">
        <div class="row">
            <div class="col-sm-6 mb-4">
                <div class="card mx-2" >
                    <div class="card-body" style="min-width: 20rem;">
                        <h5 class="card-title">José Enrique Lopez</h5>
                        <p class="card-text">0900-18-16987</p>
                    </div>
                </div>
                <div class="card mx-2" >
                    <div class="card-body"  style="min-width: 20rem;">
                        <h5 class="card-title">Carlos José Quintana Ruiz</h5>
                        <p class="card-text">0900-18-26055</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-4">
                <div class="card mx-2" >
                    <div class="card-body" style="min-width: 20rem;">
                        <h5 class="card-title">Andy Steven  Pérez Gonzaléz</h5>
                        <p class="card-text">0900-18-6707</p>
                    </div>
                </div>
                <div class="card mx-2" >
                    <div class="card-body" style="min-width: 20rem;">
                        <h5 class="card-title">José Israel Santizo Santos</h5>
                        <p class="card-text">0900-18-2180</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>