
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="wrapper">
<?php

$servername ="localhost";
$username = "blueteam";
$password = "fr1end";
$dbname = "blueteam";

//creates connection to  the server
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create a query string
$sqlSELECT = "SELECT workshopNAME, workshopDATE, workshopTIME FROM workshops";

$result = $conn->query($sqlSELECT);


if($result->num_rows>0){ //num_rows is meta data retrieved from the query
  while($row = $result->fetch_assoc()){ //$row is your data cursor
      echo "<tr>";
      echo "<td>". $row['workshopNAME']."</td>";
      echo "<td>".$row['workshopDATE']."</td>";
      echo "<td>".$row['workshopTIME']."</td>";
      echo "</tr>";
      }
}


?>
</body>
</html>
