<link rel="stylesheet" type="text/css" href="style.css" />
<script src="//maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7">
</script>
<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
<script src="js/map.js"></script>
<?php
include 'connection.php';
$count=0;
$get=mysqli_query($con,"SELECT * FROM coffee");
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
		icon:'images/mi.png',
		controls_on_map: false,
		controls_type: 'list',
		title: '".$row['shopname']."',
		html: [
					'<span>".$row['shopname']."</span><hr>',
					'<span>".$row['shopaddress']."</span><hr>',
					'<span>".$row['shortdesc']."</span><hr>',
					'<span>".$row['shopmail']."</span><hr>'
			].join(''),
		
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
<table cellspacing="5" cellpadding="15"><tr><td><h1>Total shops : </h1></td><td><h1><span style="color:blue;">'.$count.'</span></td></h1><td></div></td></form></tr></table></div>
<div id="gmap"></div></center>';
?>