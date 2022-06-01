var songChoice ="<?php echo(json_encode($noDotsMF));?>";
var currentSongNum = document.getElementById("currentMusic");
var currentSongName = ""
function random(mn, max) {
    return Math.random() * (mx - mn);
}
var lastSong = songChoice(0);

songChoice =
//create function to choose the last song in the array. I believe there already is one I just need to look it up.
var firstSong = songChoice()
// take the current song
// switch it with a new song, either a random song, the next song in the list or backwards;

function nextSong() {
    for (let numOfSongs = 0; numOfSongs < songChoice; numOfSongs++) {
        if(currentSong  && numOfSongs === 0) {
            replace(currentSong, /*random*/);
        } else if (currentSong !== numOfSongs) {
            replace(currentSong, numOfSongs)
        } else {
            replace(currentSong, /*dk yet*/ )
        }
    }
}


switch(currentSong) {
    case forward:
    //input the next song in the list from the for loop
    break;

    case backward:
        //input the next song in the list from the for loop
    break;

    case random:
            //input the next song in the list from the for loop
    break;
    default:
        
    break;
};

function whattodo() {
    switch (whatTheyDo) {
        case play:
            startSong();
        break;
        
        case stop:
            stopSong();
        break;

        case skip:
            nextSong();
        break;

        case back:
            pastSong();
        break;

        case restart:
            restartSong();
        break;

        case information:
            songInformation();
        break;

        case slider:
            pickSpot();
        break;

        case songList:
            chooseSong();
        break;

        case share:
            shareSong();
        break;

        case buy:
            purchaseSong();
        break;

        default:
            alert("Not working properly.");
        break;
    }
};
