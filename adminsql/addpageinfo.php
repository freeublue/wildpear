<?
require "bootstraptop.php";
?>

<div class='container'>
<div class='row'>
<div class='col-12'><h2>Add New sections to page here, Edit on links below</h2>
<?
$id = $_REQUEST['id'];
echo "$id<br>";
$pagename = $_REQUEST['pagename'];
echo "$pagename<br>";
include "../config.php";

           echo "<form action='processpageinfo.php' method='post'><label>Title Header</label><br><input id='addtype' name='title' /><br><label>Sub Header</label><br><input id='subhead' name='subhead' /><br>
           
           <label>Paragraph Text</label><br>
           <textarea rows='10' cols='30' name='descp'></textarea><br>";
                      
   echo "<input type='text' name='id' value='$id' /><br>";
echo "<input type='text' name='pagename' value='$pagename' /><br>";

                  echo "<button id='add_em' class='btn btn-danger' type='submit'> 
                     Go! 
                  </button>";
echo "</form>";
?>
</div></div>
<div class='row'>
<div class='col-12'>
<?
$sq = mysqli_query($conn, "SELECT * FROM pgs WHERE pg_pageid = '$id'");
while($row = mysqli_fetch_array($sq)) { 
echo "<a href='editpageinfo.php?id=$row[pg_id]'>$row[pg_title]</a><br>";
} 

?>
</div></div>
</div></body></html>

