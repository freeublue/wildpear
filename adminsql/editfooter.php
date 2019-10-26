<?
require "bootstraptop.php";
?>

<div class='container'>
<div class='row'>
<div class='col-12'><h2>Add Footer Text, Edit on link below</h2>
<?
include "../config.php";
$id = $_REQUEST['id'];
$sq = mysqli_query($conn, "SELECT * FROM fts WHERE ft_id = '$id'");
while($row = mysqli_fetch_array($sq)) { 



           echo "<form action='processfooter.php' method='post'><label>Title Header</label><br><input id='addtype' value='$row[ft_title]' name='title' /><br>
           
           <label>Paragraph Text</label><br>
           <textarea rows='10' cols='30' name='descp'>$row[ft_txt]</textarea><br>";
           echo "<br><input id='id' value='$row[ft_id]' name='id' /><br>";
                      


                  echo "<button id='add_em' class='btn btn-danger' type='submit'> 
                     Go! 
                  </button>";
echo "</form>"; } 
?>
</div></div>
<div class='row'>
<div class='col-12'>
<?


?>
</div></div>
</div></body></html>

