<?
require "bootstraptop.php";

if(isset($_SESSION[customer]) ) { 
require "../config.php";
$sq = mysqli_query($conn, "SELECT * FROM accommodation1");
while($row = mysqli_fetch_array($sq)) { 

echo "<div class='row'><div class='col-12'><h5 style='margin-top:1em;'>$row[title]</h5><p>
<a href='editaccommodation.php?id=$row[id]'>$row[title]</a></p>";
echo "</div></div>";

} 

?>
<?
  } else { 
  echo "<a href='login.php'>Login</a>";
  } 
  ?>
