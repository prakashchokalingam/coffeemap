<link rel="stylesheet" href="style.css" /><?php
include 'connection.php';
$ow=$_POST['ow'];
$se=$_POST['si'];
$de=mysqli_query($con,"DELETE  FROM coffee WHERE ownername='$ow' AND shopmail='$se'");
if(!$de)
{
echo '<center><h1>Removal Failed !!! </h1></center>';
}
else
{
echo '<center><h1>Removal Success !!! </h1><br><br><br><br><a href="index.php" target="_top"><button id="btn">Home</button></center>';
}
mysqli_close($con);
?>