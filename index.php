


<?php


$server = '192.168.1.14';
$port = 4443;
$user = 'bugs';
$password = (string) file_get_contents('http://bleepinghost.online/.pass/ftp.pass');
$database = "visitors";

$conn = mysqli_connect($server, $user, $password, $database, $port);

if (!$conn) {

    echo "<br> <br>Connection Error: " . $mysqli_connect_error();
} else {

    echo "<br> <br>Connected successfully!";

}






$query = "select * from profile";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {


    while($row = mysqli_fetch_assoc($result)) {

        echo "<br><br>First Name: " . $row['Fname'];
        echo "<br>Last Name: " . $row['Lname'];
        echo "<br><br>";

    }

} else {

    echo "<br>ERROR: " . $mysqli_error($conn);

}



mysqli_close($conn);