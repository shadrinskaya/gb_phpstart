<?php

$a = rand(-100, 100);
$b = rand(-100, 100);

echo $a . "<br>";
echo $b . "<br>";

if ($a >= 0 && $b >= 0){
    echo 'a и b положительные';
} elseif ($a < 0 && $b < 0){
    echo 'a и b отрицательные';
} else {
    echo 'a и b разных знаков';
}