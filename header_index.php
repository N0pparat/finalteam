<!DOCTYPE html>
<html>
<head>
<style>
*{margin:0%;}
#header{background:#EF7C8E;width:100%;height:150px;}
#header img{width:250px;height:150px;}
#header h1{text-align:center;margin-top:-150px;color:#F6E72D;}
#header ul li{float:right;margin-right:40px;font-size:24px;color:red;list-style-type:circle;margin-top:-20px;}
#header ul li a{color:#F6E72D;text-decoration:none;}
</style>
</head>
<body>
<div id="header">
	<a href="index.php"><img src="a2.gif" style="border:1px solid #000;"></a>
	<h1>Online Pet Shopping</h1>
	
	
	
	<ul><?php 
	include("db.php");
						
				
	if(!isset($_COOKIE['usernameget']))
				{
					echo"<li><a href='login_pet.php'>Login</a></li>
					<li><a href='newuser.php'>New user</a></li>";
				}
				
				if(isset($_COOKIE['usernameget']))
				{
					
					$query=$con->prepare("select *from newuser where username='".$_COOKIE['usernameget']."'");
						$query->execute();
				
						$row=$query->fetch();
						
						$query21=$con->prepare("select *from addcart where  user_id='".$row['id']."' order by 1 desc");
						$query21->execute();
						$rcount=$query21->rowCount();
					echo"<li><a href='logout.php'>Logout</a></li>
						<li><a href='myaccount.php'>Account</a></li>
							<li><a href='carttable.php'>Cart (<b style='color:yellow;'>$rcount</b>)</a></li>";
				}
				
				?>
				
	</ul>
	<?php
	if(isset($_COOKIE['usernameget']))
				{
						echo"<h2 style='border-radius:4px;padding:10px;float:right;margin-right:-310px;margin-top:35px;color:#fff;border:1px solid white;'>Welcome ".$_COOKIE['usernameget']."</h2>";
				}?>
				<form method="post">
		<input type="text" name="search1" required style="margin-left:300px;margin-top:30px;width:300px;height:40px;border-radius:4px;border:1px solid #425298;">
		<input type="submit" name="search" value="Search" style="position:relative;margin-left:610px;margin-top:-40px;width:70px;height:40px;border-radius:4px;border:1px solid #425298;background:#fff;color:#425298;">
	</form>
</div>
</body>
</html>
<?php

	if(isset($_POST['search']))
	{
		$keyword=$_POST['search1'];
		header("location:search.php?keyword=$keyword");
	}


?>