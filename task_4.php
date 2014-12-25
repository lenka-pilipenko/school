<?php

// php task 4
// Есть случайное число от 1 до 100 включительно. Если число попало в промежуток от 1 до 10, вывести фразу "Число больше 1, но меньше 10" etc.


$number = rand(1,300);
$start = 1;
$end = 10;
$counter = null;// записываем переменную с значением null, для того что бы в дальнейшем записать в переменную числовое значение

echo "Number equals $number<br><br>";

for ($i = 1; $i <= 10; $i++) { // создаем цикл и записываем в него значения 
	if($number >= $start and $number <= $end){ // условие при котором наше рандомное число входит в интервал от $start до $end
		echo "Number found! <br>";
		$counter = $i; // присваиваем переменной  $counter значение $i, которое указывает на количество проведенных интераций 
		break;// при выполнении условия цикл остановится
	} else {
		echo "Iteration $i. Number not found. Keep looking.<br>";
		$start += 10; // увеличиваем значение переменных, определяющих интервал, на 10
		$end += 10;
	}
}

switch($counter){ 
	case 1:
		echo "In range from 1 to 10";
		break;
	case 2:
		echo "In range from 11 to 20";
		break;
	case 3:
		echo "In range from 21 to 30";
		break;
	case 4:
		echo "In range from 31 to 40";
		break;
	case 5:
		echo "In range from 41 to 50";
		break;
	case 6:
		echo "In range from 51 to 60";
		break;
	case 7:
		echo "In range from 61 to 70";
		break;
	case 8:
		echo "In range from 71 to 80";
		break;
	case 9:
		echo "In range from 81 to 90";
		break;	
	case 10:
		echo "In range from 91 to 100";
		break;
	default:
		echo "Number is not in range from 1 to 100 !<br>";
}

?>