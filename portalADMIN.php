<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!--CSS-->
    <link rel="stylesheet" href="css/styleuno.css">
    <!--navbar-->
    <link rel="stylesheet" href="css/navbar.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--ICON BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>La Casa De La Guadaña</title>
</head>

<?php
    session_start();
    $accion=$_REQUEST['accion']??'';
    if($accion=='cerrar'){
      session_destroy();
      header("login.php");
    }


 ?>

<body>
    <!--TODO NAVEGACIÓN-->
    <header id="inicio"> 
        <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid navbar-fixed-top">
              <a id="logo" class="navbar-brand" href="entrada.php">La <i id="casa-logo" class="bi bi-house-fill"></i> De La Guadaña</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div id="lista" class="navbar-nav ms-auto">
                  <a id="login" class="nav-link" href="entrada.php">Volver Atras</a>
                  <a id="login" class="nav-link" href="login.php">¿Eres Cliente?</a> 
                </div>
              </div>
            </div>
        </nav>
    </header>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>ADMINISTRADOR LA CASA DE LA GUADAÑA</h2>
                <p>Tus datos ya estan registrados</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        
    </div>
    <div class="container-form sign-in">
        <form class="formulario" action="loginfunction.php" method="post">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="">
                    
                </div>
            </div>
            <p class="cuenta-gratis">Asegurate de ingresar bien tus datos</p>
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Contraseña" name="pass">
            <button type="submit" class="btn btn-danger btn-block" name="login">Iniciar Sesion</button>
            <a class="probando" href="login.php">¿Eres Cliente?</a> 
            <!-- <a class="probando" href="../Pestaña-Tienda/tienda.html">PROBANDO</a> -->
        </form>
        <a class="probando" href="portalADMIN.php">¿Eres Administrador?</a> 
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido Administrador</h2>
                <p>Ya debes de estar registrado en nuestra base de datos</p>
                <button class="sign-in-btn">Volver al anuncio</button>
            </div>
        </div>
    </div>
    <!--JS-->
    <script src="js/login2.js"></script>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>