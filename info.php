
<?php
echo "Welcome to the DATABASE <br>";

//connecting to the Database

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "website_db"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// Close connection
// mysqli_close($conn);
?>

