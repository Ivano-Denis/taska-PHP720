<?php
$grad = $_POST['grad'];
$chasov = 0;
$minut = 0;


     if($grad > 0 ) {
         $chasov = (int)($grad / 30);
         echo('Chasov-'), $chasov.'   ';
     }

$minut = (int)(($grad * 2) % 60);

echo  $minut, "minut";

?>