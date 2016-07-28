<?php 

//Looping through a string

$string = 'Jack';

$string_length = strlen($string); //returns 4

for($x =1; $x <= $string_length; $x++){
	echo $x . "<br>";
}


//Convert string to lowercase

$string2 = 'This is a normal case';

$string2_lower = strtolower($string2);

echo $string2_lower;

echo "<br>";

//Convert string to uppercase

$string3 = 'This is another case';

$string3_upper = strtoupper($string3);

echo $string3_upper;

?>