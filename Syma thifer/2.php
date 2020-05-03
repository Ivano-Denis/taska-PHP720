<?php
$numb = $_POST['numb'];
$sum = 0;

for ($i = 0; $i < strlen($numb); $i ++) {

    $sum += $numb[$i];
}
echo $numb."<br/>";
 echo "syme thifer".$sum;

?>