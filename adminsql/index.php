<?
require "bootstraptop.php";
if(isset($_SESSION[customer]) ) { 

echo "<div class='container'><div class='row'><div class='col-12'><h2>Click below to edit website details</h2><hr>";
echo "<a href='addaccommodation.php'>Add Accommodation</a><br>";
echo "<a href='editaccommodationlead.php'>Change Accommodation Details</a><br>";
echo "<a href='addpagename.php'>Add/Change Page Details</a><br>";
echo "<a href='addfooter.php'>Add/Change footer Details</a><br>";
echo "<a href='editmap.php'>Change Address Details</a><br>";
echo "<a href='selectaccommodation.php'>View Accommodation</a><br>";
echo "<a href='selectmaptb.php'>View Address</a><br>";
echo "<a href='selectpageinfo.php'>View Page Info</a>";
echo "</div></div>";
?>
<?
  } else { 
  echo "<a href='login.php'>Login</a>";
  } 
  ?>