<?php 

require('db/connect.php'); 


if($delete = $db->query('DELETE FROM people WHERE id = 3')){
    
    echo $db->affected_rows;
    
}