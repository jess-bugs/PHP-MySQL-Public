

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
    
    echo "<br>ERROR: " . mysqli_connect_error();

} else {
    
    echo "<br>Connected Successfully!" . "<br>"; 
}





// SELECT query
$query = "select * from $table";
$result = mysqli_query($conn, $query);


// Loop through the rows and print it
if( mysqli_num_rows($result) > 0 ) {


    while($row = mysqli_fetch_assoc($result)) {

        echo "<br><br>ID: " . $row['id'];
        echo "<br>First Name: " . $row['FirstName'];
        echo "<br>Last Name: " . $row['LastName'];
        echo "<br><br>";

    }

} else {


    echo "<br>No data found on this database.";
}













//it's a good practice to close the connection
mysqli_close($conn);
