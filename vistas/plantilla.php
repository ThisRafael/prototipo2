<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Bienes Raices Grupo Exito</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i>gerencia@grupo-‐exito.com</li>
            <li><i class="fa fa-map"></i> Cl.63 58B‑03 Itagui‑Calatrava</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="https://www.facebook.com/exito/?locale=es_LA" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/almacenesexito?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="https://www.instagram.com/exito/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php?enviar=inicio" class="logo">
                        <h1>Bienes Raices Grupo Exito</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php?enviar=inicio" class="active">Inicio</a></li>
                      <li><a href="index.php?enviar=propiedades">propiedades</a></li>
                      <li><a href="index.php?enviar=detalles">detalles</a></li>
                      <li><a href="index.php?enviar=contactanos">Contactanos</a></li>
                      <li><a href="index.php?enviar=historias">Historias</a></li>
                      <li><a href="index.php?enviar=preguntasFrecuentes">Preguntas frecuentes</a></li>
                      <li><a href="index.php?enviar=alquiler">Alquiler</a></li>
                      <li><a href="index.php?enviar=citas">Citas</a></li>
                      <li><a href="index.php?enviar=quienesSomos"><i class="fa fa-calendar"></i>Quienes Somos</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

 <?php
    if(isset($_GET["enviar"])){
        if(  $_GET["enviar"] =="inicio"||
        $_GET["enviar"] == "contactanos"||
        $_GET["enviar"] == "propiedades"||
        $_GET["enviar"] == "detalles" || 
        $_GET["enviar"] == "contactanos" || 
        $_GET["enviar"] == "historias" || 
        $_GET["enviar"] == "preguntasFrecuentes" || 
        $_GET["enviar"] == "Citas" || 
        $_GET["enviar"] == "quienesSomos"){

          include "vistas/".$_GET["enviar"].".php";
        }
      

    }else{
        include "vistas/inicio.php";
    }
    
    
 ?>

  <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Derechos de autor © 2025 Aprendis SENA. Todos los derechos reservados. 
        
        Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>