<!DOCTYPE html>
<html lang="en">
<head>
    <title>Subscribed</title>
    <?php include '../inner-head.php' ?>
</head>
<body>
    <?php include '../inner-header.php' ?>

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

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 well">
            <h4>You are now subscribed. Check your email for a confirmation and you will receive the next newsletter we send out.</h4>
        </div>
        <div class="col-md-3"></div>
    </div>

    <?php include '../inner-footer.php' ?>
</body>
</html>