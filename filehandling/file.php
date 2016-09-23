<?php


$handle = fopen('names.txt', 'w');

fwrite($handle, 'Jack');
fwrite($handle, 'James');

fclose($handle);


?>