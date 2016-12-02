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
    $sqlSELECT = "SELECT * FROM workshops";

    $result = $conn->query($sqlSELECT);


    $count=1;
    if($result->num_rows>0){ //num_rows is meta data retrieved from the query
      while($row = $result->fetch_assoc()){ //$row is your data cursor
          echo "<tr>";
          echo "<td class='name $count'>".$row['workshopNAME']."</td>";
          echo "<td class=$count>".$row['workshopDATE']."</td>";
          echo "<td class=$count>".$row['workshopTIME']."</td>";
          echo "<td class=$count>$".$row['cost']."</td>";
          echo "<td class=$count>".$row['enrolled']."/100</td>";
          echo "<td class=$count><input onclick=(addPerson(this.className)) type='button' value='Add' class='$count btn btn-primary'</input></td>";
          echo "<td class=$count><input onclick=(removePerson(this.className)) type='button' value='Drop' class='$count btn btn-danger'</input></td>";
          echo "</tr>";
          $count+=1;
          }
    }
?>
