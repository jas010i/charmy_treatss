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
$phoneNumber = $_POST['phoneNumber'];
$date = $_POST['date'];
$cc_strawberry = $_POST['cc_strawberry'];
$cake_chocStraw = $_POST['cake_chocStraw'];
$cakepop_1 = $_POST['cakepop_1'];
$cakepop_2 = $_POST['cakepop_2'];
$oreobites = $_POST['oreobites'];
$pie_1 = $_POST['pie_1'];



$mysqli = new mysqli("localhost", "iridescXnt343_auth_user", "$6927=Jas010i.s03107@%", "charmy_treats");

if ($mysqli === false){
  die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$date = $_POST['date'];
$cc_strawberry = $_POST['cc_strawberry'];
$cake_chocStraw = $_POST['cake_chocStraw'];
$cakepop_1 = $_POST['cakepop_1'];
$cakepop_2 = $_POST['cakepop_2'];
$oreobites = $_POST['oreobites'];




$sql = "INSERT INTO client_order (firstName, lastName,
        email, phoneNumber, orderDueDate, cheesecake_Strawberry, cheesecake_Raspberry,
        cheesecake_Plain, cakepop_Chocolate6, cakepop_Chocolate12)

              VALUES ('$fname', '$lname', '$email', '$phoneNumber', '$date', '$cc_strawberry', 
                     '$cake_chocStraw', '$cakepop_1', '$cakepop_2', '$oreobites')";
    if($mysqli->query($sql) === true){
      echo "Thank you for your submission.";
    } else{
      echo "ERROR: Could not submit form data. " . $mysqli->error;
    }

    $mysqli->close();



?>














</head>

<body>

    <header>

        <div class="header-title">
            <a href="index.html">
                <img id="background" src="Images/logo_web/background-header.png">
                <img id="logo" src="Images/logo_web/charmy-treats-logo.png">
            </a>
        </div>
 
        <div class="navbar1">

            <a href="index.html">
                <svg id="hashbar-right" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                </svg>
                <p style="padding: 0; margin: 0;">HOME</p>
            </a>

            <a class="active" href="treats.html">
                    <svg id="hashbar-right" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                      <p style="padding: 0; margin: 0;">TREATS</p>
            </a>

            <a href="custom.html">
                <svg id="hashbar-right" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg>
                  <p style="padding: 0; margin: 0;">CUSTOM</p>
            </a>

            <a href="reviews.html">
                    <svg id="hashbar-right" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                        <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"/>
                    </svg>
                      <p style="padding: 0; margin: 0;">REVIEWS</p>
            </a>

            <a href="my-story.html">
                    <svg id="hashbar-right" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                        <path fill-rule="evenodd" d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                      <p style="padding: 0; margin: 0;">MY STORY</p>  
            </a>
                
</div>

    </header>















</body>



</html>