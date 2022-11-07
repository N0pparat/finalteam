<html>
<head>

<style>
*{margin:0%;}

body{background:#ADD8E6;}
h1{text-align:center;color:#fff;background:#1E90FF;border-radius:4px;margin-top:50px;}


table{width:90%;height:auto;margin-left:30px;margin-top:5px;background:#fff;}
table,th,tr,td{border-collapse:collapse;border:1px solid #4169E1;padding:5px;}
table td{text-align:center;font-size:20px;color:#400040;}
table th{font-size:23px;color:#400040;}
img{width:50px;height:50px;}
</style>
</head>
<body>
<?php include("menubaradmin.php")?>

	<h1>View All Pet Details</h1>
	<table>
<tr>
<th>Serial No</th>
<th>Edit</th>
<th>Delete</th>
	<th>Name</th>
	<th>Type</th>
	<th>Price</th>
	<th>Keywords</th>
	<th>Feature1</th>
	<th>Feature2</th>
	<th>Images</th>

</tr>
<?php
			include("db.php");
			
			if(!isset($_POST['search_btn']))
			{
				$query=$con->prepare("select * from petdetails order by 1 desc");
			
				$query->execute();
			}
			if(isset($_POST['search_btn']))
			{
				$getdata=$_POST['search'];
				$query=$con->prepare("select * from petdetails where pet_name like '%$getdata%'");
			
				$query->execute();
			}
			$i=1;
			while($row=$query->fetch()):
			
			echo"<tr><td>".$i++."</td>
			<td><a href='edit_petdetils.php?id=".$row['pet_id']."'>Edit</td>
				
				<td><a href='delete_petdetils.php?id=".$row['pet_id']."'>Delete</td>
			
			<td>'".$row['pet_name']."'</td>
			<td>'".$row['pet_type']."'</td>
			<td>'".$row['pet_rate']."'</td>
			<td>'".$row['pet_keywords']."'</td>
			<td>'".$row['pet_features1']."'</td>
			<td>'".$row['pet_features2']."'</td>
			<td><img src='petphotos/".$row['pet_img1']."'></td>
			
			</tr>";
			
			
			endwhile;



?>
</table>
</body>
</html>