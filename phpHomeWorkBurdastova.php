<html>
<head>
	<title> "Home Work Burdastova" </title>
</head>

<body>
 
<?php
// php task 1

/*
$n_rand = rand (1, 19);
$m_rand = rand (1, 19);
$abs_value_n = abs(10-$n_rand);
$abs_value_m = abs(10-$m_rand);

if( $abs_value_m < $abs_value_n ){
	echo "From two values \"$abs_value_n\" and \"$abs_value_m\" the closest to 10 is \"$abs_value_m\"";
} elseif( $abs_value_n < $abs_value_m ) {
	echo "From two values \"$abs_value_n\" and \"$abs_value_m\" the closest to 10 is \"$abs_value_n\"";;
} else {
	echo "\"n\" equally \"m\"";
}
*/

// php task 2

/* конспект
$number_array = array("a","b","c","d","e", "f"); // создаем массив
$number_random_text = $number_array[rand (0,5)]; // выводит рандомную букву 
$number_random = rand (1,300); // по идее выводит рандомное число
*/
//код
/*
$number_rand = rand (1,300);
$number_array = array("a","b","c","d","e", "f");
$number_random_text = $number_array[rand (0,5)];

if ($number_rand %2==0) {
	$number_rand = $number_random_text;
		echo "The \"$number_random_text\" is not a number";
} if ( $number_rand %2!=0){
	if ( $number_rand <5 or $number_rand > 155 ) {
		echo "The number $number_rand is not contained in the interval (5,155)";
	} else {
		echo "The number $number_rand is contained in the range (5,155)";
	}
}
*/
/* только с числовым значением
$number = rand (1,300);
echo "$number";

if ( $namber <5 or $namber > 155 ) {
	echo "The number $number is not contained in the interval (5,155)";
	}
	else {
		echo "The number $number is contained in the range (5,155)";
	}
*/

/* php task 3

/* конспект
$a = 1
$b = 10
$my_custom_value = 0;


ЦИКЛ ОТ $i = 1 до 10:
 IF ПЕРЕМЕННАЯ БОЛЬШЕ ИЛИ РАВНА 1 И МЕНЬШЕ ЛИБО РАВНО 10
  $i++;
  $my_custom_value++;
 ELSE
  $a и $b увеличить на 10

SWITCH($my_custom_value)
[17.11.2014 17:27:27] Serge Holodny: :D типо код, но словами) Так разработчики думают как бы им сделать такую-то шнягу.
http://php.net/manual/en/control-structures.switch.php
*/

$my_number = rand (1,100);
echo "$my_number";
*/

?>

</body>

</html>