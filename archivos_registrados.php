<?php 
require("db_controller/mysql_script.php");

$r = query("SELECT * FROM fichero ORDER BY id_fichero DESC");
echo "<a href='index.php'>Volver</a> ";
if(count($r)==0){
	echo "No hay Archivos Registrados";
	exit(); //Terminamos el proceso de ejecución en esta linea de codigo
}

echo "<h3>Vista de Archivos Registrados desde MYSQL</h3>";
echo "<div>Columna de la tabla \"fichero\": <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;id_fichero | fech_registro | referencia | filename </div>";
echo "<br>Registros de la tabla \"fichero\": <br><br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Tiene ".count($r)." archivos registrados</i>";
echo "<ul>";

//Visualización de Archivos Registros en MYSQL
foreach ($r as $key => $val) {
	echo "<li>".
		$val["id_fichero"]." | ".$val["fech_registro"]." | ".$val["referencia"]." | ".$val["filename"]
			." <a href='files/".$val["filename"]."' target='_blank'>Ver Archivo</a>"
		."</li>";
}
echo "</ul>";
?>