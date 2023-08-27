<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- page title -->
      <title>United Pets</title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Font files -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700%7CMontserrat:400,500,600,700" rel="stylesheet">
      <link href="fonts/flaticon/flaticon.css" rel="stylesheet" type="text/css">
      <link href="fonts/fontawesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">
      <!-- Fav icons -->
      <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- style CSS -->
      <link href="css/style.css" rel="stylesheet">
      <!-- plugins CSS -->
      <link href="css/plugins.css" rel="stylesheet">
      <!-- Colors CSS -->
      <link href="styles/maincolors.css" rel="stylesheet">
   </head>
   <!-- ==== body starts ==== -->
   <body id="top">
      <!-- Preloader  -->
      <div id="preloader">
         <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
               <div class="preloader-logo">
                  <!--logo -->
                  <img src="img/logo.png" alt="" class="img-fluid">
                  <!--preloader circle -->
                  <div class="lds-ring">
                     <div></div>
                     <div></div>
                     <div></div>
                     <div></div>
                  </div>
               </div>
               <!--/preloader logo -->
            </div>
            <!--/row -->
         </div>
         <!--/container -->
      </div>
      <!--/Preloader ends -->
      <nav id="main-nav" class="navbar-expand-xl fixed-top">
            <!-- Navbar Starts -->
            <div class="navbar container-fluid">
               <div class="container ">
                  <!-- logo -->
                  <a class="nav-brand" href="index.php">
                  <img src="img/logo.png" alt="" class="img-fluid">
                  </a>
                  <!-- Navbartoggler -->
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggle-icon">
                  <i class="fas fa-bars"></i>
                  </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                     <ul class="navbar-nav ms-auto">
                        <!-- menu item -->
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Home
                           </a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="services-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Services
                           </a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="about-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           About
                           </a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown active">
                           <a class="nav-link dropdown-toggle" href="#" id="adopt-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Adopt
                           </a>
                           <div class="dropdown-menu pattern2" aria-labelledby="adopt-dropdown">
                              <a class="dropdown-item active" href="AdoptionMascotas.php">Galeria Adopción</a>
                           </div>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" id="gallery-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Perdidos
                           </a>
                           <div class="dropdown-menu pattern2" aria-labelledby="gallery-dropdown">
                              <a class="dropdown-item" href="mostrarMascotas.php">Galeria Perdidos</a>
                           </div>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="contact-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Contact
                           </a>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="others-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Pages
                           </a>
                        </li>
                     </ul>
                     <!--/ul -->
                  </div>
                  <!--collapse -->
               </div>
               <!-- /container -->
            </div>
            <!-- /navbar -->
      </nav>
      <!-- /nav -->
	  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid">
         <div class="container" >
            <div class="jumbo-heading" data-aos="fade-up">
               <h1>Busqueda</h1>
               <!-- Breadcrumbs -->
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Perdidos </li>
                  </ol>
               </nav>
            </div>
         </div>
         <!-- /jumbo-heading -->
  </div>
    <?php
    $archivo = fopen('datos_mascotas.csv', 'r');

    $datos = [];
    while (($linea = fgetcsv($archivo)) !== false) {
        $datos[] = $linea;
    }
    fclose($archivo);
    ?>
      <div id="gallery-isotope" class="row row-eq-height mt-lg-5">
        <?php foreach ($datos as $dato): ?>
      <?php if ($dato[3]=="perdido"):?>
      <div class="<?php echo $dato[3]?> col-lg-6">
               <div class="isotope-item">
                  <div class="adopt-card res-margin row bg-light pattern2">
                     <div class="col-md-5">
                        <!-- Image -->
                        <div class="adopt-image d-flex flex-wrap align-items-center ">
                           <a href="adoption-single.html">
                            <img src="fotos/<?php echo $dato[11]; ?>" class="img-fluid" alt="Foto de la mascota perdida" style="max-width: 179px; max-height: 270px; object-fit: contain;">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 res-margin">
<div class="caption-adoption">
    <h5 class="adoption-header"><a href="adoption-single.html"><?php echo $dato[0]; ?></a></h5>
      <ul class="list-unstyled">
        <li><strong>Genero: </strong><?php echo $dato[2]; ?></li>
        <li><strong>Raza: </strong><?php echo $dato[1]; ?></li>
                              <li><strong>Color: </strong><?php echo $dato[5]; ?></li>
                              <li><strong>Mensaje: </strong><?php echo $dato[10]; ?></li>
                              <li><strong>Descripción: </strong><?php echo $dato[6]; ?></li>
      </ul>
    </div>
  </div>
  <div class="col-md-12 mt-3">
   <div class="text-center">
 <a href="adoption-single.html" class="btn btn-primary">More Info</a>
   </div>
  </div>
  </div>
</div>
</div>
    <?php endif;?>
    <?php endforeach; ?>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!-- Custom Js -->
      <script src="js/custom.js"></script>
      <script src="js/plugins.js"></script>
      <!-- Prefix free -->
      <script src="js/prefixfree.min.js"></script>
       <script src="https://replit.com/public/js/replit-badge-v2.js">
</body>
</html>


