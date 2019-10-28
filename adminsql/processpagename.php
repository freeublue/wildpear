<?
require "bootstraptop.php";
if(isset($_SESSION[customer]) ) { 
require "../config.php";
$title = mysqli_real_escape_string($conn, $_POST['title']);
$sq = mysqli_query($conn, "INSERT INTO pagename(pa_title) VALUES('$title')");
echo "<a href='index.php'>Data Added Go Back to Home</a>";

  } else { 
  echo "<a href='login.php'>Login</a>";
  } 
?>
