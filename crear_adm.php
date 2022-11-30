<?php 
//Linea que oculta los warnnings
error_reporting(1);
//Linea que guarda la variable de sesion
session_start();

{

?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>USUARIOS</title>
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
<script type="text/javascript">
	 <script type="text/JavaScript">
    
function Validar()
    {
      var nombre_usuario = document.getElementById("txtnombreus").value;
      var nombre_usuario_sine = nombre_usuario.trim();

      if (nombre_usuario_sine.length < 3) 
      {
        alert("Campo del nombre esta vacía");
        return false;
      }
      return true;
    }

function Validar_pass()
    {
      var nombre_pass = document.getElementById("txtpass").value;
      var nombre_pass_sine = nombre_pass.trim();

      if (nombre_pass_sine.length < 5) 
      {
        alert("Contraseña muy corta");
        return false;
      }
      return true;
    }



    function Validar_2()
    {

      if (Validar() && Validar_pass())

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
	    function soloLetras(e)
    {
      var estatus = false;
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       //trim()
       var nombre_usuario_s_e = nombre_usuario.trim();
       letras = " abcdefghijklmnñopqrstuvwxyz";
  
       for (var i = 0; i < letras.length; i++) 
       {
        if (tecla == letras[i])
         {
          estatus = true;
        }  
       }
       alert("Caracter no permitido");
       return estatus;
     }
</script>
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
                      if ((@$_SESSION['privilegio'] == 'AdminAlterns') && ($_SESSION['departamento']=='Obras Publicas')) 
                            {
              echo '
              <li><a href="controlador_hop.php">Historial Obras Públicas</a></li>';}?>
              
             
                  
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
                 <?php 
            session_start();
            if (@$_SESSION['privilegio'] == 'Admin')
            {
            ?>
               <h1 class="mb-4"   >CREACIÓN DE CUENTAS ADMINISTRADOR</h1>
               <?php 
            }
            ?>
            
            <?php 
            session_start();
            if (@$_SESSION['privilegio'] == 'AdminAlterns')
            {

            ?>
                <h1 class="mb-4"   >USUARIO</h1>
            <?php 
            }
            ?> 
          <h2></h2>

         
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
         
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
<?php 
            session_start();
            if (@$_SESSION['privilegio'] == 'Admin')
            {

            ?>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div >
              <img src="assets/img/admin2.jpg" width="500px" height="480px" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
      
        <div class="row">
          <div class="col-md-6 video-wrap mb-5">
            
          </div>
          <div class="col-md-6 pl-md-5">
            <h3 style="text-align: center;">REGISTRAR ADMINISTRADOR</h3>
      <div class="row">
        <!--BUSQUEDAS POR SELECT-->
         <form action="controlador_us.php" method="post" onsubmit="return Validar_2()">

        <div class="col-lg-12 text-center"  style="text-align: right; ">
         <input type="text" hidden="" id="txtid" name="txtid" value="<?php echo @$us2_modificar[0]['id_usuario']; ?>">
            <!--Caja de texto para calle-->
                 <p class="help-block text-danger; col-lg-12 text-center"></p>
                <label style=" color: white;">Nombre de Usuario:</label><input class="form-control" id="txtnombreus" value="<?php echo @$us2_modificar[0]['nombre_usuario']; ?>" name="txtnombreus" size="67px;" type="text" placeholder="Ingrese su nombre de usuario" required="required" onkeypress="return soloLetras(event)" data-validation-required-message="Favor de ingresar el nombre de usuario." />
                 <p class="help-block text-danger"></p>
                  <!--Caja de texto para colonia-->
               <label style=" color:  white; border-radius:20px, 20px;">Email:</label><input class="form-control" value="<?php echo @$us2_modificar[0]['correo']; ?>" id="txtemail" name="txtemail" type="Email" placeholder="Ingrese el correo electronico" required="required" data-validation-required-message="Favor de ingresar el correo electronico." />
                 <p class="help-block text-danger"></p>
                 <div>
                  <label style=" color: white;">Password:</label><input class="form-control" id="txtpass" value="<?php echo @$us2_modificar[0]['password']; ?>" name="txtpass" type="Password" placeholder="Ingrese su contraseña" required="required" data-validation-required-message="Favor de ingresar su contraseña." />
<b></b>

<br>
              <button class="btn btn-light" type="button" onclick="mostrarContrasena()">Ver
              <span class="icon icon-view-show" style="font-size:20px; border-radius: 15px; color: black;"> </span>
              </button>

                 <p class="help-block text-danger"></p>
                 <!--Select para dar de alta el tipo de administrador(solo en administrador principal)-->
                <label style=" color: white;">Tipo de Administrador</label>
                 <select  class="form-control form-control" id="lstpriv" name="lstpriv" value="<?php echo @$us2_modificar[0]['privilegio']; ?>">
                   <option value="" class="form-control">Seleccione</option>
                   <option value="Admin" <?php if ($us2_modificar[0]['privilegio']=='Admin'){echo 'Selected';} ?>>Administrador Principal</option>
                   <option value="AdminAlterns" <?php if ($us2_modificar[0]['privilegio']=='AdminAlterns'){echo 'Selected';} ?>>Director de Departamento</option> 
               </select> 

  <p class="help-block text-danger"></p>
                        <!--Select para ver a que departamento pertenece el usuario-->
                <label style=" color: white;">Departamento:</label>
                 <select  class="form-control form-control" id="lstdepto" name="lstdepto" value="<?php echo @$us2_modificar[0]['departamento']; ?>">
                   <option value="" class="form-control">Seleccione</option>
                   <option value="Simas" <?php if ($us2_modificar[0]['departamento']=='Simas'){echo 'Selected';} ?>>Simas</option>
                   <option value="Obras Publicas" <?php if ($us2_modificar[0]['departamento']=='Obras Publicas'){echo 'Selected';} ?>>Obras Públicas</option>
                   <option value="Atencion Ciudadana" <?php if ($us2_modificar[0]['departamento']=='Atencion Ciudadana'){echo 'Selected';} ?>>Atención Ciudadana</option>
                  
               </select> 
               <br>
                <!-- Metodo para mostrar contraseña -->
               <script>
                 function mostrarContrasena()
                 {
                  var tipo = document.getElementById("txtpass");
                    if(tipo.type == "password")
                    {
                       tipo.type = "text";
                    }
                    else
                    {
                      tipo.type = "password";
                    }
                }
              </script>
               <!--Boton que inserta administradores(vista administrador principal)-->
          <div class="contrainer" style="color: lightblue; text-align: center; border-radius: 20px; border-bottom: 15px;">
           <input class="btn btn-primary" id="btnregistrar2" align="center" name="btnregistrar2" type="submit"
              value="<?php 
              /*id_modificar2 identificador para registresar datos en administrador principal*/
                if (isset($_GET['id_modificar2']))
                {
                  echo 'Actualizar';
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
    <?php 
}


?>

<?php 
           
      if (isset($_GET['id_modificar']) )
      
            {

            ?>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div >
              <img src="assets/img/admin2.jpg" width="500px" height="480px" alt="" style="display: block; overflow: auto;">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
      
        <div class="row">
          <div class="col-md-6 video-wrap mb-5">
            
          </div>
          <div class="col-md-6 pl-md-5">
            <h3 style="text-align: center;">MODIFICAR ADMINISTRADOR</h3>
      <div class="row">
        <!--BUSQUEDAS POR SELECT-->
         <form action="controlador_us.php" method="post" onsubmit="return Validar_2()">

        <div class="col-lg-12 text-center"  style="text-align: right; ">
         <input type="text" hidden="" id="txtid" name="txtid" value="<?php echo @$us_modificar[0]['id_usuario']; ?>">
            <!--Caja de texto para calle-->
                 <p class="help-block text-danger; col-lg-12 text-center"></p>
                <label style=" color: white;">Nombre de Usuario:</label><input class="form-control" id="txtnombreus" value="<?php echo @$us_modificar[0]['nombre_usuario']; ?>" name="txtnombreus" size="67px;" type="text" placeholder="Ingrese su nombre de usuario" required="required" data-validation-required-message="Favor de ingresar el nombre de usuario." />
                 <p class="help-block text-danger"></p>
                  <!--Caja de texto para colonia-->
               <label style=" color:  white; border-radius:20px, 20px;">Email:</label><input class="form-control" value="<?php echo @$us_modificar[0]['correo']; ?>" id="txtemail" name="txtemail" type="Email" placeholder="Ingrese el correo electronico" required="required" data-validation-required-message="Favor de ingresar el correo electronico." />
                 <p class="help-block text-danger"></p>
                  <label style=" color: white;">Password:</label><input class="form-control" id="txtpass" value="<?php echo @$us_modificar[0]['password']; ?>" name="txtpass" type="Password" placeholder="Ingrese su contraseña" required="required" data-validation-required-message="Favor de ingresar su contraseña." />
                  <br>
                   <button class="btn btn-light" type="button" onclick="mostrarContrasena()"> Ver
               <span class="icon icon-view-show" style="font-size:20px; color: black;"> </span>
            </button>



                 <p class="help-block text-danger"></p>
                  <!-- Metodo para mostrar contraseña -->
          <script>
             function mostrarContrasena()
             {
               var tipo = document.getElementById("txtpass");
               if(tipo.type == "password")
               {
                  tipo.type = "text";
               }
               else
               {
                  tipo.type = "password";
               }
             }


          </script>

                 <!--Condicional para que el select solo aparezca en admin principal-->
                 <?php   
                 session_start();
                    if (@$_SESSION['privilegio'] == 'Admin'){
                   ?>
                <label style=" color: black;">Tipo de Administrador</label>
                 <select  class="form-control form-control" id="lstpriv" name="lstpriv" value="<?php echo @$us_modificar[0]['privilegio']; ?>">
                   <option value="" class="form-control">Seleccione</option>
                 
                   <option value="Admin" <?php if ($us_modificar[0]['privilegio']=='Admin'){echo 'Selected';} ?>>Administrador Principal</option>
                   <option value="AdminAlterns" <?php if ($us_modificar[0]['privilegio']=='AdminAlterns'){echo 'Selected';} ?>>Director de Departamento</option> 
               </select> 
                    <p class="help-block text-danger"></p>
                        <!--Select para ver a que departamento pertenece el usuario-->
                <label style=" color: white;">Departamento:</label>
                 <select  class="form-control form-control" id="lstdepto" name="lstdepto" value="<?php echo @$us2_modificar[0]['departamento']; ?>">
                   <option value="" class="form-control">Seleccione</option>
                   <option value="Simas" <?php if ($us2_modificar[0]['departamento']=='Simas'){echo 'Selected';} ?>>Simas</option>
                   <option value="Obras Publicas" <?php if ($us2_modificar[0]['departamento']=='Obras Publicas'){echo 'Selected';} ?>>Obras Públicas</option>
                   <option value="Atencion Ciudadana" <?php if ($us2_modificar[0]['departamento']=='Atencion Ciudadana'){echo 'Selected';} ?>>Atención Ciudadana</option>
                  
               </select> 
             <?php } ?>
                
               <br>
       <div class="contrainer" style="color: lightblue; text-align: center;">
           <input class="btn btn-primary" id="btnregistrar" align="center" name="btnregistrar" type="submit"
              value="<?php 
              /*Condicional que id_modificar devuelva datos solo en administrador altern*/
                if (isset($_GET['id_modificar']))
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
    </section>


<?php } 
?>

<?php 
            session_start();
            /*Condicional para vista solo admin principal*/
            if (@$_SESSION['privilegio'] == 'Admin')
            {

            ?>
    <!-- ======= Why Us Section ======= -->
    <section id="buscar" class="buscar">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>CUENTAS DE ADMINISTRADOR</p>
        </div>

        <div class="row">
 <form action="controlador_us.php"  method="post">
      <br>
      <div class="row">
        <!--BUSQUEDAS POR SELECT-->
        <div class="col-lg-4 text-center"  style="text-align: right; ">
          <label for="" class="control" >Usuario:</label>
        </div>
        <div hidden=""><input hidden="" type="txtid" name="txtid" value="<?php echo $renglon['id_usuario'];?>"><?php echo $renglon['id_usuario'];?>></div>
        <div class="col-lg-4">
                      <select class="form-control" name="lstbuscar" id="lstbuscar" >
    <option value="">Seleccione nombre de usuario</option>
    <?php foreach ($us as $renglon) { ?>
    <option value="<?php echo $renglon['nombre_usuario'];?>"><?php echo $renglon['nombre_usuario'];?></option>
<?php } ?>
  </select>
</div>
        <div class="col-lg-4">
          <input type="submit" id="btnbuscar" name="btnbuscar"  value="Buscar" class="btn btn-success">
        </div>        
      </div>
      <br>
      <!--TABLA LLENADA DE LA CONSULTA CON REPORTES SIN REGISTRAR EN EL MAPA-->
      <table class="table table-dark table-striped" style="display: block; overflow: auto;">
        <tr>
          <td>Num. Usuario</td>
          <td>Nombre Usuario</td>
          <td>Email</td>
          <td>Password</td>
           <td>Privilegio</td>
            <td>Departamento</td>
            <td colspan="2" style="text-align: center;">Acción</td>
        </tr>
        <?php foreach ($usmult as $renglon) { ?>
        <tr>
          <td><?php echo $renglon['id_usuario']; ?></td>
          <td><?php echo $renglon['nombre_usuario']; ?></td>
           <td><?php echo $renglon['correo']; ?></td>
           <!--Ocultar contraseña(No afecta la modificacion)-->
          <td type="password">*********</td>
          <td ><?php echo $renglon['privilegio']; ?></td>
           <td ><?php echo $renglon['departamento']; ?></td>
          <td>
            <a class="btn btn-success" href="controlador_us.php?id_delete=<?php echo $renglon['id_usuario']; ?>" onclick="return ConfirmDelete()">Eliminar</a></td>
         <td>
            <a class="btn btn-primary" href="controlador_us.php?id_modificar2=<?php echo $renglon['id_usuario']; ?>" onclick="return ConfirmEdit()">Modificar</a></td>
        </tr>
      <?php } ?>
      </table>
    </form>
 
      </div>
    </section><!-- End Why Us Section -->

    
<?php 
}


?>

<?php 
            session_start();
            /*Condicional para vista solo admin principal*/
            if (@$_SESSION['privilegio'] == 'AdminAlterns')
            {

            ?>
    <!-- ======= Why Us Section ======= -->
    <section id="buscar" class="buscar">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>CUENTAS DE ADMINISTRADOR</p>
        </div>

        <div class="row">
  <form action="controlador_us.php#formulariobusqueda"  method="post">

      <!--TABLA LLENADA DE LA CONSULTA CON REPORTES SIN REGISTRAR EN EL MAPA-->
      <table class="table table-dark table-striped" style="display: block; overflow: auto;">
        <tr>
          <td>Num. Usuario</td>
          <td>Nombre Usuario</td>
          <td>Email</td>
          <td>Password</td>
            <td colspan="2" style="text-align: center;">Acción</td>
        </tr>
        <?php foreach ($listado_us as $renglon) { ?>
        <tr>
          <td><?php echo $renglon['id_usuario']; ?></td>
          <td><?php echo $renglon['nombre_usuario']; ?></td>
           <td><?php echo $renglon['correo']; ?></td>
          <td type="password"><?php echo $renglon['password']; ?></td>
          <td>
            <a class="btn btn-success" href="controlador_us.php?id_delete=<?php echo $renglon['id_usuario']; ?>" onclick="return ConfirmDelete()">Eliminar</a></td>  

            <td>
            <a class="btn btn-primary" href="controlador_us.php?id_modificar=<?php echo $renglon['id_usuario']; ?>" onclick="return ConfirmEdit()">Modificar</a></td>
         
        </tr>
      <?php } ?>
      </table>
    </form>
      </div>
    </section><!-- End Why Us Section -->

    
<?php 
}


?>

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