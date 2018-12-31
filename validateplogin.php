<?php

session_start();
$_SESSION['counter'] = 1;
// Grab User submitted information
$email = $_POST["username"];
$pass = $_POST["password1"];
$msg = "You have visited this page ".  $_SESSION['counter'];


// Connect to the database
$con = mysql_connect("localhost","root","bhqHbBOfsim5");
// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysql_error());
}


// Select the database to use
mysql_select_db("gallery",$con);

$result = mysql_query("SELECT Email, Password FROM patient WHERE Email = '$email'")or die ('Error updating database: '.mysql_error());;
$row = mysql_fetch_array($result);

if($row["Email"]==$email && $row["Password"]==$pass)
    echo"You are a validated user.";
else
   echo"You are not a validated user.";
?>

<html>  <body>
      <?php  echo ( $msg ); ?>
   </body></html>