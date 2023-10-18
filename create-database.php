

<?php


//Server Configuration
$server = "noip.bleepinghost.online";
$user = file_get_contents('http://noip.bleepinghost.online:4440:/.pass/ftp.user');
$pass = file_get_contents('http://noip.bleepinghost.online:4440:/.pass/ftp.pass');
$port = 4443;



//Database to be created
$database = "samples";



//try to connect to the server
$conn = mysqli_connect($server, $user, $pass, "", $port);

//Note: when creating a database, the database parameter should be left blank (as blank double quotations) since it is yet to be created



//Check if connected to server
if (!$conn) {

    echo "<br>" . mysqli_connect_error();

} else {

    echo "<br>Connected Successfully!" . "<br>"; 
}





//create database query
$query = "create database $database";


//check if the database was created
if (mysqli_query($conn, $query)) {

    echo "<br>Database created";
} else {

    echo "<br> ERROR: " . mysqli_error($conn);
}



//it's a good practice to close the connection
mysqli_close($conn);
