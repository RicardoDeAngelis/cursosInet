<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo-Iva</title>
    <meta name="keywords" content="palabras claves"/>
    <meta name="descrption" content="descripcion corta" />
    <link rel="stylesheet" 
	      type="text/css"
          href="css/styles.css">
    </head>
<body>
<header>
<h1>Calculo</h1>
<h3>Probando parametro get y operadores aritmeticos</h3>
 </header>

<section>


<form method="POST" >
		<label for="caja1">Valor1</label>
		<input id="caja1" type="text" name="valor1">
		<br/><br/>
		<label for="caja2">Valor2</label>
		<input id="caja2" type="text" name="valor2">
		<br/><br/>
        <label for="caja3">Valor3</label>
		<input id="caja3" type="text" name="valor3">
		<br/><br/>

		<input type="submit" name="btn_enviar"
        value="calcular">
</form> 
    
   
    <?php
    $IVA=1.21;
     $valor1 = $_POST['valor1'];
	 $valor2 = $_POST['valor2'];
     $valor3 = $_POST['valor3'];

     $valor1*=$IVA;
     $valor2*=$IVA;
     $valor3*=$IVA;

    $promedio=($valor1+$valor2+$valor3)/3;

    echo " <br/>valor1: " .$valor1. "<br/>";
    echo " <br/> valor2 " .$valor2. "<br/>" ;
    echo " <br/> valor3 " .$valor3. "<br/>";
    echo " <br/> Promedio: ".$promedio;

?>


<!-- Tabla -->
<table >
<!-- cabecera -->
    <thead>
        <th>Variable</th>
        <th>Valor sin Iva</th>
        <th>Con iva</th>
    </thead>
    <!--fin de cabecera  -->
    <tbody>
        <tr>
            <td>valor1</td>
            <td><?php echo $_POST['valor1']; ?> </td>
            <td><?php echo $valor1; ?></td>
        </tr>

        <tr>
        <td>valor2</td>
            <td><?php echo $_POST['valor2']; ?> </td>
            <td><?php echo $valor2; ?></td>        
        </tr>

        <tr>
        <td>valor3</td>
            <td><?php echo $_POST['valor3']; ?> </td>
            <td><?php echo $valor3; ?></td>
        
        </tr>
    </tbody>

</table>



</section>

<footer>

</footer>
    <!-- <script src="js.js"></script> -->
</body>
</html>