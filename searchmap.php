<link rel="stylesheet" type="text/css" href="style.css" />
<script src="//maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7">
</script>
<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
<script src="js/map.js"></script>
<?php
$g=$_POST['val'];
include 'connection.php';
$count=0;
$get=mysqli_query($con,"SELECT * FROM coffee WHERE shopaddress LIKE '%$g%'");
$fu='"hi"';
echo '
<script type="text/javascript">
$(document).ready(function() {
    function map(){
	new Maplace({
	show_markers: true,
	locations: [';
	while($row=mysqli_fetch_array($get))
{
$count++;
	 echo "{
		lat:".$row['lat'].", 
		lon:".$row['longi'].",
		zoom: 8,
		show_infowindow: false,
		controls_on_map: false,
		html: [
					'<span>".$row['shopname']."</span><hr>',
					'<span>".$row['shopaddress']."</span><hr>',
					'<span>".$row['shortdesc']."</span><hr>',
					'<span>".$row['shopmail']."</span><hr>'
			].join(''),
		icon:'images/mi.png'
		
	},";
	}
	echo ']
}).Load(); 
}

map();
});
</script>
<div id="details">
';
echo'<center>
<table cellspacing="5" cellpadding="15"><tr><td><h1>Total shops : </h1></td><td><h1><span style="color:blue;">'.$count.'</span></td></h1><td><div id="controls"></div></td></form></tr></table></div>
<div id="gmap"></div></center>';
?>