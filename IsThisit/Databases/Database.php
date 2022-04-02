<?php

$servername = "fanny.db.elephantsql.com";
$username = "fgfkcsqm";
$password = "vFeU7YtUiqoIG-h-kzv-nuISEhVL1N7L";

    $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connected successfully";

        }
        
$conn->close();
mysqli_close($conn);
$conn = null;

?>
