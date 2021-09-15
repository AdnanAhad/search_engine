<!DOCTYPE html>
<html>
<head>
	<title> Delete Website </title>

	<link rel="shortcut icon" type="image/x-icon" href="bg/adugle2.png"/>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		
		.container{
			margin-top: 20%;
			width: 80%
		}
		.form-control{
			border-radius: 20px;
			height: 45px;
		}
		.btn{
			border-radius: 15px;
		}

	</style>
</head>
<body>
	<center>
		<div class="container fixed-top">
			<form name="search_box" action="delete.php" method="post"> 
				<small><b> Enter Unique ID of Webite You Want To Delete</b> </small>	
				<input type="text" class="form-control" name="del_web" placeholder="Website ID"  style="width:40%; margin-top: 20px;">
				<input type="submit" class="btn btn-danger" name="delete_web" value="Delete" style="margin-top:15px;">
				&nbsp;
				<a href="index.php" class="nav-link d-inline"><b>Go to Home </b> </a>
			</form>
		</div>
	</center>

	<script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php

	$localhost = "localhost"; #localhost
	$dbusername = "root"; #username of phpmyadmin
	$dbpassword = "";  #password of phpmyadmin
	$dbname = "search";  #database name
					 
	#connection string
	$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

	/*if($conn)
					{
						echo "<script> alert('Connected') </script>";
					}
					else
					{
		        		echo "<script> alert('Not Connected') </script>";
		    		}*/
	if(isset($_POST['delete_web']))
	{
		$web = $_POST['del_web'];

		if($web =="")
		{
		    echo "<script> alert('Please Write Something In Search Box')</script>";
		   	exit();
		}
		$sql = "DELETE FROM website WHERE  id = $web";

		$run = mysqli_query($conn,$sql);

		if($run)
		{	
			echo "Website Deleted Successfully";
			echo "<script> alert('Website Deleted Successfully')</script>";
			exit();
		}
		else{
			echo "<script> alert('Semething Went Wrong ')</script>";
			exit();
		}
	}
?>
