<?
require "top.php";
$titlepage = 'Wildpear Book Affordable Accommodation Contact';
require "header.php";
require "config.php";

?>

<div class='container-fluid'>
<div class='row text-center'>
<div class='col-12'>
      
<? 
$caroarray = array("fview.jpg" , "breeze.jpg" , "fview2.jpg");
$one = "<h2><a style='color:white;' href='book.php'>Book Now</a></h2>";
$two = "<h2><a style='color:white;' href='accommodation.php'>Find Out More</a></h2>";
$three = "<h2><a style='color:white;' href='pricing.php'>Seasonal Specials</a></h2>";

  $carohtml = array($one , $two , $three);
caro($caroarray, $carohtml);
?>
</div></div>
<div style='margin-top:2em;' class='row text-center'>
<div class='col-12'><h2>Taking care of your every need-Your home away from home</h2><p class='text-center' style='color:gold;'>_________________________</p>
<p style='color:silver;margin-top:2em;' class='wow fadeInDown'>Lorem ipsum dolor sit amet, pellentesque malesuada in, non vivamus, quam diam consequat. Id duis, sit ac vitae, consectetuer et nulla. Et egestas wisi, arcu in, diam nulla eget. Diam imperdiet. Nulla mollis, dapibus lectus in. Eu magna, massa magna, elementum pharetra.<br>
Commodo erat, aliquet luctus donec. Curabitur libero, pharetra sem aenean. Tortor rutrum, vel ultricies non. Odio magna, diam fermentum. Integer sed magna, pellentesque aenean vestibulum, quis purus.</p>
</div></div>

<div class='row'>
<div style='margin-top:6em;margin-bottom:5em;' class='col-12 text-center'>
<h2 >Book Now</h2><p class='text-center' style='color:gold;'>_________________________</p>
</div>
</div>
<div class='row'>
<div class='col-6 text-center'>
<form method='post'class="form-horizontal" action="processcontact.php">
          <div class="form-group">
    <label class="control-label" for="name">Name:</label>
    
      <input style='background: white;color:gray;' type="text" class="form-control" name='name' id="name" placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label class="control-label" for="email">Email:</label><input style='background: white;color:gray;' type="email" class="form-control" name='email' id="email" placeholder="Enter email">
    </div>
    
    <div class="form-group">
    <label class="control-label" for="accommodation">Accommodation:</label><select class="form-control" name='accommodation'>
    <option value='wp1'>Wildpear 1</option>
    <option value='wp2'>Wildpear 2</option>
    <option value='wp3'>Wildpear 3</option>
    </select>
    </div>
 <div class="form-group">
    <label class="control-label" for="from">From:</label><input style='background: white;color:gray;' type="date" class="form-control" name='fr' id="fr">
    </div>   
     <div class="form-group">
    <label class="control-label" for="to">To:</label><input style='background: white;color:gray;' type="date" class="form-control" name='tr' id="tr">
    </div>   
<div class='form-group'><label class="control-label" for='descp'>Enter additional info :</label><br /><textarea style='background: white;color:gray;' cols='20' rows='10' name='message'></textarea><br></div>
<?
require "Robochhr.php";
?>

  <div class="form-group"> 
    
      <button style='border:1px solid gray;color:gray;' type="submit" class="btn btn-outline text-center">Reserve your space</button></div>
    
</form>

</div>
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