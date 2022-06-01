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
            <link rel="icon" href="favicon.ico" type="image/x-icon">
            <meta name="author" content="Mishuba">
            <meta name="description" content="The village of hidden Dreams">
            
            <link rel="stylesheet" href="StyleSheet/style.css">
            <script src="JavaScript/jquery.js" defer></script>
            <script src="JavaScript/script.js" defer></script>
        </head>

        <body>

            <header id="header">

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

            <nav id="Navigation">            
                <?php require './IsThisit/Navigation/MainNavigationBar.php';?>
            </nav>

<section id="News">

    <span id="TsunamiNews">
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

                    <section id="TsunamiFlowInformation">
                        <span id="TFBio">
                            <?php require './IsThisit/CommunityLive/Community.php'?>                          
                        </span>
                    </section>

                    <section id="MainSection">
                        <div id="IntroVideo"> 
                            <video source=" " controls atl="Tsunami Flow Intro Video">
                                Intro Video
                            </video>
                        </div>
                    
                        <span id="ExecutiveSummary">
                            <h>
                                Executive Summary
                            </h>   
                            <hr>
                            <a href="mailto:tsunamiteamforever@outlook.com"> Send me love here please</a>

                            <hr>
                                <img src="Pictures/Tsunami Flow Logo" width="30%" height="30" atl="Chrs Maxwell">
                                    <p>   

                                        The current state of music is plagued with creative robots with low forms of <em>individuality</em>. The elements of music
                                        are losing value and identity which is leading to quantity and quality of music being produced to be diluted and
                                        similar with less originality. Once the state of music has started to progress the differences should be a world
                                        with a higher percent margin of creative individuals leaders compared to creative robots. The elements of music
                                        will be at a protective value and considered a worldly treasure that needs to be protect, molded and nourished for
                                        evolution.
                                        The first step to make this happen is to invest in the career of a Music Team/Company/Brand that will be at the
                                        forefront of the fight for creativity within the music industry. Some key factors that will help make this team
                                        successful is to add a 
                                        <dl>
                                            <dt> Music Artist </dt>
                                            <dd>   </dd>
                                            <dt> Producer</dt>
                                            <dd> </dd>
                                            <dt> Webmaster </dt>
                                            <dd> </dd>
                                        </dl>
                                    </p>
                                        
                                        <p>Here below is a blockquote...</p>
                                            <blockquote cite="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote">
                                                <p>The <strong>HTML <code>&lt;blockquote&gt;</code> Element</strong> (or <em>HTML Block
                                                Quotation Element</em>) indicates that the enclosed text is an extended quotation.</p>
                                            </blockquote>

                                            <br>
                                            <br>

                                            <!-- inline quotation mark -->
                                            <p>The quote element — <code>&lt;q&gt;</code> — is <q cite="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/q">intended
                                                for short quotations that don't require paragraph breaks.</q></p>
                                                

                                            <!-- use this for page citations -->
                                            <p>According to the <a href="/en-US/docs/Web/HTML/Element/blockquote">
                                                <cite>MDN blockquote page</cite></a>:
                                                </p>
                                                
                                                <blockquote cite="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote">
                                                <p>The <strong>HTML <code>&lt;blockquote&gt;</code> Element</strong> (or <em>HTML Block
                                                Quotation Element</em>) indicates that the enclosed text is an extended quotation.</p>
                                                </blockquote>
                                                
                                                <p>The quote element — <code>&lt;q&gt;</code> — is <q cite="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/q">intended
                                                for short quotations that don't require paragraph breaks.</q> -- <a href="/en-US/docs/Web/HTML/Element/q">
                                                <cite>MDN q page</cite></a>.</p>

                                                <hr>

                                        deliver self truth, deliver emotional vulnerability,
                                        sharing and implementing ideas for a better world and focusing on originality and uniqueness to name a few.
                                        The risk involved for this idea are mainly engraved by the type of role a person has on the team. Most creative
                                        roles are at risk of effecting the state of music in a negative way that would go against the philosophy of the what
                                        needs to be done. The webmaster, video director, dance team and band have the most significant influence over
                                        the state of music and it creativity. The ability to do what the artist is imagining/thinking/planning, antipathy
                                        products and lack of originality are the risk on high alert out of the 100s of risk that could happen. The plan to
                                        keep these risk at a minimum is to find people who have great communication skills, are known for producing
                                        great quality products, new unique talents and being there for each step of the process to insure everything is
                                        align with the vision.
                                        <strong>Tsunami Flow<strong> is the <b>foundation</b> of what <a href="https://www.linkedin.com/in/hubert-maxwell-a8654551/" target="_blank"> Chris </a> is creating. 
                                        His musical philosophy is Mishuba which comes from his name. 
                                        When asked how he created his name he said "I took the most common as well as the most unique letter of my name and put them in a way I felt 
                                        represented who I am as a person. 
                                        Mishuba stands for “My Inner Self Helps Unify Beautiful Art." 
                                        Mishuba is the sound of the heartbeat bringing soothing pleasure to ones who desire finding a creative that is going to 
                                        build and mold his material with life experiences, life lessons and life ideas. Mishuba is the unique original musician." 
                                        Mishuba does enjoy showing his admiration towards others by covering some of their creative works and throwing his own style on it 
                                        but he loves to produce his own instrumentals using software, keyboards, guitars and microphones then recording beautiful vocals over his masterpieces.  
                                        Overall he wants to deliver honest and trustful music. 
                                        When a song is sung it is really his voice and not an effect, when he delivers verses they have been writing by him on a beat 9 times out of 10 produced by him. 
                                        All while recording actual freestyles that have not been prewritten or premeditation to add on the 
                                        special feeling of his sounds when you listen to the many different projects he has released for example the rawness of his freestyle collection on youtube.com, 
                                        the deep introspective look at his life on his album New Black Kid available on all streaming services. 
                                        The hypnotic nature of his singles like “Too Sick” or “Who Am I” from his 2019 album “Sex Money Love” will have you 
                                        inspired to continue to watch his growth but work on yours as well. 
                                        <abbr title="Tsunami Flow"> TF </abbr> is the foundation of what <A href="http://www.tsunamiflow.com/aboutme/HCM.html"> Chris Maxwell</A> is creating. 
                                        His musical artist character and philosophy is Mishuba which comes from his name. 
                                        When asked how he created his name he said "I took the most common as well as the most unique letter of my name and 
                                        put them in a way I felt represented who I am as a person. Mishuba stands for My Inner Self Helps Unify Beautiful Art. 
                                        Mishuba is the sound of the heartbeat bringing soothing pleasure to ones who desire finding a creative that is going to build and mold his music. 
                                        Mishuba is the uncommon common unique orginal musician." Mishuba does enjoy showing his admiration towards others by 
                                        covering some of their creative works and throwing his own style on it but he loves to produce his own instrumentals using 
                                        software, keyboards, guitars and microphones then recording beautiful vocals over his masterpieces.  
                                        Overall he wants to deliver honest and trustful music. 
                                        When a song is sung it is really his voice and not an effect, when he delivers verses they have been writing by him on a beat 9 times out of 10 produced by him. 
                                        All while recording actual freestyles that have not been prewritten or premeditation to add on the special feeling of his 
                                        sounds when you listen to the many different projects he has released for example the rawness of his freestyle collection on youtube.com, 
                                        the deep introspective look at his life on his album New Black Kid available on all streaming services. 
                                        The hypnotic nature of his singles like Too Sick or Who Am I will have you inspired to continue to watch his growth but work on yours as well. 
                                    </p>
                        </span>
                    </section>
                    
                    <section id="TsunamiFlowStyle"> 

                        <span id="SomethingList">
                            <div id="musicPlaylist" class="musicPl">
                                    <audio id="currentMusic" class="currentM" controls onerror="" oncanplaythrough="" onpause="" onplaying="" onseeking="" onsuspend="" onabort="" onended="">
                                        <source src="" type="audio/wav">  <!-- alternate source is this src="<?php print_r("$nowPlayinMusic");?>" -->
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
                                    </div>
                            </div>
                        </span>

                        <span id="TheList" class="FactsList">
                            <?php require './IsThisIt/BottomBar/TheList.php';?>
                        </span>

                        <span id="donation">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="3LQGL334FUKLW">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - 
                                                    The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </span>

                    </section>

                    <footer>
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

                        <address>
                            <p>
                              Chris Maxwell<br>
                              Land<br>
                              Planet Earth<br>
                              Milk Way
                            </p>
                          
                            <ul>
                              <li>Tel: 1(850)553-0300</li>
                              <li>Email: mageMaheli@yahoo.com</li>
                            </ul>
                          </address>
                          
                          <p>My birthday is on the 25<sup>th</sup> of May 2001.</p>
<p>Caffeine's chemical formula is C<sub>8</sub>H<sub>10</sub>N<sub>4</sub>O<sub>2</sub>.</p>
<p>If x<sup>2</sup> is 9, x must equal 3 or -3.</p>

                    </footer>
        </body>
    </html>

</DOCTYPE html>