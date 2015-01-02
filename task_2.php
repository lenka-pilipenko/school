<?php

// php task 2

$number_rand = rand (1,300);
$text_array = array("a","b","c","d","e", "f"); // write in a variable an array with the letters
$random_text = $text_array[rand (0,5)]; // assign a variable one of the alphabetic array values

if ($number_rand %2==0) { // provided when randomly number is even
	$number_rand = $random_text;
		echo "The \"random_text\" is not a number";
} else { 
	if ( $number_rand <5 or $number_rand > 155 ) { 
		echo "The number $number_rand is not contained in the interval (5,155)";
	} else { 
		echo "The number $number_rand is contained in the range (5,155)";
	}
}

?>