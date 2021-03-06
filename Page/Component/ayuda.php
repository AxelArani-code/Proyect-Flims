<?php
// Initialize the session
session_start();
$conexion = mysqli_connect("localhost", "root", "", "demo");
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Inicio</title>
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href="../../assets/css/Card-Carousel-1.css">
  <link rel="stylesheet" href="../../assets/css/Card-Carousel.css">
  <link rel="stylesheet" href="../../assets/css/News-Cards.css">
  <link rel="stylesheet" href=".././php/registered.php">
  <style type="text/css">
    body {
      font: 14px sans-serif;
      text-align: center;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
    <div class="container">
      <p class="navbar-brand">Hola,<b><?php echo htmlspecialchars(
        $_SESSION["username"]
      ); ?></b>.</p><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
              <!--  <form class="form-inline" action="buscar.php" method="POST">
                    <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Search" aria-label="Search">
                    <input type="submit" value="Buscar">
              </form>-->
        <ul class="nav navbar-nav ml-auto">
        <li class="nav-item" role="presentation"><a class="nav-link" href="../registered.php">Inicio</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Apartados</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="../netflix.php">Netflix</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../series.php">HBO</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../MostRecent.php">Proximamente</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
              aria-expanded="false">Usuarios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" role="presentation" href="../../Page/perfil.php">Perfil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" role="presentation" href="../../logout.php">Cerrar sesi??n</a>
            </div>
          </li>
          
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Espa??ol</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" role="presentation" href="../../Inglish/Home.php">Ingles</a>
              </div>
          </li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="ayuda.php">Ayuda</a></li>
          </div>
        </ul>
      </div>
    </div>
  </nav><br><br><br><br><br><br><br><br>
  
  <div class="container">
    <p class="display-3">Qui??nes somos</p>
    <p>InfoFlims es una publicaci??n sobre cine, con toda la actualidad de series y pel??culas. Nos gusta analizar con pasi??n cr??tica cada uno de los detalles que rodean al cine, recomendar lo mejor para disfrutar de lo audiovisual. </p><br><br>
    
    <div class="container">
    <h3 class="float-left">Pasos para registrarse </h3><br><br><br>
    <p class="float-left"><strong>En la parte superior encontrar??s un bot??n que dice ???Iniciar Sesi??n???</strong>  </p>
    <img src="../.././assets/img/Helps/Desktop - 1.png" class="card-img-top" alt=""><br><br><br>
    <p class="float-left"><strong>Una vez situado en ???Iniciar Sesi??n??? deber??s hacer click en ???Usuario???</strong> </p>
    <img src="../.././assets/img/Helps/Desktop - 2.png" class="card-img-top"    alt="">
    <p class="float-left"> <strong>Para registrarse deber??s ingresar en la parte ???Registrarse ahora???. Ingrese un nombre de usuario y contrase??a. Y luego ingrese con su nuevo usuario y contrase??a.</strong> </p>
    <img src="../.././assets/img/Helps/Desktop - 3.png" class="card-img-top"  alt=""><br><br>
    <p class="float-left"><strong>En la parte superior encontrar??s una secci??n de ???Apartados??? se despliega varios contenidos como Netflix, HBO, Pr??ximamente. </strong></p>
    <img src="../.././assets/img/Helps/Desktop - 5.png" class="card-img-top"    alt="">
    <h3 class="float-left">Pasos para editar Perfil </h3><br><br><br>
    <p class="float-left"><strong>Como podr?? ver en la parte superior se encuentra un apartado en donde dice ???Usuarios??? se desplegar?? una secci??n, deber?? hacer click en la parte de ???Perfil???.</strong></p>
    <img src="../.././assets/img/Helps/Desktop - 4.png" class="card-img-top" alt=""><br><br><br>
    <p class="float-left"><strong>Deber?? ingresar en el pate de "Editar perfil". </strong></p>
    <img src="../.././assets/img/Helps/Desktop - 7.png" class="card-img-top" alt=""><br><br>
    <p class="float-left"><strong>Una vez ingresado colocar los datos necesarios como nombre, apellido, email, N??mero de tel??fono, g??nero y ??Describe el tipo de pel??culas o series te gustan? Para guarda los datos haga click en el bot??n de ???Guardar???. Y ya tienes tu Perfil. </strong></p>
    <img src="../.././assets/img/Helps/Desktop - 6.png" class="card-img-top"  alt="">
    </div>
    
  </div>
 
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/Card-Carousel.js"></script>

</body>

</html>