<?
require "../config.php";
$title = mysqli_real_esacpe_string($conn, $_POST['title']);
$subhead = mysqli_real_esacpe_string($conn, $_POST['subhead']);
$txt = mysqli_real_esacpe_string($conn, $_POST['descp']);
$id = $_POST['id'];
$pagename = mysqli_real_esacpe_string($conn, $_POST['pagename']);
echo "$title $subhead $txt $id $pagename";

$sq = mysqli_query($conn, "INSERT INTO pgs(pg_title, pg_subhead, pg_txt, pg_pagename, pg_pageid) VALUES('$title', '$subhead', '$txt', '$pagename', '$id')");
echo "<a href='index.php'>Data Added Go Back to Home</a>";
?>
