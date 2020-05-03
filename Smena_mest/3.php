<?php
$numb_min = $_POST['numb_min'];
$numb_max = $_POST['numb_max'];

$numb = array();
    for ($i = 0; $i < $numb_max; $i++){
        $numb[] = rand($numb_min,$numb_max);
    }

$numb2 = array_unique($numb);
    $key1 = array_search(min($numb2),$numb2);
    $key2 = array_search(max($numb2),$numb2);
var_dump($key1,$key2);
var_dump($numb2);

      $numb2[$key1] = max($numb2);
      $numb2[$key2] = min($numb2);

var_dump($numb2);
var_dump ($key1, $key2);

?>