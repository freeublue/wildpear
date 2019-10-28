<?
require "bootstraptop.php";

if(isset($_SESSION[customer]) ) { 
require "../config.php";
$sq = mysqli_query($conn, "SELECT * FROM accommodation1");
while($row = mysqli_fetch_array($sq)) { 

echo "<div class='row'><div class='col-12'><h4 style='margin-top:1em;'>$row[title]</h5><p>
<a href='addimages.php?id=$row[id]&&img=1'>$row[title] Add image 1</a></p>";
echo "<div class='row'><div class='col-12'><h5 style='margin-top:1em;'>$row[title]</h5><p>
<a href='addimages.php?id=$row[id]&&img=2'>$row[title] Add image 2</a></p>";
echo "<div class='row'><div class='col-12'><h5 style='margin-top:1em;'>$row[title]</h5><p>
<a href='addimages.php?id=$row[id]&&img=3'>$row[title] Add image 3</a></p>";
echo "<div class='row'><div class='col-12'><h5 style='margin-top:1em;'>$row[title]</h5><p>
<a href='addimages.php?id=$row[id]&&img=4'>$row[title] Add image 4</a></p>";
echo "<hr>";
echo "</div></div>";

} 
?>
<?
  } else { 
  echo "<a href='login.php'>Login</a>";
  } 
  ?>
?>
