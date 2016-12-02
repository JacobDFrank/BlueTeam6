<?php
    //Increment attendance by 1, check to make sure we are not at 100 person cap, DB element max should be 100
    function addStudent($conn, $workshop){
        //Check number of enrolled first
        $sqlSELECT = "SELECT enrolled FROM workshops";
        $result = $conn->query($sqlSELECT);
        if($result->num_rows >0){ //num_rows is meta data retrieved from the query
            $row = $result->fetch_assoc();
            $list = (int)$row['enrolled'];
            if($list < 100){
                $sqlUpdate = "update workshops set enrolled = enrolled + 1 where workshopName = '".$workshop."'";
                $conn->query($sqlUpdate);
                header("Cache-Control: no-cache");
                header("Location: ../workshops.php");
            }else{
                header("Cache-Control: no-cache");
                header("Location: ../workshops.php");
            }
        }
    }

    //Decrement attendance by 1, check to make sure we are not at 0, DB value is unsigned shouldn't go below 0
    function removeStudent($conn, $workshop){
        //Check number of enrolled first
        $sqlSELECT = "SELECT enrolled FROM workshops";
        $result = $conn->query($sqlSELECT);
        if($result->num_rows>0){ //num_rows is meta data retrieved from the query
            $row = $result->fetch_assoc();
            $list = (int)$row['enrolled'];
            if($list > 0){
                $sqlUpdate = "update workshops set enrolled = enrolled - 1 where workshopName = '".$workshop."'";
                $conn->query($sqlUpdate);
                header("Cache-Control: no-cache");
                header("Location: ../workshops.php");
            }else{
                header("Cache-Control: no-cache");
                header("Location: ../workshops.php");
            }
        }
    }

    $function = $_POST["type"];
    $workshop = $_POST["name"];
    $servername ="localhost";
    $username = "blueteam";
    $password = "fr1end";
    $dbname = "blueteam";
    $table = "workshops";

    //Connect to mySQL server
    $conn = new mysqli($servername, $username, $password, $dbname);

    //If connection failed, die.
    if($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    //Determine if we need to add or remove a person
    if( strcmp($function, "add") == 0 ){
        addStudent($conn, $workshop);
    } else {
        removeStudent($conn, $workshop);
    }
?>
