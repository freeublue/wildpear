<?
require "../config.php";
$sq = mysqli_query($conn, "SELECT * FROM accommodation1");
while($row = mysqli_fetch_array($sq)) { 

echo "<div class='row'><div class='col-12'><h5 style='margin-top:1em;'>$row[title]</h5><p><table border='1' style='margin-top:2em;color:gray;' class='bordered wow fadeInDown'><tr><th>Facilities</th><th>Rate PPS</th><th>Single Suplement</th><th>Sleeps</th></tr>
<tr><td>$row[facilities]
</td><td valign='top'>$row[price]</td><td valign='top'>$row[singleSupp]</td><td>$row[numberpers]</td></tr></table></p>
</div></div>";
echo "<div class='row'><div class='col-12'><h2>Description</h2>";
echo "$row[descp]<br>";
echo "$row[img1] 1 <br>$row[img2] 2 <br>$row[img3] 3 <br>";
echo "</div></div>";

} 
echo "<a href='index.php'>Data Added Go Back to Home</a>";
?>
