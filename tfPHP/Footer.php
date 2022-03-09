<?php

echo ("<div id='TFNP'>

                        
    <span id='businessInfo'></span>
        <ul id='BizTickerScroll' class='BizzTicker'>
            <li>
                <h>
                    Tsunami Flow Noble Purpose      
                </h>
    
                    <p>
    The goal of Tsunami Flow is to be the homebase for unique and original entertainment. We want to provide our audience with the best type of feelings and emotions as possible.  We inspire the greatness of the future to come.  
    We want to help the evolution of society and the mental state of it.  To help the world found more courage and strength to pursue and become what they desire to be.  People will start to inwardly and outwardly evolve themselves and their character.
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
    
    <div #id='TFA'>
    
    <h>
        Tsunami Flow Awards
    </h>
    
        <p>
    
        </p>
    </div>  
    
    <!-- quick links commented out for now -->
    <div id='QuickLinks'>
    
    
    </div>
    
    <span id='Subscribe'> 
    
        <H4 id='NewMembershipSubscription'> 
            Membership 
        </H4>
    
        $PleaseSubscribe = new DOMdocument();
        $PleaseSubscribe->load('data.xml');
        echo ($PleaseSubscribe->saveXML());
    
    
            <form name='SubberTF' id='TFsubbers' method='post' action='script.php' onsubmit='return validateForm()'>
                <fieldset>
                    <legend>
                        Join the Squad
                    </legend>    
                        <label>
                            Name:   
                                <INPUT id='NewSubberName' type='text' name='Name' value='<?php echo $name;?>' size='10' maxlength='100' autocomplete='on' onfocus='' onchange='' required>
                        </label>
                        <label>
                            Email: 
                                <INPUT type='email' name='Email' value='<?php echo $email;?>' size='10' maxlength='100' required>                
                        </label>
                        <label>                                      
                            <input number>
                        
                        </label>
                
                
                        <label>
    
                            Phone Number
                            
                                <input type='tel' Name='PhoneNumber'>
                        
                        </label>
                
                        <label>
    
                            Date 
                    
                                <INPUT type='date' name='Date'>
    
                        </label>
                
                    </fieldset>
    
                    <fieldset>
    
                        <legend> 
                            Fun Facts About You 
                        </legend>
    
                            <label>
    
                            Favorite Color 
                                <INPUT type='color' name='Color'>
    
                            </label>
    
                            <label>
    
                                Personal/Business Website 
    
                                    <INPUT type='url' name='FanWebsite' value='<?php echo $website;?>' size='10' maxlength='300'>
                        
                            </label>
    
                            <label>
                                Business Type/Personality 
                                    <input type='radio' name='BusinessPersonality' <?php if (isset($BusinessPersonality) && $BusinessPersonality=='ETNJ') echo 'checked';?> ETNJ
                                    <input type='radio' name='BusinessPersonality' <?php if (isset($BusinessPersonality) && $BusinessPersonality=='TTHL') echo 'checked';?> TLKJ
    
                            </label>
                
                            <label>
                    
                                    <input type='password' size='10' maxlength='1000'>
                    
                
                            </label>
                
                            <label>
                    
                                <input type='range'>
                    
                            </label>
                            <input list='Country'>
                            <datalist id='CountryIGuess'></datalist>
                                Country: 
                                
                                    <SELECT name='Country'>
    
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
    
                                        <OPTION>Cote dlvoire</OPTION>
    
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
    
                                <TEXTAREA name='comment' cols='20' rows='3'> <?php echo $comment;?> </TEXTAREA>
    
                                    <button id='TFsubbersButton' type='submit'> 
                                        
                                        Submit
                
                                    </button> 
                        </fieldset>
    
            </form>
    
    </span>"
);



?>
