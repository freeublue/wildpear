<?
require "bootstraptop.php";
require "../config.php";

$sq = mysqli_query($conn, "SELECT * FROM maptb");
while($row = mysqli_fetch_array($sq)) { 

echo "<div class='container'><div class='row'><div class='col-12'><h2>Add Details</h2>
<form name='' id='' action='processeditmap.php' method='post' onsubmit=''>
<label>Name</label><br><input type='text' name='mp_name' value='$row[mp_name]' placeholder ='Name of website/business' /><br>
<label>Latitude</label><br><input type='text' name='mp_lat' value='$row[mp_lat]' placeholder ='Latitude' /><br>
<label>Longtitude</label><br><input type='text' name='mp_lng' value='$row[mp_lng]' placeholder ='Longtitude' /><br>
<label>Street</label><br><input type='text' name='mp_street' value='$row[mp_street]' placeholder ='Street' /><br>
<label>Building</label><br><input type='text' name='mp_building' value='$row[mp_building]' placeholder ='Building' /><br>
<label>Suburb</label><br><input type='text' name='mp_suburb' value='$row[mp_suburb]' placeholder ='Suburb' /><br>
<label>Town</label><br><input type='text' name='mp_town' value='$row[mp_town]' placeholder ='Town' /><br>
<label>State</label><br><input type='text' name='mp_state' value='$row[mp_state]' placeholder ='State' /><br>
<label>Country</label><br><input type='text' name='mp_country' value='$row[mp_country]' placeholder ='Country' /><br>
<label>Zip</label><br><input type='text' name='mp_zip' value='$row[mp_zip]' placeholder ='Zip' /><br>
<label>Mobile</label><br><input type='text' name='mp_mobile' value='$row[mp_mobile]' placeholder ='mobile' /><br>
<label>Email</label><br><input type='text' name='mp_email' value='$row[mp_email]' placeholder ='Email' /><br>
<label>GK</label><br><input type='text' name='GK' value='$row[mp_image]' placeholder ='GK' /><br>
<br><input type='text' name='id' value='$row[mp_id]' /><br>
<input type='submit' name='submit' value='submit' /></form></div></div></div>";
} 
?>