<?php
$a= "2";
$b= "3";
$c= "3";
$d= "5";


$suma= $a+$b+$c+$d;
$promedio= $suma/4;

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Promedio Notas.</title>
   </head>
   <body>
     <h2>Nota1: <?php echo $a ?></h2>
     <h2>Nota2: <?php echo $b ?></h2>
     <h2>Nota3: <?php echo $c ?></h2>
     <h2>Nota4: <?php echo $d ?></h2>
     <h1><?php echo "----------------------"; ?></h1>
     <h2>Suma: <?php echo $suma ?></h2>
     <h2>Promedio: <?php echo $promedio ?></h2>

   </body>
 </html>
