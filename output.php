<?php

$server = '192.168.1.14';
$port = 4443;
$user = (string) file_get_contents('http://bleepinghost.online/.pass/ftp.user');
$password = (string) file_get_contents('http://bleepinghost.online/.pass/ftp.pass');
$database = "visitors";



$conn = mysqli_connect($server, $user, $password, $database, $port);

if(!$conn) {

    echo "<br><br>ERROR: " . mysqli_connect_error($conn);

} else {

    echo "<br>Connected successfully!";
}



function fetchAll() {

    global $conn;

    $query = "select * from profile";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {

            echo "<br><br>First Name: " . $row['Fname'];
            echo "<br>Lasr Name: " . $row['Lname'];
            echo "<br><br>";
        }

    } else {

        echo "<br><br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}


fetchAll();