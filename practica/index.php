<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<link rel="stylesheet" 
	      type="text/css"
	      href="css/style.css">

</head>

<body>

	<header>
		<h3><i> header<i></h3>
	</header>
	
	<section>
	<h3><i> seccion<i></h3>	
	

	
	<form method="post" >
		<label for="caja1">Nombre</label>
		<input id="caja1" type="text" name="nombre">
		<br/><br/>
		<label for="caja2">Apellido</label>
		<input id="caja2" type="text" name="apellido">
		<br/><br/>
		<input type="submit" name="btn_enviar"
		value="Enviar datos">


	</form>
	<?php
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];

		echo "Nombre: ".$nombre."<br/> Apellido: ".$apellido;

	?>


	</section>
	
	<footer>
	Footer
	</footer>


</body>
</html>