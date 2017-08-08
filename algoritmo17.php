<?php
$horas= "4";
$minutos= 60;
$segundos= 60;

$minuto=$horas*$minutos;
$segundos= $minutos*$segundos*$horas;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Horas a Minutos y Segundos.</title>
  </head>
  <body>
    <h2>Horas: <?php echo $horas ?></h2>
    <h2>Horas a Minutos: <?php echo $minuto ?></h2>
    <h2>Horas a Segundos: <?php echo $segundos ?></h2>

  </body>
</html>
