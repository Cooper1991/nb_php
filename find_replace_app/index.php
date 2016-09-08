<?php

$offset = 0;

if(isset($_POST['text']) &&isset($_POST['searchfor']) &&isset($_POST['replacewith'])){
	
	$text = $_POST['text'];
	$search = $_POST['searchfor'];
	$replace = $_POST['replacewith'];
	
	$string_length = strlen($text);
	
	if(!empty($text) && !empty($search) && !empty($replace)){
		
		while($strpos = strpos($text, $search, $offset)){
			
			$offset = $strpos + $string_length;
			$text = substr_replace($text, $replace, $strpos, $string_length);
			
			echo $text;
			
		}
		
	} else {
		
		echo 'Please fill in all fields';
		
	}
	 style="color: #648500
}



?>


<form action="index.php" method="POST">

	<textarea name="text" rows="6" col="30"></textarea> <br><br>
	Search: <br>
	<input type="text" name="searchfor"> <br><br>
	Replace with: <br>
	<input type="text" name="replacewith"> <br><br>
	<input type="submit" value="Find and Replace">

</form>