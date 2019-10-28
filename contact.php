<?
require "top.php";
$titlepage = 'Wildpear Book Affordable Accommodation Contact';
require "header.php";
require "config.php";


?>
<style>
#map{height:500px;}
</style>

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
<h2 >Make an enquiry</h2>
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
  
<div class='form-group'><label class="control-label" for='descp'>Enter Message :</label><br /><textarea style='background: white;color:gray;' cols='20' rows='10' name='message'></textarea><br></div>
<?
require "Robochhr.php";
?>

  <div class="form-group"> 
    
      <button style='border:1px solid gray;color:gray;' type="submit" class="btn btn-outline text-center">Send Message</button></div>
    
</form>

</div>
<div class='col-6'><div id='map'></div>
</div>
</div>

  <?
  $sq = mysqli_query($conn, "SELECT * FROM maptb");
while($row = mysqli_fetch_array($sq)) { 
  $lat = $row[mp_lat];
  $lng = $row[mp_lng];
  $GK = $row[mp_image]; } 
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script><script>

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
</script><script>

var pval;

function menushow(pval) { 
$.ajaxSetup({ cache: false });
$(".submenu").show();

var url = "submenu.php?me="+pval;
$('.submenu').load(url);
} 
</script><script>
    var lat = "<? echo $lat; ?>";
    var lng = "<? echo $lng; ?>";
    latx = parseFloat(lat);
    lngx = parseFloat(lng);
// Initialize and add the map
function initMap() {
  
  
  var uluru = {lat: latx, lng: lngx};
  
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 12, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <?
    echo "<script async defer
    src='https://maps.googleapis.com/maps/api/js?key=" . $GK . "&callback=initMap'></script>";