<?
require "../bootstraptop.php";
require "../config.php";
$title = mysqli_real_esacpe_string($conn, $_POST['title']);
$price = mysqli_real_esacpe_string($conn, $_POST['price']);
$sup = mysqli_real_esacpe_string($conn, $_POST['sup']);
$numberpers = mysqli_real_esacpe_string($conn, $_POST['numberpers']);
$descp = mysqli_real_esacpe_string($conn, $_POST['descp']);
$facilities = mysqli_real_esacpe_string($conn, $_POST['facilities']);
$id = $_POST[id];
$sq = mysqli_query($conn, "UPDATE accommodation1 SET title = '$title', 
descp = '$descp', price = '$price',
singleSupp = '$sup',
facilities = '$facilities', numberpers = '$numberpers' WHERE id = '$id'");
?>
