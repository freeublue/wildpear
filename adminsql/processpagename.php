<?
require "../config.php";
$title = mysqli_real_escape_string($conn, $_POST['title']);
$sq = mysqli_query($conn, "INSERT INTO pagename(pa_title) VALUES('$title')");