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
    
        <script src="https://www.google.com/recaptcha/api.js?render=6LfM-ZIbAAAAAOI2zvGqfkuIsvtow06XPPpA2ERc"></script>

<script>
    $('#form').submit(function(event) {
        event.preventDefault();
        /*Cambia 6LcZu9QUAAAAACaj-WBiVIQUlr94vfCC8DUpIanS por tu clave de sitio web*/
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfM-ZIbAAAAAOI2zvGqfkuIsvtow06XPPpA2ERc', {action: 'registro'}).then(function(token) {
                $('#form').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#form').prepend('<input type="hidden" name="action" value="registro">');
                $('#form').unbind('submit').submit();
            });;
        });
  });
  </script>

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
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

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
<!--Script para validar el tipo de extension para las imagenes-->
<script type="text/javascript">

function fileValidation()
{
    var fileInput = document.getElementById('Imagen');
    var filePath = fileInput.value;
    var allowedExtensions = /(.jpg|.jpeg|.png|.gif)$/i;
    if (!allowedExtensions.exec(filePath))
    {
       alert('Por favor introduce un archivo que sea sólo de extensión: .jpeg/.jpg/.png/.gif');
     
    fileInput.value = '';
    return false;
    }
   
    return true;

}

</script>

 <body>
  <!-- FUNCIONES DE JAVASCRIPT -->
      <script type="text/javascript">
         function VerCampo()
           {
            //Obtener el valor seleccionado en el combobox
            var cod = document.getElementById("selecto").value;

            // Se almacena en una variable el div que contiene todo lo que oculta o se muestra
            let p = document.getElementById('InputT');

            //Se verigica que el valor seleccionado sea igual a la opcion que queremos
          if (cod == 'Falta de luminaria') 
           {
 
          //Se quita el hidden principal del div
           p.removeAttribute('hidden');

           //Se hacen visibles los campos dentro del div (la etiqueta y el input)
          $("#idluminaria").show();
          $("#eidluminaria").show();
          }
          else 
          {
            //Se ocultan los campos dentro del div(la etiqueta y el input)
         $("#idluminaria").hide();
         $("#eidluminaria").hide();
          }
          //El div no se oculta porque este ya tiene un atributo hidden al crearse, por lo cual, al cargar la pagina ya esta oculto, se hace visible hasta que se seleccione la opcion especificada, asi que no es necesario ocultarlo, solo es necesario ocultar su contenido para que funcione correctamente.
       } 

       </script>
   <!--Certificado de seguridad-->
       <script type="text/javascript">
          if (location.protocol == "http:" && !/^(192|localhost)/.test(location.host)) 
          {
            window.location = "https://" + location.host
          }
       </script>
     </body>
     
        

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
        
         <?php  if (@$_SESSION['privilegio'] == 'Admin') 
                                      {  ?>
        <li class="dropdown"><a href=""><span>Informacion:</span> <i class="bi bi-chevron-down"></i></a>
        <?php } ?>
        <?php  if (@$_SESSION['privilegio'] == 'AdminAlterns') 
                                      {  ?>
        <li class="dropdown"><a href=""><span>Informacion:</span> <i class="bi bi-chevron-down"></i></a>
        <?php } ?>
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
              <li><a href="mapa3/index.html">Luminaria</a></li>
             <li><a href="#">Pavimentación</a></li>
             <li><a href="#">Comercios</a></li>
            </ul>

          </li>
              
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
          <h1>REALIZA TU <span>REPORTE </span>AQUI</h1>
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
        <form action="controlador_insertar_r.php" method="post" class="jumbotron" enctype="multipart/form-data">
<input type="text" hidden="" id="txtid" name="txtid" value="<?php echo @$reporte_modificar[0]['id_reporte']; ?>">
            <!--Caja de texto para calle-->
                 <p class="help-block text-danger"></p>
                <label  style=" color: white;">Calle:</label><input class="form-control" id="txtcalle" name="txtcalle" size="67px;"  type="text" placeholder="Ingrese las entre calles" required="required" data-validation-required-message="Favor de ingresar las entre calles en las que se cuentra." />
                <p class="help-block text-danger"></p>
                <label style=" color: white;">Entre Calle:</label><input class="form-control" id="txtcalle1" name="txtcalle1" type="text" placeholder="Ingrese su calle" required="required" data-validation-required-message="Favor de ingresar el nombre de la calle." />
                 <p class="help-block text-danger"></p>
                     <label style=" color: white;">Y Calle:</label><input class="form-control" id="txtcalle2" name="txtcalle2" type="text" placeholder="Ingrese su calle" required="required" data-validation-required-message="Favor de ingresar el nombre de la calle." />
                 <p class="help-block text-danger"></p>
             
                  <!--Caja de texto para colonia-->
               <label style=" color: white; border-radius:20px, 20px;">Colonia</label><input class="form-control" id="txtcolonia" name="txtcolonia" type="text" placeholder="Ingrese el nombre de la colonia" required="required" data-validation-required-message="Favor de ingresar el nombre de la colonia." />
                 <p class="help-block text-danger"></p>
                  <!--Select para los tipos de reportes-->
                  
               <label style=" color: white;">¿Que le gustaria reportar?</label>
                 <select  class="form-control form-control" id="selecto" name="selecto" onchange="return VerCampo()" value="<?php echo @$reporte_modificar[0]['tipo_reporte']; ?>">
                   <option value="" class="form-control">Seleccione</option>
                   <option value="Falta de luminaria" <?php if ($reporte_modificar[0]['tipo_reporte']=='Falta de luminaria'){echo 'Selected';} ?>>Falta de  luminaria</option>
                   <option value="Carreteras sin pavimentar" <?php if ($reporte_modificar[0]['tipo_reporte']=='Carreteras sin pavimentar'){echo 'Selected';} ?>>Carreteras sin pavimentar</option> 
                   <option value="Baches" <?php if ($reporte_modificar[0]['tipo_reporte']=='Baches'){echo 'Selected';} ?>>Baches</option>  
                <option value="Fugas" <?php if ($reporte_modificar[0]['tipo_reporte']=='Fugas'){echo 'Selected';} ?>>Fugas</option>
                  </select> 
                 
                     <p class="help-block text-danger"></p>
              <!-- CAMPOS A MOSTRAR SI SE TIENE SELECCIONADO LA OPCION CORRECTA EN EL SELECT ANTERIOR -->
                <div  id="InputT" hidden id="campos" name="campos">
               <label name="eidluminaria" id="eidluminaria" style=" color: white; border-radius:20px, 20px;">Id de la Luminaria</label>
               <input class="form-control" type="text"  name="idluminaria" id="idluminaria" type="text" placeholder="Ingrese el nombre de la colonia" data-validation-required-message="Favor de ingresar el nombre de la colonia." />          
               </div>   
               
             
         
              <!--IMAGEN-->
               <p class="help-block text-danger"></p>
               <label style=" color: white;">Seleccione Foto</label>
               <input type="file" id="txtimagen" name="txtimagen" class="form-control" required="" value="<?php echo @$reporte_modificar[0]['Imagen']; ?>"> 

             <!--Solo se habre cuando modificas (campo default al insertar)-->
               <?php 
                 if (isset($_POST['id_modificar']) or (isset($_POST['id_modificar2'])) )
                  {
               ?>
               <label style=" color: white; border-radius:20px, 20px;">Nota o Comentario</label>
               <textarea class="form-control form-control" id="txtnota" name="txtnota" aria-label="With textarea"  ><?php echo @$reporte_modificar[0]['nota_comentario']; ?></textarea>
               <?php 
                  }
              ?>
               <br>
       <div class="contrainer" style="color: lightblue; text-align: center;">
           <input class="btn btn-success" id="btnregistrar" align="center" name="btnregistrar" type="submit"
              value="<?php 
                if (isset($_GET['id_update']))
                {
                  echo 'Modificar';
                }
                else
                {
                  echo 'Insertar';
                }

              ?>">
             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div></div>

    </form>
  
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="buscar" class="buscar">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>¡BUSCA LOS REPORTES AQUI!</p>
        </div>

        <div class="row">
 <form action="controlador_insertar_r.php#formulariobusqueda"  method="post">
      <br>
      <div >
        <div class="col-lg-7">
        <!--BUSQUEDAS POR SELECT-->
         <p class="help-block text-danger"></p>
                <label  style=" color: white;">Calle:</label><input class="form-control" id="txtcalleb" name="txtcalleb"  type="text" placeholder="Ingrese la calle" data-validation-required-message="Favor de ingresar el nombre de la calle ." />
                <p class="help-block text-danger"></p>
        <div>
        <!--BUSQUEDAS POR SELECT-->
        </div>
<p class="help-block text-danger"></p>
                <label style=" color: white;">Entre Calle:</label><input class="form-control" id="txtcalleb2" name="txtcalleb2" type="text" placeholder="Ingrese la entre calle"   data-validation-required-message="Favor de ingresar la entre calle." />
                 <p class="help-block text-danger"></p>
        <div class="col-lg-4" align="center">
          <input type="submit" align="center" id="btnbuscar" name="btnbuscar"  value="Buscar" class="btn btn-success">
        </div>        
      </div>
      <br>
      <!--TABLA LLENADA DE LA CONSULTA CON REPORTES SIN REGISTRAR EN EL MAPA-->
      <table class="table table-dark book-a-table" style="display: block; overflow: auto ;" >
        <tr>
          <td align="center">
              Calle
          </td>
          <td align="center">
              Entre Calle
          </td>
          <td align="center">
              Y Calle
          </td>
          <td align="center">
              Colonia
          </td>
          <td align="center">
              Tipo de Reporte
          </td>
          <td align="center">
              Num. Luminaria(opc)
          </td>
        </tr>

        <?php foreach ($listado  as $renglon) { ?>
        <tr>
          <!--Visualizar Campos por medio de la busqueda que llena la variable listado-->
          <td align="center"><?php echo $renglon['calle']; ?></td>
          <td align="center"><?php echo $renglon['entre_calle']; ?></td>
          <td align="center"><?php echo $renglon['y_calle']; ?></td>
          <td align="center"><?php echo $renglon['colonia']; ?></td>
          <td align="center"  ><?php echo $renglon['tipo_reporte']; ?></td>
          <td align="center"  ><?php echo $renglon['id_lum']; ?></td>
        </tr>
      <?php } ?>

      </table>
    </form>
 
      </div>
    </section><!-- End Why Us Section -->

    

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