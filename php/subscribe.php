<?php
$email = $_POST["email"];
$servername ="localhost";
$username = "blueteam";
$password = "fr1end";
$dbname = "blueteam";
$table = "subscribers";

//Connect to mySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

//If connection failed, die.
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlInsert = "INSERT INTO subscribers (subscriberID, subscriberEmail) VALUES(NULL, '".$email."');";
$result = $conn->query($sqlInsert);
?>
