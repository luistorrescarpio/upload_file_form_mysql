<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subir Archivo</title>
</head>
<body>
	<center>
		<h3>Upload File in &lt;form&gt; y MYSQL</h3>
		<a href="archivos_registrados.php">Ver archivos Registrados</a>
		<br><br>
		<form enctype="multipart/form-data" action="consultas.php" method="POST">
			<input name="action" type="hidden" value="registerFile" /> 
			Referencia: <input name="referencia" type="text" value="Referencia de Prueba"/>
			<br><br>
			<input name="uploaded_file" type="file" />
			<br><br>
			<input type="submit" value="Registrar y Subir Archivo" />
		</form>
	</center>
</body>
</html>