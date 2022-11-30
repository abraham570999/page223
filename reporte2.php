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

  <title>REPORTES</title>
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
                                      if (@$_SESSION['privilegio'] == 'Admin') 
                                      {
                                         echo '<li><a href="controladorhistorial.php">Historial</a></li>'; 
                                      }
                                  ?>   
                                  <?php 
                                      if (@$_SESSION['privilegio'] == 'AdminAlterns') 
                                      {
                                         echo '<li><a href="controladorhistorial.php">Historial</a></li>'; 
                                      }
                                  ?> 
                 
             
            </ul>

          </li>
              <li><a href="mapa2/index.html">Mapa</a></li>
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
          <h1>VERIFICA LOS <span>REPORTES </span>AQUI</h1>
          <h2></h2>

          
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
         
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">

<?php if (isset($_GET['id_modificar2']) or isset($_GET['id_modificar'])) {
 ?>

   <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/rep.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
      
        <div class="row">
          <div class="col-md-6 video-wrap mb-5">
            
          </div>
          <div class="col-md-6 pl-md-5">
            <h3 style="text-align: center;">REPORTES</h3>
      <div class="row">
        <!--BUSQUEDAS POR SELECT-->
        <form action="controlador.php" method="post">
<input type="text" hidden="" id="txtid" name="txtid" value="<?php echo @$reporte_modificar[0]['id_reporte']; ?>">
            <!--Caja de texto para calle-->
                 <p class="help-block text-danger"></p>
                <label  style=" color: white;">Calle:</label><input class="form-control" id="txtcalle" name="txtcalle" size="67px;"  type="text" placeholder="Ingrese la calle" required="required" value="<?php echo @$reporte_modificar[0]['calle']; ?>" data-validation-required-message="Favor de ingresar las entre calles en las que se cuentra." />
                <p class="help-block text-danger"></p>
                <label style=" color: white;">Entre Calle:</label><input class="form-control" id="txtcalle1" name="txtcalle1" type="text" placeholder="Ingrese su calle" required="required" value="<?php echo @$reporte_modificar[0]['entre_calle']; ?>" data-validation-required-message="Favor de ingresar el nombre de la calle." />
                 <p class="help-block text-danger"></p>
                     <label style=" color: white;">Y Calle:</label><input class="form-control" id="txtcalle2" name="txtcalle2" type="text" placeholder="Ingrese su calle" required="required" value="<?php echo @$reporte_modificar[0]['y_calle']; ?>" data-validation-required-message="Favor de ingresar el nombre de la calle." />
                 <p class="help-block text-danger"></p>
             
                  <!--Caja de texto para colonia-->
               <label style=" color: white; border-radius:20px, 20px;">Colonia</label><input class="form-control" id="txtcolonia" name="txtcolonia" type="text" placeholder="Ingrese el nombre de la colonia" required="required" value="<?php echo @$reporte_modificar[0]['colonia']; ?>" data-validation-required-message="Favor de ingresar el nombre de la colonia." />
                 <p class="help-block text-danger"></p>
                  <!--Select-->
               <label style=" color: white;">¿Que le gustaria reportar?</label>
                 <select  class="form-control form-control" id="lsttiporeporte" name="lsttiporeporte" value="<?php echo @$reporte_modificar[0]['tipo_reporte']; ?>">
                   <option value="" class="form-control">Seleccione</option>
                 
                   <option value="Falta de Luminaria" <?php if ($reporte_modificar[0]['tipo_reporte']=='Falta de Luminaria'){echo 'Selected';} ?>>Falta de Luminaria</option>
                   <option value="Carretera sin Pavimentacion" <?php if ($reporte_modificar[0]['tipo_reporte']=='Carretera sin Pavimentacion'){echo 'Selected';} ?>>Carretera sin Pavimentacion</option> 
                   <option value="Fuga de agua" <?php if ($reporte_modificar[0]['tipo_reporte']=='Fuga de agua'){echo 'Selected';} ?>>Fuga de Agua</option>  
                                  <?php 
                                      if (@$_SESSION['privilegio'] == 'Admin') 
                                      {
                                         echo '<option value="Baches" >Baches</option>'; 
                                      }
                                  ?> 
                                   <?php 
                                      if (@$_SESSION['privilegio'] == 'AdminAlterns') 
                                      {
                                         echo '<option value="Baches" >Baches</option>'; 
                                      }
                                  ?> 

               </select>
 <p class="help-block text-danger"></p>

               <label style=" color: white; ">Nota o Comentario</label>
               <textarea class="form-control" aria-label="With textarea" id="txtnota" name="txtnota" ><?php echo @$reporte_modificar[0]['nota_comentario']; ?></textarea>
               
               <br>
       <div class="contrainer" style="color: lightblue; text-align: center;">
           <input class="btn btn-success" id="btnregistrar" align="center" name="btnregistrar" type="submit"
              value="<?php 
                if (isset($_GET['id_modificar2']))
                {
                  echo 'Modificar';
                }
                else
                {
                  echo 'Insertar';
                }

              ?>">
             <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div></div>

    </form>
  
        </div>

      </div>
    </section><!-- End About Section -->
<?php } ?>
    <!-- ======= About Section ======= -->
<section class="pt-5 pb-5">
      <div class="container">
        <div class="row">
         
          <div class="col-md-6 pl-md-5">
            <h3>Sin Registrar</h3>
            <form action="controlador.php#formulariobusqueda"  method="post">
      <br>
      <div class="row">
         <!--TABLA LLENADA DE LA CONSULTA CON REPORTES REGISTRADOS EN EL MAPA-->
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

</div>
        <div class="col-lg-4">
          <input type="submit" id="btnbuscar" name="btnbuscar"  value="Buscar" class="btn btn-success">
        </div>        
      </div>
      <br>
      <table class="table table-dark table-striped">
        <tr>
          <td>Fecha Reporte</td>
          <td>Calle</td>
          <td>Entre Calle</td>
          <td>Y Calle</td>
          <td>Colonia</td>
          <td>Tipo de Reporte</td>
         
         <td>Estatus</td>
         <td>Nota</td> 
          
            <td colspan="2" style="text-align: center;">Acción</td>
        </tr>
        <?php foreach ($listado as $renglon) { ?>
        <tr>
          <td><?php echo $renglon['fecha_reporte']; ?></td>
          <td><?php echo $renglon['calle']; ?></td>
          <td><?php echo $renglon['entre_calle']; ?></td>
            <td><?php echo $renglon['y_calle']; ?></td>
          <td><?php echo $renglon['colonia']; ?></td>
          <td><?php echo $renglon['tipo_reporte']; ?></td> 
          
              <td><?php echo $renglon['estatus']; ?></td>
               <td><?php echo $renglon['nota_comentario']; ?></td>
             
                   <td>
            <a class="btn btn-danger" href="controlador.php?id_update=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmCambio()">Registrado</a></td>
        
                   
         <td>
            <a class="btn btn-primary" id="btnmodificar" href="controlador.php?id_modificar2=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmEdit()">Modificar</a></td>
        </tr>
      <?php } ?>
      </table>
    </form>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
     <section class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 pl-md-5">
            <h3>Registrados</h3>
            <form action="controlador.php#formulariobusqueda"  method="post">
      <br>
      <div class="row">
         <!--TABLA LLENADA DE LA CONSULTA CON REPORTES REGISTRADOS EN EL MAPA-->
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

</div>
        <div class="col-lg-4">
          <input type="submit" id="btnbuscar" name="btnbuscar"  value="Buscar" class="btn btn-success">
        </div>        
      </div>
      <br>
      <table class="table table-dark table-striped">
        <tr>
          <td>Fecha Reporte</td>
          <td>Calle</td>
          <td>Entre Calle</td>
          <td>Y Calle</td>
          <td>Colonia</td>
          <td>Tipo de Reporte</td>
         <td>Estatus</td>
         <td>Nota</td> 
          
            <td colspan="2" style="text-align: center;">Acción</td>
        </tr>
        <?php foreach ($listado2 as $renglon) { ?>
        <tr>
          <td><?php echo $renglon['fecha_reporte']; ?></td>
          <td><?php echo $renglon['calle']; ?></td>
          <td><?php echo $renglon['entre_calle']; ?></td>
            <td><?php echo $renglon['y_calle']; ?></td>
          <td><?php echo $renglon['colonia']; ?></td>
          <td><?php echo $renglon['tipo_reporte']; ?></td> 
              <td><?php echo $renglon['estatus']; ?></td> 
              <td><?php echo $renglon['nota_comentario']; ?></td>
                   <td>
            <a class="btn btn-danger" href="controlador.php?id_update2=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmCambio()">Arreglado</a></td>
        
                   
         <td>
            <a class="btn btn-primary" href="controlador.php?id_modificar2=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmEdit()">Modificar</a></td>
        </tr>
      <?php } ?>
      </table>
    </form>
          </div>
        </div>
      </div>
    </section>
    

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