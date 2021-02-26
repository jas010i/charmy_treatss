


<?php

$user = "iridescXnt343_auth_user";  
$password = "$6927=Jas010i.s03107@%";  
$host = "localhost";  
$dbase = "charmy_treats";  
$table = "subscribe_newsletter";  
 
$from= 'jas010ir@gmail.com';//specify here the address that you want email to be sent from 
 
$subject= $_POST['subject']; 
$body= $_POST['comment']; 
 
// Connection to DBase  
$dbc= mysqli_connect($host, $user, $password, $dbase)  
or die("Unable to select database"); 
 
$query= "SELECT * FROM $table"; 
$result= mysqli_query ($dbc, $query)  
or die ('Error querying database.'); 
 
while ($row = mysqli_fetch_array($result)) { 
$email= $row['email']; 
 
echo $result;
}


mysqli_close($dbc); 



?>
