<?php
session_start();
include "bootstraptop.php";
require "../config.php";
$name = $_POST[login];
$pass = $_POST[password];
$q = mysqli_query($conn, "SELECT * FROM amz WHERE am1 = '$name'");
while($row = mysqli_fetch_array($q ) )  { 
echo "<b>Hi </b> $row[am1]<br />";

if(md5($pass) === $row[am2]) { 
echo "<b><a href='index.php'>Click to proceed</a><br />";
$_SESSION['customer'] = $name; } else { 


echo "goodness"; } 
 } 
