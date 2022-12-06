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
include("DB.php");

?>
<form name="f" method="post" action="" enctype="multipart/form-data">
<?php
if(isset($_REQUEST['insert']))
{
	
	//$breed=$_REQUEST['breed'];
	$life=$_REQUEST['life'];
	
	
	
	
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="insert into category(cname) values('$life')";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		echo "<script>alert('Category Inserted successfully!!!!')</script>";
	}
}

?>
<table  cellspacing="0" width="100%" border="0">
<tr  class="demo" height="50px">
<td class="aa" ><a href="Admincategory.php" class="ss">Category</a></td>
<td class="aa"><a href="Admcustomer.php" class="ss">Customer Info</a></td>
<td class="aa"><a href="Admfood.php" class="ss">Products</a></td>
<td class="aa"><a href="Admproduct.php" class="ss">Product Order  </a></td>
<td class="aa"><a href="Home.php" class="ss">Logout</a></td>
</tr>
<tr>
<td colspan="3" align="center">


</td>
<td rowspan="2" colspan="2">
</td>
</tr>
<tr>
<td colspan="3">


<table align="center" cellpadding="10" cellspacing="10">
<tr></tr>
<tr><td colspan="2" align="center"><h2>Add New Category</h2></td></tr>


<tr><td>Category Id:</td><td><input type="text" name="breed" id="breed"  disabled/></td></tr>
<tr><td>Category Name:</td><td><input type="text" name="life" id="life"  /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="insert" id="insert" value="Insert" />
<input type="reset" name="clear" id="clear" value="Clear" /></td></tr>

</table>

</td>
</tr>
<tr bgcolor="#f39c12" height="50">
<td colspan="5" align="center">
Copy right @ 2020 Grocery Shopping
</td>
</tr>

</table>
</td>
</tr>
</table>
</form>
</body>
</html>
