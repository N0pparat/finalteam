<!DOCTYPE html>
<html>
<head>
<style>
#show{width:90%;height:400px;background:#fff;margin-left:100px;border-radius:4px;border-radius:4px;border:2px solid #6495ED;margin-top:20px;}

</style>
</head>
<body>
<?php


	
	include("header_index.php");

?>	<div id="show">
<h1 style="width:100%;height:40px;line-height:40px;background:#6495ED;color:#fff;text-align:center;margin-top:20px;">Select payment Method</h1>
						
		<form method="post">
			<select name="smeth" style="width:150px;height:40px;border:1px solid #425298;border-radius:4px;margin-left:300px;background:#fff;margin-top:100px;">
					<option value="select" >!...select....!</option>
				<option value="cod" >scan payment</option>
				<option value="credit">credit cart</option>
				
			</select>
	<input type="submit" name="payment" value="select payment" style="width:150px;height:40px;border:1px solid #425298;border-radius:4px;margin-left:20px;background:#fff;margin-top:100px;">
		</form>
		</div>
</body>
</html>
<?php

	if(isset($_POST['payment']))
	{
		$getvalue=$_POST['smeth'];
		if($getvalue=='select')
		{
			echo"<script>alert('select any one method')</script>";
		}
		if($getvalue=='cod')
		{
			header("location:placeorder.php?method=$getvalue");
		}
		if($getvalue=='credit')
		{
			header("location:credit.php");
		}
	}

?>