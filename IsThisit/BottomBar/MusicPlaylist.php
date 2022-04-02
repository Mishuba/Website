<?php

echo (
    readfile("./Music/Try To Stop Me Radio Edit.mp3");
    $myfile = fopen("./Music/Try To Stop Me Radio Edit.mp3", "r") or die ("Unable to open file!");
    echo fread($myfile,filesize("./Music/Try To Stop Me Radio Edit.mp3"));
    fclose($myfile);
    . 
    "<audio id='TFmusicPlayer' controls>
        <source src='./Music/Try To Stop Me Radio Edit.mp3' type='audio/mpeg'>
        your device does not support the audio.
        </audio>
    "
);
?>