<?php
session_start();

<!DOCTYPE html>
    <html>
        <head>
            <title>
                Tycadome
            </title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body onload=" ">
          
    <!-- vertical align values
      baseline, sub, super, text-top, text-bottom, middle, top, bottom, length, percentage.
      
          Direction values are
          ltr (normal)
          rtl (backwards)
          
          word-spacing can be used as a percentage
          
          text-shadow uses
              color x-offset y-offset blur-radius
                          or
              x-offset y-offset blur-radius color
              
              border spacing only works when border-collapse is set to collapse
              
              Anchor States
                  link (default)
                  visited - when link has been clicked before
                  hover - when mouse is positioned over the link
                  active - when mouse down
              
      -->
            <header>
                <span id="Motto">
                    <h>
                        <?php
                        echo "Motto";
                        ?>
                        <br>
                        <?php
                        date_default_timezone_set("America/New_York");
                        echo "The time is " . date("h:i:sa");
                        ?>

                    </h>
                        <p id="Motto"Para>
                            "We want to inspire"
                        </p>
                </span>
                <span id="Tycadome">

                    <h id="MiddleHeader">   
                        &copy; 2010-<?php echo date("Y");?>                           
                    </h> 
                    <p>
                        
                        <br>
                        <img id="ummm" src="pictures/Untitled-1.jpg ">
                    </p>

                </span>

                <span id="Mantra">

                    <h>
                        <?php
                        echo "Mantra";
                        ?>
                        <br>
                        <?php
                        $d1=strtotime("July 04");
                        $d2=ceil(($d1-time())/60/60/24);
                        echo "There are " . $d2 ." days until 4h of July.";
                        ?>

                    </h>

                        <p id="MantraPara">
                            "My inner self helps unify beautiful art.""
                        </p>
                    </span>

            </header>

                <nav id="Navigation">
                    
                    <table>

                        <thead>

                        </thead>

                        <tbody>
                        
                            <tr>
                            
                            <!-- when writing a file path use ./ to locate a file in the same folder that you are writing the file in.  -->
                            
                            <!-- when using ../ you will find a file from the folder out of the folder you are in to the one above it. -->

                                <td>
                                    <a href="index.html" target="_top" onmouseover="" onmouseout="" onmousedown="" onmouseup="" onclick="" ondblclick=""> Main </a>
                                </td>

                                <td>
                                    <a href="./Roster/Members.html" target="_self"> Roster </a>
                                </td>

                                <td>
                                    <a href="./Radio/realtime.html" target="_self"> Radio </a>
                                </td>

                                <td>
                                    <a href="./News/NewsTF.html" target="_parent"> News </a>
                                </td>

                                <td>
                                    <a href="./Blog_Vlog_Podcast/HiddenDreamsVillage.html" target="_self"> Blog/Vlog </a>
                                </td>

                                <td>
                                    <a href="./Competition/Competition.html" target="_blank"> Competition </a>
                                </td>

                                <td>
                                    <a href="./Games/Section.html" target="_blank"> Games </a>
                                </td>

                                <td>
                                    <a href="./Community/Login.html" target="_blank"> Community </a>
                                </td>

                                <td>
                                    <a href="./Store/tycadome.html" target="_parent"> Store </a>
                                </td>

                            </tr>
                        
                        </tbody>

                    </table>

                </nav>

<!-- 
Search Bar needs to be put below
-->

<!--
Uniorm Resource Identifier means URI 
-->

<!-- HTTp Verbs
  Get
  Post
  Put
  Delete
  -->
  
<!--
  Request Headers (Sending data with request needed by server)
      Accept Headers (Expected data from server)
              <field> = Accept: <entry> *[ , <entry> ]
              <entry> = <content type> *[ ; <param> ]
              <param> = <attr> = <float>
              <attr> = q / mxs / mxb
              <float> = <ANSI-C floating point text representation
              
      Content - Type Header (sending data from server)
      Request Body (Data being requested)
-->

<section id="News">

    <span id="TsunamiNews"> 
        <h1>
        Tsunami News
        </h1>
        <ul id="NewsTickerScroll" class="NewsTicker">
            <li>
                Mishuba's friends call him "Chris"
            </li>
            <li>
                Mishuba was born at 6 pounds 5 ounces with a length of 20 inches. His head was 12 1/2 inches, chest was 11 1/2 inches on July 11, 1990 at Tallahassee Memorial Regional Medical Center INC. in Tallahassee, FLorida of the United States of America on Planet Earth.
            </li>
            <li>
                Mishuba played was on the school basketball team from 7th grade to 10 grade. 
            </li>
            <li>
                Mishuba received his BA in Sociology from the University of South Carolina in 2014.
            </li>
            <li>
               Mishuba received a Presidential Physical Fitness Award when he was 6 signed by Bill Clinton while in elementary school at Holbrook in Fort Bragg, North Carolina.
            </li>
            <li>
                MIshuba was a percussionist in the school band from 7th grade to 10 grade. Mishuba says "He can play any perucssion instrument".
            </li>
            <li>
                Mishuba went to Holbrook Elementary in North Carolina, Riley elementary in Florida and Jefferson Elementary in Kansas.
            </li>
            <li>
                People who don't know Mishuba usually call him "Hubert"
            </li>
            <li>
                Mishuba was the 400m state champion for 3a in 2008 and the 400m state champion for 4a in 2009.
            </li>
            <li>
                Mishuba went to Fort Riley Middle School in Kansas, Liberty HIll MIddle School in Texas and Union Grove Middle School.
            </li>
            <li>
                Mishuba was athlete of the year in 2008 for track & field for South Carolina.
            </li>
            <li>
                Mishuba played on the school football team from 7th grade to 12 grade.
            </li>
            <li>
                Mishuba graduated from Blythewood High School.
            </li>
            <li>
                Mishuba run track for the Univeristy of South Carolina. <a href="https://gamecocksonline.com/sports/track-and-field/roster/chris-maxwell/2677"> Click here to find out more </a>
            </li>
            <li>
                Mishuba received a silver on his WorkKey Career Readiness Certificate in the 11th grade.
            </li>
            <li>
                Mishuba's real name is Hubert Christopher Maxwell also known "Chris Maxwell"
            </li>
            <li>
                Mishuba run track and field from 7th grade up until he graduated from undergraduate school.
            </li>
            <li>
                Mishuba went to Harker Heights High School in Texas and BLythewood High School in South Carolina.
            </li>
            <li>
                Mishuba received his Professional TEFL Certification in 2017. His Certificate NO. is <a href="teacherlink.teachingnomad.com/certificates"> TN1700-043  </a>
            </li>
            <li>
                Mishuba received his MS in Entertainment Business from Full Sail University in 2020.
            </li>

        </ul>

    </span>

</section>


                    <section id="TsunamiFlowInformation">

                        <span id="TFBio">
                            

a;lskjd;laskdgha;lskdgj;laksjdg


                        
                        </span>

                        <span id="MissionStatement">                        
                            <H2>
                                Social Media
                            </H2>
                                    
                            <button onclick="document.location='https://www.youtube.com/channel/UCqTtVsIfhihGuznFiBMXnlA'">
                                <img src=" " alt="Youtube" width=" " height=" "> 
                            </button>
        
                            <button onclick="document.location='https://www.twitch.tv/mishuba'">
                                <img src=" " alt="Twitch" width=" " height=" ">                             
                            </button>
        
                            <button onclick="document.location='https://www.twitter.com/mishuba'">
                                <img src=" " alt="Twitter" width=" " height=" "> 
                            </button>
        
                            <button onclick="document.location='https://www.instagram.com/mishuba'">
                                <img src=" " alt="Instagram" width=" " height=" "> 
                            </button>
        
                            <button onclick="document.location='https://www.facebokk.com/DragoonMishuba'">
                                <img src=" " alt="Facebook" width=" " height=" "> 
                            </button>
        
                            <button onclick="document.location='https://www.patreon.com/mishuba'">
                                <img src=" " alt="Patreon" width=" " height=" "> 
                            </button>
                        </span>
                    </section>

                    <section id="TsunamiFlowStyle"> 

        <!--Music Player-->
        <span id="SomethingList">
            <!-- have podcast run when radio is not.! host tournaments on this page as well.
                        Sunday
                        Monday
                        Tuesday
                        Wednesday
                        Thursday
                        Friday
                        Saturday
        -->

        <?php 
        echo readfile("./Music/Try To Stop Me Radio Edit.mp3");  
        $myfile = fopen("./Music/Try To Stop Me Radio Edit.mp3", "r") or die ("Unable to open file!");
        echo fread($myfile,filesize("./Music/Try To Stop Me Radio Edit.mp3"));
        fclose($myfile);
        ?>
        

            <audio id="TFmusicPlayer" controls>
                <source src="./Music/Try To Stop Me Radio Edit.mp3" type="audio/mpeg">
                your device does not support the audio.
            </audio>
    </span>

                        <span id="TheList" class="FactsList">

                                    <ul>
                                        <li>
                                           Random fact here first
                                        </li>

                                        <li>
                                            Random fact here next
                                        </li>

                                        <li>
                                            Random fact here after that
                                        </li>
            
                                    </ul>

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
                                <img src="url.jpg">
                                <!-- the URL of the image-->

                                <img src=" " atl="Chrs Maxwell">

                                    <p>    
                                        The current state of music is plagued with creative robots with low forms of individuality. The elements of music
                                        are losing value and identity which is leading to quantity and quality of music being produced to be diluted and
                                        similar with less originality. Once the state of music has started to progress the differences should be a world
                                        with a higher percent margin of creative individuals leaders compared to creative robots. The elements of music
                                        will be at a protective value and considered a worldly treasure that needs to be protect, molded and nourished for
                                        evolution.
                                        The first step to make this happen is to invest in the career of a Music Team/Company/Brand that will be at the
                                        forefront of the fight for creativity within the music industry. Some key factors that will help make this team
                                        successful is to add a Music Artist/Producer, Webmaster, deliver self truth, deliver emotional vulnerability,
                                        sharing and implementing ideas for a better world and focusing on originality and uniqueness to name a few.
                                        The risk involved for this idea are mainly engraved by the type of role a person has on the team. Most creative
                                        roles are at risk of effecting the state of music in a negative way that would go against the philosophy of the what
                                        needs to be done. The webmaster, video director, dance team and band have the most significant influence over
                                        the state of music and it creativity. The ability to do what the artist is imagining/thinking/planning, antipathy
                                        products and lack of originality are the risk on high alert out of the 100s of risk that could happen. The plan to
                                        keep these risk at a minimum is to find people who have great communication skills, are known for producing
                                        great quality products, new unique talents and being there for each step of the process to insure everything is
                                        align with the vision.
                                        Tsunami Flow is the foundation of what <a href="https://www.linkedin.com/in/hubert-maxwell-a8654551/" target="_blank"> Chris </a> is creating. 
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
                                        Tsunami Flow is the foundation of what <A href="http://www.tsunamiflow.com/aboutme/HCM.html"> Chris Maxwell</A> is creating. 
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

                    <hr>
                    
                    <footer>
                        <!-- you can put the php in a tag for css styling later. -->
                        <?php require 'Footer.php';?>
                            <!-- you have to use either the top one or the bottom one to input php files into html files.-->
                        <?php require 'Footer.php'?>
            

                        <div id="TFNP">

                        
                            <span id="businessInfo">
                                <ul id="BizTickerScroll" class="BizzTicker">
                                    <li>
                                        <h>
                                            Tsunami Flow Noble Purpose      
                                        </h>
                    
                                            <p>
            The goal of Tsunami Flow is to be the homebase for unique and original entertainment. We want to provide our audience with the best type of feelings and emotions as possible.  We inspire the greatness of the future to come.  
            We want to help the evolution of society's mental state.  To help the world found more courage and strength to pursue and become what they desire to be.  People will start to inwardly and outwardly evolve themselves and their character.
            Ultimately we will become more selfless in our personal everyday lives and more cooperative outside of that space(this does not mean competition will cease to exist.)                                
                                            </p>
                                    </li>
                                    <li>
                                        <h>
                                            Tsunami Flow Bio
                                        </h>
                                            <p>
                                                    paragraph one contents.
                                            </p>
                                    </li>
                                    <li>
                                        <h>
                                            Mission Statement
                                        </h>
            
                                            <p>
                                                        “We can be relied upon to enthusiastically and globally network progressive products in order to fashion professional and scalable services 
                                                        whilst continuing to assertively and quickly create unique catalysts for change.
                                            </p>
                                    </li>
                                </ul>
                            </span>
                        </div>
        
                        <div #id="TFA">
                            <h>
                                Tsunami Flow Awards
                            </h>
        
                                <p>
        
                                </p>
                        </div>  
        
        <!-- quick links commented out for now -->
                        <div id="QuickLinks">
        
        
                        </div>
        
                        <span id="Subscribe"> 
        
                            <!-- use the form method="get" for nonsensitive information.  action > 
                            location where from data is sent -->
                            <!--IMPORTANT-->
                                <H4 id="NewMembershipSubscription"> 
                                    Membership (Not Ready Yet)
                                </H4>
            
                                    <form name="SubberTF" id="TFsubbers" method="post" action="script.php" onsubmit="return validateForm()">
                                        <fieldset>
                                            <legend>
                                                Join the Squad
                                            </legend>    
                                                <label>
                                                    Name:   
                                                        <INPUT id="NewSubberName" type="text" name="Name" value="<?php echo $name;?>" size="10" maxlength="100" autocomplete="on" onfocus="" onchange="" required>
                                                </label>
                                                <label>
                                                    Email: 
                                                        <INPUT type="email" name="Email" value="<?php echo $email;?>" size="10" maxlength="100" required>                
                                                </label>
                                                <label>                                      
                                                    <input number>
                                                
                                                </label>
                                        
                                        
                                                <label>
                            
                                                    Phone Number
                                                    
                                                        <input type="tel" Name="PhoneNumber">
                                                
                                                </label>
                                        
                                                <label>
            
                                                    Today's Date 
                                            
                                                        <INPUT type="date" name="Date">
            
                                                </label>
                                        
                                            </fieldset>
            
                                            <fieldset>
            
                                                <legend> 
                                                    Fun Facts About You 
                                                </legend>
            
                                                    <label>
            
                                                    Favorite Color 
                                                        <INPUT type="color" name="Color">
            
                                                    </label>
            
                                                    <label>
            
                                                        Personal/Business Website 
            
                                                            <INPUT type="url" name="FanWebsite" value="<?php echo $website;?>" size="10" maxlength="300">
                                                
                                                    </label>

                                                    <label>
                                                        Business Type/Personality 
                                                            <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ETNJ") echo "checked";?>> ETNJ
                                                            <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="TTHL") echo "checked";?>> TLKJ
                                                    </label>
                                        
                                                    <label>
                                            
                                                            <input type="password" size="10" maxlength="1000">
                                            
                                        
                                                    </label>
                                        
                                                    <label>
                                            
                                                        <input type="range">
                                            
                                                    </label>
                                                    <input list="Country">
                                                    <datalist id="CountryIGuess"></datalist>
                                                        Country: 
                                                        
                                                            <SELECT name="Country">
            
                                                                <OPTION>United States</OPTION>
            
                                                                <OPTion>Afghanistan</OPTion>
            
                                                                <OPTION>Aland Islands</OPTION>
            
                                                                <OPTION>Albania</OPTION>
            
                                                                <OPTION>Algeria</OPTION>
            
                                                                <OPTION>American Samoa</OPTION>
            
                                                                <OPTION>Andorra</OPTION>
            
                                                                <OPTION>Angola</OPTION>
            
                                                                <OPTION>Anguilla</OPTION>
            
                                                                <OPTION>Antarctica</OPTION>
            
                                                                <OPTION>Antigua</OPTION>
            
                                                                <OPTION>Argentina</OPTION>
            
                                                                <OPTION>Armenia</OPTION>
            
                                                                <OPTION>Aruba</OPTION>
            
                                                                <OPTION>Ascension</OPTION>
            
                                                                <OPTION>Australia</OPTION>
            
                                                                <OPTION>Austria</OPTION>
            
                                                                <OPTION>Azerbaijan</OPTION>
            
                                                                <OPTION>Bahamas</OPTION>
            
                                                                <OPTION>Bahrain</OPTION>
            
                                                                <OPTION>Bangladesh</OPTION>
            
                                                                <OPTION>Barbados</OPTION>
            
                                                                <OPTION>Barbuda</OPTION>
            
                                                                <OPTION>Belarus</OPTION>
            
                                                                <OPTION>Belgium</OPTION>
            
                                                                <OPTION>Belize</OPTION>
            
                                                                <OPTION>Benin</OPTION>
            
                                                                <OPTION>Bermuda</OPTION>
            
                                                                <OPTION>Bhutan</OPTION>
            
                                                                <OPTION>Bolivia</OPTION>
            
                                                                <OPTION>Bonaire</OPTION>
            
                                                                <OPTION>Bosnia</OPTION>
            
                                                                <OPTION>Botswana</OPTION>
            
                                                                <OPTION>Bouvet Island</OPTION>
            
                                                                <OPTION>Brazil</OPTION>
            
                                                                <OPTION>British Indian Ocean Territory</OPTION>
            
                                                                <OPTION>Brunei Darussalam</OPTION>
            
                                                                <OPTION>Bulgaria</OPTION>
            
                                                                <OPTION>Burkina Faso</OPTION>
            
                                                                <OPTION>Burundi</OPTION>
            
                                                                <OPTION>Caicos Islands</OPTION>
            
                                                                <OPTION>Cambodia</OPTION>
            
                                                                <OPTION>Cameroon</OPTION>
            
                                                                <OPTION>Canada</OPTION>
            
                                                                <OPTION>Cape Verde</OPTION>
            
                                                                <OPTION>Cayman Islands</OPTION>
            
                                                                <OPTION>Central African Republic</OPTION>
            
                                                                <OPTION>Chad</OPTION>
            
                                                                <OPTION>Chile</OPTION>
            
                                                                <OPTION>China</OPTION>
            
                                                                <OPTION>Christmas Island</OPTION>
            
                                                                <OPTION>Cocos (Keeling) Islands</OPTION>
            
                                                                <OPTION>Colombia</OPTION>
            
                                                                <OPTION>Comoros</OPTION>
            
                                                                <OPTION>Congo</OPTION>
            
                                                                <OPTION>Cook Islands</OPTION>
            
                                                                <OPTION>Costa Rica</OPTION>
            
                                                                <OPTION>Cote d'lvoire</OPTION>
            
                                                                <OPTION>Croatia</OPTION>
            
                                                                <OPTION>Cuba</OPTION>
            
                                                                <OPTION>Curacao</OPTION>
            
                                                                <OPTION>Cyprus</OPTION>
            
                                                                <OPTION>Czech Republic</OPTION>
            
                                                                <OPTION>Democratic Republic of The Congo</OPTION>
            
                                                                <OPTION>Denmark</OPTION>
            
                                                                <OPTION>Djibouti</OPTION>
            
                                                                <OPTION>Dominica</OPTION>
            
                                                                <OPTION>Dominican Republic</OPTION>
            
                                                                <OPTION>Ecuador</OPTION>
            
                                                                <OPTION>Egypt</OPTION>
            
                                                                <OPTION>El Salvador</OPTION>
            
                                                                <OPTION>Equatorial Guinea</OPTION>
            
                                                                <OPTION>Eritrea</OPTION>
            
                                                                <OPTION>Estonia</OPTION>
            
                                                                <OPTION>Ethiopia</OPTION>
            
                                                                <OPTION>Falkland Islands (Malvinas)</OPTION>
            
                                                                <OPTION>Faroe Islands</OPTION>
            
                                                                <OPTION>Fiji</OPTION>
            
                                                                <OPTION>Finland</OPTION>
            
                                                                <OPTION>France</OPTION>
            
                                                                <OPTION>French Guiana</OPTION>
            
                                                                <OPTION>French Polynesia</OPTION>
            
                                                                <OPTION>French Southern Territories</OPTION>
            
                                                                <OPTION>Futuna</OPTION>
            
                                                                <OPTION>Gabon</OPTION>
            
                                                                <OPTION>Gambia</OPTION>
            
                                                                <OPTION>Georgia</OPTION>
            
                                                                <OPTION>Germany</OPTION>
            
                                                                <OPTION>Ghana</OPTION>
            
                                                                <OPTION>Gibraltar</OPTION>
            
                                                                <OPTION>Greece</OPTION>
            
                                                                <OPTION>Greenland</OPTION>
            
                                                                <OPTION>Grenada</OPTION>
            
                                                                <OPTION>Grenadines</OPTION>
            
                                                                <OPTION>Guadeloupe</OPTION>
            
                                                                <OPTION>Guam</OPTION>
            
                                                                <OPTION>Guatemala</OPTION>
            
                                                                <OPTION>Guernsey</OPTION>
            
                                                                <OPTION>Guinea</OPTION>
            
                                                                <OPTION>Guinea-Bissau</OPTION>
            
                                                                <OPTION>Guyana</OPTION>
            
                                                                <OPTION>Haiti</OPTION>
            
                                                                <OPTION>Heard Island</OPTION>
            
                                                                <OPTION>Herzegovina</OPTION>
            
                                                                <OPTION>Honduras</OPTION>
            
                                                                <OPTION>Hong Kong</OPTION>
            
                                                                <OPTION>Hungary</OPTION>
            
                                                                <OPTION>Iceland</OPTION>
            
                                                                <OPTION>India</OPTION>
            
                                                                <OPTION>Indonesia</OPTION>
            
                                                                <OPTION>Iran</OPTION>
            
                                                                <OPTION>Iraq</OPTION>
            
                                                                <OPTION>Ireland</OPTION>
            
                                                                <OPTION>Isle of Man</OPTION>
            
                                                                <OPTION>Israel</OPTION>
            
                                                                <OPTION>Italy</OPTION>
            
                                                                <OPTION>Jamaica</OPTION>
            
                                                                <OPTION>Jan Mayen</OPTION>
            
                                                                <OPTION>Japan</OPTION>
            
                                                                <OPTION>Jersey</OPTION>
            
                                                                <OPTION>Jordan</OPTION>
            
                                                                <OPTION>Kazakhstan</OPTION>
            
                                                                <OPTION>Kenya</OPTION>
            
                                                                <OPTION>Kiribati</OPTION>
            
                                                                <OPTION>North Korea</OPTION>
            
                                                                <OPTION>Kuwait</OPTION>
            
                                                                <OPTION>Kyrgzstan</OPTION>
            
                                                                <OPTION>Laos</OPTION>
            
                                                                <OPTION>Latvia</OPTION>
            
                                                                <OPTION>Lebanon</OPTION>
            
                                                                <OPTION>Lesotho</OPTION>
            
                                                                <OPTION>Liberia</OPTION>
            
                                                                <OPTION>Libya</OPTION>
            
                                                                <OPTION>Liechtenstein</OPTION>
            
                                                                <OPTION>Lithuania</OPTION>
            
                                                                <OPTION>Luxembourg</OPTION>
            
                                                                <OPTION>Macao</OPTION>
            
                                                                <OPTION>Macedonia</OPTION>
            
                                                                <OPTION>Madagascar</OPTION>
            
                                                                <OPTION>Malawi</OPTION>
            
                                                                <OPTION>Malaysia</OPTION>
            
                                                                <OPTION>Maldives</OPTION>
            
                                                                <OPTION>Mali</OPTION>
            
                                                                <OPTION>Malta</OPTION>
            
                                                                <OPTION>Marshall Islands</OPTION>
            
                                                                <OPTION>Martinique</OPTION>
            
                                                                <OPTION>Mauritania</OPTION>
            
                                                                <OPTION>Mauritius</OPTION>
            
                                                                <OPTION>Mayotte</OPTION>
            
                                                                <OPTION>McDonald Islands</OPTION>
            
                                                                <OPTION>Mexico</OPTION>
            
                                                                <OPTION>Micronesia</OPTION>
            
                                                                <OPTION>Miquelon</OPTION>
            
                                                                <OPTION>Moldova</OPTION>
            
                                                                <OPTION>Monaco</OPTION>
            
                                                                <OPTION>Mongolia</OPTION>
            
                                                                <OPTION>Montenegro</OPTION>
            
                                                                <OPTION>Montserrat</OPTION>
            
                                                                <OPTION>Morocco</OPTION>
            
                                                                <OPTION>Mozambique</OPTION>
            
                                                                <OPTION>Myanmar</OPTION>
            
                                                                <OPTION>Namibia</OPTION>
            
                                                                <OPTION>Nauru</OPTION>
            
                                                                <OPTION>Nepal</OPTION>
            
                                                                <OPTION>Netherlands</OPTION>
            
                                                                <OPTION>Nevis</OPTION>
            
                                                                <OPTION>New Caledonia</OPTION>
            
                                                                <OPTION>New Zealand</OPTION>
            
                                                                <OPTION>Nicaragua</OPTION>
            
                                                                <OPTION>Niger</OPTION>
            
                                                                <OPTION>Nigeria</OPTION>
            
                                                                <OPTION>Niue</OPTION>
            
                                                                <OPTION>Norfolk Island</OPTION>
            
                                                                <OPTION>Northern Mariana Islands</OPTION>
            
                                                                <OPTION>Norway</OPTION>
            
                                                                <OPTION>Oman</OPTION>
            
                                                                <OPTION>Pakistan</OPTION>
            
                                                                <OPTION>Palau</OPTION>
            
                                                                <OPTION>Palestine</OPTION>
            
                                                                <OPTION>Panama</OPTION>
            
                                                                <OPTION>Papua New Guinea</OPTION>
            
                                                                <OPTION>Paraguay</OPTION>
            
                                                                <OPTION>Peru</OPTION>
            
                                                                <OPTION>Philippines</OPTION>
            
                                                                <OPTION>Pitcairn</OPTION>
            
                                                                <OPTION>Poland</OPTION>
            
                                                                <OPTION>Portugal</OPTION>
            
                                                                <OPTION>Principe</OPTION>
            
                                                                <OPTION>Puerto Rico</OPTION>
            
                                                                <OPTION>Qatar</OPTION>
            
                                                                <OPTION>Reunion</OPTION>
            
                                                                <OPTION>Romania</OPTION>
            
                                                                <OPTION>Russia</OPTION>
            
                                                                <OPTION>Rwanda</OPTION>
            
                                                                <OPTION>Saba</OPTION>
            
                                                                <OPTION>Saint Barthelemy</OPTION>
            
                                                                <OPTION>Saint Helena</OPTION>
            
                                                                <OPTION>Saint Kitts</OPTION>
            
                                                                <OPTION>Saint Lucia</OPTION>
            
                                                                <OPTION>Saint Martin</OPTION>
            
                                                                <OPTION>Saint Pierre</OPTION>
            
                                                                <OPTION>Saint Vincent</OPTION>
            
                                                                <OPTION>Samoa</OPTION>
            
                                                                <OPTION>San Marino</OPTION>
            
                                                                <OPTION>Sao Tome</OPTION>
            
                                                                <OPTION>Saudi Arabia</OPTION>
            
                                                                <OPTION>Senegal</OPTION>
            
                                                                <OPTION>Serbia</OPTION>
            
                                                                <OPTION>Seychelles</OPTION>
            
                                                                <OPTION>Sierra Leone</OPTION>
            
                                                                <OPTION>Singapore</OPTION>
            
                                                                <OPTION>Sint Eustatius</OPTION>
            
                                                                <OPTION>Sint Maarten</OPTION>
            
                                                                <OPTION>Slovakia</OPTION>
            
                                                                <OPTION>Slovenia</OPTION>
            
                                                                <OPTION>Solomon Islands</OPTION>
            
                                                                <OPTION>Somalia</OPTION>
            
                                                                <OPTION>South Africa</OPTION>
            
                                                                <OPTION>South Georgia</OPTION>
            
                                                                <OPTION>South Korea</OPTION>
            
                                                                <OPTION>South Sandwich</OPTION>
            
                                                                <OPTION>South Sudan</OPTION>
            
                                                                <OPTION>Spain</OPTION>
            
                                                                <OPTION>Sri Lanka</OPTION>
            
                                                                <OPTION>Sudan</OPTION>
            
                                                                <OPTION>Suriname</OPTION>
            
                                                                <OPTION>Svalbard</OPTION>
            
                                                                <OPTION>Swaziland</OPTION>
            
                                                                <OPTION>Sweden</OPTION>
            
                                                                <OPTION>Switzerland</OPTION>
            
                                                                <OPTION>Sweden</OPTION>
            
                                                                <OPTION>Switzerland</OPTION>
            
                                                                <OPTION>Syrian Arab Republic</OPTION>
            
                                                                <OPTION>Taiwan</OPTION>
            
                                                                <OPTION>Tajikistan</OPTION>
            
                                                                <OPTION>Tanzania</OPTION>
            
                                                                <OPTION>Thailand</OPTION>
            
                                                                <OPTION>Timor-Leste</OPTION>
            
                                                                <OPTION>Tobago</OPTION>
            
                                                                <OPTION>Togo</OPTION>
            
                                                                <OPTION>Tokelau</OPTION>
            
                                                                <OPTION>Tonga</OPTION>
            
                                                                <OPTION>Trinidad</OPTION>
            
                                                                <OPTION>Tristan da Cunha</OPTION>
            
                                                                <OPTION>Tunisia</OPTION>
            
                                                                <OPTION>Turkey</OPTION>
            
                                                                <OPTION>Turkmenistan</OPTION>
            
                                                                <OPTION>Turks Islands</OPTION>
            
                                                                <OPTION>Tuvalu</OPTION>
            
                                                                <OPTION>Uganda</OPTION>
            
                                                                <OPTION>Ukraine</OPTION>
            
                                                                <OPTION>United Arab Emirates</OPTION>
            
                                                                <OPTION>United Kingdom</OPTION>
            
                                                                <OPTION>United States Minor Outlying Islands</OPTION>
            
                                                                <OPTION>Uruguay</OPTION>
            
                                                                <OPTION>Uzbekistan</OPTION>
            
                                                                <OPTION>Vanuatu</OPTION>
            
                                                                <OPTION>Vatican City</OPTION>
            
                                                                <OPTION>Venezuela</OPTION>
            
                                                                <OPTION>Vietnam</OPTION>
            
                                                                <OPTION>Virgin Islands (British)</OPTION>
            
                                                                <OPTION>Virgin Islands (United States)</OPTION>
            
                                                                <OPTION>Wallis</OPTION>
            
                                                                <OPTION>Western Sahara</OPTION>
            
                                                                <OPTION>Yemen</OPTION>
            
                                                                <OPTION>Zambia</OPTION>
            
                                                                <OPTION>Zimbabwe</OPTION>
            
                                                                <OPTION></OPTION>
            
                                                            </SELECT>
                                                        </datalist>
                                        
                                            </fieldset>
            
                                            <fieldset>
                                        
                                                <legend>
                            
                                                    What do you want to tell me.
                            
                                                </legend>
            
                                                    Suggestions:
            
                                                        <TEXTAREA name="comment" cols="20" rows="3"> <?php echo $comment;?> </TEXTAREA>
            
                                                            <button id="TFsubbersButton" type="submit"> 
                                                                
                                                                Submit
                                        
                                                            </button> 
                                                </fieldset>
            
                                    </form>
                           
                            </span>
        
                    </footer>
                <script src="JavaScript/jquery.js"></script>
                <script src="script.js"></script>
        </body>
    </html>

</DOCTYPE html>
?>
