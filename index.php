<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrar Usuario</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilo.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST">
		<h1>¡Suscribete!</h1>
		<input type="text" name="name"  placeholder="Nombre Completo">
		</br>
		<input type="email" name="email" placeholder="Email">
		</br>
		<input type="submit" name="register">
	</form>
	<?php
	include("Registrar.php");
	?>
</body>
</html>