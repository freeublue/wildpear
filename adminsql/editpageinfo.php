<?
require "bootstraptop.php";
if(isset($_SESSION[customer]) ) { 
require "../config.php";
$id = $_REQUEST['id'];
$sq = mysqli_query($conn, "SELECT * FROM pgs WHERE pg_id = '$id'");
while($row = mysqli_fetch_array($sq)) { 

echo "<div class='row'><div class='col-12'><h5 style='margin-top:1em;'>$row[pg_title]</h5>";
echo "$row[pg_txt]<br>";
echo "$row[pg_img] <br>";
echo "$row[pg_pagename] <br>";
echo "$row[pg_pageid]";
echo "</div></div>";
$title = $row['pg_title'];
$txt = $row['pg_txt'];
$pagename = $row['pg_pagename'];
$pageid = $row['pg_id'];
$elementid = $row['pg_id'];
} 
?>
<div class='row'>
<div class='col-12'><h2>Add New sections to page here, Edit on links below</h2>
<?

echo "$pagename<br>";


           echo "<form action='processeditpageinfo.php' method='post'><label>Title Header</label><br><input id='addtype' value='$title' name='title' /><br><label>Sub Header</label><br><input id='subhead' name='subhead' /><br>
           
           <label>Paragraph Text</label><br>
           <textarea rows='10' cols='30' name='descp'>$txt</textarea><br>";
                      
   echo "<input type='text' name='id' value='$elementid' /><br>";
echo "<input type='text' name='pagename' value='$pagename' /><br>";

                  echo "<button id='add_em' class='btn btn-danger' type='submit'> 
                     Go! 
                  </button>";
echo "</form>";
?>
<?
  } else { 
  echo "<a href='login.php'>Login</a>";
  } 
  ?>

</div></div>


