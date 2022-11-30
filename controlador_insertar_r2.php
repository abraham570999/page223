<?php  
error_reporting(1);
    require 'bd/conexion_bd.php';

    $obj = new BD_PDO();



//INSERTAR EN MODULO REPORTES(USUARIO GRAL.)
    if (isset($_POST['btnregistrar'])) 
    {
      if($_POST['btnregistrar']=='Insertar')
      {
        
        $obj->Ejecutar_Instruccion("insert into reportes (fecha_reporte, calle,entre_calle,y_calle, colonia, tipo_reporte, estatus,nota_comentario) values (Now(),'".$_POST['txtcalle']."','".$_POST['txtcalle1']."','".$_POST['txtcalle2']."','".$_POST['txtcolonia']."','".$_POST['lsttiporeporte']."','Sin Registrar','Sin Comentarios')");
        echo '<script type="text/javascript">alert("Reporte realizado con exito.");</script>';
         
      }

    }
   
//BUSQUEDAS Y LLENADO DE SELECT
    $reporte = $obj-> Ejecutar_Instruccion("SELECT DISTINCT tipo_reporte from reportes");
//IMPORTANTE BUSCAR ID
    $listado = $obj->Ejecutar_Instruccion("Select calle,entre_calle,y_calle, colonia, tipo_reporte from reportes where calle like '%".$_POST['txtcalleb']."%' and entre_calle like '%".$_POST['txtcalleb2']."%'");
    
//IMPORTANTE BUSCAR ID
    $listado2 = $obj->Ejecutar_Instruccion("Select id_reporte, fecha_reporte, calle,entre_calle,y_calle,  colonia, tipo_reporte, estatus from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' and estatus = 'Registrado' ");

     $listado3 = $obj->Ejecutar_Instruccion("Select fecha_reporte, calle,entre_calle,y_calle,  colonia, tipo_reporte, estatus from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' and estatus = 'Arreglado' ");
//var_dump("Select * from reportes where id_reporte= '".$_POST['txtbuscar']."'");
//var_dump(@$reportes_modificar);
    require 'dar_reportes.php';
  ?>
        
