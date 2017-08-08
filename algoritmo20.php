
<?php
$catetos1=5;
$catetos2=12;
$cateto1=pow(5,2);
$cateto2=pow(12,2);
$h=sqrt($cateto1+$cateto2);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Teorema de pitagoras.</title>
  </head>
  <body>
    <h2><strong>TEOREMA DE PITÁGORAS  :</strong>
      <br>
      En un triángulo rectángulo la hipotenusa al cuadrado es igual al cuadrado de la suma de los catetos.</h2>

    <h2>catetos: <?php echo $catetos1 ?></h2>
      <h2>catetos: <?php echo $catetos2 ?></h2>
    <h2>Hipotenusa: <?php echo $h?></h2>

  </body>
</html>
