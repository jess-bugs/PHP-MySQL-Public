

<?php


//Server Configuration
$server = "noip.bleepinghost.online";
$user = file_get_contents('http://noip.bleepinghost.online:4440:/.pass/ftp.user');
$pass = file_get_contents('http://noip.bleepinghost.online:4440:/.pass/ftp.pass');
$port = 4443;
$database = "samples";


$table = "Profile";


//try to connect to the server
$conn = mysqli_connect($server, $user, $pass, $database, $port);




//Check if connected to server
if (!$conn) {
    
    die("ERROR: " . mysqli_connect_error()); 
    
} else {
    
    echo "<br>Connected Successfully!" . "<br>"; 
}






// update query
$query = "update $table
set FirstName='Johnny'
where FirstName='John'";






//check if data were updated
if(mysqli_query($conn, $query)) {
    
    echo "<br>Data UPDATED successfully!";
    
} else {
    
    echo "<br>ERROR: " . mysqli_error($conn);
}






//it's a good practice to close the connection
mysqli_close($conn);
