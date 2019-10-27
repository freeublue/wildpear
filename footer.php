<div class='row text-center'>
<?
$ftsid = 1;
$sqft = mysqli_query($conn, "SELECT * FROM fts WHERE ft_id = '$ftsid'");
while($rr = mysqli_fetch_array($sqft)) { 
echo "<div class='col-4 infobox2'><p>$rr[ft_title]</p><p>

$rr[ft_txt]</p>"; } 











?>


</p></div>
<div class='col-4 infobox2'><p>Info</p>
<?

echo "<a style='color:gray;' href='accommodation.php'>Accommodation</a><br>"; 
echo "<a style='color:gray;' href='contact.php'>Contact</a><br>"; 
echo "<a style='color:gray;' href='pricing.php'>Rates</a><br>"; 
echo "<a style='color:gray;' href='book.php'>Book</a><br>"; 

?>
</div>
<div class='col-4 infobox2'><p>Contact</p><p style='color:white;'>
<?
$sqw = mysqli_query($conn, "SELECT * FROM maptb");
while($rw = mysqli_fetch_array($sqw) ) { 
$em = $rw['mp_email'];

  echo "<strong>$rw[mp_name] </strong><br>
  
  $rw[mp_street], $rw[mp_suburb], $rw[mp_town], $rw[mp_state], $rw[mp_zip]<br><abbr title='Phone'>P:</abbr> $rw[mp_mobile]</address><address><strong>Sarah Rachmann</strong><br><a style='text-decoration:none;color:white;' href='mailto:". $em . "'>". $em . "</a></address>"; } 
?></p>
</div>

</div>