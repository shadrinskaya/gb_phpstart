<?php

function numAddition($num1, $num2){
		return $num1 + $num2;
}

function numSubtraction($num1, $num2){
		return $num1 - $num2;
}

function numMultiplication($num1, $num2){
		return $num1 * $num2;
}

function numDivision($num1, $num2){
		return ($num2 == 0) ? ("incorrect value $num2") : ($num1 / $num2);
}

echo "6 + 4 = " . numAddition(6, 4) . "<br>";
echo "6 - 4 = " . numSubtraction(6, 4) . "<br>";
echo "6 * 4 = " . numMultiplication(6, 4) . "<br>";
echo "6 / 0 = " . numDivision(6, 0) . "<br>";
echo "6 / 3 = " . numDivision(6, 3) . "<br>";