<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio 1</title>
</head>
<body>
<header>
<h1>Practica 1</h1>
<h3>Practica </h3>
</header>
 <section>
<form method="POST" >
<label for="inputUserName">Nombre</label>
<input  type="text" name="userName">
<br/><br/>
<label for="inputUserName">Apellido</label>
<input  type="text" name="userlastname">
<br/><br/>


<br/><br/>
<input type="submit" name="btn_submit" value="enviar">

</form>


 <?php
		echo "Nombre: " .$_POST['userName']."<br>";
    echo "Apellido: " .$_POST['userlastname']."<br>";    
    ?>

 
 </section>   
<footer></footer>

</body>
</html>