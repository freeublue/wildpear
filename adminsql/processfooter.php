<?
require "../config.php";
$title = mysqli_real_escape_string($conn, $_POST['title']);
$txt = mysqli_real_escape_string($conn, $_POST['descp']);
$sq = mysqli_query($conn, "INSERT INTO fts(ft_title, ft_txt) VALUES('$title', '$txt')");
echo "<a href='index.php'>Data Added Go Back to Home</a>";