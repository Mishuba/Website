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

function idk() {

}


// musicTF.onload = function() {}
// MIME
/*
    type/subtype
        Type represents the general category into which teh data type falls (video, text, etc etc)

    type/subtype;parameter=value

    Important MIME types
        application/octet-stream
            Default for binary files. (means unknown binary files, browsers usually dont execute)
                Treated as if Content-Disposition header was set to attachment
        text/plain
            Default for textual files. Even if it really means "unkown textual file," browsers assume they can display it.
        text/css
            If a server doesn't recognize the .css suffix for css files. it may send them with text/plain or application/octet-stream MIME types.
        text/html
            All HTML content should be served with this type. Alternative MIME types for XHTML (like application/xhtml+xml) are mostly useless nowadays.
                use application/xml or application/xhtml_xml if you want XML's strict parsing rules or elements taht aren't from HTML/SVG/MathML namespaces.
        text/javascript
            Scripts may not load or run if you use any other MIME type other than text/javascript
                Do not use a charset parameter for javascript
                    Legacy JavaScript MIME types
                        application/javascript
                        application/ecmascript
                        application/x-ecmascript
                        application/x-javascript
                        text/ecmascript
                        text/javascript1.0
                        text/javascript1.1
                        text/javascript1.2
                        text/javascript1.3
                        text/javascript1.4
                        text/javascript1.5
                        text/jscript
                        text/livescript
                        text/x-ecmascript
                        text/x-javascript
        
        Audio/Video MIME types
            audio/wave, audio/wav, audio/x-wav, audio/x-pn-wav
            audio/webm
            video/webm
            audio/ogg
            video/ogg
            application/ogg
            audio/3gpp
            audio/3gpp2
            audio/3gp2
            video/3gpp
            video/3gpp2
            video/3gp2
            audio/aac
                use for streaming audio
            audio/mpeg
                use for streaming audio
            aduio/flac
            audio/x-flac
            video/mpeg
            audio/mp4
            video/mp4
            video/quicktime
                You can add 'codecs' parameters to media types
                    this is done by appending a semicolon; followed by codecs= and then the string describing the format of the contents of the file. 
                        examples
                            audio/ogg; codecs=vorbis
                            video/webm; codecs="vp8, vorbis"
                            video/mp4; codecs="avc1.4d002a"
                                As the case with any MIME type parametere, codecs must be changed to codecs* if any of the properties of the codec use special characters which must be percent-encoded per RFC 2231, section 4: MIME Parameter Value and Encoded Word Extensions
                                    You can use the JavaScript encodeURI() function to encode the parameter list; similarly, you can use decodeURI() to decode a previously encoded parameter list.
                                        (Codec options by container)
                                            3GP
                                            AV1
                                            ISO BMFF
                                            MPEG-4
                                            QuickTime
                                            WebM
                                                Each entry in the codec list may contain some number of components, separated by periods
                                                    The syntax value of codecs always starts with the codec's four-character identifier, a period separator followed by the Object Type Indication (OTI) value for the specific data format. For most codecs, the OTI is a two-digit hexadecimal number; however, it's six hexadecimal digits for AVC (H.264).     
                                                        cccc[.pp]* (Generic ISO BMFF)
                                                            Where cccc is the four-character ID for the codec and pp is where zero or more two-character encoded property values go.
                                                        mp4a.oo[.A] (MPEG-4 audio)
                                                            Where oo is the Object Type Indication value describing the contents of the media more precisely and A is the one-digit audio OTI. The possible values for the OTI can be found on the MP4 Registration Authority web site's Object Types page. For example, Opus audio in an MP4 file is mp4a.ad. For further details, see MPEG-4 audio.
                                                        mp4v.oo[.V] (MPEG-4 video)
                                                            Here, oo is again the OTI describing the contents more precisely, while V is the one-digit video OTI.
                                                        avc1.oo[.PPCCLL] (AVC video)
                                                            oo is the OTI describing the contents, while PPCCLL is six hexadecimal digits specifying the profile number (PP), constraint set flags (CC), and level (LL). See AVC profiles for the possible values of PP.
                                                                The constraint set flags byte is comprised of one-bit Boolean flags, with the most significant bit being referred to as flag 0 (or constraint_set0_flag, in some resources), and each successive bit being numbered one higher. Currently, only flags 0 through 2 are used; the other five bits must be zero. The meanings of the flags vary depending on the profile being used.
                                                                The level is a fixed-point number, so a value of 14 (decimal 20) means level 2.0 while a value of 3D (decimal 61) means level 6.1. Generally speaking, the higher the level number, the more bandwidth the stream will use and the higher the maximum video dimensions are supported.


                            

        RAR
            application/x-rar-compressed


                Discrete Types
        application
            example
                application/octet-stream
                application/pdf
                application/zip
        audio
            example
                audio/mpeg
                audio/vorbis
        font
            example
                font/woff
                font/ttf
                font/otf
        image
            example
                image/apng
                image/avif
                image/gif
                image/jpeg
                image/png
                image/svg+xml
                image/webp
        model
            example
                model/3mf
                model/vrml
        text
            example
                text/plain
                text/csv
                text/html
        video
            example
                video/mp4
    
    
    Multipart types
        message
            example
                message/rfc822
                message/partial
        multipart
            example
                multipart/form-data
                multipart/byteranges



*/


function startMusicPlease() {
    var musicTF = new XMLHttpRequest();
        musicTF.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var workpleaseman = JSON.parse(this.responseText);  
                        musicTF.open("POST", "MusicPlaylist.php", true);
                        musicTF.setRequestHeader("name, value");

                        // CORS-safelisted repsonse-header name, given a list of header names list, is a header name that is a byte case-insensitive match for one of
                            // -Cache-Control -Content-Language -Content-Length -Content-Type -Expires -Last-Modified -Pragma 

                        /* no-CORS-safelisted request header name
                            Accept
                                comma-separated list of MIME types each combines with a quality factor, a parameter that indicates the relative degree of preference between the different MIME types
                            Accept-CH
                                    Values
                                        Device-Memory
                                        Viewport-Width
                                        Width
                            Accept-CH-Lifetime
                                    Values
                                        Device-Memory
                                            used with the Device-Memory value of the Accept-CH header and indicates the amount of time the device should opt in to sharing the device memory with the server. The value is given in milliseconds and it's opitional.
                            Accept-Encoding
                                    Values
                                        q-factor
                                            that indicates the priority of the encoding values
                                        indentity


                            Accept-Language
                                    Values
                            Content-Language
                                    Values
                            Content-Length
                            Content-Range
                            Trailer
                            Transfer-Encoding
                            User-Agent
                                    Values
                                        Product Tokens and Comments
                                            product token is a name followed by a '/' and a version number, like Firefox/4.0.1  The user agent can include as many of these as it wants
                                            A comment is an optional string delimited by parentheses. The information provided ina  comment isn't standardized, though several browsers add several tokens to it separated by ';'.
                            Vary
                                    Values

                            Content-Type
                                    Values                                                
                                        Type application
                                            application/java-archive
                                            application/EDI-X12   
                                            application/EDIFACT   
                                            application/javascript   
                                            application/octet-stream   
                                            application/ogg   
                                            application/pdf  
                                            application/xhtml+xml   
                                            application/x-shockwave-flash    
                                            application/json  
                                            application/ld+json  
                                            application/xml   
                                            application/zip  
                                            application/x-www-form-urlencoded  

                                        Type audio
                                            audio/mpeg   
                                            audio/x-ms-wma   
                                            audio/vnd.rn-realaudio   
                                            audio/x-wav   

                                        Type image
                                            image/gif   
                                            image/jpeg   
                                            image/png   
                                            image/tiff    
                                            image/vnd.microsoft.icon    
                                            image/x-icon   
                                            image/vnd.djvu   
                                            image/svg+xml    

                                        Type multipart
                                            multipart/mixed    
                                            multipart/alternative   
                                            multipart/related (using by MHTML (HTML mail).)  
                                            multipart/form-data  

                                        Type text
                                            text/css    
                                            text/csv    
                                            text/html    
                                            text/javascript (obsolete)    
                                            text/plain    
                                            text/xml  
  
                                        Type video
                                            video/mpeg    
                                            video/mp4    
                                            video/quicktime    
                                            video/x-ms-wmv    
                                            video/x-msvideo    
                                            video/x-flv   
                                            video/webm   

                                        Type vnd :
                                            application/vnd.android.package-archive
                                            application/vnd.oasis.opendocument.text    
                                            application/vnd.oasis.opendocument.spreadsheet  
                                            application/vnd.oasis.opendocument.presentation   
                                            application/vnd.oasis.opendocument.graphics   
                                            application/vnd.ms-excel    
                                            application/vnd.openxmlformats-officedocument.spreadsheetml.sheet   
                                            application/vnd.ms-powerpoint    
                                            application/vnd.openxmlformats-officedocument.presentationml.presentation    
                                            application/msword   
                                            application/vnd.openxmlformats-officedocument.wordprocessingml.document   
                                            application/vnd.mozilla.xul+xml   
                        */

                        /* request-body-header name*
                            Content-Encoding
                                    Values
                                        gzip
                                        compress
                                        defalte
                                        br

                            Content-Language
                                    Value  
                                        en

                            Content-Location
                                    Value
                                        url.json
                                            foo?format=json
                                        url.xml
                                            url?format=xml
                                        url.txt
                                            tsunamiflow?format=txt
                                        url.csv
                                            business?format=csv
                                        almostanything.php
                                            almost?format=php

                            Content-Type
                                In a POST request, resulting from an HTML form submission, the Content-Type of the request is specified by the enctype attribute on the <form> element.
                                    Values

                                */
                        
                            var learningTFmusic = JSON.parse(<?php echo($musicSongs)?>);
                                for (trackindex; trackindex < learningTFmusic.length; trackindex++) {
                                    currentSong.src($learningTFmusic[trackindex]);
                                    currentsong.play();
                                        if (/*press pause button or event*/) {
                                            currentsong.pause();
                                            currentSong.src.remove()
                                        } else if (/*press skip button or event*/) {
                                            currentsong.pause();
                                            currentSong.src.remove()
                                            currentsong.src(learningTFmusic[trackindex++]);
                                            currentsong.play();
                                            currentsong.addEventListener("ended", "");
                                            currentsong.src.remove()
                                        } else  if (/*press backward button or event*/) {
                                            currentsong.pause();
                                            currentSong.src.remove()
                                            currentsong.src(learningTFmusic[trackindex--]);
                                            currentsong.play();
                                            currentsong.addEventListener("ended", "");
                                            currentsong.src.remove()
                                        } else if (/*press random button or event*/) {
                                            currentsong.pause();
                                            currentSong.src.remove()
                                            currentsong.src(learningTFmusic[Math.random(" " " " trackindex)]);
                                            currentsong.play();
                                            currentsong.addEventListener("ended", "");
                                            currentsong.src.remove()
                                        } else {/* the song is over */
                                            currentsong.addEventListener("ended", "");
                                            currentSong.src.remove()
                                        }
                                }
                            }
            
            
                        musicTF.send("Content-Type","text/html;charset=UTF-8");
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

/* setRequestHeader()

SYNTAX
    setRequestHeader(header, value)

Parameters
    Header 
        - The name of the header whose value is to be set.

    Value
        - The value to set as the body of the header.

    Return value
        None (undefinied).



When using setRequestHeader(), you must call it after calling open(), but before calling send().  If this method is called several times with the same header, the values are merged into one single request header.
Each time you call setRequestHeader() after the first time you call it, the specified text is appended to the end of the exisiting header's content.


*/

/*  XMLHttpRequest()

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
            
