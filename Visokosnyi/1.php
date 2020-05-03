<?php
var_dump($_POST);
$year = $_POST['year'];

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "visokocnyi";
}   else {
    echo "Нет";
}


?>