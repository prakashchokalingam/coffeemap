<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Coffee Map</title>
<link rel="stylesheet" href="style.css" />
<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(e){
$("#sear").submit(function(m)
{
var a=$("#txt").val();
if(a=="")
{
m.preventDefault();
}
else
{

}
});
$("#add").click(function()
{
window.open("addnew.php" ,"main");
});
});
</script>

</head>


<body>
<div class="top"><a href="index.php" style="text-decoration:none;"><span class="logo">Coffee Map</span> <span><img src="images/coffee.png" height="50px" width="50px"/></span></a><span><center><table><tr><td><form method="post" action="searchmap.php" target="main" id="sear"><input type="text" placeholder="Enter Street,City" id="txt" name="val"/></td><td><input type="submit" id="btn" value="find cafe" /></form></td></tr></table><input type="button" value="add | edit | remove your shop" id="add" /></center></span></div>
<div>
<iframe src="testmap.php" width="98%" height="550px"; frameborder="0" scrolling="no" name="main"></iframe></body></div>
<center>&copy; Coffee Map </center>
</html>