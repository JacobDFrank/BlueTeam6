
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="wrapper">
<?php

$servername ="localhost";
$username = "jdf2114";
$password = "kelvinSQL";
$dbname = "jdf2114";

//creates connection to  the server
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create a query string
$sqlSELECT = "SELECT visitorID, visitorNAME, visitorCOMMENT FROM comments";

// $sqlSELECT = "SELECT workshopNAME, workshopDATE, workshopTIME FROM workshops";

$result = $conn->query($sqlSELECT);


if($result->num_rows>0){ //num_rows is meta data retrieved from the query
  while($row = $result->fetch_assoc()){ //$row is your data cursor
      echo "<tr>";
      echo "<td>". $row['visitorID']."</td>";
      echo "<td>".$row['visitorNAME']."</td>";
      echo "<td>".$row['visitorCOMMENT']."</td>";
      echo "</tr>";
      }
      echo '</table>';
}


?>
</body>
</html>
