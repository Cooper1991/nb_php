<?php 

require 'connect.php';

if(isset($_GET['first_name'])) {
	
	$first_name = trim($_GET['first_name']);
	
	if($insert = $db->query("INSERT INTO people(first_name, last_name, bio, created) VALUES ('{$first_name}', 'Jammy', 'Fruit Picker', NOW())")); {
		
		echo $db->affected_rows;
		
	}
	
}