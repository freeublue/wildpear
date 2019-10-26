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
$em = 'enlight@global.co.za';

  echo "<strong>Wild Pear </strong><br>
  
  Bassonia, Johannesburg, Gauteng, 2190<br><abbr title='Phone'>P:</abbr> 0834144848</address><address><strong>Sarah Rachmann</strong><br><a style='text-decoration:none;color:white;' href='mailto:". $em . "'>". $em . "</a></address>"; 
?></p>
</div>

</div>