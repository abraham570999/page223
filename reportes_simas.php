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

  <title>VER REPORTES</title>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

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
    <script type="text/javascript">
  function ConfirmDelete()
  {
    var respuesta =confirm("¿Estas seguro que deseas Eliminar este reporte?");
    if (respuesta ==true)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
</script>
<script type="text/javascript">
  function ConfirmModif()
  {
    var respuesta =confirm("¿Estas seguro que deseas realizar cambios a los datos de este reporte?");
    if (respuesta ==true)
    {
      return true;

    }
    else
    {
      return false;
    }
  }

</script>
<script type="text/javascript">
  function ConfirmCambio()
  {
    var respuesta =confirm("¿Estas seguro que deseas realizar el cambio de estatus?");
    if (respuesta ==true)
    {
      return true;

    }
    else
    {
      return false;
    }
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
 
          //SE QUITA EL HIDDEN PRINCIPAL DEL DIV
           p.removeAttribute('hidden');

          //SE HACEN VISIBLES LOS CAMPOS DENTRO DEL DIV , EN ESTE CASO LA ETIQUETA Y EL INPUT
          $("#idluminaria").show();
          $("#eidluminaria").show();


          }
          else 
          {
         //SE OCULTAN LOS CAMPOS DENTRO DEL DIV , EN ESTE CASO LA ETIQUETA Y EL INPUT
         $("#idluminaria").hide();
         $("#eidluminaria").hide();
          }
        //NOTA: EL DIV NO SE OCULTA POR QUE ESTE YA TIENE UN ATRIBUTO HIDDEN AL CREARSE, POR LO CUAL AL CARGAR LA PAGINA YA ESTA OCULTO,SE HACE VISIBLE HASTA QUE SE SELECCIONE LA OPCION CORRECTA POR PRIMERA VES  ASI QUE NO ES NECESARIO OCULTARLO ,SOLO ES NECESARIO OCULTAR SU CONTENIDO PARA UN CORRECTO FUNCIONAMENTO.

       } 

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
                      if ((@$_SESSION['privilegio'] == 'AdminAlterns') && ($_SESSION['departamento']=='Obras Publicas')) 
                            {
              echo '
              <li><a href="controlador_op.php">Reportes Obras Públicas</a></li>';
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
          <h1>VERIFICA LOS <span>REPORTES </span>AQUI.</h1>
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
        <form action="controlador_simas.php" method="post" class="jumbotron" enctype="multipart/form-data">
<input type="text" hidden="" id="txtid" name="txtid" value="<?php echo @$reporte_modificar[0]['id_reporte']; ?>">
            <!--Caja de texto para calle-->
             <?php 
                                      if (@$_SESSION['privilegio'] == 'Admin') 
                                      {
                                      
                                  ?> 
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
               <input class="form-control" type="text"  name="idluminaria" id="idluminaria" value="<?php echo @$reporte_modificar[0]['id_lum']; ?>" type="text" placeholder="Ingrese el nombre de la colonia" required="required" data-validation-required-message="Favor de ingresar el nombre de la colonia." />          
               </div>   
          
 <p class="help-block text-danger"></p>
 <?php 
                                    } 
                                  ?> 
               <label style=" color: white; ">Nota o Comentario</label>
               <textarea class="form-control" aria-label="With textarea" id="txtnota" name="txtnota" ><?php echo @$reporte_modificar[0]['nota_comentario']; ?></textarea>
                <p class="help-block text-danger"></p>
               <?php  if (isset($_GET['id_modificar2']))
  {
    echo'<label style=" color: white;">¿Desea hacer cambios? Seleccione una nueva foto:</label>';         
  }
  else
  {
              echo'<label style=" color: white;">Seleccione foto:</label>';
  }      ?>
              <input type="file" id="txtimagen" name="txtimagen" class="form-control" value="<?php echo @$reporte_modificar[0]['Imagen']; ?>"> 
                <p class="help-block text-danger"></p>
      
              <!-- Imagen -->
              <label style=" color: white;">Foto Actual:</label>
<!-- Imagen -->
<div class="col-md-8 col-md-offset-2">
<img  style= display:<?php 
  if (isset($_GET['id_modificar2']))
  {
            
  }
  else
  {
              echo 'none';
  }      ?>;


id="idimagen" src="<?php echo @$reporte_modificar[0]['Imagen']; ?>" height="250" width="250">
      
<br>
<br>  
</div>  

      
<br>
</div> 
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


<?php if (isset($_GET['id_modificar3'])) {
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
        <form action="controlador_simas.php" method="post" class="jumbotron" enctype="multipart/form-data">
<input type="text" hidden="" id="txtid" name="txtid" value="<?php echo @$reporte_modificar[0]['id_reporte']; ?>">
            <!--Caja de texto para calle-->
            
                 <p class="help-block text-danger"></p>
                <label  style=" color: white;" <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
                 ?> hidden <?php } ?> >Calle:</label>
                 <input class="form-control" <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
                 ?> hidden <?php } ?> id="txtcalle" name="txtcalle" size="67px;"  type="text" placeholder="Ingrese la calle" required="required" value="<?php echo @$reporte_modificar[0]['calle']; ?>" data-validation-required-message="Favor de ingresar las entre calles en las que se cuentra." />

                <p class="help-block text-danger"></p>
                <label style=" color: white;" <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
                 ?> hidden <?php } ?> >Entre Calle:</label>

                <input class="form-control" <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
                 ?> hidden <?php } ?>  id="txtcalle1" name="txtcalle1" type="text" placeholder="Ingrese su calle" required="required" value="<?php echo @$reporte_modificar[0]['entre_calle']; ?>" data-validation-required-message="Favor de ingresar el nombre de la calle." />

                 <p class="help-block text-danger"></p>
                     <label style=" color: white;" <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
                 ?> hidden <?php } ?> >Y Calle:</label>
                 <input class="form-control" id="txtcalle2" <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
                 ?> hidden <?php } ?>  name="txtcalle2" type="text" placeholder="Ingrese su calle" required="required" value="<?php echo @$reporte_modificar[0]['y_calle']; ?>" data-validation-required-message="Favor de ingresar el nombre de la calle." />
                 <p class="help-block text-danger"></p>
             
                  <!--Caja de texto para colonia-->
               <label style=" color: white; border-radius:20px, 20px;" <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
                 ?> hidden <?php } ?> >Colonia</label>
                 <input class="form-control" id="txtcolonia" name="txtcolonia" <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
                 ?> hidden <?php } ?>  type="text" placeholder="Ingrese el nombre de la colonia" required="required" value="<?php echo @$reporte_modificar[0]['colonia']; ?>" data-validation-required-message="Favor de ingresar el nombre de la colonia." />
             
                <p class="help-block text-danger"></p>
              
               <label style=" color: white;" <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
                 ?> hidden <?php } ?> >¿Que le gustaria reportar?</label>
                 <select  class="form-control form-control"  <?php if (@$_SESSION['privilegio'] == 'AdminAlterns') {
                 ?> hidden <?php } ?>  id="selecto" name="selecto" onchange="return VerCampo()"  value="<?php echo @$reporte_modificar[0]['tipo_reporte']; ?>">
                   <option value="" class="form-control">Seleccione</option>
                 
                   <option value="Falta de luminaria" <?php if ($reporte_modificar[0]['tipo_reporte']=='Falta de luminaria'){echo 'Selected';} ?>>Falta de luminaria</option>
                   <option value="Carreteras sin pavimentar" <?php if ($reporte_modificar[0]['tipo_reporte']=='Carreteras sin pavimentar'){echo 'Selected';} ?>>Carreteras sin pavimentar</option> 
                  <option value="Baches" <?php if ($reporte_modificar[0]['tipo_reporte']=='Baches'){echo 'Selected';} ?>>Baches</option>  
                <option value="Fugas" <?php if ($reporte_modificar[0]['tipo_reporte']=='Fugas'){echo 'Selected';} ?>>Fugas</option> 
                                       

               </select>
               
               <!-- CAMPOS A MOSTRAR SI SE TIENE SELECCIONADO LA OPCION CORRECTA EN EL SELECT ANTERIOR -->
                <div  id="InputT" hidden id="campos" name="campos">
               <label name="eidluminaria" id="eidluminaria" style=" color: white; border-radius:20px, 20px;">Id de la Luminaria</label>
               <input class="form-control" type="text"  name="idluminaria" id="idluminaria" value="<?php echo @$reporte_modificar[0]['id_lum']; ?>" type="text" placeholder="Ingrese el nombre de la colonia" required="required" data-validation-required-message="Favor de ingresar el nombre de la colonia." />          
               </div>   
                 
             <p class="help-block text-danger"></p>

               <label style=" color: white; ">Nota o Comentario</label>
               <textarea class="form-control" aria-label="With textarea" id="txtnota" name="txtnota" ><?php echo @$reporte_modificar[0]['nota_comentario']; ?></textarea>
              <p class="help-block text-danger"></p>
          <?php  if (isset($_GET['id_modificar3']))
            {
                echo'<label style=" color: white;">¿Desea hacer cambios? Seleccione una nueva foto:</label>';         
           }
            else
                {
              echo'<label style=" color: white;">Seleccione foto:</label>';
                }      ?>
               
              <input type="file" id="txtimagen" name="txtimagen" class="form-control" value="<?php echo @$reporte_modificar[0]['Imagen']; ?>"> 
                <p class="help-block text-danger"></p>
      
              <!-- Imagen -->    <?php {  ?>
             
              <label style=" color: white;">Foto Actual:</label>
<!-- Imagen -->
<div class="col-md-8 col-md-offset-2">
<img  style= display:<?php 
  if (isset($_GET['id_modificar3']))
  {
            
  }
  else
  {
              echo 'none';
  }      ?>;


id="idimagen" src="<?php echo @$reporte_modificar[0]['Imagen']; ?>" height="250" width="250">  
</div>  
<?php } ?>
<br>
       <div class="contrainer" style="color: lightblue; text-align: center;">
           <input class="btn btn-success" id="btnregistrar" align="center" name="btnregistrar" type="submit"
              value="<?php 
                if (isset($_GET['id_modificar3']))
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
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
<h3>Sin Registrar</h3>
        <div class="right">
         
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
           
   <form action="controlador_simas.php#formulariobusqueda"  method="post">
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

</div>
<br>
        <div class="col-lg-4" align="center">

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
          <td>Nota</td>
          <td>Imagen</td>
          <td colspan="4" align="center">Acción</td>
            
        </tr>
        <?php foreach ($Nsimasy_ob as $renglon) { ?>
        <tr>
          <td><?php echo $renglon['fecha_reporte']; ?></td>
          <td><?php echo $renglon['calle']; ?></td>
          <td><?php echo $renglon['entre_calle']; ?></td>
            <td><?php echo $renglon['y_calle']; ?></td>
          <td><?php echo $renglon['colonia']; ?></td>
          <td><?php echo $renglon['tipo_reporte']; ?></td>
          <td align="center"  ><?php echo $renglon['id_lum']; ?></td>
              <td><?php echo $renglon['nota_comentario']; ?></td>
               <td><img src="<?php if(isset($renglon['Imagen']))
{
echo $renglon['Imagen'];
}
else
{
    echo "img/no-imagen.jpg";
}
?>" height="100" width="100"></td>
                
         <td>
            <a class="btn btn-danger" href="controlador_simas.php?id_update=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmCambio()">Registrado</a></td>   
          <?php 
                                      if (@$_SESSION['privilegio'] == 'Admin') 
                                      {
                                      
                                  ?> <td>
            
            <a class="btn btn-primary" id="btnmodificar" href="controlador_simas.php?id_modificar2=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmEdit()">Modificar</a></td>
          <?php } ?>
           <?php 
                                      if (@$_SESSION['privilegio'] == 'AdminAlterns') 
                                      {
                                      
                                  ?> <td>
            
            <a class="btn btn-primary" id="btnmodificar" href="controlador_simas.php?id_modificar3=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmEdit()">Modificar</a></td>
          <?php } ?>
            <?php 
                                      if (@$_SESSION['privilegio'] == 'Admin') 
                                      {
                                      
                                  ?> <td>
            <a class="btn btn-info" id="btneliminar" href="controlador_simas.php?id_eliminar=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmDelete()" >Eliminar</a></td>
          <?php } ?>
             <?php 
                                      if (@$_SESSION['privilegio'] == 'Admin') 
                                      {
                                      
                                  ?> <td>
            <a class="btn btn-danger" id="btndeshacer" href="controlador_simas.php?id_updatedes=<?php echo $renglon['id_reporte']; ?>" onclick="return Confirm()" >Deshacer</a></td>
          <?php } ?>
        </tr>
      <?php } ?>
      </table>
    </form>
        
        </div>

      </div>
    </section><!-- End About Section -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
<h3>Registrados</h3>
        <div class="row">
         
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
           
   <form action="controlador_simas.php#formulariobusqueda"  method="post">
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

        <div class="col-lg-4" align="center">
          
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
          <td>Num. Luminaria (opc)</td>
          <td>Nota</td>
          <td>Imagen</td>
          <td colspan="4" align="center">Acción</td>
            
        </tr>
        <?php foreach ($Rsimasy_ob as $renglon) { ?>
        <tr>
          <td><?php echo $renglon['fecha_reporte']; ?></td>
          <td><?php echo $renglon['calle']; ?></td>
          <td><?php echo $renglon['entre_calle']; ?></td>
            <td><?php echo $renglon['y_calle']; ?></td>
          <td><?php echo $renglon['colonia']; ?></td>
          <td><?php echo $renglon['tipo_reporte']; ?></td>
         <td align="center"  ><?php echo $renglon['id_lum']; ?></td>
              <td><?php echo $renglon['nota_comentario']; ?></td>
               <td><img src="<?php if(isset($renglon['Imagen']))
{
echo $renglon['Imagen'];
}
else
{
    echo "img/no-imagen.jpg";
}
?>" height="100" width="100"></td>
            
         <td>
            <a class="btn btn-danger" href="controlador_simas.php?id_update2=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmCambio()">Arreglado</a></td>
          
                   
         <td>
            <a class="btn btn-primary" id="btnmodificar" href="controlador_simas.php?id_modificar2=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmEdit()">Modificar</a></td>
            <?php 
                                      if (@$_SESSION['privilegio'] == 'Admin') 
                                      {
                                      
                                  ?> <td>
            <a class="btn btn-info" id="btneliminar" href="controlador_simas.php?id_eliminar=<?php echo $renglon['id_reporte']; ?>" onclick="return ConfirmDelete()" >Eliminar</a></td>
          <?php } ?>
            <?php 
                  if (@$_SESSION['privilegio'] == 'Admin')     
                                  ?> <td>
            <a class="btn btn-danger" id="btndeshacer" href="controlador_op.php?id_updatedes=<?php echo $renglon['id_reporte']; ?>" onclick="return Confirm()" >Deshacer</a></td>
          <?php } ?>
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
