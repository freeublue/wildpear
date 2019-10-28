<?
require "top.php";
$idx = $_REQUEST[id];

$idt = $idx - 1;


include "config.php";
$titlepage = 'Wildpear Book Affordable Accommodation in Johannesburg Home Page';
require "header.php";


$sq = mysqli_query($conn, "SELECT * FROM accommodation1 WHERE id = '$idx'");
while ($ro = mysqli_fetch_array($sq)) { 
$ft = $ro[id];

$descp = $ro['descp'];
} 
?>

<div class='container-fluid'>
<div class='row text-center'>
<? 
if($ft == 11) { 
$idp = 2; } if($ft == 21) { 
$idp = 3; } if($ft == 1) { 
$idp = 1; } 
echo "<div id='wpimg" . $idp . "' class='col-12'>"; ?>
      

</div></div>
<div style='margin-top:2em;' class='row text-center'>
<div class='col-12'><h2>Effortless enjoyment. Absolute ease</h2><p class='text-center' style='color:gold;'>_________________________</p>
<? echo "<p style='color:silver;margin-top:2em;' class='wow fadeInDown'>$descp.</p>"; ?>
</div></div>
<?

$sq = mysqli_query($conn, "SELECT * FROM accommodation1 WHERE id = '$idx'");
while ($ro = mysqli_fetch_array($sq)) { 
$id = $ro['id'];
$title = $ro['title'];
echo "<div class='row'><div class='col-6'><h2>$title</h2>";
echo "<p><table border='1' style='margin-top:2em;color:gray;' class='bordered wow fadeInDown'><tr><th>Facilities</th><th>Rate PPS</th><th>Single Suplement</th></tr>
<tr><td>$ro[facilities]
</td><td valign='top'>R $ro[price]</td><td valign='top'>R $ro[singleSupp]</td></tr></table></p><a class='btn btn-outline btn-secondary' href='booknow.php?id=$idx'>Book $title Now</a>
</div><div class='col-6'><img class='img-fluid rounded' src='$ro[img2]' /></div></div><div class='row'><div class='col-6'><img class='img-fluid rounded' src='$ro[img3]' /></div><div class='col-6'><img class='img-fluid rounded' src='$ro[img4]' /></div></div>"; } 
echo "<div class='row'><div class='col-12'></div></div>";
include "footer.php";
include "bootstrapbottom.php";
?>
</div>