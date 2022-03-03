<?php
echo (
        "Motto <br>" 
        . 
        date_default_timezone_set("America/New_York") 
        . 
        "The time is " 
        . 
        date("h:i:sa") 
    );
?>