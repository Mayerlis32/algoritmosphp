<?php
$a="4";
$b="2";

$suma= $a+$b;
$resta= $a-$b;
$multi= $a*$b;
$dividir= $a/$b;
$mod=$dividir;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operacion</title>
  </head>
  <body>

    <h3>Numero1: <?php echo $a ?></h3>
    <h3>Numero2: <?php echo $b ?></h3>
    <h1><?php echo "----------------------"; ?></h1>
    <h2>Suma: <?php echo $suma ?></h2>
    <h2>Resta: <?php echo $resta ?></h2>
    <h2>Multiplicacion: <?php echo $multi ?></h2>
    <h2>Division: <?php echo $dividir ?></h2>
    <h2>Mod: <?php echo $mod ?></h2>

  </body>
</html>
