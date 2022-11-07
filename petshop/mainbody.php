<!DOCTYPE html>
<html>
<head>
<style>
body{background:#fff;}

#pet ul li{width:300px;height:350px;background:#fff;float:left;margin-top:30px;margin-left:20px;list-style-type:none;border:1px solid #000;border-radius:400px;}
#pet ul li a{text-decoration:none;color:#000;}
#pet1 ul li{width:300px;height:350px;background:#fff;float:left;margin-top:30px;margin-left:20px;list-style-type:none;border:1px solid #000;border-radius:400px;}
#pet1 ul li a{text-decoration:none;color:#000;}

</style>
</head>
<body>
<?php
		include("db.php");
		$query=$con->prepare("select *from petdetails where pet_type='washimg powder' order by 1 desc LIMIT 0,5");
		$query->execute();
		echo"<div id='pet'>
<h1 style='padding-left:10px;margin-left:60px;margin-top:20px;width:92%;background:#6495ED;color:#fff;
text-align:left;height:40px;line-height:40px;font-size:23px;border-radius:400px;'>WASHING POWDER</h1>";
		while($row=$query->fetch()):
		
			echo"<ul>
				<li><a href='viewdetails.php?id=".$row['pet_id']."'>
					<h1 style='text-align:center;'>".$row['pet_name']."</h1>
					<img src='petphotos/".$row['pet_img1']."' style='width:260px;height:250px;margin-left:20px;border-radius:400px;'>
					<h1 style='text-align:center;font-size:20px;font-weight:normal;margin-top:10px;'>Price (฿.  ".$row['pet_rate'].")</h1>
				</a></li>
			</ul>";
		
		endwhile;
	


echo"</div><br>";
$query=$con->prepare("select *from petdetails where pet_type='fabric softener' order by 1 desc LIMIT 0,5");
		$query->execute();
		echo"<div id='pet1'>
<h1 style='padding-left:10px;margin-left:60px;margin-top:400px;width:92%;background:#6495ED;color:#fff;
text-align:left;height:40px;line-height:40px;font-size:23px;border-radius:400px;'>FABRIC SOFTENER</h1>";
		while($row=$query->fetch()):
		
			echo"<ul>
				<li><a href='viewdetails.php?id=".$row['pet_id']."'>
					<h1 style='text-align:center;'>".$row['pet_name']."</h1>
					<img src='petphotos/".$row['pet_img1']."' style='width:260px;height:250px;margin-left:20px;border-radius:400px;'>
					<h1 style='text-align:center;font-size:20px;font-weight:normal;margin-top:10px;'>Price (฿.  ".$row['pet_rate'].")</h1>
				</a></li>
			</ul>";
		
		endwhile;
	


echo"</div>";

$query=$con->prepare("select *from petdetails where pet_type='chips' order by 1 desc LIMIT 0,8");
		$query->execute();
		echo"<div id='pet1'>
<h1 style='padding-left:10px;margin-left:60px;margin-top:400px;width:92%;background:#6495ED;color:#fff;
text-align:left;height:40px;line-height:40px;font-size:23px;border-radius:400px;'>CHIPS</h1>";
		while($row=$query->fetch()):
		
			echo"<ul>
				<li><a href='viewdetails.php?id=".$row['pet_id']."'>
					<h1 style='text-align:center;'>".$row['pet_name']."</h1>
					<img src='petphotos/".$row['pet_img1']."' style='width:260px;height:250px;margin-left:20px;border-radius:400px;'>
					<h1 style='text-align:center;font-size:20px;font-weight:normal;margin-top:10px;'>Price (฿.  ".$row['pet_rate'].")</h1>
				</a></li>
			</ul>";
		
		endwhile;
	


echo"</div>";

$query=$con->prepare("select *from petdetails where pet_type='drink' order by 1 desc LIMIT 0,8");
		$query->execute();
		echo"<div id='pet1'>
<h1 style='padding-left:10px;margin-left:60px;margin-top:400px;width:92%;background:#6495ED;color:#fff;
text-align:left;height:40px;line-height:40px;font-size:23px;border-radius:400px;'>DRINK</h1>";
		while($row=$query->fetch()):
		
			echo"<ul>
				<li><a href='viewdetails.php?id=".$row['pet_id']."'>
					<h1 style='text-align:center;'>".$row['pet_name']."</h1>
					<img src='petphotos/".$row['pet_img1']."' style='width:260px;height:250px;margin-left:20px;border-radius:400px;'>
					<h1 style='text-align:center;font-size:20px;font-weight:normal;margin-top:10px;'>Price (฿.  ".$row['pet_rate'].")</h1>
				</a></li>
			</ul>";
		
		endwhile;
	


echo"</div>";

?>
</body>
</html>