<?php 
error_reporting(1);
//almacena variable de sesion
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PRESIDENCIA MUNICIPAL NAVA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<script serc="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<link rel="manifest" href="manifest.json">

<link rel="sw" href="sw.json">



  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <script
	  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
	  crossorigin="anonymous"></script>
 
	<!-- Cambia 6LcZu9QUAAAAACaj-WBiVIQUlr94vfCC8DUpIanS por tu clave de sitio web -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lfel5IbAAAAAM82GwwSFLAeDzSEoAiynhC_V8Pv"></script>
    
    
	 
    <script>
    $('#form').submit(function(event) {
        event.preventDefault();
        /*Cambia 6LcZu9QUAAAAACaj-WBiVIQUlr94vfCC8DUpIanS por tu clave de sitio web*/
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lfel5IbAAAAAM82GwwSFLAeDzSEoAiynhC_V8Pv', {action: 'registro'}).then(function(token) {
                $('#form').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#form').prepend('<input type="hidden" name="action" value="registro">');
                $('#form').unbind('submit').submit();
            });;
        });
  });
  </script>
</head>

<body>
  <?php 
    //Codigo de conexion para inicio de sesion
      require 'bd/conexion_bd.php';

      $obj = new BD_PDO();


      if (isset($_POST['btniniciar']))
      { 
        //Busqueda en la tabla usuarios, comprobando los campos correo y contraseña
        $datos = $obj->Ejecutar_Instruccion("Select * from usuarios where correo = '".$_POST['txtusuario']."' and password = '".$_POST['txtpassword']."'");

        if (isset($datos)) 
        {
         
           $_SESSION['privilegio'] = $datos[0][4] ;
           $_SESSION['departamento'] = $datos[0][5] ;
            $_SESSION['correo'] = $datos[0][2];
            $_SESSION['id_usuario']= $datos[0][0]; 
          }
        else
        {
        echo '<script type="text/javascript">alert("Usuario y/o contraseña no existen")</script>';
        }
       }
      ?>
      <!--Nota-->
       <script>
            alert("Antes de realizar un reporte de una Luminaria visualiza el mapa para conocer su número de identificación");
        </script>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+52 862 624 5251</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Lunes a Viernes  9AM - 4PM </span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
        <ul>
         
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">PRESIDENCIA NAVA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li> 
          <li><?php
                            //Abre modal de inicio de sesion 
                            if (isset($_SESSION['correo'])) 
                            {
                            echo '<a class="nav-link active"  href="cerrar_sesion.php" >'.$_SESSION['correo'].'</a>';
                            }
                            
                          ?></li>
         
          <li><a class="nav-link scrollto" href="controlador_insertar_r.php">Reporta aqui</a></li>
          <li class="dropdown"><a href="#"><span>Informacion:</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a  href="#objetivo">Objetivo</a></li>
              <li><a href="#redsocial">Red Social</a></li>
              
              <?php
              //TOMA DE DECISIONES PARA VARIABLE DE SESION (DEBE ENTRAR COMO ADMIN PRINCIPAL Y PERTENECER AL DEPARTAMENTO DE ATENCION CIUDADANA(FILTRO)
                      if ((@$_SESSION['privilegio'] == 'Admin') && ($_SESSION['departamento']=='Atencion Ciudadana')) 
                            {
              echo '<li><a href="controlador_filtro.php">Filtro de Reportes</a></li>';
             } ?> 
               <?php 
                      if  ($_SESSION['departamento']=='Atencion Ciudadana') 
                            {
              echo '
              <li><a href="controlador_op.php">Reportes Obras Públicas</a></li>';
             } ?>
            <?php 
                      if  ($_SESSION['departamento']=='Atencion Ciudadana')
                            {
              echo '
              <li><a href="controlador_simas.php">Reportes Simas</a></li>';
             } ?>
           
 <?php 
 //TOMA DE DECISIONES PARA QUE SOLO APAREZCA SI SE INICIO SESION COMO DIRECTOR DE DEPARTAMENTO Y PERTENECE A UN DEPARTAMENTO EN ESPECIFICO
                      if ((@$_SESSION['privilegio'] == 'AdminAlterns') && ($_SESSION['departamento']=='Obras Publicas')) 
                            {
              echo '
              <li><a href="controlador_op.php">Reportes Obras Públicas</a></li>';
             } ?>
             <?php 
                      if ((@$_SESSION['privilegio'] == 'AdminAlterns') && ($_SESSION['departamento']=='Simas')) 
                            {
              echo '
              <li><a href="controlador_simas.php">Reportes Simas</a></li>';
             } ?>
              <?php 
                      if ((@$_SESSION['privilegio'] == 'AdminAlterns') && ($_SESSION['departamento']=='Simas')) 
                            {
              echo '<li><a href="controlador_hsimas.php">Historial Simas</a></li>'; }?>
              <?php 
                      if ((@$_SESSION['privilegio'] == 'AdminAlterns') && ($_SESSION['departamento']=='Obras Publicas')) 
                            {
              echo '
              <li><a href="controlador_hop.php">Historial Obras Públicas</a></li>';}?>
              
              <?php 
                      if (@$_SESSION['privilegio'] == 'Admin') 
                            {
                              echo '<li><a href="controlador_us.php">Crear Usuario</a></li>'; 
                             }
                  ?> 
                   <?php 
                                      if (@$_SESSION['privilegio'] == 'AdminAlterns') 
                                      {
                                         echo '<a class="dropdown-item" href="controlador_us.php">Usuario</a>'; 
                                      }
                                  ?> 
                  
                                   <?php 
                      if ((@$_SESSION['privilegio'] == 'Admin') && ($_SESSION['departamento']=='Atencion Ciudadana')) 
                            {
              echo '<li><a href="controladorhistorial.php">Historial</a></li>'; 
                                      }
                                  ?>   
                                 
                 
             
            </ul>

          </li><li class="dropdown"><a href="#"><span>Mapas:</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <!--LINK QUE LLEVA AL MAPA DE LUMINARIAS-->
              <li><a href="mapa3/index.html">Luminaria</a></li>
              <!--LINK QUE LLEVA AL MAPA DE LAS CALLES CON O SIN PAVIMENTACION-->
             <li><a href="#">Pavimentación</a></li>
             <!--LINK QUE LLEVA AL MAPA DONDE SE ENCUENTRAN TODOS LOS COMERCIOS REGISTRADOS DEL MUNICIPIO-->
             <li><a href="#">Comercios</a></li>
            </ul>

          </li>
              
                 <?php 
                 //MANUAL DE USUARIO PARA ADMINISTRADORES
                 if (@$_SESSION['privilegio'] == 'Admin') 
                                      {
                                         echo ' <li><a download="Manual" href="manual.pdf">Manual</a></li>'; 
                                      }
                                  ?>   
             
         
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>PRESIDENCIA MUNICIPAL <span>NAVA</span></h1>
          <h2>¡Bienvenidos!</h2>

          <div class="btns">
            <a href="#objetivo" class="btn-menu animated fadeInUp scrollto">Objetivo</a>
            <a href="#redsocial" class="btn-book animated fadeInUp scrollto">Red Social</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
         <div >
  <div >
    <div >
    <?php if (@$_SESSION['privilegio'] == 'Admin') {
    	
     ?>

     <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
<?php } ?>
   <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
    	
     ?>

     <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
<?php } ?>

      <!-- Modal Header -->
      <div class="modal-header" style="background-color: ; border-radius: 10px;">
        <h4 class="modal-title" style="text-align:center;" align="center">Iniciar Sesión</h4>
        
      </div>
<form action="index.php" method="post">
      <!-- Modal body -->

<div class="modal-body" style="background-color:  #46927D ; ">

        
       <div class="col-lg-12 text-center">
          <label style="color:black;">Usuario</label><input class="form-control" id="txtusuario" name="txtusuario" type="email" placeholder="Ingrese su email" required="required" data-validation-required-message="Favor de ingresar su email." />
          <p class="help-block text-danger"></p>
             <label style="color:black;">Password</label><input class="form-control" id="txtpassword" name="txtpassword" type="password" placeholder="Ingrese su contraseña" required="required" data-validation-required-message="Favor de ingresar su contraseña." />
             <p class="help-block text-danger"></p>
            </div>


      <!-- Modal footer -->
      <div class="modal-footer" >
        <input type="submit" value="Iniciar" class="btn btn-success" id="btniniciar" name="btniniciar"> 
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div></form>
    </div>
  </div>
</div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="objetivo" name="objetivo" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>OBJETIVO:</h3>
            <p class="fst-italic">
              Esta pagina tiene como finalidad brindarle a la comunidad un sitio en donde los habitantes de la misma puedan reportar e identificar las incosistencias en el area urbana entre las cuales podriamos encontrar:
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Faltas de Luminaria</li>
              <li><i class="bi bi-check-circle"></i>Baches</li>
              <li><i class="bi bi-check-circle"></i>Fugas de Agua</li>
              <li><i class="bi bi-check-circle"></i>Carreteras sin pavimentar</li>
               </ul>
            <p>
             
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="redsocial" name="redsocial" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>¡ENTERATE AL INSTANTE!</h2>
          <p>RED SOCIAL</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
             
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item ">
         
            <div class="">
         <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fpresidenciamunicipalnavacoahuila&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>       
     </div>
          </div>
          <div class="col-lg-6 menu-item ">
             <img src="assets/img/menu/img_5.jpg" width="150000px;" height="100000px;" alt="Image placeholder" class="img-fluid">
        </div>

         

         
          

      </div>
    </section><!-- End Menu Section -->


    <section style="border-radius: 20px;">    <!-- The Modal de inicio sesion -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color: ; border-radius: 10px;">
        <h4 class="modal-title" style="text-align:center;" align="text-center">Iniciar Sesión</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
<form action="index.php" method="post">
      <!-- Modal body -->

<div class="modal-body" style="background-color: #3498D8 ; ">

        
       <div class="col-lg-12 text-center">
          <label style="color:black;">Usuario</label><input class="form-control" id="txtusuario" name="txtusuario" type="email" placeholder="Ingrese su email" required="required" data-validation-required-message="Favor de ingresar su email." />
          <p class="help-block text-danger"></p>
             <label style="color:black;">Password</label><input class="form-control" id="txtpassword" name="txtpassword" type="password" placeholder="Ingrese su contraseña" required="required" data-validation-required-message="Favor de ingresar su contraseña." />
             <p class="help-block text-danger"></p>
            </div>


      <!-- Modal footer -->
      <div class="modal-footer" >
        <input type="submit" value="Iniciar" class="btn btn-success" id="btniniciar" name="btniniciar"> 
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div></form>
    </div>
  </div>
</div>
    <!-- Footer Section End -->

</section>
  
    <!-- ======= Contact Section ======= -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    
          

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Presidencia Nava</span></strong>.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script>
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('sw.js?'+Math.random()+'') });
}
</script>

</body>

</html>