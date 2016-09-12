<?php

require('db/connect.php');


//RETURN ALL DATA FROM DATABSE USING DB OBJECT

if($query = $db->query('SELECT * FROM people') OR die('Nopedy Dopedy')) {
    
    if($count = $query->num_rows) {
        
        echo '<p>', $count, '</p>';
        
        while($row = $query->fetch_object()) {
            
            echo $row->first_name, ' ', $row->last_name, '<br>';
            
        }
        
    }
    
}




?>

