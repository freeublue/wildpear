<?
require "top.php";
$titlepage = 'Wildpear Book Affordable Accommodation in Johannesburg Home Page';
require "header.php";

include "config.php";
$pagex = basename($_SERVER[PHP_SELF]);
$page = str_replace('.php', '', $pagex);
$sq = mysqli_query($conn, "SELECT * FROM pgs WHERE pg_pagename = '$page'");
while($row = mysqli_fetch_array($sq)) { 
$heading[] = $row[pg_title];
$subheading[] = $row[pg_subhead];
$txt[] = $row[pg_txt]; } 

?>
<div class='container-fluid'>
<div class='row text-center'>
<div id='wpimg2' class='col-12'>
      

</div></div>
<div style='margin-top:2em;' class='row text-center'>
<?
echo "<div class='col-12'><h2>$heading[0]</h2><p class='text-center' style='color:gold;'>_________________________</p>
<p style='color:silver;margin-top:2em;' class='wow fadeInDown'>$txt[0]</p>
</div></div>";
?>
<?

$sq = mysqli_query($conn, "SELECT * FROM accommodation1");
while ($ro = mysqli_fetch_array($sq)) { 
$id[] = $ro['id'];
$title[] = $ro['title'];
$price[] = $ro['price'];
} 
echo "<div class='row text-center'>
<div id='wpimg1' class='col-4'><h5 style='margin-top:90%;background:white;opacity:0.7;'>$title[0]</h5><a href='accommpage.php?id=$id[0]' class='btn btn-sm btn-secondary'>Book Now $price[0]</a>
</div>
<div id='wpimg2' class='col-4'><h5 style='margin-top:90%;background:white;opacity:0.7;'>$title[1]</h5><a href='accommpage.php?id=$id[1]' button class='btn btn-sm btn-secondary'>Book Now $price[1]</a>
</div>

<div id='wpimg3' class='col-4'><h5 style='margin-top:90%;background:white;opacity:0.7;'>$title[2]</h5><a href='accommpage.php?id=$id[2]' button class='btn btn-sm btn-secondary'>Book Now $price[2]</a>
?>
</div>
</div>";
?>
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

<script>

var mail;
var nam;
function showmail() { 
$.ajaxSetup({ cache: false });
$("#resultsx").show();
var nam = document.mailform.nam.value;
var mail = document.mailform.mail.value;
var url = "addmail.php?nam="+nam+"&&mail="+mail;
$('#resultsx').load(url);
} 
</script>
<script>

var pval;

function menushow(pval) { 
$.ajaxSetup({ cache: false });
$(".submenu").show();

var url = "submenu.php?me="+pval;
$('.submenu').load(url);
} 
</script>