<?php

/* ��������
$number_array = array("a","b","c","d","e", "f"); // ������� ������
$number_random_text = $number_array[rand (0,5)]; // ������� ��������� ����� 
$number_random = rand (1,300); // �� ���� ������� ��������� �����
*/
//���

$number_rand = rand (1,300);
$number_array = array("a","b","c","d","e", "f"); // ���������� � ���������� ����� � ���������� ���������� 
$number_random_text = $number_array[rand (0,5)]; // ����������� ���������� ���� �� ��������� �������� ������

if ($number_rand %2==0) { // ��� ������� ����� ��������� ����� ������, �.� ������� �� ������� �� 2 ����� 0
	$number_rand = $number_random_text;//� ���������� ������������ ��������� �����
		echo "The \"$number_random_text\" is not a number";
} if ( $number_rand %2!=0){ // ��� ������� �� ��������� �� 2, � ���������� �������� �������� ��������, ������������ �������� �������
	if ( $number_rand <5 or $number_rand > 155 ) { // ��������� ������ �� ��������� �������� �������� � �������� �� 5 �� 155
		echo "The number $number_rand is not contained in the interval (5,155)";
	} else { // � ��������� ������� ����� ����� ������� �� ������� ��������� 
		echo "The number $number_rand is contained in the range (5,155)";
	}
}

?>