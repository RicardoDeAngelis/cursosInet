<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" 
	      type="text/css"
	      href="css/styles.css">
</head>
<body>

<header>
<h1>Practica 3</h1>
<h3>Practica </h3>
</header>

 <section>
<!-- el action nos indica q se dirigira a otra pagina -->
<form method="POST" action="ingreso.php" >
<label for="input1">Ingrese el Nombre</label>
<input id="input1" type="text" name="userName">
<br/><br/>
<label for="input2">Ingrese el password</label>
<input id="input2" type="password" name="userPass">
<br/><br/>
<input type="submit" name="btn_submit" value="ingresar">
</form>



 
 </section>  
    
</body>
</html>