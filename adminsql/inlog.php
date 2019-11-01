<?php
session_start();
require "../config.php";
$name = trim($_POST[login]);
$pass = trim($_POST[password]);
$q = mysqli_query($conn, "SELECT * FROM amz WHERE am1 = '$name'");
while($row = mysqli_fetch_array($q ) )  { 
echo "<b>Hi </b> $row[am1]<br />";
$_SESSION['customer'] = $name;
if(md5($pass) === $row[am2]) { 
$_SESSION['customer'] = $name;
echo "<b><a href='index.php'>Click to proceed</a><br />"; } }
