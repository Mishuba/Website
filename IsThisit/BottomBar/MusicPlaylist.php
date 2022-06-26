<?php
//the basics
$MFName = ("C:/Repository/Tech/Software Programming and Coding/Website/Tycadome");
$MFNameTwo = glob("C:/Repository/Tech/Software Programming and Coding/Website/Tycadome/*.{mp3,webm,ogg,wav}", GLOB_BRACE);
$musicPlaylist = array();
$SNPlaylist = array();
$musicPlaylistTwo = array();
$SNPlaylistTwo = array();
$changeSong = 0;

//working now
$checkMF = file_exists($MFName);
    $orNah = is_dir($MFName);
        $musicFolder = dir($MFName);
            $openMF = opendir($MFName);
                $DotsSongArray = scandir($MFName);

$checkTwoMF = file_exists($MFNameTwo);
    $orNahTwo = is_dir($MFNameTwo);
        $musicFolderTwo = dir($MFNameTwo);
            $openMFTwo = opendir($MFNameTwo);
                $DotsSongArrayTwo = scandir($MFNameTwo);

//name this step
$Song = array_diff($DotsSongArray, array('.','..'));
$SongAtl = array_diff($DotsSongArrayTwo, array('.','..'));

$SongNames = array_values($Song); 
$SongNamesAtl = array_values($SongAtl);


//arrays
for ($changeSong; $changeSong <= count($Song); $changeSong++) 
    {
        array_push($musicPlaylist, $Song);
    }

for ($changeSong; $changeSong <= count($SongAtl); $changeSong++) 
    {
        array_push($musicPlaylistTwo, $SongAtl);
    }

for ($changeSong; $changeSong <= count($SongNames); $changeSong++) 
    {
        array_push($SNPlaylist, $SongNames);
    }

for ($changeSong; $changeSong <= count($SongNamesAtl); $changeSong++) 
    {
        array_push($SNPlaylistTwo, $SongNamesAtl);
    }

//global version


//Important
$nowPlayingMusic = reset($Song);
$lastSong = end($Song);
$nowPlayingMusicTwo = reset($SongAtl);
$lastSongTwo = end($SongAtl);

$beginningPlaylist = reset($musicPlaylist);
$EndOfPlaylist = end($musicPlaylist);
$beginningPlaylistTwo = reset($musicPlaylistTwo);
$EndOfPlaylistTwo = end($musicPlaylistTwo);

$SongOne = reset($SongNames);
$finalSong = end($SongNames);
$SongUno = reset($SongNamesAtl);
$SongReally = end($SongNamesAtl);

$startOfPlaylist = reset($SNPlaylist);
$EndOfPlaylist = end($SNPlaylist);
$startOfPlaylistTwo = reset($SNPlaylistTwo);
$EndOfPlaylistTwo = end($SNPlaylistTwo);


//$currentSong = array_walk($musicPlaylist, playMusic());

//start the audio
        function playMusic(){
            foreach($musicPlaylist as $playSongs) {
                fopen($playSongs, "r");
                feof(fclose($playSongs)); }
                return $playSongs;
        }
//Skip function to play next song
            function nextSong() {
                foreach($musicPlaylist as $Songs)
                    if ($playSongs == $beginningPlaylist) {         
                        fopen($Songs++);
                        feof(fclose($Songs));   
                    } else if ($playSongs == $EndOfPlaylist) {
                        fopen(reset($Songs));
                        feof(fclose($Songs));
                    } else if ($playSongs == $Songs) {
                        fopen($Songs++);
                        feof(fclose($Songs));
                    } else if ($playSongs !==$Songs) {
                        fopen($Songs[$playSongs]++);
                        feof(fclose($Songs));
                    } else {
                        echo("<script> alert('something is fucked up') </script>");
                    }
                    return $Songs;
            }

//Previous Song
            function pastSong() {
                foreach($musicPlaylist as $Songs)
                if ($playSongs == $beginningPlaylist) {         
                    fopen(end($Songs));
                    feof(fclose($Songs));   
                } else if ($playSongs == $EndOfPlaylist) {
                    fopen($Songs--);
                    feof(fclose($Songs));
                } else if ($playSongs == $Songs) {
                    fopen($Songs--);
                    feof(fclose($Songs));
                } else if ($playSongs !==$Songs) {
                    fopen($Songs[$playSongs]--);
                    feof(fclose($Songs));
                } else {
                    echo("<script> alert('something is fucked up') </script>");
                }
                return $Songs;
            }
// shuffles current audio
            function randomSong() {
                $randomMusic = rand($beginningPlaylist, $EndOfPlaylist);
                $WhereIsIt = pathinfo($randomMusic);
                $thisIsWhat = filetype($randomMusic);
                $infoPlease = stat($randomMusic);
                $willThisWork = is_executable($randomMusic);
                if($willThisWork) {
                    fopen($randomMusic);
                    feof(fclose($randomMusic));
                } else {
                    print_r($infoPlease . 'will not work here is the path ' . $WhereIsIt);
                }
                return $randomMusic;
            }

            function chooseSong() {
                        do {
                            if ($changeSong == $musicPlaylist) {
                                print($musicPlaylist[$changeSong]);
                                $changeSong++; }
                                    else {
                                        break;
                                    }
                            }
                    while ($changeSong <= $musicPlaylist);
                return $musicPlaylist[$changeSong];
            }


/*
//filesystem variables ([{I am going to test all of these below with firstsong or $Song or $beginningPlaylist}])
basename(); //returns the filename component of a path

dirname(); //returns the directory name component of a path

feof(); // checks if the "end-of-file" (EOF) has been reached for an open file

file(); // reads a file into an array

file_exists(); // checks whether or not a file or directory exists

filesize(); // returns the file size

filetype(); // returns the file type

fpassthru(); //reads from the current position in a file - until EOF, and writes the result to the output buffer

fseek(); //Seeks in an open file

fstat(); // Returns information about an open file

ftell(); // Returns the current position in an open file

glob(); // Returns an array of filenames/ directories matching a specified pattern

is_dir(); // checks whether a file is a directory

is_executable(); // checks whether a file is executable

is_file(); //checks whether a file is a regular file

is_link(); // check whether a file is a link

link(); // creates a hard link

Istat(); // Returns information about a file or symbolic link

pathinfo(); // returns information about a file path

pclose(); // closes a pipe opened by popen()

popen(); // opens a pipe

readfile(); // reads a file and writes it to the output buffer

realpath(); // returns the absolute pathname

realpath_cache_get(); //returns realpath cache entries

realpath_cache_size(); // returns realpath cache size

rename(); // renames a file or directory

stat(); // returns an array with [0] = device number,[1] = inode number, [2] = Inode protection mode, [3] = Number of links, [4] = User ID of owner, [5] = Group ID of owner, [6] = Inode device type, [7] = Size in bytes, [8] = Last access time as Unix timestamp, [9] = Last modified time as Unix timestamp, [10] = Last inode change time as Unix timestamp, [11] = Blocksize of filesystem IO, [12] = Number of blocks allocated.

tempnam(); // creates a unique temporary file

tmpfile(); // creates a unique temporary file

touch(); // sets access and modification time of a file

umask(); // Changes file permissions for files

unlink(); // Deletes a file 
*/



// fopen(filename, mode(use r, r+, w, w+, a, a+, x, x+, c, c+), include_path, context)
?>