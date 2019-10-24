<?
require "top.php";
$titlepage = 'Wildpear Book Affordable Accommodation in Johannesburg Home Page';
require "header.php";


?>

<div class='container-fluid'>
<div class='row text-center'>
<div class='col-12'>
      
<? $caroarray = array("ducks.jpg" , "breeze.jpg" , "herb.jpg");
$one = "<h2><a style='color:white;' href='register.php'>Book Now</a></h2>";
$two = "<h2><a style='color:white;' href='register.php'>Find Out More</a></h2>";
$three = "<h2><a style='color:white;' href='register.php'>Seasonal Specials</a></h2>";

  $carohtml = array($one , $two , $three);
caro($caroarray, $carohtml);
?>
</div></div>
<div style='margin-top:2em;' class='row text-center'>
<div class='col-12'><h2>Effortless enjoyment. Absolute ease</h2><p class='text-center' style='color:gold;'>_________________________</p>
<p style='color:silver;margin-top:2em;' class='wow fadeInDown'>Lorem ipsum dolor sit amet, pellentesque malesuada in, non vivamus, quam diam consequat. Id duis, sit ac vitae, consectetuer et nulla. Et egestas wisi, arcu in, diam nulla eget. Diam imperdiet. Nulla mollis, dapibus lectus in. Eu magna, massa magna, elementum pharetra.<br>
Commodo erat, aliquet luctus donec. Curabitur libero, pharetra sem aenean. Tortor rutrum, vel ultricies non. Odio magna, diam fermentum. Integer sed magna, pellentesque aenean vestibulum, quis purus.</p>
</div></div>


<div class='row text-center'>
<div class='col-4'>
</div>
<div class='col-4'><img class='img-fluid rounded-circle' style='height:15em;' src='home2.jpg' />
</div>
<div class='col-4'>
</div>
</div>


<div class='row text-center'>
<div class='col-4'><h4 style='margin-top:2em;'>Secure</h2><p class='text-center' style='color:gold;'>_________________________</p>
<p style='color:silver;' class='wow fadeInDown'>Lorem ipsum dolor sit amet, pellentesque malesuada in, non vivamus, quam diam consequat. Id duis, sit ac vitae, consectetuer et nulla. Et egestas wisi, arcu in, diam nulla eget. Diam imperdiet. Nulla mollis, dapibus lectus in. Eu magna, massa magna, elementum pharetra.<br>
Commodo erat, aliquet luctus donec. Curabitur libero, pharetra sem aenean. Tortor rutrum, vel ultricies non. Odio magna, diam fermentum. Integer sed magna, pellentesque aenean vestibulum, quis purus.</p>
</div>

<div class='col-4'><h4 style='margin-top:2em;'>Affordable</h2><p class='text-center' style='color:gold;'>_________________________</p>
<p style='color:silver;' class='wow fadeInDown'>Lorem ipsum dolor sit amet, pellentesque malesuada in, non vivamus, quam diam consequat. Id duis, sit ac vitae, consectetuer et nulla. Et egestas wisi, arcu in, diam nulla eget. Diam imperdiet. Nulla mollis, dapibus lectus in. Eu magna, massa magna, elementum pharetra.<br>
Commodo erat, aliquet luctus donec. Curabitur libero, pharetra sem aenean. Tortor rutrum, vel ultricies non. Odio magna, diam fermentum. Integer sed magna, pellentesque aenean vestibulum, quis purus.</p>
</div>
<div class='col-4'><h4 style='margin-top:2em;'>Convienient</h2><p class='text-center' style='color:gold;'>_________________________</p>
<p style='color:silver;' class='wow fadeInDown'>Lorem ipsum dolor sit amet, pellentesque malesuada in, non vivamus, quam diam consequat. Id duis, sit ac vitae, consectetuer et nulla. Et egestas wisi, arcu in, diam nulla eget. Diam imperdiet. Nulla mollis, dapibus lectus in. Eu magna, massa magna, elementum pharetra.<br>
Commodo erat, aliquet luctus donec. Curabitur libero, pharetra sem aenean. Tortor rutrum, vel ultricies non. Odio magna, diam fermentum. Integer sed magna, pellentesque aenean vestibulum, quis purus.</p>
</div>
</div>
<?
include "config.php";
$sq = mysqli_query($conn, "SELECT * FROM accommodation1");
while ($ro = mysqli_fetch_array($sq)) { 
$id[] = $ro['id'];
$title[] = $ro['title'];
$price[] = $ro['price'];
} 
echo "<div class='row text-center'>
<div id='wpimg1' class='col-4'><h5 style='margin-top:90%;'>$title[0]</h5><a href='accommpage.php?id=$id[0]' class='btn btn-sm btn-secondary'>View more</a>
</div>
<div id='wpimg2' class='col-4'><h5 style='margin-top:90%;'>$title[1]</h5><a href='accommpage.php?id=$id[1]' class='btn btn-sm btn-secondary'>View more</a>
</div>
<div id='wpimg3' class='col-4'><h5 style='margin-top:90%;'>$title[2]</h5><a href='accommpage.php?id=$id[2]' class='btn btn-sm btn-secondary'>View more</a>
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