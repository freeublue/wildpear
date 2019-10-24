<?
require "bootstraptop.php";
$size = 'xl';
$bootcolor = 'dark';
$bootcolor2 = 'dark';
$navname = "<a style='text-decoration:none;color:silver;' href='index.php'>Home</a>";

$dropdownname = 'Browse';

$dropdownlinkarray = array( "$xdtitle[0]" => "productpage.php?id=$xdtitle[0]", "$xdtitle[1]" => "productpage.php?id=$xdtitle[1]", "$xdtitle[2]" => "productpage.php?id=$xdtitle[2]", "$xdtitle[3]" => "productpage.php?id=$xdtitle[3]", "$xdtitle[4]" => "productpage.php?id=$xdtitle[4]");
$pagelinkarray = array( "contact.php" => "Contact",  "book.php" => "Book Accommodation", "pricing.php" => "Rates", "accommodation.php" => "Accommodation");
$ar = array('Categories >>', 'categories.php');
navbar ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $dropdownname, $dropdownlinkarray, $ar); 


?>