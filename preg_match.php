<?php 

function has_match($string){
	
	if(preg_match('/ /', $string)){
		return true;
	} else {
		return false;
	}
}


$string = 'Thisisastring';


if(has_match($string)){
	
	echo "Has spaces";
} else {
	echo "Has no spaces";
}