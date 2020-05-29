<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP contacto</title>
</head>
<body>
<?php
$xd=mysqli_connect("localhost", "root", "", "people");
$name=$_POST["nombre"];
$fijo=$_POST["telefono"];
$mail=$_POST["correo"];
$as=$_POST["asunto"];
$men=$_POST["mensaje"];
mysqli_query($xd,"INSERT INTO new(Nombre,Telefono,Email,Asunto,Mensaje) 
VALUES ('$name', '$fijo', '$mail', '$as', '$men')");
if(!$xd)
	{
		echo 'Error de proceso';
		exit;
	}else
	{
		echo '<script>
		alert("Mensaje envíado exitosamente");
		window.history.go(-1);
		</script>';
	}
mysqli_close($xd);
?>
<h1>
<div align="center">
Registro Insertado
</div>
</h1>
<div align="center">
<a href="lectura.php">
Visualizar el contenido de la base
</a>
</div>
</body>
</html>