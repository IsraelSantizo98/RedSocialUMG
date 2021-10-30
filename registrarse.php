
<?php include('conexionDB.php'); ?>
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styl.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Registrate</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="fw-bold text-center py-5 display-2"> Formulario de Registro </h2> 
                <!-- login -->
                <form  action="registrado.php" method="post" autocomplete="on">
                    <div class="mb-4">
                        <label for="usernamesignup" class="form-label" data-icon="u">Tu usuario</label>
                        <input id="usernamesignup" class="form-control" name="nombreUsuario" required="required" type="text" placeholder="Usuario" />
                    </div>
                    <div class="mb-4">
                        <label for="passwordsignup" class="form-label" data-icon="p">Tu contraseña </label>
                        <input id="passwordsignup" class="form-control" name="contrasena" required="required" type="password" placeholder="Contraseña"/>
                    </div>
                    <div class="mb-4">
                        <label for="passwordsignup" class="form-label" data-icon="u">Nombre </label>
                        <input id="passwordsignup" class="form-control" name="primerNombre" required="required" type="text" placeholder="Nombre"/>
                    </div>
                    <div class="mb-4">
                        <label for="passwordsignup" class="form-label" data-icon="u">Apellido </label>
                        <input id="passwordsignup" class="form-control" name="apellido" required="required" type="text" placeholder="Apellido"/>
                    </div>
                    <div class="mb-4">
                    <label for="passwordsignup" class="form-label" data-icon="">Tu género </label>
                    <select class="form-select" id="passwordsignup"  name="genero">
                        <option value="" disabled selected>Eliga una opcion</option>
                        <option>Hombre</option>
                        <option>Mujer</option>
                    </select>
                    </div>
                    <div class="container d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary">Registrase</button>
                    </div>
                    <div class="container d-grid gap-2 d-md-flex justify-content-md-end">
                        <span class="mt-2">Tienes una cuenta? <a href="index.php" class="primary-link ms-4">Ingresar</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>       
</body>
</html>