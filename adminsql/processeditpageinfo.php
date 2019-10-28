<?
require "bootstraptop.php";
if(isset($_SESSION[customer]) ) { 
require "../config.php";
$title = mysqli_real_escape_string($conn, $_POST['title']);
$subhead = mysqli_real_escape_string($conn,$_POST['subhead']);
$txt = mysqli_real_escape_string($conn, $_POST['descp']);
$id = $_POST['id'];
$pagename = mysqli_real_escape_string($conn, $_POST['pagename']);
echo "title $title subhead $subhead txt $txt id $id $pagename";

$sq = mysqli_query($conn, "UPDATE pgs SET pg_title = '$title', pg_subhead = '$subhead', pg_txt = '$txt' WHERE pg_id= '$id'");
echo "<a href='index.php'>Data Added Go Back to Home</a>";
?>
<?
  } else { 
  echo "<a href='login.php'>Login</a>";
  } 
?>
