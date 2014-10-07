<?php

// $data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
// foreach ($data as $datum) {
//     if (is_numeric($datum)) {
//         echo "{$datum} is a number\n";
//     } else if (is_string($datum)) {
//         echo "{$datum} is a string\n";
//     }
// }

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $thing) {
	if (is_string($thing)){
		echo "{$thing} is a string\n";
	}
	elseif (is_int($thing)) { 
		echo "{$thing} is an integer\n";
	}
	elseif (is_array($thing)) {
		echo "$thing is an array.  It has the values: ";
			foreach($thing as $element){
				echo "$element ";
			}
		echo "\n";
		}
	elseif (is_float($thing)) {
		echo "{$thing} is a float\n";
	}
	elseif (is_bool($thing)) {
		echo "{$thing}is a boolean\n";
	}
	elseif (is_null($thing)) {
		echo "{$thing} is a null\n";
	}
}