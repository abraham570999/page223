<?php  
error_reporting(1);
session_start();
    require 'bd/conexion_bd.php';

    $obj = new BD_PDO();
//INSERTAR EN MODULO REPORTES(USUARIO GRAL.)
       if (isset($_POST['btnregistrar'])) 
       {
         if ($_POST['btnregistrar']=='Insertar') 
         {
        
         //Ruta donde se concentran los archivos
         $dir_subida = 'img/subidas/';
         //Nombre del archivo
         $nombre_archivo = basename($_FILES['txtimagen']['name']);
         //Sustituye una expresio regular(preg)
         //$nombre_archivo = ereg_replace(" ","", $nombre_archivo);
         //Variables con la ruta y el nmbre del archivo para subirlo 
         $fichero_subido = $dir_subida . $nombre_archivo;

         move_uploaded_file($_FILES['txtimagen']['tmp_name'], $fichero_subido);
         
           echo "El fichero es valido y se subio con exito.\n";

         $obj->Ejecutar_Instruccion("insert into reportes(fecha_reporte, calle, entre_calle, y_calle, colonia, tipo_reporte, estatus,nota_comentario, Imagen) values (Now(),'".$_POST['txtcalle']."','".$_POST['txtcalle1']."','".$_POST['txtcalle2']."','".$_POST['txtcolonia']."','".$_POST['selecto']."','Sin Registrar','Sin comentarios','".$fichero_subido."')");



         } 

      

        elseif($_POST['btnregistrar']=='Modificar')
         
        
        if (($_FILES['txtimagen']['tmp_name']!="")) 
        {
         //Ruta donde se concentran los archivos
         $dir_subida = 'img/subidas/';
         //Nombre del archivo
         $nombre_archivo = basename($_FILES['txtimagen']['name']);
         //Variables con la ruta y el enmbre del archivo para subirlo 
         $fichero_subido = $dir_subida . $nombre_archivo;

         move_uploaded_file($_FILES['txtimagen']['tmp_name'], $fichero_subido);

          $obj->Ejecutar_Instruccion("update reportes set calle='".$_POST['txtcalle']."',entre_calle='".$_POST['txtcalle1']."',y_calle='".$_POST['txtcalle2']."',colonia='".$_POST['txtcolonia']."', tipo_reporte='".$_POST['selecto']."',id_lum = '".$_POST['idluminaria']."',nota_comentario='".$_POST['txtnota']."',Imagen='".$fichero_subido."'where id_reporte='".$_POST['txtid']."'");
         }

         else 
         {
          $obj->Ejecutar_Instruccion("update reportes set calle='".$_POST['txtcalle']."',entre_calle='".$_POST['txtcalle1']."',y_calle='".$_POST['txtcalle2']."',colonia='".$_POST['txtcolonia']."', tipo_reporte='".$_POST['selecto']."',id_lum = '".$_POST['idluminaria']."',nota_comentario='".$_POST['txtnota']."' where id_reporte='".$_POST['txtid']."'");
         }
  
}
    elseif (isset($_GET['id_modificar2'])) 
    {
      $reporte_modificar = $obj->Ejecutar_Instruccion("Select * from reportes where id_reporte = '".$_GET['id_modificar2']."'");      
    }
    elseif (isset($_GET['id_modificar3'])) 
    {
      $reporte_modificar = $obj->Ejecutar_Instruccion("Select * from reportes where id_reporte = '".$_GET['id_modificar3']."'");      
    }
    elseif (isset($_GET['id_eliminar'])) 
    {
      $obj->Ejecutar_Instruccion("delete from reportes where id_reporte = '".$_GET['id_eliminar']."'");   
      echo '<script type="text/javascript">alert("Reporte eliminado.");</script>';  
    }
    if (isset($_GET['id_update3'])) 
    {
      $reporte_modificar = $obj->Ejecutar_Instruccion("Select * from reportes where id_reporte = '".$_GET['id_update3']."'");      
    }
    
    if (isset($_GET['id_update'])) 
    {
      $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_update']."'");
      $obj->Ejecutar_Instruccion("update reportes set estatus= 'Registrado' where id_reporte = '".$_GET['id_update']."'");      
    } 
elseif (isset($_GET['id_updatedes'])) 
    {
        $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_updatedes']."'");
       $obj->Ejecutar_Instruccion("update reportes set filtro= 'Sin Verificar' where id_reporte = '".$_GET['id_updatedes']."'");      
       
    }

  if (isset($_GET['id_update2'])) 
    {
      $obj->Ejecutar_Instruccion("Select id_reporte from reportes where id_reporte = '".$_GET['id_update2']."'");
      $obj->Ejecutar_Instruccion("update reportes set estatus= 'Arreglado' where id_reporte = '".$_GET['id_update2']."'");      
    }
    elseif (isset($_GET['id_update3'])) 
    {
      $reporte_modificar = $obj->Ejecutar_Instruccion("Select * from reportes where id_reporte = '".$_GET['id_update3']."'");      
       
    }
     elseif (isset($_GET['id_eliminar'])) 
    {
      $obj->Ejecutar_Instruccion("delete from reportes where id_reporte = '".$_GET['id_eliminar']."'");     
    }

//BUSQUEDAS Y LLENADO DE SELECT
    $reporte = $obj-> Ejecutar_Instruccion("SELECT DISTINCT tipo_reporte from reportes where tipo_reporte ='Baches' or tipo_reporte='Fugas'");
//IMPORTANTE BUSCAR ID
    $listado = $obj->Ejecutar_Instruccion("Select id_reporte, fecha_reporte, calle,entre_calle,y_calle, colonia, tipo_reporte,id_lum,nota_comentario, estatus,Imagen from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' and estatus = 'Sin Registrar'");

 
//IMPORTANTE BUSCAR ID
    $listado2 = $obj->Ejecutar_Instruccion("Select id_reporte, fecha_reporte, calle,entre_calle,y_calle,  colonia, tipo_reporte, id_lum, estatus,nota_comentario, Imagen from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' and estatus = 'Registrado' ");

     $listado3 = $obj->Ejecutar_Instruccion("Select fecha_reporte, calle,entre_calle,y_calle,  colonia, tipo_reporte, id_lum, estatus,Imagen from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' and estatus = 'Arreglado' ");

     //Busqueda solo dep de simas
     $simas=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where estatus='Sin Registrar' and filtro='Verificado' and departamento='Simas'");

     //Busqueda solo dep de simas registrado
     $simas=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where estatus='Registrado' and filtro='Verificado' and departamento='Simas'");

     //Busqueda de reportes en ambos departamentos sin Registrar
     $op_y_s=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where estatus='Sin Registrar' and filtro='Verificado' and departamento='Obras Publicas y Simas'");
     //Busqueda de reportes en ambos departamentos Registrados
     $op_y_s=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where estatus='Registrado' and filtro='Verificado' and departamento='Obras Publicas y Simas'");   

     //Busqueda depto obras publicas y esten sin registrar
     $op=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where estatus='Sin Registrar' and filtro='Verificado' and departamento='Obras Publicas'");
     //Obras publicas y registrados
     $op2=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where estatus='Registrado' and filtro='Verificado' and departamento='Obras Publicas'");

                                         /*CONSULTAS PARA DIFERENTS VISTAS POR DEPARTAMENTOS*/
     //CONSULTA EN OBRAS PUBLICAS PARA REPORTES VERIFICADOS Y REGISTRADOS
     $oys=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where estatus='Registrado' and filtro='Verificado' and tipo_reporte != 'Fugas'");

      //CONSULTA EN OBRAS PUBLICAS PARA REPORTES VERIFICADOS Y SIN REGISTRAR
     $NOobys=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where estatus='Sin Registrar' and filtro='Verificado' and tipo_reporte != 'Fugas'");

    //CONSULTA DE SIMAS PARA REPORTES VERIFICADOS Y NO REGISTRADOS
     $Nsimasy_ob=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where estatus='Sin Registrar' and filtro='Verificado' and tipo_reporte = 'Baches' or tipo_reporte = 'Fugas'");

     //CONSULTA DE SIMAS PARA REPORTES VERIFICADOS Y REGISTRADOS
     $Rsimasy_ob=$obj->Ejecutar_Instruccion("Select id_reporteval, reportes.id_reporte, fecha_reporte, calle, entre_calle, y_calle,colonia, tipo_reporte,id_lum, estatus,nota_comentario,Imagen,filtro from rep_obraspublicas inner join reportes on rep_obraspublicas.id_reporte=reportes.id_reporte where estatus='Registrado' and filtro='Verificado' and tipo_reporte = 'Baches' or tipo_reporte = 'Fugas'");
//var_dump("Select * from reportes where id_reporte= '".$_POST['txtbuscar']."'");
//var_dump(@$reportes_modificar);
    require 'reportes_simas.php';
  ?>
        
