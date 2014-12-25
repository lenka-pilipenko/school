<?php


// php task 6
// —оздать 4 функции дл€ вычислени€ суммы двух чисел, дл€ вычислени€ их разницы, умножени€ и делени€. 



$first_num = rand(1,50); // создаем переменные и присваиваем им рандомные значени€
$second_num = rand(1,50);

function sum_of_two($first_num, $second_num){ //сочетание
	$sum = $first_num + $second_num;
	return $sum;
}
echo "The sum of " . $first_num . " and " . $second_num . " equals ==> " . sum_of_two($first_num, $second_num) . "<br>";

//$first_num = rand(1,50);
//$second_num = rand(1,50);

function subtraction_of_two($first_num, $second_num){ // вычетание
	$subtraction = $first_num - $second_num;
	return $subtraction;	
}
echo "<br> The subtraction of " . $first_num . " and " . $second_num . " equals ==> " . subtraction_of_two($first_num, $second_num) . "<br>";

function mult_of_two($first_num, $second_num){ // умножение
	$mult = $first_num * $second_num;
	return $mult;
}
echo "<br> The mult of " . $first_num . " and " . $second_num . " equals ==> " . mult_of_two($first_num, $second_num) . "<br>";

function division_of_two($first_num, $second_num){ // деление
	$division = $first_num / $second_num;
	return $division;
}
echo "<br> The division of " . $first_num . " and " . $second_num . " equals ==> " . division_of_two($first_num, $second_num) . "<br>";


?>