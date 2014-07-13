<link rel="stylesheet" href="style.css" />
<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){
$("#pre").click(function(){
var st=$("#st").val();

if(st=="")
{
alert("Enter Street,City,State to preview !!! ");
}
else
{
$("#show").show();
window.open("preview.php?street="+ st,"preview");
}
});
});
</script><?php
include 'connection.php';
$ow=$_POST['ow'];
$se=$_POST['si'];
$sql=mysqli_query($con,"SELECT  * FROM coffee WHERE ownername='$ow' AND shopmail='$se'");
while($row=mysqli_fetch_array($sql))
{
$id=$row['id'];
$sn=$row['shopname'];
$se=$row['shopmail'];
$st=$row['shopaddress'];
$de=$row['shortdesc'];

}
if(count($id)==1)
{
echo '<center><form method="post" action="updated.php?id='.$id.'" id="up">
<table><tr></td><td><table cellspacing="10"><tr><td>Shop Name: <sup>*</sup></td><td><input type="text" id="name" name="sn" value="'.$sn.'"></td></tr>
<tr><td>Shop email id: <sup>*</sup></td><td><input type="text" id="email" name="se" value="'.$se.'"></td></tr>
<tr><td>Owner Name: <sup>*</sup></td><td><input type="text" id="owname" name="on" value="'.$ow.'"></td></tr>
<tr><td><h1>Shop Location<sup>*</sup></h1></td><td><input type="button" id="pre" value="preview"></td></tr>
<tr><td>Address:<sup>*</sup></td><td><textarea type="text" id="st" name="st" rows="5" cols="35" placeholder="Enter full adress of the shop" >'.$st.'</textarea></td></tr>

<tr><td>Short Description<sup>*</sup></td><td><input type="text" id="desc" name="desc" value="'.$de.'"></td></tr>
<tr><td></td><td><input type="submit" id="bttn" value="Update"></td></tr></table></td><td><div id="show" style="display:none;border:5px solid #330000;height:300px; width:300px;"><iframe name="preview" scrolling="no" frameborder="0" height="295px" width="295px"></iframe></div></td></tr></table></center>';
}
else
{
echo '<center><h1>Not Found !!!</h1></center>';
}
?>