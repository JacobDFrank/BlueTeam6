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
                header("Location: ../workshops.php");
            }else{
                header("Location: ../workshops.php");
            }
        }
    }

    //Decrement attendance by 1, check to make sure we are not at 0, DB value is unsigned shouldn't go below 0
    function removeStudent($conn, $workshop){
        //Check number of enrolled first
        $sqlSELECT = "SELECT enrolled FROM ".$table;
        $result = $conn->query($sqlSELECT);
        if($result->num_rows>0){ //num_rows is meta data retrieved from the query
            $row = $result->fetch_assoc();
            $list = (int)$row['enrolled'];
            if($list > 0){
                $sqlUpdate = "update ".$table." set enrolled = enrolled - 1 where name = ".$workshop;
                $conn->query($sqlUpdate);
                header("Location: ../workshops.php");
            }else{
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
    echo "<script>console.log(\"pop\")</script>";

    //Connect to mySQL server
    $conn = new mysqli($servername, $username, $password, $dbname);

    //If connection failed, die.
    if($conn->connect_error) {
//        echo "<script>console.log(\"sql\")</script>";
      die("Connection failed: " . $conn->connect_error);
    }

    //Determine if we need to add or remove a person
    if( strcmp($function, "add") == 0 ){
        echo "<script>console.log(\"hello\")</script>";
        addStudent($conn, $workshop);
    } else {
//        echo "<script>console.log(\"bye\")</script>";
        removeStudent($conn, $workshop);
    }
?>
