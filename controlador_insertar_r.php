 <?php 
 error_reporting(1);
    require 'bd/conexion_bd.php';

 $obj = new BD_PDO();


    if (isset($_POST['btnregistrar'])) 
       {
         if ($_POST['btnregistrar']=='Insertar') 
         {
        
         //Ruta donde se concentran los archivos
         $dir_subida = 'img/subidas/';
         //Nombre del archivo
         $nombre_archivo = basename($_FILES['txtimagen']['name']);
         //Variables con la ruta y el nmbre del archivo para subirlo 
         $fichero_subido = $dir_subida . $nombre_archivo;

         move_uploaded_file($_FILES['txtimagen']['tmp_name'], $fichero_subido);
         
           //echo "El fichero es valido y se subio con exito.\n";

         $obj->Ejecutar_Instruccion("insert into reportes(fecha_reporte, calle, entre_calle, y_calle, colonia, tipo_reporte,id_lum, estatus,nota_comentario, Imagen,filtro,departamento) values (Now(),'".$_POST['txtcalle']."','".$_POST['txtcalle1']."','".$_POST['txtcalle2']."','".$_POST['txtcolonia']."','".$_POST['selecto']."','".$_POST['idluminaria']."','Sin Registrar','Sin comentarios','".$fichero_subido."','Sin Verificar','Atencion Ciudadana')");



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
 //var_dump($nombre_archivo);

//BUSQUEDAS Y LLENADO DE SELECT
    $reporte = $obj-> Ejecutar_Instruccion("SELECT DISTINCT tipo_reporte from reportes");
//IMPORTANTE BUSCAR ID
    $listado = $obj->Ejecutar_Instruccion("Select calle,entre_calle,y_calle, colonia, tipo_reporte,id_lum, Imagen from reportes where calle like '%".$_POST['txtcalleb']."%' and entre_calle like '%".$_POST['txtcalleb2']."%'");
    
//IMPORTANTE BUSCAR ID
    $listado2 = $obj->Ejecutar_Instruccion("Select id_reporte, fecha_reporte, calle,entre_calle,y_calle,  colonia, tipo_reporte,id_lum, estatus, Imagen from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' and estatus = 'Registrado' ");

     $listado3 = $obj->Ejecutar_Instruccion("Select fecha_reporte, calle,entre_calle,y_calle,  colonia, tipo_reporte,id_lum, estatus,Imagen from reportes where tipo_reporte like '%".$_POST['lstbuscar']."%' and estatus = 'Arreglado' ");
 
//var_dump("Select * from reportes where id_reporte= '".$_POST['txtbuscar']."'");
//var_dump(@$reportes_modificar);
//var_dump("INSERT INTO reportes(fecha_reporte, calle, entre_calle, y_calle, colonia,tipo_reporte, estatus, nota_comentario, Imagen) values(Now(),'".$_POST['txtcalle']."','".$_POST['txtcalle1']."','".$_POST['txtcalle2']."','".$_POST['txtcolonia']."','".$_POST['lsttiporeporte']."','Sin Registrar','Sin comentarios','".$fichero_subido."')");
//mandar llamar a la vista
require 'dar_reportes.php';

?>
