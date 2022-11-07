<html>
<head>
<style>

*{margin:0%;}

body{background:#ADD8E6;}
#mainact{margin-left:2px;margin-right:2px;margin-top:20px; width:1000px;height:auto;background:#fff;margin-left:470px;border:2px}
#mainact h1{text-align:center;color:#fff;background:#1E90FF;border-radius:4px;}
#mainact table{margin-left:200px;}
#mainact table tr td{font-size:25px;padding:5px;font-weight:bold;}
#mainact table tr td input{font-size:20px;padding:5px;width:300px;height:40px;border-radius:4px;border:2px solid #87CEFA;margin-left:50px;}

</style>


</head>
<body>
<?php include("menubaradmin.php")?>

<form method="post" enctype="multipart/form-data">
<div id="mainact">
	<h1>Add New Details</h1>
	<table>
	<tr>
	<td>Enter type  :</td>
	<td><input type="text" name="pettype" placeholder="Enter the type"></td>
	</tr>
	<tr>
	<td>Enter name  :</td>
	<td><input type="text" name="petname" placeholder="Enter the name"></td>
	</tr>
	<tr>
	<td>Enter Price  :</td>
	<td><input type="text" name="petrate" placeholder="Enter the Rate"></td>
	</tr>
	<tr>
	<td>Enter keywords  :</td>
	<td><input type="text" name="petkeyword" placeholder="Enter the keywords"></td>
	</tr>
	<tr>
	<td>Enter Feature1  :</td>
	<td><input type="text" name="petfeature1" placeholder="Enter the feature1"></td>
	</tr>
	<tr>
	<td>Enter Feature2  :</td>
	<td><input type="text" name="petfeature2" placeholder="Enter the feature2"></td>
	</tr>
	<tr>
	<td>Enter image1  :</td>
	<td><input type="file" name="petimg1"></td>
	</tr>
	<tr>
	<td>Enter image2  :</td>
	<td><input type="file" name="petimg2"></td>
	</tr>
	<tr>
	<td>Enter image3  :</td>
	<td><input type="file" name="petimg3"></td>
	</tr>
	<tr>
	<td>Enter image4  :</td>
	<td><input type="file" name="petimg4"></td>
	</tr>

	
	</table>
		<input type="submit" name="click" value="Add details" style="margin-top:20px;margin-bottom:20px;font-size:20px;margin-left:500px;text-align:center;padding:5px;border-radius:4px;border:1px solid #400040;background:#fff;">
</div>

</form>
</body>
</html>
<?php

		if(isset($_POST['click']))
		{
		include("db.php");
		
		$pettype=$_POST['pettype'];
		$petname=$_POST['petname'];
		$petrate=$_POST['petrate'];
		$petfeature1=$_POST['petfeature1'];
		$petfeature2=$_POST['petfeature2'];
		$petkeyword=$_POST['petkeyword'];
		$petimage1=$_FILES['petimg1']['name'];
			$pet_img1_temp=$_FILES['petimg1']['tmp_name'];
			
			
			
			
			move_uploaded_file($pet_img1_temp,"petphotos/$petimage1");	
			$petimage2=$_FILES['petimg2']['name'];
			$pet_img2_temp=$_FILES['petimg2']['tmp_name'];
			
			
			
			
			move_uploaded_file($pet_img2_temp,"petphotos/$petimage2");	
		
$petimage3=$_FILES['petimg3']['name'];
			$pet_img3_temp=$_FILES['petimg3']['tmp_name'];
			
			
			
			
			move_uploaded_file($pet_img3_temp,"petphotos/$petimage3");	
		
			$petimage4=$_FILES['petimg4']['name'];
			$pet_img4_temp=$_FILES['petimg4']['tmp_name'];
			
			
			
			
			move_uploaded_file($pet_img4_temp,"petphotos/$petimage4");	
			
			
			$query=$con->prepare("insert into petdetails(pet_type,pet_name,pet_Rate,pet_keywords,pet_features1,pet_features2,pet_img1,pet_img2,pet_img3,pet_img4)values('$pettype','$petname','$petrate','$petkeyword','$petfeature1','$petfeature2','$petimage1','$petimage2','$petimage3','$petimage4')");
			
			if($query->execute())
			{
				echo"<script>alert('stored pet details')</script>";
			}
			else
			{
				echo"<script>alert('not stored pet details')</script>";
			
			}
			
			
			
			
		

		

		}
?>