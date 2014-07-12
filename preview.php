<?php
$st=$_GET['street'];
$de=urlencode($st);

$v=file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$de);
if(!$v)
{
echo '<h1>Not found</h1>';
}
else
{
$x=json_decode($v);
$lat=$x->results[0]->geometry->location->lat;
$lon=$x->results[0]->geometry->location->lng;
echo '<script src="//maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7">
</script>
<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
<script src="js/map.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    function map(){
	new Maplace({
	show_markers: true,
	locations: [
	{
		lat:'.$lat.', 
		lon:'.$lon.',
		zoom: 8,
	
		show_infowindow: false,
	}]
}).Load(); 
}

map();
});
</script>';
echo '<div id="gmap" style="height:290;width:290;"></div>';
}
?>