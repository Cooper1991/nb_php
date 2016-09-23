<?php


require 'connect.php';

if($result = $db->query('SELECT * FROM people')){
	
	if($count = $result->num_rows){
	
		while($row = $result->fetch_object()){
			
			echo $row->first_name, ' ', $row->last_name, '<br>';
		}
		
		$result->free();
	}
	
}

