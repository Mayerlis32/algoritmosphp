<?php

$horast="160";
$tarifh="20000";
$impuestos="800000";

$r= ($horast*$tarifh)-$impuestos;

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Paga Neta Trabajador</title>
  </head>
  <body>

    <h3>Horas Trabajadas: <?php echo $horast ?></h3>
    <h3>Tarifa de Horas: <?php echo $tarifh ?></h3>
    <h3>Impuestos: <?php echo $impuestos ?></h3>

    <h1>Paga Neta: <?php echo "$r" ?></h1>

  </body>
</html>
