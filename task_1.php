<?php

// php task 1


$n_rand = rand (1, 50); 
$m_rand = rand (1, 50);
$abs_value_n = abs(10-$n_rand);// create a new variable and write in the rest of the difference between the variable and the number 10 
$abs_value_m = abs(10-$m_rand);

if( $abs_value_m > $abs_value_n ){ // the smallest difference indicates the nearest number 
	echo "<br>From two values \"$abs_value_n\" and \"$abs_value_m\" the closest to 10 is \"$abs_value_n\"";
} elseif( $abs_value_n > $abs_value_m ) {
	echo "<br>From two values \"$abs_value_n\" and \"$abs_value_m\" the closest to 10 is \"$abs_value_m\"";;
} else {
	echo "\"n\" equally \"m\"";
}


?>