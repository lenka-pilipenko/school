<?php

// php task 1
// Создать программу, выводящую на экран ближайшее к 10 из двух чисел, записанных в переменные m и n. Например, среди чисел 8.5 и 11.45 ближайшее к десяти 11.54


$n_rand = rand (1, 19);
$m_rand = rand (1, 19);
$abs_value_n = abs(10-$n_rand);
$abs_value_m = abs(10-$m_rand);

if( $abs_value_m > $abs_value_n ){
	echo "From two values \"$abs_value_n\" and \"$abs_value_m\" the closest to 10 is \"$abs_value_m\"";
} elseif( $abs_value_n > $abs_value_m ) {
	echo "From two values \"$abs_value_n\" and \"$abs_value_m\" the closest to 10 is \"$abs_value_n\"";;
} else {
	echo "\"n\" equally \"m\"";
}


?>