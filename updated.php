<link rel="stylesheet" href="style.css" /><?php
include 'connection.php';
$id=$_GET['id'];
$sn=$_POST['sn'];
$se=$_POST['se'];
$on=$_POST['on'];
$st=$_POST['st'];
$desc=$_POST['desc'];
$de=urlencode($st);
$v=file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$de);
$x=json_decode($v);
$lat=$x->results[0]->geometry->location->lat;
$lon=$x->results[0]->geometry->location->lng;
$ins=mysqli_query($con,"UPDATE coffee SET shopname='$sn',shopmail='$se',ownername='$on',shopaddress='$st',shortdesc='$desc',lat='$lat',longi='$lon' WHERE id='$id'");
if(!$ins)
{
echo "failed";
}
else
{
echo '<center><h1>Your Shop Updated !!!</h1><br><br><br><br>
<a href="index.php"  target="_top"><button id="btn">Home</button></center>';
}

?>