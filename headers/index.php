
<h1>Hello World</h1>

<?php

//Header function can be used to redirect as user (But not exclusively for that)
//header will not run if their is HTML before it, only after

$redirect_page = 'http://bbc.co.uk';
$redirect = true;

if($redirect == true){

header('Location:' . $redirect_page);	
	
}
