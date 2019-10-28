<?
require "bootstraptop.php";
if(isset($_SESSION[customer]) ) { 
require "../config.php";
$title = mysqli_real_escape_string($conn, $_POST['title']);
$txt = mysqli_real_escape_string($conn, $_POST['descp']);
$id = $_POST['id'];
$sq = mysqli_query($conn, "UPDATE fts SET ft_title = '$title', ft_txt = '$txt' WHERE ft_id = '$id'");
echo "<a href='index.php'>Data Added Go Back to Home</a>";

  } else { 
  echo "<a href='login.php'>Login</a>";
  } 
?>
