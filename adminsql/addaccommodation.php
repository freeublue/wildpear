<?
require "bootstraptop.php";
if(isset($_SESSION[customer]) ) { 
?>
<div class='row'>
<div class='col-6 text-center'><h2>Add Accommodation</h2>
<form method='post'class="form-horizontal" action="processaccommodation.php">
          <div class="form-group">
    <label class="control-label" for="name">Accommodation Name:</label>
    
      <input style='background: white;color:gray;' type="text" class="form-control" name='title' id="title" placeholder="Enter name">
    
  </div>
  
          <div class="form-group">
    <label class="control-label" for="name">Accommodation Price:</label>
    
      <input style='background: white;color:gray;' type="text" class="form-control" name='price' id="price" placeholder="Enter price">
      
    
  </div>
  
          <div class="form-group">
    <label class="control-label" for="name">Number of persons:</label>
    
      <input style='background: white;color:gray;' type="text" class="form-control" name='numberpers' id="numberpers" placeholder="Enter capacity">
      
    
  </div>
  
          <div class="form-group">
    <label class="control-label" for="name">Accommodation Single Supplement:</label>
    
      <input style='background: white;color:gray;' type="text" class="form-control" name='sup' id="sup" placeholder="Enter supplement">
      
    
  </div>
  
<div class='form-group'><label class="control-label" for='descp'>Accommodation Description :</label><br /><textarea style='background: white;color:gray;' cols='20' rows='10' name='descp'></textarea><br></div>

<div class='form-group'><label class="control-label" for='descp'>Accommodation Facilities :</label><br /><textarea style='background: white;color:gray;' cols='20' rows='10' name='facilities'></textarea><br></div>

  <div class="form-group"> 
    
      <button style='border:1px solid gray;color:gray;' type="submit" class="btn btn-outline text-center">Add Accommodation</button></div>
  </form>
  </div>
  </div>
  <?
  } else { 
  echo "<a href='login.php'>Login</a>";
  } 
?>
