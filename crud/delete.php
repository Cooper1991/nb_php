<?php

require 'connect.php';

if($delete = $db->query("DELETE FROM people WHERE id = 2")){
	
	echo $db->affected_rows;
	
}