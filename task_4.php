<?php

// php task 4
// ���� ��������� ����� �� 1 �� 100 ������������. ���� ����� ������ � ���������� �� 1 �� 10, ������� ����� "����� ������ 1, �� ������ 10" etc.


$number = rand(1,300);
$start = 1;
$end = 10;
$counter = null;// ���������� ���������� � ��������� null, ��� ���� ��� �� � ���������� �������� � ���������� �������� ��������

echo "Number equals $number<br><br>";

for ($i = 1; $i <= 10; $i++) { // ������� ���� � ���������� � ���� �������� 
	if($number >= $start and $number <= $end){ // ������� ��� ������� ���� ��������� ����� ������ � �������� �� $start �� $end
		echo "Number found! <br>";
		$counter = $i; // ����������� ����������  $counter �������� $i, ������� ��������� �� ���������� ����������� ��������� 
		break;// ��� ���������� ������� ���� �����������
	} else {
		echo "Iteration $i. Number not found. Keep looking.<br>";
		$start += 10; // ����������� �������� ����������, ������������ ��������, �� 10
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