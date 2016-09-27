<?php

require 'connect.php';

if($update = $db->query('UPDATE people SET created = NOW() WHERE id = 1')){
	
	echo $db->affected_rows;
	
}