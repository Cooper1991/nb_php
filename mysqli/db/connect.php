<?php

$db = new mysqli('Localhost', 'root', '87purple87', 'app');

if($db->connect_errno){
    die('Sorry, we are having a problem connecting');
}