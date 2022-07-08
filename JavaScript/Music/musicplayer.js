let songList ='<?php echo(json_encode($musicPlaylist));?>';
let musicMFPL = document.getElementById("currentMusic")

let trackindex = 0;
musicMFPL.load();
let isPlaying = false;
let updateTimer;

let NowPlayingMusicIGuess = document.createElement('audio');

function loadTrack(trackindex) {
    musicMFPL.src = songList[trackindex].path;
    musicMFPL.load();
    musicMFPL.addEventListener("ended", nextTrack);
}

function playpauseTrack() {
    if (!isPlaying) {
        playpauseTrack();
    } else {
        pauseTrack();
    }
}

function playTrack() {
    musicMFPL.play();
    isPlaying = true;
}

function pauseTrack() {
    musicMFPL.pause();
    isPlaying = false;
}

function nextTrack() {
    
    if (trackindex < songList.length - 1) {
        trackindex += 1;
    } else trackindex = 0;

    loadTrack(trackindex);
    playTrack();
}

function prevTrack() {
    if (trackindex > 0) {
        trackindex -= 1;
    } else {
        trackindex = songList.length - 1;
    }

    loadTrack(trackindex);
    playTrack();
}
loadTrack(trackindex);