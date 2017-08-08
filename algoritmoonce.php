<?php
$lado1= 5;
$lado2= 5;
$lado3= 8;
$lado4= 8;


$area= ($lado2*$lado4)/2;

$perimetro=($lado3+$lado1)*2;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Area y Perimetro Deltoide.</title>
  </head>
  <body>
    <h3>lado1: <?php echo $lado1 ?></h3>
    <h3>lado2: <?php echo $lado2 ?></h3>
    <h3>lado3: <?php echo $lado3 ?></h3>
    <h3>lado4: <?php echo $lado4 ?></h3>
    <h1>Area del Deltoide: <?php echo $area ?></h1>
    <h1>Perimetro del Deltoide: <?php echo $perimetro ?></h1>

  </body>
</html>
