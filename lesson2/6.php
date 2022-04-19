<?php

echo power(2, 4);

function power($val, $pow){
	if ($pow === 0){return 1;} 
	elseif ($pow < 0) {
		if ($val === 0) {return "Ошибка";}
		return 1 / ($val * power($val, -$pow - 1));
	}
    return $val * power($val, $pow - 1);
}