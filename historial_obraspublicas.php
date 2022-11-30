<?php 
//Linea que oculta los warnnings
error_reporting(1);
//Linea que guarda la variable de sesion
session_start();

{

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>REPORTES HISTORIAL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">PRESIDENCIA NAVA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li> 
         
          <li><a class="nav-link scrollto" href="controlador_insertar_r.php">Reporta aqui</a></li>
          <li class="dropdown"><a href="#"><span>Informacion:</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             
             <?php 
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
              <li><a href="mapa3/index.html">Luminaria</a></li>
             <li><a href="#">Pavimentación</a></li>
             <li><a href="#">Comercios</a></li>
            </ul>

          </li>
              
                 <?php if (@$_SESSION['privilegio'] == 'Admin') 
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
<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>HISTORIAL DE <span>REPORTES</span>.</h1>
          <h2></h2>

         
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
         
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
         
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
           
   <form action="controlador_hop.php#formulariobusqueda"  method="post">
      <br>
      <div class="row">
        <div class="col-lg-4 text-center"  style="text-align: right;">
          <label for="" class="control">Tipo de Reporte</label>
        </div>
        <div class="col-lg-4">
                      <select class="form-control" name="lstbuscar" id="lstbuscar" >
    <option value="">Seleccione Tipo</option>
    <?php foreach ($reporte as $renglon) { ?>
    <option value="<?php echo $renglon['tipo_reporte'];?>"><?php echo $renglon['tipo_reporte'];?></option>
<?php } ?>
  </select>
<!--<select class="form-control form-control" id="lstbuscar" name="lstbuscar">
    <option>Seleccione</option>
    <option>Baches</option>
<option>Falta de Luminaria</option>
<option>Fallas electricas</option>
</select>-->
</div>
        <div class="col-lg-4">
          <input type="submit" id="btnbuscar" name="btnbuscar"  value="Buscar" class="btn btn-success">
        </div>        
      </div>
      <br>
      <table class="table table-dark table-striped" style="display: block; overflow: auto;">
        <tr>
          <td>Fecha Reporte</td>
          <td>Calle</td>
          <td>Entre Calle</td>
          <td>Y Calle</td>
          <td>Colonia</td>
          <td>Tipo de Reporte</td>
          <td>Num. Luminaria(opc)</td>
          <td>Estatus</td>
          <td>Nota</td>
          <td>Imagen</td>
            
        </tr>
        <?php foreach ($h_op as $renglon) { ?>
        <tr>
          <td>
            <?php echo $renglon['fecha_reporte']; ?>
          </td>
          <td>
            <?php echo $renglon['calle']; ?>
          </td>
          <td>
            <?php echo $renglon['entre_calle']; ?>
          </td>
          <td>
            <?php echo $renglon['y_calle']; ?>
          </td>
          <td>
            <?php echo $renglon['colonia']; ?>
          </td>
          <td>
            <?php echo $renglon['tipo_reporte']; ?>
          </td>
          <td align="center">
            <?php echo $renglon['id_lum']; ?>
          </td>
          <td>
            <?php echo $renglon['estatus']; ?>
          </td>
          <td>
            <?php echo $renglon['nota_comentario']; ?>
          </td>
          <td>
            <img src="<?php if(isset($renglon['Imagen']))
              {
                echo $renglon['Imagen'];
              }
              else
              {
               echo "img/img/no-imagen.jpg";
              }
              ?>" height="100" width="100"></td>
        </tr>
      <?php } ?>
      </table>
    </form>
        
        </div>

      </div>
    </section><!-- End About Section -->

   

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
        <a href="https://bootstrapmade.com/"></a>
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

</body>

</html>
<?php
}

?>