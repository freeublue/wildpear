<?
require "../config.php";
require "bootstraptop.php";
$sq = mysqli_query($conn, "SELECT * FROM maptb");
while($row = mysqli_fetch_array($sq)) { 

echo "<div class='row'><div class='col-12'><h5 style='margin-top:1em;'>$row[mp_name]</h5><p><table border='1' style='margin-top:2em;color:gray;' class='bordered wow fadeInDown'><tr><th>lat lng</th><th>address</th><th>mobile</th><th>GK</th></tr>
<tr><td>$row[mp_lat] $row[mp_lng]
</td><td valign='top'>$row[mp_street] <br> $row[mp_suburb] <br> $row[mp_town]</td><td valign='top'>$row[mp_mobile]</td><td>$row[mp_image]</td></tr></table></p>
</div></div>";

echo "</div></div>";

} 
echo "<a href='index.php'>Data Added Go Back to Home</a>";

?>
