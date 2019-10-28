<?
require "bootstraptop.php";

if(isset($_SESSION[customer]) ) { 
require "../config.php";
$id = $_REQUEST[id];
$sq = mysqli_query($conn, "SELECT * FROM accommodation1 WHERE id = '$id'");
while($row = mysqli_fetch_array($sq)) { 

echo "<div class='row'><div class='col-12'><h5 style='margin-top:1em;'>$row[title]</h5><p><table border='1' style='margin-top:2em;color:gray;' class='bordered wow fadeInDown'><tr><th>Facilities</th><th>Rate PPS</th><th>Single Suplement</th><th>Sleeps</th></tr>
<tr><td>$row[facilities]
</td><td valign='top'>$row[price]</td><td valign='top'>$row[singleSupp]</td><td>$row[numberpers]</td></tr></table></p>
</div></div>";
echo "<div class='row'><div class='col-12'><h2>Description</h2>";
echo "$row[descp]<br>";
echo "</div></div>";
echo "<div class='row'>
<div class='col-6 text-center'><h2>Edit Accommodation</h2>
<form method='post'class='form-horizontal' action='processeditaccommodation.php'>
          <div class='form-group'>
    <label class='control-label' for='name'>Accommodation Name:</label>
    
      <input style='background: white;color:gray;' type='text' class='form-control' name='title' id='title' value='$row[title]' placeholder='Enter name'>
    
  </div>
  
          <div class='form-group'>
    <label class='control-label' for='name'>Accommodation Price:</label>
    
      <input style='background: white;color:gray;' type='text' class='form-control' name='price' id='price' value='$row[price]' placeholder='Enter price'>
      
    
  </div>
     <div class='form-group'>
    <label class='control-label' for='name'>Accommodation Persons Sharing:</label>
    
      <input style='background: white;color:gray;' type='text' class='form-control' name='numberpers' id='numberpers' value='$row[numberpers]' placeholder='Enter persons sharing'>
      
    
  </div>
          <div class='form-group'>
    <label class='control-label' for='name'>Accommodation Single Supplement:</label>
    
      <input style='background: white;color:gray;' type='text' class='form-control' name='sup' id='sup' value='$row[singleSupp]' placeholder='Enter supplement'>
      
    
  </div>
  
<div class='form-group'><label class='control-label' for='descp'>Accommodation Description :</label><br /><textarea style='background: white;color:gray;' cols='20' rows='10' name='descp'>$row[descp]</textarea><br></div>

<div class='form-group'><label class='control-label' for='descp'>Accommodation Facilities :</label><br /><textarea style='background: white;color:gray;' cols='20' rows='10' name='facilities'>$row[facilities]</textarea><br></div>
<input type='text' name='id' value='$id' />

  <div class='form-group'> 
    
      <button style='border:1px solid gray;color:gray;' type='submit' class='btn btn-outline text-center'>Add Accommodation</button></div>
  </form>
  </div>";

} 
?>
<?
  } else { 
  echo "<a href='login.php'>Login</a>";
  } 
  ?>


