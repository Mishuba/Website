<form name="SubberTF" id="TFsubbers" method="post" action="./IsThisit/Footer/SubscribeForm.php" onsubmit="return validateForm()">
                                    <fieldset>
                                        <legend>
                                            Join the Squad
                                        </legend>    
                                            <label>
                                                Name:   
                                                    <INPUT id="NewSubberName" type="text" name="SubName" value="<?php echo $name;?>" size="10" maxlength="100" autocomplete="on" onfocus="" onchange="" required>
                                            </label>

                                        <br>.

                                            <label>
                                                Email: 
                                                    <INPUT type="email" name="Email" value="<?php echo $email;?>" size="10" maxlength="100" required>                
                                            </label>

                                            <br>

                                            <label>      
                                                Favorite Number:                             
                                                <input number value="<?php echo $favNumber;?>" required>
                                            </label>
                                    
                                            <br>

                                            <label>
                                                Phone Number:          
                                                    <input type="tel" name="Phone Number" value="<?php echo $phoneNumber;?>" required>
                                            </label>
                                    
                                            <!--fix this shit. make it so that when they finish filling out the form it adds what date time and possibly location.

                                            <label>
                                                Today's Date:                 
                                                    <INPUT type="date" name="Date">
                                            </label>

                                            -->

                                            <br>

                                            <label>
                                                Birthday:
                                                    <input type="date">
                                            </label>

                                            <br>

                                            <label>
                                                Password:
                                                <input type="password" size="10" maxlength="1000">
                                        </label>
                            
                                        <br>

                                        <label>     
                                            <input type="range">
                                        </label>

                                        </fieldset>
        
                                        <fieldset>
        
                                            <legend> 
                                                Fun Facts About You 
                                            </legend>

                                                <label>
                                                    Hobbies
                                                    <input type="text" name="Hobby" value="<?php echo $hobbies;?>">
                                                </label>
        
                                                <br>

                                                <label> 
                                                Favorite Color 
                                                    <INPUT type="color" name="favColor" value="<?php echo $favColor;?>:">
                                                </label>
        
                                                <br>

                                                <label>
                                                    Personal/Business Website 
                                                        <INPUT type="url" name="FanWebsite" value="<?php echo $website;?>" size="10" maxlength="300">
                                                </label>

                                                <br>

                                                <label>
                                                    Love Language
                                                    <input type="radio" name="LoveLanguage" <?php if (isset($LoveLanguage) && $LoveLanguage=="WOA") echo "checked";?>> Words of Affirmation
                                                    <input type="radio" name="LoveLanguage" <?php if (isset($LoveLanguage) && $LoveLanguage=="AOS") echo "checked";?>> Acts of Service
                                                    <input type="radio" name="LoveLanguage" <?php if (isset($LoveLanguage) && $LoveLanguage=="RG") echo "checked";?>> Receiving Gifts
                                                    <input type="radio" name="LoveLanguage" <?php if (isset($LoveLanguage) && $LoveLanguage=="QT") echo "checked";?>> Quality Time
                                                    <input type="radio" name="LoveLanguage" <?php if (isset($LoveLanguage) && $LoveLanguage=="PT") echo "checked";?>> Physical Touch
                                                </label>

                                                <br>

                                                <label>
                                                    Learning Style 
                                                    <input type="radio" name="LearningStyle" <?php if (isset($LearningStyle) && $LearningStyle=="Visual") echo "checked";?>> Spatial
                                                    <input type="radio" name="LearningStyle" <?php if (isset($LearningStyle) && $LearningStyle=="Aural") echo "checked";?>> Auditory-Musical
                                                    <input type="radio" name="LearningStyle" <?php if (isset($LearningStyle) && $LearningStyle=="Verbal") echo "checked";?>> Linguistic
                                                    <input type="radio" name="LearningStyle" <?php if (isset($LearningStyle) && $LearningStyle=="Physical") echo "checked";?>> Kinesthetic
                                                    <input type="radio" name="LearningStyle" <?php if (isset($LearningStyle) && $LearningStyle=="Logical") echo "checked";?>> Mathematical
                                                    <input type="radio" name="LearningStyle" <?php if (isset($LearningStyle) && $LearningStyle=="Social") echo "checked";?>> Interpersonal
                                                    <input type="radio" name="LearningStyle" <?php if (isset($LearningStyle) && $LearningStyle=="Solitary") echo "checked";?>> Intrapersonal
                                                </label>

                                                <br>

                                                <label>
                                                    Business Type/Personality 
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="INTJ") echo "checked";?>> Architech
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="INTP") echo "checked";?>> Logician
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ENTJ") echo "checked";?>> Commander
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ENTP") echo "checked";?>> Debate
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="INFJ") echo "checked";?>> Advocate 
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="INFP") echo "checked";?>> Mediator
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ENFJ") echo "checked";?>> Protagonist
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ENFP") echo "checked";?>> Campaigner
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ISTJ") echo "checked";?>> Logistician
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ISFJ") echo "checked";?>> Defender
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ESTJ") echo "checked";?>> Executive
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ESFJ") echo "checked";?>> Consul
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ISTP") echo "checked";?>> Virtuoso
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ISFP") echo "checked";?>> Adventurer
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ESTP") echo "checked";?>> Entrepreneur
                                                        <input type="radio" name="BusinessPersonality" <?php if (isset($BusinessPersonality) && $BusinessPersonality=="ESFP") echo "checked";?>> Entertainer

                                                </label>

                                                <br>

                                                <label>
                                                    DISC 
                                                    <input type="radio" name="DISC" <?php if (isset($DISC) && $DISC=="D") echo "checked";?>> Dominance
                                                    <input type="radio" name="DISC" <?php if (isset($DISC) && $DISC=="I") echo "checked";?>> Influence 
                                                    <input type="radio" name="DISC" <?php if (isset($DISC) && $DISC=="S") echo "checked";?>> Steadiness
                                                    <input type="radio" name="DISC" <?php if (isset($DISC) && $DISC=="C") echo "checked";?>> Conscientiousness
                                                </label>
                                    
                                                <br>

                                                <label>
                                                    Chinese Zodiac Sign
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Horse") echo "checked";?>> Horse
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Goat") echo "checked";?>> Goat
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Monkey") echo "checked";?>> Monkey
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Rooster") echo "checked";?>> Rooster
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Dog") echo "checked";?>> Dog
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Pig") echo "checked";?>> Pig
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Rat") echo "checked";?>> Rat
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Ox") echo "checked";?>> Ox
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Tiger") echo "checked";?>> Tiger
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Rabbit") echo "checked";?>> Rabbit
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Dragon") echo "checked";?>> Dragon
                                                    <input type="radio" name="ChineseZodiacSign" <?php if (isset($ChineseZodiacSign) && $ChineseZodiacSign=="Snake") echo "checked";?>> Snake
                                                </label>

                                                <br>

                                                <label>
                                                    Western Zodiac Sign
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Capricorn") echo "checked";?>> Capricorn
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Aquarius") echo "checked";?>> Aquarius
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Pisces") echo "checked";?>> Pisces
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Aries") echo "checked";?>> Aries
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Taurus") echo "checked";?>> Taurus
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Gemini") echo "checked";?>> Gemini
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Cancer") echo "checked";?>> Cancer
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Leo") echo "checked";?>> Leo
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Virgo") echo "checked";?>> Virgo
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Libra") echo "checked";?>> Libra
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Scorpio") echo "checked";?>> Scorpio
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Ophiuchus") echo "checked";?>> Ophiuchus
                                                    <input type="radio" name="WesternZodiacSign" <?php if (isset($WesternZodiacSign) && $WesternZodiacSign=="Sagittarius") echo "checked";?>> Sagittarius                                      
                                                </label>

                                                <br>

                                                <input list="Country">
                                                <datalist id="CountryIGuess">
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
                                                        </SELECT>
                                                    </datalist>
                                                
                                                    <br>

                                            <input list="Religion">
                                            <datalist id="ReligionMaybe">
                                                Religion:
                                                <Select name="Religion">
                                                        <Option> Confucianism </Option>
                                                        <Option> Shinto </Option>
                                                        <Option> Taoism </Option>
                                                        <Option> Benzhuism </Option>
                                                        <Option> Luoism </Option>
                                                        <Option> Mohism </Option>
                                                        <Option> Wang Hao-te </Option>
                                                        <Option> Xiantiandao </Option>
                                                        <Option> Yiguandao </Option>
                                                        <Option> Zhuang Shingonism </Option>
                                                        <Option> Shugendo </Option>
                                                        <Option> Cheondoism </Option>
                                                        <Option> Daojongism </Option>
                                                        <Option> Daesun Jinrihoe </Option>
                                                        <Option> Jeung San Doing</Option>
                                                        <Option> Suwunism </Option>
                                                        <Option> Dao Mau </Option>
                                                        <Option> Dao Buu Son Ky Huong </Option>
                                                        <Option> Dao Dua </Option>
                                                        <Option> Caodaism </Option>
                                                        <Option> Hoa Hao </Option>
                                                        <Option> Hinduism </Option>
                                                        <Option> Jainism </Option>
                                                        <Option> Skihism </Option>
                                                        <Option> Tiantai </Option>
                                                        <Option> Tendai </Option>
                                                        <Option> Cheontae </Option>
                                                        <Option> Dasabhumika </Option>
                                                        <Option> Hwaeom </Option>
                                                        <Option> Kegon </Option>
                                                        <Option> Zen </Option>
                                                        <Option> Soto </Option>
                                                        <Option> Sanbo Kyodan </Option>
                                                        <Option> Madhyamaka </Option>
                                                        <Option> Jonang </Option>
                                                        <Option> Prasangika </Option>
                                                        <Option> Svatantrika </Option>
                                                        <Option> Yogacara </Option>
                                                        <Option> Theravada </Option>
                                                        <Option> Sangharaj Nikaya </Option>
                                                        <Option> Mahasthabir </Option>
                                                        <Option> Dwara Nikaya </Option>
                                                        <Option> Shwegyin Nikaya </Option>
                                                        <Option> Tudhamma Nikaya </Option>
                                                        <Option> Amarapura Nikaya </Option>
                                                        <Option> Ramanna Nikaya </Option>
                                                        <Option> Siam Nikaya </Option>
                                                        <Option> Dhammayuttika Nikaya </Option>
                                                        <Option> Maha Nikaya </Option>
                                                        <Option> Vajrayana </Option>
                                                        <Option> Bon </Option>
                                                        <Option> Kagyu </Option>
                                                        <Option> Nyingma </Option>
                                                        <Option> Sakya </Option>
                                                        <Option> Jonang </Option>
                                                        <Option> Bodongpa </Option>
                                                        <Option> Navayana </Option>
                                                        <Option> Kirat Mundum </Option>
                                                        <Option> Ayyavazhi </Option>
                                                        <Option> Kaumaram </Option>
                                                        <Option> Shaivism </Option>
                                                        <Option> Aghori </Option>
                                                        <Option> Kapalika </Option>
                                                        <Option> Kashmir Shaivism </Option>
                                                        <Option> Nath </Option>
                                                        <Option> Pashupata </Option>
                                                        <Option> Shaiva Siddhanta </Option>
                                                        <Option> Veerashaivism </Option>
                                                        <Option> Shaktism </Option>
                                                        <Option> Kalikula </Option>
                                                        <Option> Srikula </Option>
                                                        <Option> Smartism </Option>
                                                        <Option> Srauta </Option>
                                                        <Option> Tantra </Option>
                                                        <Option> Baul </Option>
                                                        <Option> Kaula </Option>
                                                        <Option> Vaishnavism </Option> 
                                                        <Option> Balmikism </Option>
                                                        <Option> Brahma Sampradaya </Option>
                                                        <Option> Gaudiya Vaishnavism </Option>
                                                        <Option> Mahanam Sampraday </Option>
                                                        <Option> Ekasarana Dharma </Option>
                                                        <Option> Kapadi Sampraday </Option>
                                                        <Option> Mahanubhava </Option>
                                                        <Option> Nimbarka Sampradaya </Option> 
                                                        <Option> PranamPranami Sampraday </Option> 
                                                        <Option> Radha-vallabha </Option>
                                                        <Option> Pushtimarg </Option>
                                                        <Option> Ramanandi Sampraday </Option>
                                                        <Option> Warkari </Option> 
                                                        <Option> Sant Mat </Option> 
                                                        <Option> Advait Mat </Option> 
                                                        <Option> Divine Light Mission </Option> 
                                                        <Option> Dadupanth </Option>
                                                        <Option> Kabir Panth </Option>
                                                        <Option> Sanatan Sikh </Option> 
                                                        <Option> Udasi </Option> 
                                                        <Option> Nirmala </Option>    
                                                        <Option> Radha Soami </Option>  
                                                        <Option> Ravidassia </Option>   
                                                        <Option> Sadh </Option>       
                                                        <Option> Astika </Option>
                                                        <Option> Nyaya </Option> 
                                                        <Option> Purva Mimamsa </Option>
                                                        <Option> Vaisheshika </Option>
                                                        <Option> Vedanta </Option>
                                                        <Option> Advaita Vedanta </Option>
                                                        <Option> Akshar-Purushottam Darshan </Option>
                                                        <Option> Bhedabheda </Option>
                                                        <Option> Dvaita Vedanta </Option>
                                                        <Option> Integral Yoga </Option>
                                                        <Option> Pratyabhijna </Option>
                                                        <Option> Nastika </Option>
                                                        <Option> Yoga </Option> 
                                                        <Option> Ananda </Option>
                                                        <Option> Arya Smaj </Option>
                                                        <Option> Brahma Kumaris </Option>
                                                        <Option> Chinmaya Mission </Option> 
                                                        <Option> Hindutva </Option> 
                                                        <Option> Mahima Dharma </Option>
                                                        <Option> Matua Mahasangha </Option>
                                                        <Option> Satsang </Option>
                                                        <Option> Sathya Sai Baba Movement </Option> 
                                                        <Option> Satya Dharma </Option>
                                                        <Option> Sivananda Yoga Vedanta Centres </Option>
                                                        <Option> Sri Aurobindo Ashram </Option>
                                                        <Option> Sri Ramana Ashram </Option>
                                                        <Option> Jainism </Option>
                                                        <Option> Digambara </Option> 
                                                        <Option> Svetambara </Option> 
                                                        <Option> Skihism </Option>
                                                        <Option> Damdami Taksal </Option>
                                                        <Option> Nanakpanthi </Option>
                                                        <Option> Nihang</Option>
                                                        <OPTION> Babism </Option>
                                                        <OPTION> Azali </Option>
                                                        <OPTION> Christianity </Option>
                                                        <OPTION> Moravians </Option>
                                                        <OPTION> Protestantism </Option>
                                                        <OPTION> Anglicanism </Option>
                                                        <OPTION> Baptists </Option>
                                                        <OPTION> Evangelicalism </Option>
                                                        <OPTION> Jesusim </Option>
                                                        <OPTION> Lollardy </Option>
                                                        <OPTION> Lutheranism </Option>
                                                        <OPTION> Methodism </Option>
                                                        <OPTION> Pentecostalism </Option>
                                                        <OPTION> Quakers </Option>
                                                        <OPTION> Reformed Churches </Option>
                                                        <OPTION> Swedenborgianism </Option>
                                                        <OPTION> Unitarianism </Option>
                                                        <OPTION> Catholic </Option>
                                                        <OPTION> Druze </Option>
                                                        <OPTION> Islam </Option>
                                                        <OPTION> Khawarij </Option>
                                                        <OPTION> Shia Islam </Option>
                                                        <OPTION> Mustaali </Option>
                                                        <OPTION> Dawoodi Bohra </Option>
                                                        <OPTION> Nizari </Option>
                                                        <OPTION> Twelver </Option>
                                                        <OPTION> Zaidiyyah </Option>
                                                        <OPTION> Khurranmites </Option>
                                                        <OPTION> Sufism </Option> 
                                                        <OPTION> Sunni Islam </Option>
                                                        <OPTION> Kalam/Fiqh </Option>
                                                        <OPTION> Ash'ari </Option>
                                                        <OPTION> Maturidi </Option>
                                                        <OPTION> Athari </Option> 
                                                        <OPTION> Mu tazila </Option>
                                                        <OPTION>Ahmadiyya </Option>
                                                        <OPTION> Ali lllahism </Option>
                                                        <OPTION> Din-i llahi </Option>
                                                        <OPTION> Jadid </Option>
                                                        <OPTION> Jamaat al Muslimeen </Option>
                                                        <OPTION> Mahdavia </Option>
                                                        <OPTION> Quranism </Option>
                                                        <OPTION> Riaz Ahmed Gohar Shahi </Option>
                                                        <OPTION> Xidaotang </Option>
                                                        <OPTION> Judaism </Option>
                                                        <OPTION> Kabbalah </Option>
                                                        <OPTION> Hardal </Option>
                                                        <OPTION> Misnagdim </Option>
                                                        <OPTION> Noahidism </Option>
                                                        <OPTION> Subbotniks </Option>
                                                        <OPTION> Essenes </Option>
                                                        <OPTION> Pharisees </Option>
                                                        <OPTION> Sadducees </Option>
                                                        <OPTION> Zealots </Option>
                                                        <OPTION> Ebionites </Option>
                                                        <OPTION> Elcesaltes </Option>
                                                        <OPTION> Nazarenes </Option> 
                                                        <OPTION> Sabbateans </Option>
                                                        <OPTION> Frankism </Option>
                                                        <OPTION> Sabians </Option>
                                                        <OPTION> Shabakism </Option>
                                                        <OPTION> Yarsanism </Option>
                                                        <OPTION> Yazidi </Option>
                                                        <OPTION> Akan </Option>
                                                        <OPTION> Akamba </Option>
                                                        <OPTION> Baluba </Option>
                                                        <OPTION> Kongo </Option>
                                                        <OPTION> Zulu </Option>
                                                        <OPTION> Berber </Option> 
                                                        <OPTION> Bushongo </Option>
                                                        <OPTION> Dinka </Option>
                                                        <OPTION> Eflk </Option>
                                                        <OPTION> Fon and Ewe </Option>
                                                        <OPTION> Odinala </Option>
                                                        <OPTION> lk Religion </Option>
                                                        <OPTION> Lotuko </Option>
                                                        <OPTION> Lozi </Option>
                                                        <OPTION> Lugbara </Option>
                                                        <OPTION> Maasai </Option>
                                                        <OPTION> Mbuti</Option>
                                                        <OPTION> San </Option>
                                                        <OPTION> Serer </Option>
                                                        <OPTION> Tumbuka </Option>
                                                        <OPTION> Urhobo </Option>
                                                        <OPTION> Waaqeffanna </Option>
                                                        <OPTION> Yoruba </Option>
                                                        <OPTION> Abakua </Option>
                                                        <OPTION> Bantu </Option>
                                                        <OPTION> Jeje </Option>
                                                        <OPTION> Ketu </Option>
                                                        <OPTION> Comfa </Option>
                                                        <OPTION> Convince </Option>
                                                        <OPTION> Cuban Vodu </Option>
                                                        <OPTION> Dominicanion Vudu </Option>
                                                        <OPTION> Espiritismo </Option>
                                                        <OPTION> Haitian Vodou </Option>
                                                        <OPTION> Hoodoo </Option>
                                                        <OPTION> Jamaican Maroon </Option>
                                                        <OPTION> kele </Option>
                                                        <OPTION> Kumina </Option>
                                                        <OPTION> Louisiana Voodoo </Option>
                                                        <OPTION> Montamentu </Option>
                                                        <OPTION> Myai </Option>
                                                        <OPTION> Obeah </Option>
                                                        <OPTION> Paio </Option> 
                                                        <OPTION> Quimbanda </Option>
                                                        <OPTION> Santeria </Option>
                                                        <OPTION> Tambor de Mina </Option> 
                                                        <OPTION> Trinidad Orisha </Option>
                                                        <OPTION> Umbanda  </Option>
                                                        <OPTION> Winti </Option>
                                                        <OPTION> Shamanism </Option>
                                                        <OPTION> Turko-Mongolian Shamanism </Option>
                                                        <OPTION> Tengrism </Option>
                                                        <OPTION> Burkhanism </Option>
                                                        <OPTION> Vattisen Yaly </Option>
                                                        <OPTION> Blackfoot </Option>
                                                        <OPTION> Miwok </Option>
                                                        <OPTION> Ohlone </Option>
                                                        <OPTION> Pomo </Option>
                                                        <OPTION> Cherokee </Option>
                                                        <OPTION> Chilote </Option>
                                                        <OPTION> Choctaw </Option>
                                                        <OPTION> Creek </Option>
                                                        <OPTION> Guarani </Option> 
                                                        <OPTION> Haida </Option>
                                                        <OPTION> Ho-Chunk </Option>
                                                        <OPTION> Inca </Option> 
                                                        <OPTION> Iroquois </Option>
                                                        <OPTION> Seneca </Option>
                                                        <OPTION> Wyandot </Option> 
                                                        <OPTION> Longhouse </Option>
                                                        <OPTION> Jivaroan </Option>
                                                        <OPTION> Kwakwaka </Option>
                                                        <OPTION> Lakota </Option>
                                                        <OPTION> Lenape </Option>
                                                        <OPTION> Mapuche </Option>
                                                        <OPTION> Aztec </Option>
                                                        <OPTION> Maya </Option> 
                                                        <OPTION> Purepecha </Option>
                                                        <OPTION> Midewiwin </Option>
                                                        <OPTION> Musica </Option>
                                                        <OPTION> Navajo </Option>
                                                        <OPTION> Nuu-chah-nulth
                                                        <OPTION> Pawnee </Option> 
                                                        <OPTION> Powhatan </Option>
                                                        <OPTION> Tsimshian </Option>
                                                        <OPTION> Ute </Option> 
                                                        <OPTION> Zuni </Option>
                                                        <OPTION> Samaism </Option> 
                                                        <OPTION> Alran Kepercayaan </Option> 
                                                        <OPTION> Batak Parmalim </Option>
                                                        <OPTION> Dayak Religion </Option> 
                                                        <OPTION> Kaharingan </Option>
                                                        <OPTION> Javanese Kejawen </Option>
                                                        <OPTION> Karo Permena </Option>
                                                        <OPTION> Sumbese Marapu </Option> 
                                                        <OPTION> Sundanese Wiwtan </Option>
                                                        <OPTION> Momolianism </Option>
                                                        <OPTION> Philippine Dayawism </Option>
                                                        <OPTION> Tagalog </Option>
                                                        <OPTION> Hawaiian </Option>
                                                        <OPTION> Maori </Option> 
                                                        <OPTION> Assianism </Option> 
                                                        <OPTION> Kalash </Option>
                                                        <OPTION> Ahom </Option>
                                                        <OPTION> Mo </Option>
                                                        <OPTION> Tai folk religion </Option> 
                                                        <OPTION> Taoism </Option>
                                                        <OPTION> Bon </Option>
                                                        <OPTION> Burmese folk religion </Option> 
                                                        <OPTION> Benzhuism </Option>
                                                        <OPTION> Bimoism </Option>
                                                        <OPTION> Bathouism </Option>
                                                        <OPTION> Bongthingism </Option>
                                                        <OPTION> Donyi-Polo </Option> 
                                                        <OPTION> Heraka </Option>
                                                        <OPTION> Kiratism </Option> 
                                                        <OPTION> Qiang folk religion </Option>
                                                        <OPTION> Sanamahism </Option>
                                                        <OPTION> Mari Native Religion </Option> 
                                                        <OPTION> Mordvin Native Religion </Option>
                                                        <OPTION> Udmurt Vos </Option>
                                                        <OPTION> Australian Aborigbinal </Option>
                                                        <OPTION> Circassian (Adyghe Habze) </Option>
                                                        <OPTION> Dravidian </Option>
                                                        <OPTION> Inuit </Option>
                                                        <OPTION> Papuan </Option>
                                                        <OPTION> Siberian Shamanism </Option> 
                                                        <OPTION> Shinto </Option>
                                                        <OPTION> John Frum </Option>
                                                        <OPTION> Johnson cult </Option>
                                                        <OPTION> Vailala Madness </Option>
                                                        <OPTION> Ausar Auset Society </Option>
                                                        <OPTION> Dini Ya Msambwa </Option>
                                                        <OPTION> Five-Percent Nation </Option>
                                                        <OPTION> Godianism </Option>
                                                        <OPTION> Black Muslims </Option>
                                                        <OPTION> American Society of Muslims </Option>
                                                        <OPTION> Moorish Science Temple of America </Option>
                                                        <OPTION> Mumboism </Option>
                                                        <OPTION> Nation of Islam </Option>
                                                        <OPTION> Nuwaubian </Option> 
                                                        <OPTION> Rastafari </Option>
                                                        <OPTION> Bobo Ashanti </Option>
                                                        <OPTION> Nyabinghi </Option>
                                                        <OPTION> Twelve Tribes of Israel </Option> 
                                                        <OPTION> African Hebrew Israelites of Jeruusalem </Option>
                                                        <OPTION> Church of God and Saints of Christ </Option>
                                                        <OPTION> Commandment Keepers </Option>
                                                        <OPTION> Nation of Yahweh </Option>
                                                        <OPTION> One West Camp </Option>
                                                        <OPTION> Israelite School of Universal Practical knowledge </Option>
                                                        <OPTION> Ariosophy </Option>
                                                        <OPTION> British Israelism </Option>
                                                        <OPTION> Christian Identity </Option>
                                                        <OPTION> Creativity </Option>
                                                        <OPTION> Wotansvolk </Option>
                                                        <OPTION> Ghost Dance </Option>
                                                        <OPTION> Indian Shaker Church </Option>
                                                        <OPTION> Mexicayoti </Option>
                                                        <OPTION> Native American Church </Option>
                                                        <OPTION> Adidam </Option>
                                                        <OPTION> Brahmoism </Option>
                                                        <OPTION> Adi Dharma </Option>
                                                        <OPTION> Sadharan Brahmo Samaj </Option> 
                                                        <OPTION> Meivazhi </Option> 
                                                        <OPTION> Rajneesh  </Option>
                                                        <OPTION> Transcendental Meditation </Option>
                                                        <OPTION> Aum Shinrikyo </Option>
                                                        <OPTION> Church of World Messianity </Option>
                                                        <OPTION> Happy Science </Option>
                                                        <OPTION> Konkokyo </Option>
                                                        <OPTION> Oomoto </Option>
                                                        <OPTION> PL Kyodan </Option>
                                                        <OPTION> Seicho-no-le </Option> 
                                                        <OPTION> Shinmeiaishinkai </Option> 
                                                        <OPTION> Tenrikyo </Option>
                                                        <OPTION> Zenrinkyo </Option>
                                                        <OPTION> Armenian neopaganism </Option>
                                                        <OPTION> Baltic neopaganism </Option>
                                                        <OPTION> Dievturiba </Option>
                                                        <OPTION> Romuva </Option> 
                                                        <OPTION> Vainakh </Option>
                                                        <OPTION> Heathenry </Option> 
                                                        <OPTION> Hellenism </Option>
                                                        <OPTION> Italo-Roman neopaganism </Option>
                                                        <OPTION> Nova Roma </Option>
                                                        <OPTION> Kemetism </Option>
                                                        <OPTION> Peterburgian Vedism </Option> 
                                                        <OPTION> Rodzima Wiara </Option>
                                                        <OPTION> Rodnover Confederation </Option>
                                                        <OPTION> RUNVira </Option>
                                                        <OPTION> Union of Slavic Native Belief Communities </Option> 
                                                        <OPTION> Ynglism </Option>
                                                        <OPTION> Zaimoxianism </Option>
                                                        <OPTION> Zuism </Option>
                                                        <OPTION> Adonism </Option>
                                                        <OPTION> Church of All Worlds </Option> 
                                                        <OPTION> Church of Aphrodite </Option>
                                                        <OPTION> Feraferia </Option>
                                                        <OPTION> Goddess movement </Option>
                                                        <OPTION> Huna </Option>
                                                        <OPTION> Ivanovism </Option>
                                                        <OPTION> Neo-Druidism </Option> 
                                                        <OPTION> Ar NDraiocht Fein </Option> 
                                                        <OPTION> Pow-wow </Option>
                                                        <OPTION> Radical Faeries </Option>
                                                        <OPTION> Ringing Cedars' Anastasianism </Option>
                                                        <OPTION> Summum </Option>
                                                        <OPTION> Technopaganism </Option>
                                                        <OPTION> Wicca </Option>
                                                        <OPTION> Church of the Universe </Option>
                                                        <OPTION> Neo-American Church </Option>
                                                        <OPTION> Santo Daime </Option> 
                                                        <OPTION> Temple of the True Inner Light </Option> 
                                                        <OPTION> Tensegrity </Option> 
                                                        <OPTION> THC Ministry </Option>
                                                        <OPTION> Uniao do Vegetal </Option>
                                                        <OPTION> Association for Research and Enlightenment </Option> 
                                                        <OPTION> Eckankar </Option>
                                                        <OPTION> New thoughtful </Option>
                                                        <OPTION> Church of Euthanasia </Option>
                                                        <OPTION> Church of the Flying Spaghetti Monster </Option>
                                                        <OPTION> Church of the SubGenius </Option>
                                                        <OPTION> Dinkoism </Option>
                                                        <OPTION> Disordianism </Option>
                                                        <OPTION> Dudeism </Option>
                                                        <OPTION> Iglesia Maradoniana </Option>
                                                        <OPTION> Jedissm </Option>
                                                        <OPTION> Kibology </Option>
                                                        <OPTION> Kopimism </Option>
                                                        <OPTION> Landover Baptist Church </Option>
                                                        <OPTION> Last Thursdayism </Option>
                                                        <OPTION> Pataphysics </Option>
                                                        <OPTION> Silinism </Option>  
                                                        <OPTION> Sisters of Perpetual Indulgence </Option>
                                                        <OPTION> United Church of Bacon </Option> 
                                                        <OPTION> Abrahamites </Option>
                                                        <OPTION> Cult of teh Supreme Being </Option> 
                                                        <OPTION> Deism </Option> 
                                                        <OPTION> Freethought </Option> 
                                                        <OPTION> God-Building </Option>
                                                        <OPTION> Humanism </Option> 
                                                        <OPTION> Letsism </Option>
                                                        <OPTION> Moorish Orthodox Church of America </Option> 
                                                        <OPTION> Pandeism </Option>
                                                        <OPTION> Pantheism </Option>
                                                        <OPTION> Religion of Humanity </Option>
                                                        <OPTION> Theophilanthropy </Option>
                                                        <OPTION> Saint-Simonianism </Option>
                                                        <OPTION> Syntheism </Option>
                                                        <OPTION> Unitarian Universalism </Option>
                                                        <OPTION> Universal Life Church </Option>
                                                        <OPTION> Aetherius Society </Option>
                                                        <OPTION> Ashtar Galactic Commander </Option>
                                                        <OPTION> Chen Tao ("True Way") </Option>
                                                        <OPTION> Fiat Lux </Option>
                                                        <OPTION> Ground Crew project </Option>
                                                        <OPTION> Heaven's Gate </Option>
                                                        <OPTION> Industrial Church of the New World Comforter </Option>
                                                        <OPTION> Mark-Age </Option>
                                                        <OPTION> Nuwaubianism </Option>
                                                        <OPTION> ORder of the Solar Temple </Option>
                                                        <OPTION> Raelism </Option>
                                                        <OPTION> Scientology </Option>
                                                        <OPTION> The Seekers </Option>
                                                        <OPTION> Unarius Academy of Science </Option>
                                                        <OPTION> Universe people </Option>
                                                        <OPTION> Urantia Movement </Option>
                                                        <OPTION> Archeosophical Society </Option>
                                                        <OPTION> Builders of the Adytum </Option>
                                                        <OPTION> Fraternity of the Inner Light </Option> 
                                                        <OPTION> Hermetic Order of the Golden Dawn </Option>
                                                        <OPTION> Illuminates of Thanateros </Option>
                                                        <OPTION> Luciferianism </Option>
                                                        <OPTION> New Acropolis </Option>
                                                        <OPTION> Occultism </Option>
                                                        <OPTION> Gaianism </Option> 
                                                        <OPTION> Mayanism </Option>
                                                        <OPTION> Michael Teachings </Option>
                                                        <OPTION> Ordo Aurum Solis </Option>
                                                        <OPTION> Rosicrucian </Option>
                                                        <OPTION> Ancient Mystical Order Rosae Crucis </Option>
                                                        <OPTION> Rosicrucian Fellowship </Option>
                                                        <OPTION> Satanism </Option>
                                                        <OPTION> Thelema </Option>
                                                        <OPTION> Theosophy </Option>
                                                        <OPTION> Thee Temple ov Phychick Youth </Option>
                                                        <OPTION> Eckankar </Option>
                                                        <OPTION> Faithism </Option>
                                                        <OPTION> Falun Gong </Option>
                                                        <OPTION> The Family International </Option>
                                                        <OPTION> Fourth Way </Option>
                                                        <OPTION> Ishikism </Option>
                                                        <OPTION> Nontheism </Option>
                                                        <OPTION> Omnism </Option> 
                                                        <OPTION> Open-source religion </Option>
                                                        <OPTION> Otherkin </Option>
                                                        <OPTION> Santa Muerte </Option>
                                                        <OPTION> Singularitarianism </Option>
                                                        <OPTION> Spiritualism (spiritism) </Option>
                                                        <OPTION> Subud </Option>
                                                        <OPTION> The Circle of Reason </Option> 
                                                        <OPTION> Allieism </Option>
                                                         </Select>
                                            </datalist>  
                                        </fieldset>
        
                                        <br>

                                        <fieldset>
                                            <legend>
                                                What do you want to tell me.
                                            </legend>
                                                Suggestions:
                                                    <TEXTAREA name="comment" cols="20" rows="3"> </TEXTAREA>
                                                        <button id="TFsubbersButton" type="submit"> 
                                                            Submit
                                                        </button> 
                                            </fieldset>

                                </form>