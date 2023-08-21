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
                  <a class="nav-brand" href="index.html">
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
                           <a class="nav-link" href="index.html">Home
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
                              <a class="dropdown-item active" href="adoption.html">Adoption Gallery</a>
                              <a class="dropdown-item" href="adoption-single.html">Adoption Single Page</a>
                              <a class="dropdown-item" href="adoption-stories.html">Adoption Stories</a>
                              <a class="dropdown-item" href="events.html">Events</a>
                              <a class="dropdown-item" href="event-single.html">Events Single Page</a>
                           </div>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="gallery-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Gallery
                           </a>
                           <div class="dropdown-menu pattern2" aria-labelledby="gallery-dropdown">
                              <a class="dropdown-item" href="gallery.html">Gallery Style 1</a>
                              <a class="dropdown-item" href="gallery2.html">Gallery Style 2</a>
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
                     <li class="breadcrumb-item"><a href="index4.html">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Busqueda </li>
                  </ol>
               </nav>
            </div>
         </div>
         <!-- /jumbo-heading -->
      </div>
      <!-- /jumbotron -->
      <!-- ==== Page Content ==== -->
      <div class="page container">
         <h2>Información de tu mascota</h2>
         <form action="procesar_formulario.php" method="post" enctype="multipart/form-data">

            <div class="row">
               <div class="col-lg-7" style="display: flex; flex-wrap: wrap;">

                        <div style="flex: 2;">

                           <label for="nombre">Nombre:</label><br>
                           <input type="text" id="nombre" name="nombre"><br>

                           <label for="raza">Raza:</label><br>
                           <input type="text" id="raza" name="raza"><br>
                  
                           <label for="genero">Género:</label><br>
                           <input type="radio" id="genero" name="genero" value="Macho"> Macho<br>
                           <input type="radio" id="genero" name="genero" value="Hembra"> Hembra<br>

                           <label for="foto">Foto:</label><br>
                           <input type="file" id="foto" name="foto">
                           <br>
                           <img id="preview" src="#" alt="Foto de la mascota" style="display: none; height: 150px;">
                        </div>

                        <div style="flex: 2;">
                           <label for="tipo_publicacion">Tipo de publicación:</label><br>
            <input type="radio" id="tipo_perdido" name="tipo_publicacion" value="perdido"> Perdido<br>
            <input type="radio" id="tipo_adopcion" name="tipo_publicacion" value="adopcion"> Adopción<br>

                           <label for="especie">Seleccione especie:</label><br>
                           <select id="especie" name="especie" required>
                              <option value="">selecionar</option>
                              <option value="perro">perro</option>
                              <option value="gato">gato</option>
                           </select><br>

                           <label for="color">Color:</label><br>
                           <input type="text" name="color" id="color">
                           <br>
                  
                           <label for="descripcion">Descripción:</label>
                           <textarea name="descripcion" id="descripcion" rows="3" cols="30"></textarea>
                           <br>
                  

                        </div>
                  
                        <p class="font-weight-bold">If you have any doubts or need more information, please <a href="/contact.html">contact us</a>
                        </p>
               </div>
               <!-- /col-lg -->
               <div class="col-lg-5 card bg-light">
                  <h5>Cómo te contactamos</h5>
                  <ul class="checkmark pl-0 font-weight-bold">
                     <li><label for="nombre_dueno">Nombre del dueño:</label>
                        <input type="text" name="nombre_dueno" id="nombre_dueno">
                        <br></li>
                     <li><label for="telefono">Telefono:</label>
                        <input type="tel" name="telefono" id="telefono">
                        <br></li>
                     <li><label for="correo">Correo:</label>
                        <input type="email" name="correo" id="correo">
                        <br></li>
                     <li><label for="mensaje">Mensaje:</label><br>
                        <textarea name="mensaje" id="mensaje" rows="3" cols="30"></textarea>
                        <br></li>
                  </ul>
        <input type="submit" value="Enviar">

               </div>
               <!-- /col-lg -->
            </div>
         </form>
         
         </div>
         <!-- centered Gallery navigation -->
         <ul class="nav nav-pills category-isotope center-nav mt-5">
            <li class="nav-item">
               <a class="nav-link active" href="#" data-bs-toggle="tab" data-filter="*">All</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#" data-bs-toggle="tab" data-filter=".dogs">Adopciones</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#" data-bs-toggle="tab" data-filter=".cats">Perdidos</a>
            </li>
         </ul>
         <!-- /ul -->
         <!-- Gallery -->
         <div id="gallery-isotope" class="row row-eq-height mt-lg-5">
            <!-- Adopt 1 -->
            <div class="dogs col-lg-6">
               <div class="isotope-item">
                  <div class="adopt-card res-margin row bg-light pattern2">
                     <div class="col-md-5">
                        <!-- Image -->
                        <div class="adopt-image d-flex flex-wrap align-items-center ">
                           <a href="adoption-single.html">
                           <img src="img/adoption/adoption1.jpg" class="img-fluid" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 res-margin">
                        <!-- Name -->
                        <div class="caption-adoption">
                           <h5 class="adoption-header"><a href="adoption-single.html">Magdalene</a></h5>
                           <!-- List -->
                           <ul class="list-unstyled">
                              <li><strong>Gender:</strong> Female</li>
                              <li><strong>Age:</strong> 2 years</li>
                              <li><strong>Breed:</strong> Poodle Mix</li>
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
                  <!-- /adopt-card -->
               </div>
               <!-- /isotope-item--> 
            </div>
            <!-- /col-lg- --> 
            <!-- Adopt 2 -->
            <div class="cats col-lg-6">
               <div class="isotope-item">
                  <div class="adopt-card res-margin row bg-light pattern2">
                     <div class="col-md-5">
                        <!-- Image -->
                        <div class="adopt-image d-flex flex-wrap align-items-center ">
                           <a href="adoption-single.html">
                           <img src="img/adoption/adoption2.jpg" class="img-fluid" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 res-margin">
                        <!-- Name -->
                        <div class="caption-adoption">
                           <h5 class="adoption-header"><a href="adoption-single.html">Leelo</a></h5>
                           <!-- List -->
                           <ul class="list-unstyled">
                              <li><strong>Gender:</strong> Male</li>
                              <li><strong>Age:</strong> 7 years</li>
                              <li><strong>Breed:</strong> Mixed</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-12 mt-3">
                        <!-- Button -->	
                        <div class="text-center">
                           <!-- Adopt info -->
                           <ul class="adopt-card-info list-unstyled">
                              <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                              <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                           </ul>
                           <!-- button-->
                           <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                        </div>
                        <!-- /text-center -->
                     </div>
                     <!-- /col-md -->
                  </div>
                  <!-- /adopt-card -->
               </div>
               <!-- /isotope-item--> 
            </div>
            <!-- /col-lg- --> 
            <!-- Adopt 3 -->
            <div class="cats col-lg-6">
               <div class="isotope-item">
                  <div class="adopt-card res-margin row bg-light pattern2">
                     <div class="col-md-5">
                        <!-- Image -->
                        <div class="adopt-image d-flex flex-wrap align-items-center ">
                           <a href="adoption-single.html">
                           <img src="img/adoption/adoption3.jpg" class="img-fluid" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 res-margin">
                        <!-- Name -->
                        <div class="caption-adoption">
                           <h5 class="adoption-header"><a href="adoption-single.html">Mimi</a></h5>
                           <!-- List -->
                           <ul class="list-unstyled">
                              <li><strong>Gender:</strong> Female</li>
                              <li><strong>Age:</strong> 3 years</li>
                              <li><strong>Breed:</strong> Mixed</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-12 mt-3">
                        <!-- Button -->	
                        <div class="text-center">
                           <!-- Adopt info -->
                           <ul class="adopt-card-info list-unstyled">
                              <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                              <li ><i class="flaticon-dog-20"></i>Children Friendly</li>
                           </ul>
                           <!-- button-->
                           <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                        </div>
                        <!-- /text-center -->
                     </div>
                     <!-- /col-md -->
                  </div>
                  <!-- /adopt-card -->
               </div>
               <!-- /isotope-item--> 
            </div>
            <!-- /col-lg- --> 
            <!-- Adopt 4 -->
            <div class="dogs col-lg-6">
               <div class="isotope-item">
                  <div class="adopt-card res-margin row bg-light pattern2">
                     <div class="col-md-5">
                        <!-- Image -->
                        <div class="adopt-image d-flex flex-wrap align-items-center ">
                           <a href="adoption-single.html">
                           <img src="img/adoption/adoption4.jpg" class="img-fluid" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 res-margin">
                        <!-- Name -->
                        <div class="caption-adoption">
                           <h5 class="adoption-header"><a href="adoption-single.html">Jonas</a></h5>
                           <!-- List -->
                           <ul class="list-unstyled">
                              <li><strong>Gender:</strong> Male</li>
                              <li><strong>Age:</strong> 4 years</li>
                              <li><strong>Breed:</strong> Siberian Husky</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-12 mt-3">
                        <!-- Button -->	
                        <div class="text-center">
                           <!-- Adopt info -->
                           <ul class="adopt-card-info list-unstyled">
                              <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                              <li ><i class="flaticon-dog-20"></i>Children Friendly</li>
                           </ul>
                           <!-- button-->
                           <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                        </div>
                        <!-- /text-center -->
                     </div>
                     <!-- /col-md -->
                  </div>
                  <!-- /adopt-card -->
               </div>
               <!-- /isotope-item--> 
            </div>
            <!-- /col-lg- --> 
            <!-- Adopt 5 -->
            <div class="dogs col-lg-6">
               <div class="isotope-item">
                  <div class="adopt-card res-margin row bg-light pattern2">
                     <div class="col-md-5">
                        <!-- Image -->
                        <div class="adopt-image d-flex flex-wrap align-items-center ">
                           <a href="adoption-single.html">
                           <img src="img/adoption/adoption5.jpg" class="img-fluid" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 res-margin">
                        <!-- Name -->
                        <div class="caption-adoption">
                           <h5 class="adoption-header"><a href="adoption-single.html">Milena</a></h5>
                           <!-- List -->
                           <ul class="list-unstyled">
                              <li><strong>Gender:</strong> Female</li>
                              <li><strong>Age:</strong> 2 years</li>
                              <li><strong>Breed:</strong> Jack Russell</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-12 mt-3">
                        <!-- Button -->	
                        <div class="text-center">
                           <!-- Adopt info -->
                           <ul class="adopt-card-info list-unstyled">
                              <li ><i class="flaticon-veterinarian-hospital"></i>special needs</li>
                              <li ><i class="flaticon-dog-20"></i>Children Friendly</li>
                           </ul>
                           <!-- button-->
                           <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                        </div>
                        <!-- /text-center -->
                     </div>
                     <!-- /col-md -->
                  </div>
                  <!-- /adopt-card -->
               </div>
               <!-- /isotope-item--> 
            </div>
            <!-- /col-lg- --> 
            <!-- Adopt 6 -->
            <div class="cats col-lg-6">
               <div class="isotope-item">
                  <div class="adopt-card res-margin row bg-light pattern2">
                     <div class="col-md-5">
                        <!-- Image -->
                        <div class="adopt-image d-flex flex-wrap align-items-center ">
                           <a href="adoption-single.html">
                           <img src="img/adoption/adoption6.jpg" class="img-fluid" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 res-margin">
                        <!-- Name -->
                        <div class="caption-adoption">
                           <h5 class="adoption-header"><a href="adoption-single.html">Jonsi</a></h5>
                           <!-- List -->
                           <ul class="list-unstyled">
                              <li><strong>Gender:</strong> Male</li>
                              <li><strong>Age:</strong> 5 years</li>
                              <li><strong>Breed:</strong> Mixed</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-12 mt-3">
                        <!-- Button -->	
                        <div class="text-center">
                           <!-- Adopt info -->
                           <ul class="adopt-card-info list-unstyled">
                              <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                              <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                           </ul>
                           <!-- button-->
                           <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                        </div>
                        <!-- /text-center -->
                     </div>
                     <!-- /col-md -->
                  </div>
                  <!-- /adopt-card -->
               </div>
               <!-- /isotope-item--> 
            </div>
            <!-- /col-lg- --> 
            <!-- Adopt 7 -->
            <div class="dogs col-lg-6">
               <div class="isotope-item">
                  <div class="adopt-card res-margin row bg-light pattern2">
                     <div class="col-md-5">
                        <!-- Image -->
                        <div class="adopt-image d-flex flex-wrap align-items-center ">
                           <a href="adoption-single.html">
                           <img src="img/adoption/adoption7.jpg" class="img-fluid" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-5 res-margin">
                        <!-- Name -->
                        <div class="caption-adoption">
                           <h5 class="adoption-header"><a href="adoption-single.html">Gordita</a></h5>
                           <!-- List -->
                           <ul class="list-unstyled">
                              <li><strong>Gender:</strong> Female</li>
                              <li><strong>Age:</strong> 1.5 years</li>
                              <li><strong>Breed:</strong> Mixed</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-12 mt-3">
                        <!-- Button -->	
                        <div class="text-center">
                           <!-- Adopt info -->
                           <ul class="adopt-card-info list-unstyled">
                              <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                              <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                           </ul>
                           <!-- button-->
                           <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                        </div>
                        <!-- /text-center -->
                     </div>
                     <!-- /col-md -->
                  </div>
                  <!-- /adopt-card -->
               </div>
               <!-- /isotope-item--> 
            </div>
            <!-- /col-lg- --> 
            <!-- Adopt 8 -->
            <div class="cats col-lg-6">
               <div class="isotope-item">
                  <div class="adopt-card res-margin row bg-light pattern2">
                     <div class="col-md-5">
                        <!-- Image -->
                        <div class="adopt-image d-flex flex-wrap align-items-center ">
                           <a href="adoption-single.html">
                           <img src="img/adoption/adoption8.jpg" class="img-fluid" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7 res-margin">
                        <!-- Name -->
                        <div class="caption-adoption">
                           <h5 class="adoption-header"><a href="adoption-single.html">Mackie</a></h5>
                           <!-- List -->
                           <ul class="list-unstyled">
                              <li><strong>Gender:</strong> Male</li>
                              <li><strong>Age:</strong> 4 years</li>
                              <li><strong>Breed:</strong> Mixed</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-12 mt-3">
                        <!-- Button -->	
                        <div class="text-center">
                           <!-- Adopt info -->
                           <ul class="adopt-card-info list-unstyled">
                              <li ><i class="flaticon-syringe"></i>Vaccinated</li>
                              <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                           </ul>
                           <!-- button-->
                           <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                        </div>
                        <!-- /text-center -->
                     </div>
                     <!-- /col-md -->
                  </div>
                  <!-- /adopt-card -->
               </div>
               <!-- /isotope-item--> 
            </div>
            <!-- /col-lg- --> 
         </div>
         <!-- /gallery-isotope-->	
         <div class="col-md-12 mt-5">
            <!-- pagination -->
            <nav aria-label="pagination">
               <ul class="pagination">
                  <li class="page-item"><a class="page-link active" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
               </ul>
            </nav>
            <!-- /nav -->
         </div>
         <!-- /col-md -->  
      </div>
      <!-- /page -->
      <!-- ==== Newsletter - call to action ==== -->
      <div class="container-fluid footer-bg block-padding overlay">
         <div class="container">
            <div class="col-lg-5 text-light text-center">
               <h4>Subscribe to our newsletter</h4>
               <p>We send e-mails once a month, we never send Spam!</p>
               <!-- Form -->				
               <div id="mc_embed_signup" >
                  <!-- your form address in the line bellow -->
                  <form action="//yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&id=111" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                     <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group">
                           <div class="input-group">
                              <input class="form-control border2 input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                              <span class="input-group-btn">
                              <button class="btn btn-primary btn-sm" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
                              </span>
                           </div>
                           <!-- Subscription results -->
                           <div id="mce-responses" class="mailchimp">
                              <div class="alert alert-danger response" id="mce-error-response"></div>
                              <div class="alert alert-success response" id="mce-success-response"></div>
                           </div>
                        </div>
                        <!-- /mc-fiel-group -->									
                     </div>
                     <!-- /mc_embed_signup_scroll -->
                  </form>
                  <!-- /form ends -->								
               </div>
               <!-- /mc_embed_signup -->
            </div>
            <!--/ col-lg-->
         </div>
         <!--/ container-->
      </div>
      <!--/container-fluid-->
      <!-- ==== footer ==== -->
      <footer class="bg-light pattern1">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 text-center my-auto">
                  <img src="img/logo.png"  class="logo-footer img-fluid" alt="">
                  <!-- Start Social Links -->
                  <ul class="social-list text-center list-inline">
                     <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                     <li class="list-inline-item"><a  title="Instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                  <!-- /End Social Links -->
               </div>
               <!--/ col-lg -->
               <div class="col-lg-3">
                  <h5>About us</h5>
                  <!--divider -->
                  <hr class="small-divider left">
                  <p class="mt-3">Elit aenean, amet eros curabitur. Wisi ad eget ipsum metus sociis Cras enim wisi elit aenean.</p>
               </div>
               <!--/ col-lg -->
               <div class="col-lg-3">
                  <h5>Contact Us</h5>
                  <!--divider -->
                  <hr class="small-divider left">
                  <ul class="list-unstyled mt-3">
                     <li class="mb-1"><i class="fas fa-phone margin-icon "></i>(123) 456-789</li>
                     <li class="mb-1"><i class="fas fa-envelope margin-icon"></i><a href="mailto:email@yoursite.com">email@yoursite.com</a></li>
                     <li><i class="fas fa-map-marker margin-icon"></i>Pet Street 123 - New York </li>
                  </ul>
                  <!--/ul -->
               </div>
               <!--/ col-lg -->
               <div class="col-lg-3">
                  <h5>Working Hours</h5>
                  <!--divider -->
                  <hr class="small-divider left">
                  <ul class="list-unstyled mt-3">
                     <li class="mb-1">Open from 9am - 6pm</li>
                     <li class="mb-1">Holidays - Closed</li>
                     <li>Weekends - Closed</li>
                  </ul>
                  <!--/ul -->
               </div>
               <!--/ col-lg -->
            </div>
            <!--/ row-->
            <hr>
            <div class="row">
               <div class="credits col-sm-12">
                  <p>Copyright 2019 - 2023 / Designed by <a href="http://www.ingridkuhn.com">Ingridk</a></p>
               </div>
            </div>
            <!--/col-lg-12-->
         </div>
         <!--/ container -->
         <!-- Go To Top Link -->
         <div class="page-scroll hidden-sm hidden-xs">
            <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
         </div>
         <!--/page-scroll-->
      </footer>
      <!--/ footer-->
      <!-- Bootstrap core & Jquery -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!-- Custom Js -->
      <script src="js/custom.js"></script>
      <script src="js/plugins.js"></script>
      <!-- Prefix free -->
      <script src="js/prefixfree.min.js"></script>
       <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
   </body>
</html>