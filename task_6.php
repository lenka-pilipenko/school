<?php


// php task 6


function sum_of_two($first_num, $second_num){ 
	echo "The sum of " . $first_num . " and " . $second_num . " equals ==> " . ($first_num + $second_num) . "<br>";
	return $first_num + $second_num;
}
sum_of_two(rand(1,50), rand(1,50));


function subtraction_of_two($first_num, $second_num){ 
	echo "<br> The subtraction of " . $first_num . " and " . $second_num . " equals ==> " . ($first_num - $second_num) . "<br>";
	return $first_num - $second_num;	
}
subtraction_of_two(rand(1,50), rand(1,50));


function mult_of_two($first_num, $second_num){ 
	echo "<br> The mult of " . $first_num . " and " . $second_num . " equals ==> " .($first_num * $second_num) . "<br>";
	return $first_num * $second_num;
}
mult_of_two(rand(1,50), rand(1,50));


function division_of_two($first_num, $second_num){ 
	echo "<br> The division of " . $first_num . " and " . $second_num . " equals ==> " .($first_num / $second_num) . "<br>";
	return $first_num / $second_num;
}
division_of_two(rand(1,50), rand(1,50));




?>