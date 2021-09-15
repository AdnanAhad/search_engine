<!DOCTYPE html>
<html>
<head>
	<title> Images </title>

	<link rel="shortcut icon" type="image/x-icon" href="bg/adugle2.png"/>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>	

	<div class="container-fluid">
		<?php

				

				$localhost = "localhost"; #localhost
				$dbusername = "root"; #username of phpmyadmin
				$dbpassword = "";  #password of phpmyadmin
				$dbname = "search";  #database name
				 
				#connection string
				$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

				

				$sql = " SELECT * FROM website";

		    	$rs = mysqli_query($conn,$sql);

		    	while($row = mysqli_fetch_array($rs))
			    {
			    	echo "<a href='img/$row[5]' download> <img src= 'img/$row[5]' height='200px' style='margin-top:15px'></a> &nbsp;&nbsp;&nbsp;&nbsp;";
			    }
		?>
		
	</div>

	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>





