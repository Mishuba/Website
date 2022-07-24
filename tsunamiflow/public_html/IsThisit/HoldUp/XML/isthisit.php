<?php

/*
The conternt type of the repsonse header must be set to "text/xml"
*/
header("Content-type: text/xml");
echo ("?xml version='1.0' encoding='UTF-8'?");
echo ("<note>");
echo ("<from> jani </from>");
echo ("<to> Tove </to>");
echo ("<message> Remember me this weekend </message>");
echo ("</note>");
?>

