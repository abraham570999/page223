<?php  
error_reporting(1);
session_start();
    require 'bd/conexion_bd.php';

    $obj = new BD_PDO();
//INSERTAR EN MODULO REPORTES(USUARIO GRAL.)
    if (isset($_POST['btnregistrar'])) 
    {
      if($_POST['btnregistrar']=='Insertar')
      {
        
        $obj->Ejecutar_Instruccion("insert into reportes (fecha_reporte, calle, colonia, tipo_reporte, estatus) values (Now(),'".$_POST['txtcalle']."','".$_POST['txtcolonia']."','".$_POST['lsttiporeporte']."','Sin Registrar')");
        echo '<script type="text/javascript">alert("Reporte realizado con exito.");</script>';
         
      }

    }

   /* elseif (isset($_GET['id_eliminar'])) 
    {
      $obj->Ejecutar_Instruccion("delete from reportes where id_reporte = '".$_GET['id_eliminar']."'");     
    }*/
    elseif (isset($_GET['id_modificar2'])) 
    {
      $reporte_modificar = $obj->Ejecutar_Instruccion("Select * from reportes where id_reporte = '".$_GET['id_modificar2']."'");      
    }
    
    if (isset($_GET['id_update'])) 
    {
      $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_update']."'");
      $obj->Ejecutar_Instruccion("update reportes set estatus= 'Registrado' where id_reporte = '".$_GET['id_update']."'");      
    }

   if (isset($_GET['id_update2'])) 
    {
      $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_update2']."'");
      $obj->Ejecutar_Instruccion("update reportes set estatus= 'Arreglado' where id_reporte = '".$_GET['id_update2']."'");      
    }
//BUSQUEDAS Y LLENADO DE SELECT
    $reporte = $obj-> Ejecutar_Instruccion("SELECT DISTINCT tipo_reporte from reportes where tipo_reporte !='Fugas'");
//IMPORTANTE BUSCAR ID
    $listado = $obj->Ejecutar_Instruccion("Select id_reporte, fecha_reporte, calle,entre_calle,y_calle, colonia, tipo_reporte, estatus,Imagen from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' and estatus = 'Sin Registrar'");
//IMPORTANTE BUSCAR ID
    $listado2 = $obj->Ejecutar_Instruccion("Select id_reporte, fecha_reporte, calle,entre_calle,y_calle,  colonia, tipo_reporte, estatus,Imagen from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' and estatus = 'Registrado' ");

     $listado3 = $obj->Ejecutar_Instruccion("Select fecha_reporte, calle,entre_calle,y_calle,  colonia, tipo_reporte,id_lum, estatus, nota_comentario,Imagen from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' ");

          //CONSULTA SIMAS PARA HISTORIAL
    $h_simas=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where filtro='Verificado' and tipo_reporte = 'Baches' or tipo_reporte = 'Fugas'");

    //CONSULTA OBRAS PUBLICAS PARA HISTORIAL
    $h_op=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where filtro='Verificado' and tipo_reporte != 'Fugas'");
//var_dump("Select * from reportes where id_reporte= '".$_POST['txtbuscar']."'");
//var_dump("Select * from reportes where id_reporte= '".$_POST['txtbuscar']."'");
//var_dump(@$reportes_modificar);
    require 'historial_obraspublicas.php';
  ?>
        
