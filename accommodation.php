<?
require "top.php";
$titlepage = 'Wildpear View Accommodation in Johannesburg from R400 pps';
require "header.php";

include "config.php";
$pagex = basename($_SERVER[PHP_SELF]);
$page = str_replace('.php', '', $pagex);
$title = array();
$sq = mysqli_query($conn, "SELECT * FROM accommodation1");
while ($ro = mysqli_fetch_array($sq)) { 
$id[] = $ro['id'];
$title[] = $ro['title'];
$price[] = $ro['price'];
$descp[] = $ro['descp'];
$singlesupp[] = $ro['singleSupp'];
$facilities[] = $ro['facilities'];
} 

?>
<style>
td{padding:1em;}
</style>
<div class='container-fluid'>
<div class='row text-center'>
<div class='col-12'>
     
</div></div>
<?
$sq = mysqli_query($conn, "SELECT * FROM pgs WHERE pg_pagename = '$page'");
while($row = mysqli_fetch_array($sq)) { 
$heading[] = $row[pg_title];
$subheading[] = $row[pg_subhead];
$txt[] = $row[pg_txt]; } 

echo "<div style='margin-top:2em;' class='row text-center'>
<div class='col-12'><h2>$heading[0]</h2><p class='text-center' style='color:gold;'>_________________________</p>
<p style='color:silver;margin-top:2em;' class='wow fadeInDown'>$txt[0]</p>";
?>
</div></div>



<div style='margin-top:2em;' class='row'>
<?

$idp2 = 2;
$idp3 = 3; 
$idp1 = 1; 

echo "<div id='wpimg" . $idp1 . "' class='col-6 wow fadeInLeft'>";

echo "</div>
<div class='col-6'><h4>$title[0]</h2><p style='color:gold;'>_________________________</p>
<p style='color:silver;' class='wow fadeInDown'>$descp[0]<p><table border='1' style='margin-top:2em;color:gray;' class='bordered'><tr><th>Facilities</th><th>Rate PPS</th><th>Single Suplement</th></tr>
<tr></tr>
<tr><td>$facilities[0]
</td><td valign='top'>$price[0]</td><td valign='top'>$singlesupp[0]</td></tr></table></p><p class='text-right'><button class='btn btn-sm btn-outline btn-dark text-right'>Book Now</button></p>
</div>"; 
?>

</div>





<div style='margin-top:2em;' class='row'>
<?
echo "<div class='col-6'><h4>$title[1]</h2><p style='color:gold;'>_________________________</p>
<p style='color:silver;' class='wow fadeInDown'>$descp[1]</p><p><table border='1' style='margin-top:2em;color:gray;' class='bordered'><tr><th>Facilities</th><th>Rate PPS</th><th>Single Suplement</th></tr>
<tr><td>$facilities[1]
</td><td valign='top'>$price[1]</td><td valign='top'>$singlesupp[1]</td></tr></table></p><p class='text-right'><button class='btn btn-sm btn-outline btn-dark text-right'>Book Now</button></p>
</div>
<div id='wpimg" . $idp2 . "' class='col-6 wow fadeInRight'>
</div>";
?>


</div>




<div style='margin-top:2em;' class='row'>
<?
echo "<div id='wpimg" . $idp3 . "' class='col-6 wow fadeInLeft'>";
echo "</div>
<div class='col-6'><h4>$title[2]</h2><p style='color:gold;'>_________________________</p>
<p style='color:silver;' class='wow fadeInDown'>$descp[2]</p><p><table border='1' style='margin-top:2em;color:gray;' class='bordered'><tr><th>Facilities</th><th>Rate PPS</th><th>Single Suplement</th></tr>
<tr><td>$facilities[2]
</td><td valign='top'>$price[2]</td><td valign='top'>$singlesupp[2]</td></tr></table></p><p class='text-right'><button class='btn btn-sm btn-outline btn-dark text-right'>Book Now</button></p>
</div>";
?>

</div>
  <div style='background:gray;' class='row'>
  <div  class='col-12 text-center'><h2 style='margin-top:3em;margin-bottom:3em;color:gold;'>Reviews</h2>
</div></div>
<div style='background:gray;' class='row'>
<div class='col-3'><img style='height:300px;' class='img-fluid rounded-circle' src='pep1.jpg' /></div>
<div class='col-3'><blockquote class="blockquote text-right wow bounceInUp">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer style='color:silver;' class="blockquote-footer">Someone famous in <cite style='color:white;' title="Source Title">Source Title</cite></footer>
</blockquote></div>
<div class='col-3'><img style='height:300px;' class='img-fluid rounded-circle' src='pep2.jpg' /></div>
<div class='col-3'><blockquote class="blockquote text-right wow bounceInDown">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer style='color:silver;' class="blockquote-footer">Someone famous in <cite style='color:white;' title="Source Title">Source Title</cite></footer>
</blockquote></div>
</div>
  <?
require "footer.php";
?>         
</div><!container>

<?
require "bootstrapbottom.php";
?>
<script src='wow.js'></script>
<script>
new WOW().init();
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
