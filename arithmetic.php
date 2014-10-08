<?php
function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b . PHP_EOL;
    } else {
        echo "ERROR: Both $a and $b must be numbers" . PHP_EOL;
    }
}
add(8, 18);
add(dog, cat);
function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a - $b . PHP_EOL;
    } else {
        echo "ERROR: Both $a and $b must be numbers" . PHP_EOL;
    }	
}
subtract(8, 18);
subtract(lion, tiger);
function multiply($a, $b) {
	    if (is_numeric($a) && is_numeric($b)) {
        echo $a * $b . PHP_EOL;
    } else {
        echo "ERROR: Both $a and $b must be numbers" . PHP_EOL;
    }
}
multiply(8, 18);
multiply(rabbit, rabbit);
function divide($a, $b){
	    if (is_numeric($a) && is_numeric($b)) {
        echo (int)($a / $b) . PHP_EOL;
    } else {
        echo "ERROR: Both $a and $b must be numbers" . PHP_EOL;
    }
}
divide(80, 18);
divide(cell, cell);
function modulus($a, $b){
	    if (is_numeric($a) && is_numeric($b)) {
        echo $a % $b . PHP_EOL;
    } else {
        echo "ERROR: Both $a and $b must be numbers" . PHP_EOL;
    }
}
modulus(8, 18);
modulus(bears, trees);
