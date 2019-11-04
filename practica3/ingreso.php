<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresando</title>
    <link rel="stylesheet" 
	      type="text/css"
	      href="css/styles.css">
</head>
<body>

<?php
// se recive los parametros de post
$user=$_POST['userName'];
$pass=$_POST['userPass'];

if($user=='admin' and $pass=='1234'){
    echo "<h1>Bienvenido <em>hola</em>: $user <br/> </h1>";
    


}else  echo "<strong><b>Chau</b> Datos erroneos: $user <br/></strong> ";





?>
    
</body>
</html>