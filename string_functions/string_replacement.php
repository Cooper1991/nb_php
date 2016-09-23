<?php

// substr() // Returns part of a String

// str_replace() //find a string within a string and replace it with specified string

$sentence = 'This is a sentence';
$find = array('This', 'a', 'sentence');

$replace = array('One', 'simply', 'SENTENCE');

$new_sentence = str_replace($find, $replace, $sentence);//1st param = what to replace, 2nd param = what to replace with, 3rd param = what string to replace info with 

echo $new_sentence . "<br>";




//Args (String to look at, string to replace, where to start, where to end)
// substr_replace()

$string = 'This part don\'t replace. This part replace.';
$string_new = substr_replace($string, 'jack', 30, 4);

echo $string_new;

 ?>
