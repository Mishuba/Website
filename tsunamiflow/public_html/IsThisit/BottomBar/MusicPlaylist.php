<?php
//the basics
$changeSong = 0;

$musicPath = ("../../Music/Mp3music");
$MFName = realpath($musicPath);
    $checkMF = file_exists($MFName);
        $Mp3music = glob($MFName);
            $musicDir= json_encode($Mp3music); /// try this json_encode(realpath($Mp3music));
                    $orNah = is_dir($MFName);
                        $musicFolder = dir($MFName);
                            $openMF = opendir($musicFolder);
                                    $Song = array_diff($Mp3music, array(".", ".."));
                                        $musicSongs =json_encode($Song);
                                            $nowPlayingMusic = reset($Song);
                                            $lastSong = end($Song);
                                                $SongNames = array_values($Song); 
                                                    $musicNS = json_encode($SongNames);
                                                        $musicPlaylist = array();
                                                            $musicArray = json_encode($musicPlaylist);
                                                                $beginningPlaylist = reset($musicPlaylist);
                                                                $EndOfPlaylist = end($musicPlaylist);
                                                                    for ($changeSong; $changeSong <= count($Song); $changeSong++) 
                                                                    {
                                                                        array_push($musicPlaylist, $Song);
                                                                    }
                                                                        $SongOne = reset($SongNames);
                                                                        $finalSong = end($SongNames);
                                                                            $SNPlaylist = array();
                                                                                for ($changeSong; $changeSong <= count($SongNames); $changeSong++) 
                                                                                {
                                                                                    array_push($SNPlaylist, $SongNames);
                                                                                }
                                                                                    $musicNames = json_encode($SNPlaylist);
                                                                                        $startOfPlaylist = reset($SNPlaylist);
                                                                                        $EndOfPlaylist = end($SNPlaylist);

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

?>

<script>

// learn more about ajax to finish the music player. This is the next and hopefully final step.

var trackindex = 0;
var currentSong = document.getElementById("currentMusic");

function startMusicPlease() {
    var musicTF = new XMLHttpRequest();
        musicTF.onload = function() {
            var workpleaseman = JSON.parse(this.responseText);  
                        musicTF.open("POST", "MusicPlaylist.php", true);
                        musicTF.setRequestHeader("content",)
                            var learningTFmusic = JSON.parse(<?php echo($musicSongs)?>);
                                for (trackindex; trackindex < learningTFmusic.length; trackindex++) {
                                    currentSong.src($learningTFmusic[trackindex]);
                                    currentsong.play();
                                        if (/*press pause*/) {
                                            currentsong.pause();
                                            currentSong.src.remove()
                                        } else if (/*press skip*/) {
                                            currentsong.pause();
                                            currentSong.src.remove()
                                            currentsong.src(learningTFmusic[trackindex++]);
                                            currentsong.play();
                                            currentsong.addEventListener("ended", "");
                                            currentsong.src.remove()
                                        } else  if (/*press backward*/) {
                                            currentsong.pause();
                                            currentSong.src.remove()
                                            currentsong.src(learningTFmusic[trackindex--]);
                                            currentsong.play();
                                            currentsong.addEventListener("ended", "");
                                            currentsong.src.remove()
                                        } else if (/*press random*/) {
                                            currentsong.pause();
                                            currentSong.src.remove()
                                            currentsong.src(learningTFmusic[Math.random(" " " " trackindex)]);
                                            currentsong.play();
                                            currentsong.addEventListener("ended", "");
                                            currentsong.src.remove()
                                        } else {
                                            currentsong.addEventListener("ended", "");
                                            currentSong.src.remove()
                                        }
                                }
                        musicTF.send();
                                    }    
                                }

/* I want to use this for loop for something. Not sure yet. possibly putting songs into an array and using the other for loop that is already completed to play and loop through the songs.

for (const x in learningTFmusic) {
    learningTFmusic[x]
}
*/


/* 
XMLHttpRequest Object Methods
    Method                              Description
    new XMLHttpRequest()                Creates a new XMLHttpRequest object
    abort()                             Cancels the current request
    getAllResponseHeaders()             Returns header information
    getResponseHeader()                 Returns specific header information
    open(method, url, async, user, psw) Specifices the request (GET or POST, url(file location), aysnc(true or false), optional user name, optional password)
    send()                              Sends the request to the server Used for GET requests
    send(string)                        Sends the request to the server Used for POST requests
    setRequestHeader()                  Adds a label/value pair to the header to be sent


XMLHttpRequest Object Properties
    Property                            Description
    onload                              Defines a function to be called when the request is recieved (loaded)
    onreadystatechange                  Defines a function to be called when the readyState property changes
    readyState                          Holds the staus of the XMLHttpRequest 0: request not initialized 1: server connection established 2: request received 3: processing request 4: request finished and response is ready
    responseText                        Returns the response data as a string
    responseXML                         Returns the response data as XML data
    status                              Returns the status-number of a request 200: "OK" 403: "Forbidden" 404: "Not Found" 
    statusText                          Returns the status-text(e.g. "OK" or "Not Found")

*/
function playTFmusic() {
}

function nextTFmusic() {

}

function pastTFmusic() {

}

function randomTFmusic() {

}

function pauseTFmusic() {

}
</script>

<audio id="currentMusic" class="currentM" controls atl="booooo" onloadstart="" onprogress="" onplay="" ondurationchange="" onratechange="" onemptied="" preload="" onloadeddata="" onloadedmetadata="//create something that does something with song metadata" onstalled="" onduration="" onerror="" oncanplaythrough="" onpause="//create javascript function that display songs image on pause with a play button." onplaying="// create an audio visualizer" onwaiting="//hide the audio player" onseeking="" ontimeupdate="" onsuspend="" onabort="">
    <data value="Mp3Audio">
        <source id="songMpeg" class="sM" src="" type="audio/mpeg">
        <track src="./WebVTT/Test.vtt" kind="subtitles" srclang="en" label="mp3Music">
    </data> 
    <data value="WavAudio">
        <source id="songWav" class="sWav" src="" type="audio/wav"> <!-- create function that will make the wav file from the mp3 file incase the user doesn't allow mp3 files.  If the file is not found in the wav files just go to a random file in the list. -->
        <track src="./WebVTT/Test.vtt" kind="subtitles" srclang="en" label="">
    </data>
    <data value="OggAudio">
        <source id="songOgg" class="sO" src="" type="audio/ogg"> <!-- create function that will make the ogg file from the wav file incase the user doesn't allow mp3 or wav files.  If the file is not found in the ogg files just go to a random file in the list. -->
        <track src="./WebVTT/Test.vtt" kind="subtitles" srclang="en" label="">
    </data>
</audio>  

<!-- everything inside of this comment is for php.
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
-->
            
