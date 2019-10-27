<?
require "../bootstraptop.php";
?>

<div class='container'>
<div class='row'>
<div class='col-12'>
<?

include "../config.php";

           echo "<form action='processpagename.php' method='post'><label>Title Header</label><br><input id='addtype' name='title' /><br>";
                      
   

                  echo "<button id='add_em' class='btn btn-danger' type='submit'> 
                     Go! 
                  </button>";
echo "</form>";
?>
</div></div>
<div class='row'>
<div class='col-12'>
<?
$sq = mysqli_query($conn, "SELECT * FROM pagename");
while($row = mysqli_fetch_array($sq)) { 
echo "<a href='addpageinfo.php?id=$row[pa_id]&&pagename=$row[pa_title]'>$row[pa_title]</a><br>";
} 
echo "<a href='index.php'>Data Added Go Back to Home</a>";
?>
</div></div>
</div></body></html>


