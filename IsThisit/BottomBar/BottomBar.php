<?php
$test =readfile("./Music/Try To Stop Me Radio Edit.mp3");
$myfile = fopen("./Music/Try To Stop Me Radio Edit.mp3", "r") or die ("Unable to open file!");
$now = filesize("./Music/Try To Stop Me Radio Edit.mp3");
$done = fclose($myfile);
