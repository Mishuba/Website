<?php
echo (
        "<span id='Motto'> <h> Motto <br>" 
        . 
        date_default_timezone_set("America/New_York") 
        . 
        "The time is " 
        . 
        date("h:i:sa") 
        . 
        "</h> <p id='MottoPara'> We want to inspire </p> </span>"
    );
echo (
        "<span id='Tycadome'> <h id='MiddleHeader'> </h> <p> <br> <img id='ummm' src='pictures/Untitled-1.jpg '> </p> </span>"
    );

echo (
        "<span id='Mantra'> <h> Mantra <br>"
        . 
        $d1=strtotime('July 04');
        $d2=ceil(($d1-time())/60/60/24);
        .
        "There are " 
        . 
        $d2 
        .
        " days until 4h of July. </h> <p id='MantraPara'> My inner self helps unify beautiful art. </p> </span>"
    );