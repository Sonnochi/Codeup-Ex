<?php

// Converts array into list n1, n2, ..., and n3
 function humanizedList($array, $alphabetize = false) {
   // Your solution goes here!
 	if($alphabetize){
 	asort($array);
 }
 	$last_item = array_pop($array);
 	$string = implode(', ', $array);
 	return $string . ', and ' . $last_item;
 }

 // List of famous peeps
 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = explode(', ', $physicistsString);

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray, true);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";