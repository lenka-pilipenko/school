<?php

// php task 7
// Написать функцию, которая принимает на вход строку, состоящую из нескольких слов, и выводит эти слова в обратном порядке. 


function text_line($first_word, $second_word, $third_word, $forth_word, $fifth_word) {
	echo "$fifth_word $forth_word $third_word $second_word $first_word";
}
echo text_line("ups", "I", "did", "it", "again");


?>