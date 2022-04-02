<?php

$name = $email = $favNumber = $phoneNumber = $website = $hobbies = $ = $ = $ "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["Name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and whitespace allowed";
        }

    $email = test_input($_POST["Email"]);
    $emailErr = "Invalid email format";
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            echo("$email is valid");
        } else {
            echo("$email is not valid");
        }

// You need to fix this part (preg_match)
    $favNumber = test_input($_POST["Favorite Number"]);
        if (!preg_match()) {//finish the !preg_match 
            $favNumber = "Only numeric characters";
        }
// end of section that needs to be fixed.

// You need to fix the (preg_match)
    $phoneNumber = test_input($_POST["Phone Number"]);
        if (!preg_match()) {
            $phoneNumber = "Only numeric characters";
        }
// end of the section that needs to be fixed.

    $website = test_input($_POST["FanWebsite"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
        $url = filter_var($website, FILTER_SANITIZE_URL);
            if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
                echo ("$url is a valid URL");
            } else {
                echo ("$url is not a valid URL");
            }


    $hobbies = test_input($_POST["Hobbies"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$hobbies)) {
            $nameErr = "Only letters and whitespace allowed";
        }
    $favColor = test_input($_POST["Color"]);
        if (!preg_match("/^[a-zA-Z-; ]*$/",$favColor)) {
            $colorErr = "Only letters and whitespace allowed";
        }
    $ ;

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
    if (empty($_POST["LoveLanguage"])) {
        $llErr = "You must choose a love language";
        $llFix = "input a link to figure our your love language or create a program to do it for you or use an api";
    } else {
        $LoveLanguage = test_input($_POST["LoveLanguage"]);
    }

    if (empty($_POST["LearningStyle"])) {
        $lsErr = "You have to choose a Learning Style";
        $lsFix = "Input a link or create a separate program to help people find out their learning styles.";
    } else {
        $LearningStyle = test_input($_POST["LearningStyle"]);
    }

    if (empty($_POST["BusinessPersonality"])) {
        $bpErr = "You have to choose a Business Personality";
        $bpFix = "put a link here or create an app that can help ppl learn their Business Personality.";
    } else {
        $BusinessPersonality = test_input($_POST["BusinessPersonality"]);
    }

    if (empty($_POST["DISC"])) {
        $discErr = "You have to choose one (if you do not know what DISC means, here is the definition: DISC is a personality test. D = Dominance, I = Influence, S = Steadiness, C = Conscientiousness";
        $discFix = "Put the link to the DISC aassessment test or create a program/app  to help the user figure out what it is for them.";
    } else {
        $DISC = test_input($_POST["DISC"]);
    }

    if (empty($_POST["ChineseZodiacSign"])) {
        $czsErr = "You have to choose one.";
        $czsFix = "create an option that has either a link or a program you create that will help people know their zodiac sign.";
    } else {
        $ChineseZodiacSign = test_input($_POST["ChineseZodiacSign"]);
    }

    if (empty($_POST["WesternZodiacSign"])) {
        $wzsErr = "I'ma need you to pick one inform the users their are 13 zodiacs sign because im using the new discovered ones but you can still choose your original one.  That is why it is not automatically added when adding the data for your birthday.";
        $wzsFix = "Use a link or create an app/list/external pop up window with information telling the users what zodiacs are and how to figure yours out.";
    } else {
        $WesternZodiacSign = test_input($_POST["WesternZodiacSign"]);
    }

function = test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['Name'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
};