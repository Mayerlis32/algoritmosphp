<?php
$a="5";
$b="2";

$suma= $a+$b;
$resta= $a-$b;
$resta1= $b-$a;
$multi= $a*$b;
$dividir= $a/$b;
$div2= $b/$a;
$porc= $a%$b;
$porc2= $b%$a;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operaciones</title>
  </head>
  <body>

    <h3>Numero1: <?php echo $a ?></h3>
    <h3>Numero2: <?php echo $b ?></h3>
    <h1><?php echo "----------------------"; ?></h1>
    <h2>Suma: <?php echo $suma ?></h2>
    <h2>Resta: <?php echo $resta ?></h2>
    <h2>Resta b-a: <?php echo $resta1 ?></h2>
    <h2>Multiplicacion: <?php echo $multi ?></h2>
    <h2>Division: <?php echo $dividir ?></h2>
    <h2>Division b/a: <?php echo $div2 ?></h2>
    <h2>Porcentaje: <?php echo $porc ?></h2>
    <h2>Porcentaje b%a: <?php echo $porc2 ?></h2>

  </body>
</html>
