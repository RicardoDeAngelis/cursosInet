<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lavoratorio 4</title>
</head>
<body>
<header>
<h1>Arrays</h1>
</header>

<section>

<!-- array
is_array($nombres)=bolean
count($nombres)=int
array asociativo
$alumno['nombre']='Juan';
$alumno['edad']=18;
$alumnos=array('nombre'=>'matias','edad'=>18);
array_puss
array_shift
array_unshift
array_pop

-->
<?php
//$nombres[]=array('Juan','Marcos');
//$nombres[]=array('enrique','sergio');
// print_r para mostrar arrays
//print_r ($nombres);

//$alumnos=array('nombre'=>'matias','edad'=>18);

//$alumnos1=array('nombre'=>'luca','edad'=>28);
//print_r ($alumnos);
//print_r ($alumnos1);



$nombres1[2]=('Juan');
$nombres1[3]=('enrique');
$nombres1[5]=('sergio');
$nombres1[8]=('Marcos');

foreach($nombres1 as $i=>$nombre){
    echo "<p>$nombre</p>";
}
 

$nombres[0]=('Juan');
$nombres[1]=('enrique');
$nombres[2]=('sergio');
$nombres[3]=('Marcos');

for( $i=0;$i<count($nombres);$i++){
    echo "<p>$nombres[$i]</p>";
}



$mes['ene']=200;
$mes['feb']=230;
$mes['mar']=134;
$mes['abr']=425;
$mes['may']=815;
$mes['jun']=632;
$mes['jul']=54;
$mes['ago']=105;
$mes['sep']=123;
$mes['oct']=478;
$mes['nov']=412;
$mes['dic']=953;

$MesCopia=$mes;


arsort($mes);
$max=array_shift($mes);
$min=array_pop($mes);



$meses=array_flip($MesCopia);
$maxmes=array_shift($meses);

echo "<p>maxima facturacion mes:$maxmes  $max</p>";
echo "<p>minima facturacion: $min</p>";

$suma=0;
foreach($MesCopia as $i=>$nombre){
    echo "<p>$nombre</p>";
    $suma=$suma+$nombre;
}
$prom=$suma/count($MesCopia);
$r=round($prom,2);
echo "<p>El promedio es: $r</p>";



$personas=array('juan','martin','nicolas','miguel','carlos');

sort($personas);
echo"<table>";
echo "<thead>
        <th>Indice</th>
        <th>Valor</th>
      </thead> "
echo"<tbody>";
foreach ($personas as $key => $value) {
    # code...   
    echo "<tr><td>$key</td><tr>"
}



?>





</section>

<footer>

</footer>


</body>
</html>