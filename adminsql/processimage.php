<?
require "../bootstraptop.php";
require "../config.php";
$id = $_POST['id'];
$img = $_POST['img'];
$imgfieldname = mysqli_real_escape_string($conn, $_POST['imgfieldname']);
echo "$id $img $imgfieldname<br>";
$str = 'UPDATE accommodation1 SET ' . $imgfieldname . "= '" . $img . "' WHERE id = '" . $id . "'";
echo "$str";
$sq = mysqli_query($conn, "$str");
echo "<a href='index.php'>Data Added Go Back to Home</a>";
?>
