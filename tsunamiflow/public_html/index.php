<?php
session_start();
?>  


<!DOCTYPE html>

    <html lang="en">

        <head>
            <title>
                Tycadome
            </title>
            <meta charset="utf-8">
<!--
                writing a policy part
                    Content-Security-Policy: policy

    meta tags part
            <meta http-equiv="content-security-policy" content="default-src 'self'; img-src*; media-src example.org example.net; script-src userscripts.example.com; example.com *.example.com">
            <meta http-equiv="Strict-Transport-Security" content="">
            <meta http-equiv="content-length" content="">
            <meta http-equiv="content-encoding" content="">
            <meta http-equiv="default-style" content="StyleSheet/style.css">
            <meta http-equiv="window-target" content="">
            <meta http-equiv="refresh" content="28800">
            <meta http-equiv="refresh" content="28800; url=input a link to the webpage you want it to go to">
            <meta http-equiv="x-ua-compatible" content="IE=edge">
-->
            <meta name="author" content="Mishuba">
            <meta name="keyword" content="Mishuba, Hip Hop, Rap, Instrumental, Beats, Artist, Musician, ">
            <meta name="description" content="The village of hidden Dreams">


            <meta name="application-name" content="Tycadome">
            <meta name="viewpoint" content="width=device-width, initial-scale=1.0"> 
            <meta name="MusicList" content="htmlspecialchars($MFName)">
            <meta name="MusicListArray" content="htmlspecialchars($musicPlaylist)">
            
            
            <link rel="stylesheet" href="StyleSheet/style.css">
            <link rel="icon" href="favicon.ico" type="image/x-icon">

            <script src="JavaScript/Extras/jquery.js" defer></script>
            <script src="JavaScript/Necessary/script.js" defer></script>
            <script src="JavaScript/Necessary/mainFunctions.js" defer></script>
            <script src="JavaScript/Music/musicplayer.js" defer></script>

            <noscript> </noscript>

            <base> </base>
        </head>

        <body onafterprint="" onbeforeprint="" onbeforeunload="" onerror="" onload="" onoffline="" oncopy="" oncut="" onpaste="" onkeydown="" onkeypress="" onkeyup="" ononline="" onpagehide="" onpopstate="" onstorage="" onresize="" onunload="">

            <header id="header" oncopy="" oncut="" onpaste="">

                <span id="Motto">
                    <p>
                        <?php require './IsThisIt/Header/Motto.php';?>
                    </p>

                </span>

                <span id="Tycadome">
                        <?php require './IsThisIt/Header/Tycadome.php';?>
                </span>

                <span id="Mantra">
                    <?php require './IsThisIt/Header/Mantra.php';?>
                </span>

            </header>

            <nav id="Navigation" oncopy="" oncut="" onpaste="" onkeydown="" onkeypress="" onkeyup="" onclick="" ondblclick="" onmousedown="" onmousemove="" onmouseout="" onmouseover="" onmouseup="" onwheel="">            
                <?php require './IsThisit/Navigation/MainNavigationBar.php';?>
            </nav>

            <section id="News">

                <span id="TsunamiNews" oncopy="" oncut="" onpaste="" onkeydown="" onkeypress="" onkeyup="" onclick="" ondblclick="" onmousedown="" onmousemove="" onmouseout="" onmouseover="" onmouseup="" onwheel="">
                <H1>
                    Tsunami News
                </H1>
                <ul id="NewsTickerScroll" class="NewsTicker">
                <?php require './IsThisit/NewsLive/NewsUpdates.php';?>
                </ul>
                </span>

                <span id="MissionStatement">
                    <button>
                        <a href="https://www.youtube.com/channel/UCqTtVsIfhihGuznFiBMXnlA" title="head to my personal youtube page">
                        <img src=" " alt="Youtube" width="15%" height="15%"> 
                        </a>
                    </button>

                    <button onclick="document.location='https://www.twitch.tv/mishuba'">
                        <img src=" " alt="Twitch" width="15%" height="15%">                             
                    </button>

                    <button onclick="document.location='https://www.twitter.com/mishuba_'">
                        <img src=" " alt="Twitter" width="15%" height="15%"> 
                    </button>

                    <button onclick="document.location='https://www.instagram.com/mishuba'">
                        <img src=" " alt="Instagram" width="15%" height="15%"> 
                    </button>

                    <button onclick="document.location='https://www.facebokk.com/DragoonMishuba'">
                        <img src=" " alt="Facebook" width="15%" height="15%"> 
                    </button>

                    <button onclick="document.location='https://www.patreon.com/mishuba'">
                        <img src=" " alt="Patreon" width="15%" height="15"> 
                    </button>                            
                </span>

            </section>

                    <section id="TsunamiFlowInformation" oncopy="" oncut="" onpaste="" onkeydown="" onkeypress="" onkeyup="" onclick="" ondblclick="" onmousedown="" onmousemove="" onmouseout="" onmouseover="" onmouseup="" onwheel="">
                        <span id="TFBio">
                            <?php require './IsThisit/CommunityLive/Community.php'?>                          
                        </span>
                    </section>

                    <section id="MainSection" oncopy="" oncut="" onpaste="" onkeydown="" onkeypress="" onkeyup="" onclick="" ondblclick="" onmousedown="" onmousemove="" onmouseout="" onmouseover="" onmouseup="" onwheel="" ondrag="" ondragend="" ondragenter="" ondragleave="" ondragover="" ondragstart="" ondrop="" onscroll="">
                        <div id="IntroVideo"> 
                            <?php require './IsThisit/MainSection/Video.php'?>
                        </div>
                    
                        <span id="ExecutiveSummary">
                            <?php require './IsThisit/MainSection/MainSection.php';?>
                        </span>
                    </section>
                    
                    <section id="TsunamiFlowStyle" oncopy="" oncut="" onpaste="" onkeydown="" onkeypress="" onkeyup="" onclick="" ondblclick="" onmousedown="" onmousemove="" onmouseout="" onmouseover="" onmouseup="" onwheel="" ondrag="" ondragend="" ondragenter="" ondragleave="" ondragover="" ondragstart="" ondrop="" onscroll=""> 

                        <span id="SomethingList">
                            <div id="musicPlaylist" class="musicPl">
                                <audio id="currentMusic" class="currentM" controls atl="booooo" onloadstart="" onprogress="" onplay="" ondurationchange="" onratechange="" onemptied="" preload="" onloadeddata="" onloadedmetadata="//create something that does something with song metadata" onstalled="" onduration="" onerror="" oncanplaythrough="" onpause="//create javascript function that display songs image on pause with a play button." onplaying="// create an audio visualizer" onwaiting="//hide the audio player" onseeking="" ontimeupdate="" onsuspend="" onabort="">
                                    <data value="Mp3Audio">
                                        <source id="songMpeg" class="sM" src="./Music/MP3/I'm Ready Radio Edit.mp3" type="audio/mpeg">
                                        <track src="./WebVTT/Test.vtt" kind="subtitles" srclang="en" label="mp3Music">
                                    </data>  
                                    <!--  
                                    <data value="WavAudio">
                                        <source id="songWav" class="sWav" src="" type="audio/wav"> 
                                        <track src="./WebVTT/Test.vtt" kind="subtitles" srclang="en" label="">
                                    </data>
                                    <data value="OggAudio">
                                        <source id="songOgg" class="sO" src="" type="audio/ogg">
                                        <track src="./WebVTT/Test.vtt" kind="subtitles" srclang="en" label="">
                                    </data>
                                    -->

                                    <script> 
                                        fetch('MusicPlaylist.php')
                                            .then(function(response) {
                                                return response.json();
                                            })
                                            .then(function(data) {
                                                alert("working I guess");
                                            })
                                </script>
                                </audio>     
                            </div>
                        </span>

                        <span id="TheList" class="FactsList">
                            <?php require './IsThisit/BottomBar/TheList.php';?>
                        </span>

                        <span id="donation">
                            <?php require './IsThisit/BottomBar/Donation.php';?>
                        </span>

                    </section>

                    <footer oncopy="" oncut="" onpaste="" onkeydown="" onkeypress="" onkeyup="" onclick="" ondblclick="" onmousedown="" onmousemove="" onmouseout="" onmouseover="" onmouseup="" onwheel="" ondrag="" ondragend="" ondragenter="" ondragleave="" ondragover="" ondragstart="" ondrop="" onscroll="">
                        <div id="TFNP">
                            <span id="businessInfo">
                                <ul id="BizTickerScroll" class="BizzTicker">
                                    <?php require './IsThisit/Footer/NoblePurpose.php';?>
                                </ul>
                            </span>
                        </div>

                        <div id="TFA">
                            <?php require './IsThisit/Footer/Awards.php';?>
                        </div>

                        <div id="Quicklinks">
                        </div>

                        <span id="Subscribe">

                            <H4 id="NewMembershipSubscription"> 
                                Membership (Not Ready Yet)
                            </H4>
        
                                <?php require "./IsThisit/Footer/ActualForm.php"?>
                        </span>

                        <address itemscope id="authorInfo" itemref="a b c" itemtype="">
                            <p itemprop="a">
                                Chris Maxwell<br>
                            </p>

                            <p itemprop="b">
                                Tyacdome <br>
                                The Land of Dreams <br>
                            </p>

                            <p itemprop="c">
                                Planet Earth<br>
                                Milk Way
                            </p>
                          
                            <ul>
                                <li>Tel: 1(850)553-0300</li>
                                <li> Email: <a href="mailto:mageMaheli@yahoo.com">mageMaheli@yahoo.com </a> </li>
                            </ul>
                        </address>
                          
                            <p>
                                My birthday is on the 
                                    <time datetime="1990-07-11 00:00"> 
                                        Mishuba's Birthday 
                                    </time> 
                            </p>

                            <p>
                                Caffeine's chemical formula is C
                                    <sub>
                                        8
                                    </sub>
                                        H
                                    <sub>
                                        10
                                    </sub>
                                        N
                                    <sub>
                                        4
                                    </sub>
                                        O
                                    <sub>
                                        2
                                    </sub>
                                .
                            </p>
                            
                            <p>
                                If x
                                    <sup>
                                        2
                                    </sup> 
                                        is 9, x must equal 3 or -3.
                            </p>

                    </footer>
        </body>
    </html>

</DOCTYPE html>