<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR']; 

if(!empty($http_client_ip)){
	
	$client_ip = $http_client_ip;
	
} else if (!empty($http_x_forwarded_for)) {
	
	$client_ip = $http_x_forwarded_for;
	
} else {
	
	$client_ip = $remote_addr;
	
};

echo $client_ip;

var person = {
    firstname:"John",
    lastname:"Doe",
    age:50,
    eyecolor:"blue"
};
document.getElementById("demo").innerHTML =
person.firstname + " is " + person.age + " years old.";