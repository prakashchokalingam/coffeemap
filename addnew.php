<link rel="stylesheet" href="style.css" type="text/css" />
<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){
$("#pre").click(function(){
var st=$("#st").val();
var city=$("#city").val();
var cou=$("#cou").val();
if(st=="" || city=="" || cou=="")
{
alert("Enter Street,City,State to preview !!! ");
}
else
{
$("#show").show();
window.open("preview.php?street="+ st,"preview");
}
});
$("#new").submit(function(e){
var st=$("#st").val();
var city=$("#city").val();
var cou=$("#cou").val();
var sn=$("#name").val();
var se=$("#email").val();
var ow=$("#owname").val();
var desc=$("#desc").val();
if(st=="" || sn=="" || se=="" || ow=="" || desc=="")
{
alert("Seems like some fields missed ! ");
e.preventDefault();
}
});
$("#del").click(function(){
$("#ad").hide();
$("#dele").show();
});
$("#upda").click(function(){
$("#ad").hide();
$("#up").show();
});
});
</script>
<body>
<div id="ad">
<center><h3>Add your Coffee shop details here </h3>
<form method="post" action="insert.php" id="new">
<table><tr><td><input type="button" id="del" value="Delete Shop"></td><td><table cellspacing="10"><tr><td>Shop Name: <sup>*</sup></td><td><input type="text" id="name" name="sn"></td></tr>
<tr><td>Shop email id: <sup>*</sup></td><td><input type="text" id="email" name="se"></td></tr>
<tr><td>Owner Name: <sup>*</sup></td><td><input type="text" id="owname" name="on"></td></tr>
<tr><td><h1>Shop Location<sup>*</sup></h1></td><td><input type="button" id="pre" value="preview"></td></tr>
<tr><td>Address:<sup>*</sup></td><td><textarea type="text" id="st" name="st" rows="5" cols="35" placeholder="Enter full adress of the shop"></textarea></td></tr>

<tr><td>Short Description<sup>*</sup></td><td><input type="text" id="desc" name="desc"></td></tr>
<tr><td></td><td><input type="submit" id="bttn" value="submit"></td></tr></table></td><td><div id="show" style="display:none;border:5px solid #330000;height:300px; width:300px;"><iframe name="preview" scrolling="no" frameborder="0" height="295px" width="295px"></iframe></div></td><td><input type="button" id="upda" value="Update Shop"></td></tr></table></form></center></div>
<div id="dele" style="display:none;"><center><h1>Delete your shop</h1>
<form method="post" action="delete.php" id="remove">
<table>
<tr><td>Owner name :<sup>*</sup></td><td><input type="text" id="ow" name="ow"></td></tr>
<tr><td>Shop email id :<sup>*</sup></td><td><input type="text" id="si" name="si"></td></tr>
<tr><td></td><td><input type="submit" id="bttn" value="Delete"></td></tr>
</table></form></center></div>
<div id="up" style="display:none;"><center><h1>Update your shop</h1>
<form method="post" action="update.php" id="update">
<table>
<tr><td>Owner name :<sup>*</sup></td><td><input type="text" id="ow" name="ow"></td></tr>
<tr><td>Shop email id :<sup>*</sup></td><td><input type="text" id="si" name="si"></td></tr>
<tr><td></td><td><input type="submit" id="bttn" value="Update shop"></td></tr>
</table></form>
</center></div></body>