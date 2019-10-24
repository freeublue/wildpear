<?

function navbar ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar) { 
$navstart = '<nav class="navbar navbar-expand-' .$size . ' navbar-' . $bootcolor . ' bg-' . $bootcolor2 . ' "><a class="navbar-brand" href="index.php">' . $navname . '</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
    echo $navstart;
    $active =  '<li class="nav-item active">
        <a class="nav-link" href="' . $ar[1]. '">' . $ar[0] . '<span class="sr-only">(current)</span></a>';
        echo $active;
  $countlinks =   count($pagelinkarray);
  foreach ($pagelinkarray as $key => $value) { 
    
     echo ' </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $key . '">' . $value . '</a>
      </li>'; } 
      $navend = '</ul></div>
</nav>';
echo $navend;

} 
function navbarfixedtop ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar) { 
$navstart = '<nav class="navbar fixed-top navbar-expand-' .$size . ' navbar-' . $bootcolor . ' bg-' . $bootcolor2 . ' "><a class="navbar-brand" href="index.php">' . $navname . '</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
    echo $navstart;
    $active =  '<li class="nav-item active">
        <a class="nav-link" href="' . $ar[1]. '">' . $ar[0] . '<span class="sr-only">(current)</span></a>';
        echo $active;
  $countlinks =   count($pagelinkarray);
  foreach ($pagelinkarray as $key => $value) { 
    
     echo ' </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $key . '">' . $value . '</a>
      </li>'; } 
      $navend = '</ul></div>
</nav>';
echo $navend;

} 
function navbarfixedbottom ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar) { 
$navstart = '<nav class="navbar navbar-expand-' .$size . ' navbar-' . $bootcolor . ' bg-' . $bootcolor2 . ' "><a class="navbar-brand" href="index.php">' . $navname . '</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
    echo $navstart;
    $active =  '<li class="nav-item active">
        <a class="nav-link" href="' . $ar[1]. '">' . $ar[0] . '<span class="sr-only">(current)</span></a>';
        echo $active;
  $countlinks =   count($pagelinkarray);
  foreach ($pagelinkarray as $key => $value) { 
    
     echo ' </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $key . '">' . $value . '</a>
      </li>'; } 
      $navend = '</ul></div>
</nav>';
echo $navend;

} 
function navbardropdownsearch ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $dropdownname, $dropdownlinkarray, $ar) { 
$navstart = '<nav class="navbar navbar-expand-' .$size . ' navbar-' . $bootcolor . ' bg-' . $bootcolor2 . ' "><a class="navbar-brand" href="index.php">' . $navname . '</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
    echo $navstart;
    $active =  '<li class="nav-item active">
        <a class="nav-link" href="' . $ar[1]. '">' . $ar[0] . '<span class="sr-only">(current)</span></a>';
        echo $active;
  $countlinks =   count($pagelinkarray);
  foreach ($pagelinkarray as $key => $value) { 
    
     echo ' </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $key . '">' . $value . '</a>
      </li>'; } 
echo "<li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          $dropdownname</a>
       
        <div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
           foreach ($dropdownlinkarray as $ke => $val) { 
          echo "<a class='dropdown-item' href='$val'>$ke</a>"; } 
          
        echo "</div>
      </li>";
 echo '<form action="search.php" method="post" class="form-inline">
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>';
      $navend = '</ul></div>
</nav>';
echo $navend;

} 
function navbardropdown ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $ar) { 
$navstart = '<nav class="navbar navbar-expand-' .$size . ' navbar-' . $bootcolor . ' bg-' . $bootcolor2 . ' "><a class="navbar-brand" href="index.php">' . $navname . '</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
    echo $navstart;
    $active =  '<li class="nav-item active">
        <a class="nav-link" href="' . $ar[1]. '">' . $ar[0] . '<span class="sr-only">(current)</span></a>';
        echo $active;
  $countlinks =   count($pagelinkarray);
  foreach ($pagelinkarray as $key => $value) { 
    
     echo ' </li>
      <li class="nav-item">
        <a class="nav-link" href="' . $key . '">' . $value . '</a>
      </li>'; } 
      $navend = '</ul></div>
</nav>';
echo $navend;

} 


 function caro($caroarray, $carohtml) { 
  $count = count($caroarray);
  echo '<div id="Indicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#Indicators" data-slide-to="0" class="active"></li>';
    for($i=1;$i<$count;$i++) { 
    echo "<li data-target='#Indicators' data-slide-to='$i'></li>";
     } 
  echo "</ol>
  <div class='carousel-inner'>
    <div class='carousel-item active'>
      <img class='d-block w-100' src='$caroarray[0]' alt='First slide'>
    </div>";
    for($i=1;$i<$count;$i++) { 
    $slide = 'slide' . $i;
    echo "<div class='carousel-item'>
      <img class='d-block w-100' src='$caroarray[$i]' alt='$slide'>
      <div class='carousel-caption'>
     $carohtml[$i]
      </div>
    </div>";
    } 
  echo '</div>
  <a class="carousel-control-prev" href="#Indicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#Indicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>'; } 
function blisted($id, $type, $listclass, $size, $contentarray, $opt) {   
if($type == ul) { 
echo "<ul id='$id' class='$listclass'>"; } else { 
echo "<ol id='$id' class='$listclass'>"; }     

$size = count($contentarray);
for($i=0;$i<$size;$i++) { 
        echo "<li contenteditable='true' id='$opt[$i]'>$contentarray[$i]</li>"; } 
        if($type == ul) { 
      echo "</ul>"; } else { 
echo "</ol>"; } 
      } 
function blist($id, $type, $listclass, $size, $contentarray, $opt) {   
if($type == ul) { 
echo "<ul id='$id' class='$listclass'>"; } else { 
echo "<ol id='$id' class='$listclass'>"; }     

$size = count($contentarray);
for($i=0;$i<$size;$i++) { 
        echo "<li id='$opt[$i]'>$contentarray[$i]</li>"; } 
        if($type == ul) { 
      echo "</ul>"; } else { 
echo "</ol>"; } 
      } 
      function btable($id, $tableclass, $rowcount, $conte, $optsid) {   

echo "<div class='row'><div class='col-12'><table id='$id' class='$tableclass'>";      

$size = count($conte);
$div = $size/$rowcount;

for($r=0;$r<$rowcount;$r++) { 
if($r == 0) { 
echo "<thead>";
echo "<tr>";


for($i=(($r*$div));$i<(($r*$div)+($div));$i++) { 

        echo "<th id='$optsid[$i]'>$conte[$i]</th>"; } 
        echo "</tr></thead><tbody>"; } else { 
        
        echo "<tr>";


for($i=(($r*$div));$i<(($r*$div)+($div));$i++) { 

        echo "<td id='$optsid[$i]'>$conte[$i]</td>"; } 
        echo "</tr>"; }  } 
        
        
echo "</tbody></table></div></div>"; } 
function input_form($input_id, $input_type, $input_label, $size) { 
$input_form = "<div class='form-group row'><div class='". $size . "'><div class='form-group'><label for='$input_id'>" . $input_label . "</label><input type='" . $input_type . "' class='form-control' name='" . $input_id . "' id='" . $input_id . "' placeholder='" . $input_label . "'></div></div></div>"; 
 echo "$input_form"; } 
 function rowcol($id, $rule, $size, $contentarray, $colsize, $gg) {       

echo "<div id='$id' class='row $rule'>";
for($i=0;$i<$size;$i++) { 
        echo "<div id='$gg[$i]' class='$colsize[$i]'>$contentarray[$i]</div>"; } 
        
      echo "</div>";
      } 
      function input_formv($input_id, $input_type, $input_label, $size, $val) { 
$input_form = "<div class='form-group row'><div class='". $size . "'><div class='form-group'><label for='$input_id'>" . $input_label . "</label><input type='" . $input_type . "' class='form-control' name='" . $input_id . "' id='" . $input_id . "' placeholder='" . $input_label . "' value='" . $val . "'></div></div></div>"; 
 echo "$input_form"; } 












        
      
?>