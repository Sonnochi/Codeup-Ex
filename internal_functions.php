<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

function check($nothing) {
	if (empty($nothing)) {
		echo "\$nothing is EMPTY. \n";
	}
	else {
		echo "\$nothing is not EMPTY. \n";
	}
}
check($nothing);
check($something);
check($array);