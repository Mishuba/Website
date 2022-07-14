<?php

//members database (mysql version Object-Oriented)

$MemberServerName = "salt.db.elephantsql.com";
$MembersUserName = "tsgyrobj";
$MembersPassword = "T7INBVPC_fVvuf8VQ5UQSizKhFDHYLyx";

$MembersConn = new mysqli($MemberServerName, $MembersUserName, $MembersPassword);

if ($MembersConn->connect_error) {
    die("Connection failed: " . $MembersConn->connect-error);
} else {
    print("Connected Successfully");
}

//database creation
$membersCreationDB = "CREATE DATABASE TycadomeMembersDB";

    if ($MembersConn->query($membersCreationDB) === TRUE) {
        print("Database created Successfully");
    } else {
        print("Error creating database: " . $MembersConn->error);
    }

$MembersConn->close();

//Subscribers (using mysql version Procedural)

$TycadomeServer = "salt.db.elephantsql.com";
$TFuserName = "pkmehscf";
$BossCode = "ixIsSMS0sEtWNabUrVhJ5O-7oLyzuOwm";

$conn2 = mysqli_connect($TycadomeServer, $TFuserName, $BossCode);

if (!$conn2) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    print("Connected Successfully");
}

//Create database
$SubscribersDBcreation = "CREATE DATABASE TycadomeSubscribersDB";

    if(mysqli_query($conn2, $SubscribersDBcreation)) {
        print("Database Created Successfully");
    } else {
        print("Error creating database: " . mysqli_error($conn2));
    }


mysqli_close($conn2);


//website database
$lastServer4now = "salt.db.elephantsql.com";
$whatName = "suutbqze";
$stillOnMyDick = "N_wBak3Vw6jcePzURMZem47XX-7sZlzo";

try {
    $conn3 = new PDO("mysql:host=$lastServer4Now", $whatName, $stillOnMyDick);

    //set the PDO error mode to exception
    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $websiteDBCreation = "CREATE DATABASE TycadomeDB";
    //use exec() because no results are returned
    $conn3->exec($websiteDBCreation);
    
    print ("Connected Successfully");
} catch(PDOException $e) {
    print ($sql . "<br>" . $e->getMessage());
}



$conn3 = null;


//Music Database

//Video Database

// Competitors News Database

// Creative News Database

// Fashion News Database

// Health News Database

// RadioNews Database

// Science News Database

// Technology News Database

// TsunamiFlow News Database

// USa News Database

// World News database

//News Database Base

//Blog Database
$BlogServerName = "fanny.db.elephantsql.com";
$BlogUserName = "fgfkcsqm";
$BlogPassword = "vFeU7YtUiqoIG-h-kzv-nuISEhVL1N7L";

    $BlogConn = new mysqli($BlogServerName, $BlogUserName, $BlogPassword);

        if ($BlogConn->connect_error) {
            die("Connection failed: " . $BlogConn->connect_error);
        } else {
            echo "Connected successfully";
        }

        $blogCreationDB = "CREATE DATABASE TycadomeBlogDB";

        if ($BlogConn->query($membersCreationDB) === TRUE) {
            print("Database created Successfully");
        } else {
            print("Error creating database: " . $BlogConn->error);
        }
    
    $BlogConn->close();
        


//Vlog Database

//Podcast Database

//Competition Database

// Games Database

//liveStream Database

// Pictures Database

//Radio Database

// Agents Database

// Coaches Database

// Competitors Database

// Corporation Database

// Engineers Database

// Entertainers Database

// Managers Database

// Staff Database

// Technicians Database

// Rosters Database

// Show Database

// Movies Database

//Store Database

?>