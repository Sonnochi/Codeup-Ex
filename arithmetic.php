<?php
function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b . PHP_EOL;
    } else {
        echo "ERROR: Please input only numeric values. Note that $a is \$a, $b is \$b." . PHP_EOL;
    }
}
echo add(8, 18);
add(dog, cat);

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b . PHP_EOL;
    } else {
        echo "ERROR: Please input only numeric values. Note that $a is \$a, $b is \$b." . PHP_EOL;
    }	
}
echo subtract(8, 18);
subtract(lion, tiger);

function multiply($a, $b) {
	    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b . PHP_EOL;
    } else {
        echo "ERROR: Please input only numeric values. Note that $a is \$a, $b is \$b."  . PHP_EOL;
    }
}
echo multiply(8, 18);
multiply(rabbit, rabbit);

function divide($a, $b){
	    if (is_numeric($a) && is_numeric($b)) {
        return (int)($a / $b) . PHP_EOL;
    } else {
        echo "ERROR: Please input only numeric values. Note that $a is \$a, $b is \$b." . PHP_EOL;
    }
}
echo divide(80, 18);
divide(cell, cell);

function modulus($a, $b){
	    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b . PHP_EOL;
    } else {
        echo "ERROR: Please input only numeric values. Note that $a is \$a, $b is \$b." . PHP_EOL;
    }
}
echo modulus(8, 18);
modulus(bears, trees);
