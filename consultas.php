<?php 
require("db_controller/mysql_script.php");

include("tools.php"); //funciones adicionales

$obj = (object)$_REQUEST;

switch ($obj->action) {
	case 'registerFile':
		$nameFile = basename( removeAcentos($_FILES['uploaded_file']['name']) ); //Obtenemos "fileName" del archivo

		$fech_registro = date("Y-m-d H:i:s");
		$r = query("INSERT INTO fichero (referencia,filename,fech_registro)
					VALUES('{$obj->referencia}','{$nameFile}','{$fech_registro}')");

		if($r>0){
			echo "<i style='color:blue;'>Server: Registrado con exito</i>";
		}else{
			echo "<i style='color:red;'>Server: Error al registrar</i>";
			exit(); //Para evitar que guarde el archivo
		}
		echo "<br>"; //salto de linea
		
		//Ejcutamos el archivo de "upload_file.php"
		require("upload_file.php");
		break;
	
	default:
		echo "Lo sentimos, consulta incorrecta";
		break;
}

?>