//вариант1
<?php

function mathOperation($arg1, $arg2, $operation){

switch ($operation) {
  case "numAddition": 
  return numAddition($arg1, $arg2);
      
  case "numSubtraction":
  return numSubtraction($arg1, $arg2);
    
  case "numMultiplication":
  return numMultiplication($arg1, $arg2);
    
  case "numDivision":
  return numDivision($arg1, $arg2);
  
  default:
  return "operation not found";
}
}

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

echo mathOperation(5, 0, "numDivision");

//вариант2
/*
function mathOperation($arg1, $arg2, $operation){
$result = $operation($arg1, $arg2);
return "result = " . $result;
}

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

echo mathOperation(5, 0, "numMultiplication");*/