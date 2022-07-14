<?php
date_default_timezone_set("America/New_York");

$d1 = strtotime("May 05, 2023"); //find the problem here

$d2 = ceil(($d1-time())/60/60/24); // find the problem here

echo (
    date("h:i:sa")
    . "<br>"
);

echo (
    "There are " 
    . 
    $d2 // the two issues above should fix this problem.
    .
    " days until the 18th of May during year 2023"
);
?>
