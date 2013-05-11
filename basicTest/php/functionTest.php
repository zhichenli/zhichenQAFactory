<?php

function addNumbers($num1, $num2) {
    $result = $num1 + $num2;
/*     return $result; */
	return $result;
}


function seeyou() {
	if (addNumbers(3,4)) echo "xxx";
	echo addNumbers(3,4);
}

seeyou();