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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Ingresar</title>
</head>
<body>
    <div class="container-md">
        <div class="row">
            <div class="col">
                <h2 class="fw-bold text-center py-5 display-2">Iniciar Session</h2>
                <!-- login -->
                <form  method="post" action="login.php" autocomplete="on">
                    <div class="mb-4">
                        <label for="username" class="form-label">Usuario</label>
                        <input id="nombreUsuario" class="form-control" name="nombreUsuario" required="required" type="text"/>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input id="contrasena" class="form-control" name="contrasena" required="required" type="password"/> 
                    </div>
                    <div class="container d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </div>
                    <div class="container d-grid gap-2 d-md-flex justify-content-md-end">
                            <span class="mt-2">No tienes una cuenta? <a href="registrarse.php" class="primary-link">Regístrate</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>       
</body>
</html>