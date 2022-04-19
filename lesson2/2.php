<?php

$a = rand(0, 15);
echo $a . "<br>" . "<br>";
//вариант1: 
switch($a){
    case 0:
        echo 0 . "<br>";
    case 1:
        echo 1 . "<br>";
    case 2:
        echo 2 . "<br>";
    case 3:
        echo 3 . "<br>";
    case 4:
        echo 4 . "<br>";
    case 5:
        echo 5 . "<br>";
    case 6:
        echo 6 . "<br>";
    case 7:
        echo 7 . "<br>";
    case 8:
        echo 8 . "<br>";
    case 9:
        echo 9 . "<br>";
    case 10:
        echo 10 . "<br>";
    case 11:
        echo 11 . "<br>";
    case 12:
        echo 12 . "<br>";
    case 13:
        echo 13 . "<br>";
    case 14:
        echo 14 . "<br>";
    case 15:
        echo 15 . "<br>";
} 

//вариант2:
switch($a){
    case 0:
        echo $a++ . "<br>";
    case 1:
        echo $a++ . "<br>";
    case 2:
        echo $a++ . "<br>";
    case 3:
        echo $a++ . "<br>";
    case 4:
        echo $a++ . "<br>";
    case 5:
        echo $a++ . "<br>";
    case 6:
        echo $a++ . "<br>";
    case 7:
        echo $a++ . "<br>";
    case 8:
        echo $a++ . "<br>";
    case 9:
        echo $a++ . "<br>";
    case 10:
        echo $a++ . "<br>";
    case 11:
        echo $a++ . "<br>";
    case 12:
        echo $a++ . "<br>";
    case 13:
        echo $a++ . "<br>";
    case 14:
        echo $a++ . "<br>";
    case 15:
        echo $a++ . "<br>";
}

//вариант3:
function out_value($a){
	echo $a;
	$a++;
	if($a != 16){out_value($a);}
}

out_value($a);