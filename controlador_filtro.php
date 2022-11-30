<?php  
error_reporting(1);
session_start();
    require 'bd/conexion_bd.php';

    $obj = new BD_PDO();


    if (isset($_GET['id_eliminar'])) 
    {
      $obj->Ejecutar_Instruccion("delete from reportes where id_reporte = '".$_GET['id_eliminar']."'");     
    }
    elseif (isset($_GET['id_enviar'])) 
    {
      $reporte_modificar = $obj->Ejecutar_Instruccion("Select * from reportes where id_reporte = '".$_GET['id_enviar']."'");      
    }
    if (isset($_GET['id_enviar'])) 
    {
      $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_enviar']."'");
      $obj->Ejecutar_Instruccion("insert into rep_obraspublicas (id_reporte) values ('".$_GET['id_enviar']."')");      
    }
    
        if (isset($_GET['id_enviar'])) 
    {
      $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_enviar']."'");
      $obj->Ejecutar_Instruccion("update reportes set filtro='Verificado', departamento = 'Obras Publicas' where id_reporte= '".$_GET['id_enviar']."'");      
    }
      if (isset($_GET['id_enviar1'])) 
    {
      $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_enviar1']."'");
      $obj->Ejecutar_Instruccion("insert into rep_obraspublicas (id_reporte) values ('".$_GET['id_enviar1']."')");      
    }
         if (isset($_GET['id_enviar1'])) 
    {
      $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_enviar1']."'");
      $obj->Ejecutar_Instruccion("update reportes set filtro='Verificado', departamento = 'Simas' where id_reporte= '".$_GET['id_enviar1']."'");      
    }
       if (isset($_GET['id_enviar2'])) 
    {
      $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_enviar2']."'");
      $obj->Ejecutar_Instruccion("insert into rep_obraspublicas (id_reporte) values ('".$_GET['id_enviar2']."')");      
    }
         if (isset($_GET['id_enviar2'])) 
    {
      $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_enviar2']."'");
      $obj->Ejecutar_Instruccion("update reportes set filtro='Verificado', departamento = 'Obras Publicas y Simas' where id_reporte= '".$_GET['id_enviar2']."'");      
    }

//BUSQUEDAS Y LLENADO DE SELECT
    $reporte = $obj-> Ejecutar_Instruccion("SELECT DISTINCT tipo_reporte from reportes");

     $listado3 = $obj->Ejecutar_Instruccion("Select * from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' and filtro = 'Sin Verificar' ");
//var_dump("Select * from reportes where id_reporte= '".$_POST['txtbuscar']."'");
//var_dump(@$reportes_modificar);
    require 'filtro.php';
  ?>
        
