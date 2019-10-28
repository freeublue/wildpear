<?
require "bootstraptop.php";
if(isset($_SESSION[customer]) ) { 
?>

<div class='container'>
<div class='row'>
<div class='col-12'><h2>Add Footer Text, Edit on link below</h2>
<?
include "../config.php";

           echo "<form action='processfooter.php' method='post'><label>Title Header</label><br><input id='addtype' name='title' /><br>
           
           <label>Paragraph Text</label><br>
           <textarea rows='10' cols='30' name='descp'></textarea><br>";
                      


                  echo "<button id='add_em' class='btn btn-danger' type='submit'> 
                     Go! 
                  </button>";
echo "</form>";
?>
</div></div>
<div class='row'>
<div class='col-12'>
<?
$sq = mysqli_query($conn, "SELECT * FROM fts");
while($row = mysqli_fetch_array($sq)) { 
echo "<a href='editfooter.php?id=$row[ft_id]'>$row[ft_title]</a><br>";
} 

?>
<?
  } else { 
  echo "<a href='login.php'>Login</a>";
  } 
  ?>
</div></div>
</div></body></html>

