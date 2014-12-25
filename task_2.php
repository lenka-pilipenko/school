<?php

/* конспект
$number_array = array("a","b","c","d","e", "f"); // создаем массив
$number_random_text = $number_array[rand (0,5)]; // выводит рандомную букву 
$number_random = rand (1,300); // по идее выводит рандомное число
*/
//код

$number_rand = rand (1,300);
$number_array = array("a","b","c","d","e", "f"); // записываем в переменную масив с буквенными значениями 
$number_random_text = $number_array[rand (0,5)]; // присваиваем переменной одно из буквенных значений масива

if ($number_rand %2==0) { // при условии когда рандомное число четное, т.е остатое от деления на 2 равен 0
	$number_rand = $number_random_text;//в переменную записывается рандомная буква
		echo "The \"$number_random_text\" is not a number";
} if ( $number_rand %2!=0){ // при условии не делимости на 2, в переменной остается числовое значение, отрабатываем следущее условие
	if ( $number_rand <5 or $number_rand > 155 ) { // проверяем входит ли рандомное числовое значение в интервал от 5 до 155
		echo "The number $number_rand is not contained in the interval (5,155)";
	} else { // в остальных случаях когда число выходит за пределы интервала 
		echo "The number $number_rand is contained in the range (5,155)";
	}
}

?>