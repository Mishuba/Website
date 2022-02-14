<?php

$name = $email = $ = $website = $ = $ = $ = $ "";

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
    $ ;
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

    $ ;
    $ ;
    $ ;
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