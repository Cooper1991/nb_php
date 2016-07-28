<?php 

//Looping through a string

$string = 'Jack';

$string_length = strlen($string); //returns 4

for($x =1; $x <= $string_length; $x++){
	echo $x . "<br>";
}


//Convert string to lowercase & uppercase

$case = 'This is a normal string';

$case_lower = strtolower($case);
$case_upper = strtoupper($case);

echo $case_lower . "<br>";
echo $case_upper . "<br>";


?>