<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.demo
{
	background-image:url(images/bg-search-form.gif);
	background-size:100%100%;
}
.ss
{

	 text-decoration:none;
	 text-align:center;
	 color:black;
	 
}
.ss:hover
{
	color:white;
	
}
.aa
{
	border-right:2px solid white;
	text-align:center;
	width:20%;
	 
}
div
{
	text-align:justify;
	line-height:25px;
}
</style>
</head>

<body>
<?php
session_start();
unset($_SESSION['user']);
?>
<table  cellspacing="0" width="100%">
<tr  class="demo" height="50px">
<td class="aa" ><a href="Home.php" class="ss">Home</a></td>
<td class="aa"><a href="Food.php" class="ss">Products</a></td>
<td class="aa"><a href="Admin.php" class="ss">Admin</a></td>
</tr>
<tr>
<td colspan="5">

<img src="images/bg.jpg" width="100%" />
</td>
</tr>
</table>
</td>
</tr>
<tr bgcolor="black" height="50" style="background-color:black">
<td colspan="5" align="center" >

<p style="padding:30px;background-color:black;color:white;">Copy right @ 2020 Grocery Shopping</p>

</td>
</tr>

</table>
</td>
</tr>
</table>
</body>
</html>
