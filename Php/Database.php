<?php

$servername = "";
$username = "";
$password = "";

    $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connected successfully";

        }
$conn->close();
mysqli_close($conn);
$conn = null;