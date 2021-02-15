<!DOCTYPE html>
<html lang="en">

<head>

    <title>Charmy Treats - Delicious Home Made Treats and Baked Goods</title>
    <link rel="icon" href="Images/logo_web/charmy-treats-logo.png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="web_logo.png">

        <!--CSS Links Here-->
            <link href="StyleSheets/main.css" rel="stylesheet" type="text/css">
            <link href="StyleSheets/treats.css" rel="stylesheet" type="text/css">



        <!--Javascript Links Here-->
            <script src="Javascript/menu.js"></script>


        <!--Bootstrap/google font links here-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">






<?php



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone'];
$date = $_POST['date'];
$cakeType = $_POST['cakeType'];
$text = $_POST['text'];




$mysqli = new mysqli("localhost", "iridescXnt343_auth_user", "$6927=Jas010i.s03107@%", "charmy_treats");

if ($mysqli === false){
  die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone'];
$date = $_POST['date'];
$cakeType = $_POST['cakeType'];
$text = $_POST['text'];




$sql = "INSERT INTO custom_order (firstName, lastName,
        email, phoneNumber, orderDueDate, cakeType, orderRequirements)

              VALUES ('$fname', '$lname', '$email', '$phoneNumber', '$date',
                        '$cakeType', '$text')";
    if($mysqli->query($sql) === true){
      echo "Thank you for your submission.";
    } else{
      echo "ERROR: Could not submit form data. " . $mysqli->error;
    }

    $mysqli->close();



?>