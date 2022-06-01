<span id="SomethingList">
                            <div id="musicPlaylist" class="musicPl">
                                    <audio id="currentMusic" class="currentM" controls onerror="" oncanplaythrough="" onpause="" onplaying="" onseeking="" onsuspend="" onabort="" onended="nextSong()">
                                        <source src="" type="audio/wav">
                                    </audio>
                                    <div id="musicText"> Not playing anything</div>
                                    <div id="musicControls">
                                        <div>
                                            <input type="range" id="volume" name="volume" min="0" max="1" step="0.1" value="1">
                                             <label for="volume">Volume</label>
                                        </div>
                                        <div>
                                            <input type="range" id="rate" name="rate" min="0.5" max="2" step="0.25" value="1">
                                            <label for="volume">Speed</label>
                                        </div>
                                        <div>
                                            <input type="range" id="progress" name="progress" min="0" max="100" step="0.1" value="0">
                                            <label for="volume">Progress</label>
                                        </div>
                                        <div>
                                                <button id="pause">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                        <title>
                                                            pause
                                                        </title>
                                                        <rect width="6" height="16" x="3" y="2" rx="1" ry="1"/>
                                                        <rect width="6" height="16" x="11" y="2" rx="1" ry="1"/>
                                                    </svg>   
                                                </button>
                                                <span id="time"> 0:00</span> / <span id="duration">0:00</span>
                                            </div>
                                        </div>
                                    </div> 
                                    <div id="playlist" class="playlist">
                                        <div>Select a file to play</div>
                                        <?php require './IsThisit/BottomBar/MusicPlaylist.php';?>
                                        <?php 
                                            $musicFolder = "Tycadome";
                                            $Song = scandir($musicFolder, SCANDIR_SORT_ASCENDING);
                                            foreach($Song as $key=>$filename)
                                            {
                                                if($filename!="." && $filename!="..")
                                                {
                                                    print("<div class=\"track\" onclick=\"setSource('$filename')\">" . $filename . "</div>\n");
                                                }
                                            }
                                        ?>
                            </div>
                        </span>