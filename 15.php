<?php

$a = 5;

$b = 0;

$operator = "/"; //‘+’ или ‘-’ или ‘/’ или ‘*’ или '%'

switch ($operator) {
	case "+":
		$result = $a + $b;
		echo "$result";
	break;
	
	case "-":
		$result = $a - $b;
		echo "$result";
	break;

	case "/":
		if ($b != 0) {
			$result = $a / $b;
			echo "$result";
		} else echo 'на 0 делить нельзя';
	break;

	case "*":
		$result = $a * $b;
		echo "$result";
	break;

	case "%":
		$result = $a % $b;
		echo "$result";
	break;
}

