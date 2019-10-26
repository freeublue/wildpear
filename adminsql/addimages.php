<?
require "../config.php";
$id = $_REQUEST['id'];
$img = $_REQUEST['img'];
$imgx = 'img' . $img;

echo "<h2>Editing image $img for</h2><br>";

$sq = mysqli_query($conn, "SELECT * FROM accommodation1 WHERE id = '$id'");
while($row = mysqli_fetch_array($sq)) { 

echo "<div class='row'><div class='col-12'><h2 style='margin-top:1em;'>$row[title]</h2><p>"; } 
echo "<form action='processimage.php' method='post'>
<label>Add image URL</label><br>
<input type='text' name='img' placeholder='Image URL' /><br>
<input type='text' name='id' value='$id' /><br>
<input type='text' name='imgfieldname' value='$imgx' /><br>


  <div class='form-group'> 
    
      <button style='border:1px solid gray;color:gray;' type='submit' class='btn btn-outline text-center'>Add Image</button></div>
  </form>";
?>