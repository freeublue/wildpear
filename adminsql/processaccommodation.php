<?
require "../bootstraptop.php";
require "../config.php";
$title = mysqli_real_esacpe_string($conn, $_POST['title']);
$price = mysqli_real_esacpe_string($conn, $_POST['price']);
$sup = mysqli_real_esacpe_string($conn, $_POST['sup']);
$numberpers = mysqli_real_esacpe_string($conn, $_POST['numberpers']);
$descp = mysqli_real_esacpe_string($conn, $_POST['descp']);
$facilities = mysqli_real_esacpe_string($conn, $_POST['facilities']);
$sq = mysqli_query($conn, "INSERT INTO accommodation1(title, 
descp, price,
singleSupp,
facilities) values('$title', 
'$descp', '$price',
'$sup',
'$facilities')");
echo "<a href='index.php'>Data Added Go Back to Home</a>";
?>
