<?php

// php task 8


$first_num = rand(1,50);
$second_num = rand(1,50);
$third_num =  rand(1,50);

function sum_of_two_biggest($first_num, $second_num, $third_num){ // create function with three arguments

	if ($first_num >= $second_num){ // compare the first two variables, we find biggest and smallest one
		$first_biggest = $first_num;
		$second_biggest = $second_num; 
	} if ($first_num < $second_num){
		$first_biggest = $second_num;
		$second_biggest = $first_num;
	} if ($second_biggest <= $third_num){ // compare smallest one with third variable
		$second_biggest = $third_num;
	}
	echo  "<br> First biggest =>". $first_biggest ."<br>";
	echo  "Second biggest =>".$second_biggest."<br>";
	
	$sum = $first_biggest + $second_biggest;
	return $sum;
}
echo  "First number ==> ". $first_num ."<br>";
echo  "Second number ==> ". $second_num ."<br>";
echo  "Third number ==> ". $third_num ."<br>";

echo "<br> The sum of two biggest number is " . sum_of_two_biggest($first_num, $second_num, $third_num);

?>