<?php if(isset($_POST['addcart']))
{
	header("location:addtocart.php?id=".$row['pet_id']."");
		
}?>

<?php
	if(isset($_POST['insert_feedback']))
	{	

				if(isset($_COOKIE['usernameget']))
				{
					
					$query=$con->prepare("select *from newuser where username='".$_COOKIE['usernameget']."'");
						$query->execute();
				
						$row=$query->fetch();
						
						$userid=$row['id'];
						$pet_id=$_GET['id'];
						
						$desc=$_POST['desc'];
						$rating=$_POST['rating'];
						
						$feed_img=$_FILES['feedimg']['name'];
						$feed_img_temp=$_FILES['feedimg']['tmp_name'];								
						move_uploaded_file($feed_img_temp,"feedback/$feed_img");	
						
						$query=$con->prepare("insert into feedback(user_id,pet_id,rating,feed_desc,feed_img,feed_date)values('$userid','$pet_id','$rating','$desc','$feed_img',Now())");
						if($query->execute())
						{
						
							echo"<script>alert('Feedback inserted')</script>";
							echo"<script>window.open('viewdetails.php?id=".$_GET['id']."','_self')</script>";
						}
						else 
						{
							echo"<script>alert('Feedback not inserted')</script>";
						}
				}
				
				else
				{
					echo"<script>alert('!...Please login and Give feedback...!')</script>";
				}
		
	}


?>
<html>
<head>
<style>
#pet{margin-top:32%;}
#pet ul li{width:300px;height:350px;background:#fff;float:left;margin-top:30px;margin-left:20px;list-style-type:none;border:1px solid #000;border-radius:4px;}
#pet ul li a{text-decoration:none;color:#000;}
#pet1 ul li{width:300px;height:335px;background:red;float:left;margin-top:20px;margin-right:20px;list-style-type:none;border-radius:4px;}

#pet1 ul li img{width:300px;height:335px;border-radius:4px;}
#pet2 ul li{background:#fff;color:#400040;float:left;margin-top:10px;margin-right:20px;list-style-type:circle;font-size:24px;border:1px solid #400040;margin-left:20px;}

#feedback{border:2px solid #6495ED;width:400px;height:270px;background:#fff;margin-left:80px;margin-top:20px;border-radius:4px;}
#feedback textarea{margin-top:20px;margin-left:30px;width:250px;height:70px;border-radius:4px;}
#feedback input[type=file]{margin-top:20px;margin-left:30px;}
#feedback select{margin-top:20px;margin-left:30px;width:100px;height:40px;border-radius:4px;}
#feedback select option{padding:5px;}
#feedback input[type=submit]{margin-top:25px;margin-left:130px;padding:10px;border-radius:4px;background:#6495ED;color:#fff;border:1px solid #fff;}

#feedback input[type=submit]:hover{margin-top:25px;margin-left:130px;padding:10px;border-radius:4px;background:#fff;color:#6495ED;border:1px solid #6495ED;}

#img_container{width:800px;height:270px;background:#fff;margin-left:38%;margin-top:-270px;border:2px solid #6495ED;border-radius:4px;}
#img_container ul li{float:left;list-style-type:none;margin-right:50px;margin-top:10px;}


#review{margin-top:20px;width:91.5%;height:auto;background:#fff;margin-left:80px;border:2px solid #6495ED;border-radius:4px;}

#review ul{width:96%;height:190px;margin-top:10px;background:#fff;border-bottom:2px solid #6495ED;}
#review ul li{width:100%;list-style-type:none;}
</style>
</head>
<body>
<?php include("header_index.php");?> 

<?php if(isset($_GET['id']))
		{
			include("db.php");
			$id=$_GET['id'];
			$query=$con->prepare("select *from petdetails where pet_id='$id'");
			$query->execute();
			$row23=$query->rowCount();
			
			$row=$query->fetch();
			
		}?>
<form method="post">
<h1 style="margin-top:5px;width:95%;height:40px;line-height:40px;background:#6495ED;color:#fff;text-align:center;
margin-left:20px;padding-left:10px;border-radius:4px;border:1px solid aquamrine;"><?php echo"".$row['pet_name']."";?></h1>
		<div id="pet1">
			<ul>
				<li><a href="petphotos/<?php echo"".$row['pet_img1']."";?>"><img src="petphotos/<?php echo"".$row['pet_img1']."";?>"></a></li>
				
		
		</ul>
		</div><br>
		<div id="pet2">
		<ul>
		<li>Type:  <?php echo"".$row['pet_type']."";?></li>
				
		<li >Price:  <?php echo"".$row['pet_rate']." ???";?></li>
		
		<li >features:  <?php echo"".$row['pet_features1']."";?></li>
		
		<li >features:  <?php echo"".$row['pet_features2']."";?></li>
		<li style="margin-left:100px;margin-top:20px;"><a href="addtocart.php?id=<?php echo"".$row['pet_id']."";?>" 
		style="width:100px;height:40px;background:#87CEFA;color:#400040;border:4px solid #6495ED;text-decoration:#fff;padding:10px;">Addtocart</a></li>
		</ul>
			</form></div><br><br>
		<?php
		$query=$con->prepare("select *from petdetails where pet_type='".$row['pet_type']."' and pet_id!='".$row['pet_id']."' order by 1 desc LIMIT 0,5");
		$query->execute();
		echo"<div id='pet'>
		<h1 style='padding-left:10px;margin-left:60px;margin-top:20px;width:92%;background:#6495ED;color:#fff;
		text-align:left;height:40px;line-height:40px;font-size:23px;border-radius:4px;'>Relative</h1>";
		while($row1=$query->fetch()):
		
			echo"<ul>
				<li><a href='viewdetails.php?id=".$row1['pet_id']."'>
					<h1 style='text-align:center;'>".$row1['pet_name']."</h1>
					<img src='petphotos/".$row1['pet_img1']."' style='width:260px;height:250px;margin-left:20px;border-radius:4px;'>
					<h1 style='text-align:center;font-size:20px;font-weight:normal;margin-top:10px;'>Price (???.  ".$row1['pet_rate'].")</h1>
				</a></li>
			</ul>";
		
		endwhile;
	



	

		?>
		
		</div>
		
</body>
</html>
