<link rel="stylesheet" href="style.css" /><?php
include 'connection.php';
$sn=$_POST['sn'];
$se=$_POST['se'];
$on=$_POST['on'];
$st=$_POST['st'];
$de=urlencode($st);
$desc=$_POST['desc'];
$v=file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$de);
$x=json_decode($v);
$lat=$x->results[0]->geometry->location->lat;
$lon=$x->results[0]->geometry->location->lng;
$id=uniqid();
$ins=mysqli_query($con,"INSERT INTO coffee VALUES('$sn','$se','$on','$st','$desc','$lat','$lon','$id')");
if(!$ins)
{
echo "failed";
}
else
{
echo '<center><h1>Your Shop added !!!</h1><br><br><br><br>
<a href="index.php"  target="_top"><button id="btn">Home</button></center>';
}

?>