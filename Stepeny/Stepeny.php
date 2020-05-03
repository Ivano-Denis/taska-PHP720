<?php
$n = 5;
$sum = 0;
for($i = 1;$i<=$n;$i++){
if ($i / $i==1)
{
$sum += pow($i,$i);
// $sum += $i;
}

}
echo $sum;
?>

