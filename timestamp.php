<?php

$time = time(); //Seconds in Jan 1st 1970

$actual_time = date('D M Y @ H:i:s', $time); //Format, Time to convert from

echo 'The current date/time is ' . $actual_time;