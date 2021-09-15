<!DOCTYPE html>
<html>
<head>
	<title> Adugle Search </title>

	<link rel="shortcut icon" type="image/x-icon" href="bg/adugle2.png"/>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		.result
		{	
			margin-left: 10%; 
			margin-right: 40%;
			margin-top: 15px;
		}
		.form-control{
			border-radius: 20px;
			border:.5px solid grey;
			width: 40%;
			height: 45px;
		}
		.form-control:hover{
			width: 42%;
			transition: 0.25s;
			;
		}

		.btn{
			border-radius: 20px;
			border:1px solid grey;
			margin-bottom: 5px;	
			height: 40px;
		}
		

	</style>

</head>

<body>

	<form name="search_box" action="result.php" method="get" class="">
		 <center>
			<a href="index.php"><img src="bg/adugle3.png" style="width:18%; margin-top: 10px"> </a>
		</center>

		<center>
			<input type="text" class="form-control d-inline" name="search" placeholder="Search the Web">
			
			<input type="submit" class="btn d-inline btn-outline-secondary " name="search_button" value="Go">
			
	    </center>
		
	</form>  
	

	<!--
	<form class="form-inline" style="margin-top: 10px;background: grey">
	  	<div class="">
	    	<img src="bg/adugle2.png" style="width:20%;"> 
	 	</div>

	  	<div>

	  		<input type="text" class="form-control" name="search" placeholder="Search the Web" required style="width:70%;">
		  
	 	</div>
	    <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
    </form>-->
	

	<div class="result">
		<table style="margin-right: 50%">
			<tr>
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

		    		if(isset($_GET['search_button']))
		    		{
		    			$search = $_GET['search'];

		    			if($search =="")
		    			{
		    				echo "<center> <b> Please Write Something In Search Box </b> </center>";
		    				exit();
		    			}

		    			$sql = " SELECT * FROM website WHERE site_key LIKE '%$search%'limit 0,4";

		    			$rs = mysqli_query($conn,$sql);

		    			if(mysqli_num_rows($rs)==0)
		    			{
		    				echo " <img src='bg/error1.jpg' width='100%'>";
		    				exit();
		    			}

		    			echo "<font size='+1' color='#00008B'> Images for <i> $search </i> </font>";

			    		while($row = mysqli_fetch_array($rs))
			    		{
			    		echo 	"<td>    							
			    					<table style='margin-top:15px;'>
			    						<tr>
			    							<td>
			    								<a target='_blank' href='images.php'> <img src='img/$row[5]' height='90px'></a>
			    							</td>
			    						</tr>
			    					</table>
			    				</td>";
			    		}
		    		}

            	
				?>

			</tr>
		</table>

		<?php

			echo "<a target='_blank' href='images.php'> <font size='+1' color='#00008b'> More Images for $search </font></a>";

			echo "<hr>";

			$sql1 = " SELECT * FROM website WHERE site_key LIKE '%$search%'";

			$rs1 = mysqli_query($conn,$sql1);

			while($row1 = mysqli_fetch_array($rs1))
			{

				echo "<h5><a href='$row1[2]'> <font color='#000099'>  $row1[1] </font> </a> </h5>";

				echo "<a href='$row1[2]'> <font size='2' color=' #00cc00'>  $row1[2]  </font> </a> <br>";

				echo "<font size='3' color='#4d4d33'> $row1[4]  </font><br><br>";

			}

		?>

	</div>

	<!-------------------------- Footer starting----------------------------------->
	<footer class="page-footer font-small special-color-dark pt-4" style="background: #e6e6e6 ">

	  <!-- Copyright -->
	  <div class="footer-copyright text-center py-3">© 2020 Copyright:
	    <a href="index.php" class="nav-link"> www.Adugle.com</a>
	    <h5> aduglesearch@gmail.com</h5>
	  </div>
	  <!-- Copyright -->

	</footer>
	<!----------------------------- Footer Ending -------------------------------->

	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>