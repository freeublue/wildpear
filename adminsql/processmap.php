
<?
require "../config.php";
$mp_name = mysqli_real_escape_string($conn, $_POST['mp_name']);
$mp_lat = $_POST['mp_lat'];
$mp_lng = $_POST['mp_lng'];
$mp_street = mysqli_real_escape_string($conn, $_POST['mp_street']);
$mp_building = mysqli_real_escape_string($conn, $_POST['mp_building']);
$mp_suburb = mysqli_real_escape_string($conn, $_POST['mp_suburb']);
$mp_town = mysqli_real_escape_string($conn, $_POST['mp_town']);
$mp_state = mysqli_real_escape_string($conn, $_POST['mp_state']);
$mp_country = mysqli_real_escape_string($conn, $_POST['mp_country']);
$mp_zip = mysqli_real_escape_string($conn, $_POST['mp_zip']);
$mp_mobile = mysqli_real_escape_string($conn, $_POST['mp_mobile']);
$mp_email = $_POST['mp_email'];
$mp_image = $_POST['GK'];

$sq = mysqli_query($conn, "INSERT INTO maptb(mp_name, mp_lat, mp_lng, mp_street, mp_building, mp_suburb, mp_town, mp_state, mp_country, mp_zip, mp_mobile, mp_email, mp_image)values('$mp_name', '$mp_lat', '$mp_lng', '$mp_street', '$mp_building', '$mp_suburb', '$mp_town', '$mp_state', '$mp_country', '$mp_zip', '$mp_mobile', '$mp_email', '$mp_image')");
echo "<a href='index.php'>Data Added Go Back to Home</a>";
?>

