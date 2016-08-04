
<?php 

$offset = 0;

$find = 'is';

$find_length = strlen($find);

$string = 'This is a string, it is normal';

while($string_position = strpos($string, $find, $offset)){
	
	echo $find . ' at position ' . $string_position . '<br>';
	$offset = $string_position + $find_length;
	
}



?>

