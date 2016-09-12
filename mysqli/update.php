<?php 

require('db/connect.php');

//UPDATE ENTRY IN DATABASE

if($update = $db->query("UPDATE people SET last_name='Whiting' WHERE id = 2")){
    
    echo $db->affected_rows; 
    
}




?>