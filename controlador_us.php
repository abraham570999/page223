<?php  
//oculta errores
error_reporting(1);
//linea que almacena la variable de sesion
session_start();
//mandar llamar al archivo de conexion de la base de datos
    require 'bd/conexion_bd.php';
     $nombre_usuario = $_POST['txtnombreus'];
    $correo = $_POST['txtemail'];
    $password = $_POST['txtpass'];
    $privilegio = $_POST['lstpriv'];
    //$password = hash('sha512', $password); 


//manda llamar al objeto PDO() en la coleccion
    $obj = new BD_PDO();
//INSERTAR EN MODULO REPORTES(USUARIO VISTA ADMINISTRADOR PRINCIPAL)
    if (isset($_POST['btnregistrar2'])) 
    {
      if($_POST['btnregistrar2']=='Insertar')
      {
        
        $obj->Ejecutar_Instruccion("insert into usuarios (nombre_usuario, correo, password, privilegio,departamento) values ('".$nombre_usuario."','".$correo."','".$password."','".$privilegio."','".$_POST['lstdepto']."')");
       
        echo '<script type="text/javascript">alert("Administrador registrado con existo.");</script>';
         
      }
  
    }

    /*Modificar en usuario propio administrador normal */
    if($_POST['btnregistrar']=='Modificar')
      {
        
      
         $obj->Ejecutar_Instruccion("update usuarios set nombre_usuario = '".$nombre_usuario."', correo = '".$correo."', password = '".$password."' where id_usuario = '".$_POST['txtid']."'");
      }
   /*Modificar en administrador principal*/
  if(isset($_POST['btnregistrar2'])) 
    {
      if($_POST['btnregistrar2']=='Actualizar')
      {
        
        $obj->Ejecutar_Instruccion("update usuarios set nombre_usuario = '".$nombre_usuario."', correo = '".$correo."', password = '".$password."', privilegio = '".$privilegio."' , departamento='".$_POST['lstdepto']."' where id_usuario = '".$_POST['txtid']."'");
         
      }
 
    }
/*Eliminar usuario*/
   elseif (isset($_GET['id_delete'])) 
    {
      $obj->Ejecutar_Instruccion("delete from usuarios where id_usuario = '".$_GET['id_delete']."'"); 

       echo '<script type="text/javascript">alert("Usuario eliminado con exito.");</script>'; 

    }
    /*Regresar datos a cajas de texto en modo administrador normal*/
    elseif (isset($_GET['id_modificar'])) 
    {
      $us_modificar = $obj->Ejecutar_Instruccion("Select * from usuarios where id_usuario = '".$_GET['id_modificar']."'");      
    }
    /*Regresar datos a campos de texto en modo administrador principal*/
      elseif (isset($_GET['id_modificar2'])) 
    {
      $us2_modificar = $obj->Ejecutar_Instruccion("Select * from usuarios where id_usuario = '".$_GET['id_modificar2']."'");      
    }
     
//BUSQUEDAS Y LLENADO DE SELECT
    $us = $obj-> Ejecutar_Instruccion("SELECT * from usuarios ");
/*BUSQUEDA DE USUARIOS POR ORDEN DE PRIVILEGIO (VISTA ADMINISTRADOR PRINCIPAL)*/
   $usmult = $obj-> Ejecutar_Instruccion("SELECT * from usuarios where nombre_usuario like '%".$_POST['lstbuscar']."%'  order by privilegio ");
/*BUQUEDA DE USUARIO PERSONAL*/
    $usp = $obj-> Ejecutar_Instruccion("SELECT * from usuarios where id_usuario = '".$_SESSION['id_usuario']."'");
//IMPORTANTE BUSCAR ID
    $listado_adm = $obj->Ejecutar_Instruccion("Select id_usuario, nombre_usuario, correo, password from usuarios where nombre_usuario like '%".$_POST['lstbuscar']."%'  ");

     $listado_us = $obj->Ejecutar_Instruccion("Select id_usuario, nombre_usuario, correo, password from usuarios where nombre_usuario like '%".$_POST['lstbuscar']."%' and id_usuario = '".$_SESSION['id_usuario']."' ");
/*mandar llamar a la vista*/
    require 'crear_adm.php';
  ?>
        
