<?
require "../config.php";
$sq = mysqli_query($conn, "SELECT * FROM pgs");
while($row = mysqli_fetch_array($sq)) { 

echo "<div class='row'><div class='col-12'><h5 style='margin-top:1em;'>$row[pg_title]</h5>";
echo "$row[pg_txt]<br>";
echo "$row[pg_img] <br>";
echo "$row[pg_pagename] <br>";
echo "$row[pg_pageid]";
echo "</div></div>";

} 
echo "<a href='index.php'>Data Added Go Back to Home</a>";
?>
