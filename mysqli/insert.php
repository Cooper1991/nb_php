<?php

require('db/connect.php');


if(isset($_GET['first_name'])) {
    
    $firstname = $db->real_escape_string(trim($_GET['first_name']));

    if($insert = $db->query("INSERT INTO people (first_name, last_name, bio, created) VALUES ('{$firstname}', 'Taylor', 'Drives bleedin fast cars', NOW())")){

        echo $db->affected_rows;

    }  
    
}
