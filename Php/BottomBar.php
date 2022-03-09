<?php

echo ("<span id='SomethingList'>" 
. 
readfile("./Music/Try To Stop Me Radio Edit.mp3");
$myfile = fopen("./Music/Try To Stop Me Radio Edit.mp3", "r") or die ("Unable to open file!");
echo fread($myfile,filesize("./Music/Try To Stop Me Radio Edit.mp3"));
fclose($myfile);
. 
"<audio id='TFmusicPlayer' controls>
        <source src='./Music/Try To Stop Me Radio Edit.mp3' type='audio/mpeg'>
        your device does not support the audio.
    </audio>
</span>

                <span id='TheList' class='FactsList'>

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

                <span id='donation'>

                    <form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>

                        <input type='hidden' name='cmd' value='_s-xclick'>

                        <input type='hidden' name='hosted_button_id' value='3LQGL334FUKLW'>

                        <input type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif' border='0' name='submit' alt='PayPal - 
                                            The safer, easier way to pay online!'>

                        <img alt='' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'>

                    </form>
                    
               </span>"
);