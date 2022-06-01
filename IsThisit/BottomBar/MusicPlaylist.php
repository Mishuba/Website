<?php
// creating the variables I believe I need to choose which song.
$musicFolder = "Tycadome";
$Song = scandir($musicFolder, SCANDIR_SORT_ASCENDING);
foreach($Song as $key=>$filename)
{
    if($filename!="." && $filename!="..")
    {
        print("<div class=\"track\" onclick=\"setSource('$filename')\">" . $filename . "</div>\n");
    }
}
// what im working on below
/*
$musicList = array();
    
$nowPlayinMusic = "";

    $musicFolder = "./../../Tycadome/><source>";
    $openMF = opendir($musicFolder);
    $scanMF = scandir($musicFolder);
    $noDotsMF = array_diff($scanMF, array('.','..'));
    $musicValues = array_values($noDotsMF); 
    $TwoSong = fopen("./../../Tycadome/Try To Stop Me Radio Edit.mp3");
    for ($Ithink = 0; $Ithink <= $musicValues; $Ithink++) {
            array_push($musicList[], $musicValue);
    }
    function nextSong() {
    for ($now = 0; $now <=$musicList; $now++) {
        if ($now == $musicList[0]) {
            $TwoSong;
            print($musicList);
        } elseif ($now !== $musicList[0]) 
                print($musicList);
        } else {
            print ("no more music");
        }
    }
    return $idkyet;
}
*/


// end of what im working on.
// think about using fopen()  and fclose() for this music player you are trying to create. 

    /*
    if(!file_exists($okMusic)) {
        Echo ("create something that chooses a song")
    } else {
        echo ("Not Working How I want It To");
    }
return
}
    */









/*
$musicPlaying = "";

$javaScriptElement = "";
function options() {
    switch ($javaScriptElement) {
        case "random":
        break;
        
        case "next":
        break;

        case "abc":
        break;

        case "zyx":
        break;
        
        case "date":
        break;
        
        case "time":
        break;

        case "numerical":
        break;

        default:
        break;
    }
}
*/







/*
function clean_scandir($dir) {
    return array_values(array_diff(scandir($local), array('.','..')));
}


//opendir()
$files9 = array();
$handle = opendir($local);

if ($handle = opendir($local)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..') {
            $files9[] = $file;
        }
    }
    closedir($handle);
}
print_r($files9);


function clean_readdir($dir) {
    if ($handle = opendir($dir)) {
        while (false !== $file = readdir($handle)) {
            if ($file != '.' && $fie != '..') {
                $files9[] = $file;
            }
        }
        closedir($handle);
    }
    return;
}

    $directory = array_diff($result, ['.'. '..']);
    var_dump($directory);
    foreach($directory as $dir) {
        echo $dir . PHP_EOL;
    }


    $result = scandir($path);
    $directory = array_diff($result, ['.', '..']);
    var_dump($directory);
        foreach($directory as $dir) {
            if (is_dir($path . "/" . $dir) ) {
                echo $dir . PHP_EOL;
            }
        }

$result = glob("*.php");
var_dump($result);

copy("something", "new name");
*/

?>