<?php
$numb_min = $_POST['numb_min'];
$numb_max = $_POST['numb_max'];

$numb = array();
for ($i = 0; $i < $numb_max; $i++){
    $numb[] = rand($numb_min,$numb_max);
}
 if  ($i % 2 == 0 && $i > 0) {
     $a = array_product($numb);
     print_r($a);
     echo "<br/>";
 }
 if ($i % 2 !== 0 && $i > 0){
     print_r($i);
 }

?>