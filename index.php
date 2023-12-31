<html>
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
         <!-- Start Top Bar -->
         <!-- End Top bar -->
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
                     <li class="nav-item active">
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
                           Adopción
                           </a>
                           <div class="dropdown-menu pattern2" aria-labelledby="adopt-dropdown">
                              <a class="dropdown-item active" href="AdopcionMascotas.php">Galeria Adopción</a>
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
      <!-- ==== Header ==== -->
      <!-- ==== Page Content ==== -->
      <div class="container-fluid">
         <!-- video header -->
         <section id="video-header" class="video-section fixed-header"  data-vide-bg='{"mp4": "video/video.mp4", "poster": "img/slider/slide1.jpg"}' data-vide-options="posterType: jpg, autoplay: true, loop: true, muted: true">
            <div class="container pb-5 pt-1">
               <div class="row mb-5 mt-5">
                  <div class="col-lg-5 mt-5 text-light">
                     <div class="video_content ">
                        <div  data-aos="fade-down">
                           <!-- text -->
                           <h1>Bienvenido a Espaw Finder</h1>
                           <p class="h7 mt-2">Si perdiste o encontraste a una mascota ¡puedes publicarlo aqui!</p>
                        </div>
                        <!-- button -->
                        <a href="adoption.php" class="btn btn-secondary mt-2"  data-aos="fade-up">PUBLICAR</a>
                     </div>
                  </div>
                  <!-- /col-lg-5 -->
               </div>
               <!-- /row -->
            </div>
            <!-- /container -->
         </section>
         <!-- /section -->
         <!-- paw icon-->
      </div>
      <!-- /container-fluid -->

      <!-- section -->
      <section id="" class="container-fluid ps-0 pr-0 overlay-dark bg-fixed" >
         <!-- section heading -->  
         <div class="section-heading text-center text-light">
            <p class="subtitle">ENCUENTRA A TU AMIGO</p>
            <h2>ADOPCIÓN</h2>
         </div>
        <?php
        $archivo = fopen('datos_mascotas.csv', 'r');
    
        $datos = [];
        while (($linea = fgetcsv($archivo)) !== false) {
            $datos[] = $linea;
        }
        fclose($archivo);
        ?>
         <!-- /section-heading -->
         <div class="container">
            <div class="col-lg-10 offset-lg-1 text-center text-light">
               <h3>Adoptar es un acto de <span class="text-tertiary">amor</span></h3>
            </div>
            <!-- /col-lg -->
            <!-- Carousel  -->
            <div class="col-md-12 carousel-2items owl-carousel owl-theme">
            <?for ($i = 0; $i < 5 && $i < count($datos); $i++) {
              $dato = $datos[$i];
              if ($dato[3]=="adopcion"):?>
               <!-- Adopt 1 -->
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
                     <!-- Name -->
                     <div class="caption-adoption">
                       <h5 class="adoption-header"><a href="adoption-single.html"><?php echo $dato[0]; ?></a></h5>
                        <ul class="list-unstyled">
                          <li><strong>Genero: </strong><?php echo $dato[2]; ?></li>
                          <li><strong>Raza: </strong><?php echo $dato[1]; ?></li>
                          <li><strong>Color: </strong><?php echo $dato[5]; ?></li>
                          <li><strong>Mensaje: </strong><?php echo $dato[10]; ?></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-12 mt-3">
                     <!-- Button -->	
                     <div class="text-center">
                        <!-- Adopt info -->
                        <ul class="adopt-card-info list-unstyled">
                           <li ><i class="flaticon-veterinarian-hospital"></i>special needs</li>
                           <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                        </ul>
                        <!-- button-->
                        <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                     </div>
                     <!-- /text-center -->
                  </div>
                  <!-- /col-md -->
               </div>
                  <?php endif;?>
                <?php } ?>
               <!-- /adopt-card -->
            </div>
            <!-- /carousel --> 
            <div class="col-lg-12 text-center">
               <!-- button --> 
               <a href="AdopcionMascotas.php" class="btn btn-secondary mt-3">See adoption gallery</a>
            </div>
            <!-- /col-lg -->
         </div>
         <!-- /container-->
      </section>
      <!-- /section ends -->

      
      <!-- Bootstrap core & Jquery -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!-- Custom Js -->
      <script src="js/custom.js"></script>
      <script src="js/plugins.js"></script>
      <!-- Prefix free -->
      <script src="js/prefixfree.min.js"></script>
      <!-- number counter script -->
      <script src="js/counter.js"></script>
      <!-- video script -->
      <script src="js/video.js"></script>
      <!-- maps -->
      <script src="js/map.js"></script>
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>