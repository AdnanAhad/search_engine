<!DOCTYPE html>
<html>
<head>
	<title> Our Search Engine </title>

	<link rel="shortcut icon" type="image/x-icon" href="bg/adugle2.png"/>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		body{
			background-image: url('bg/mesh.jpg'); 
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;		
		}
		
		label{
			color: white;	
		}
		h5{
			color: #e0ebeb;
		}

		.container{
			width: 60%;
			height: 50%;
			border: 0px solid black;
			margin-top: 5%;
			border-radius: 10px;
			
			
		}
		.form-control{
			border-radius: 10px;
		}
		.btn{
			border-radius: 10px;
		}
		.img{
			width: 30%;
			margin-bottom: 5px;
		}

	</style>

</head>

<body>

	<div class="container">

		<br>

		<center><a href="index.php"> <img class="img" src="bg/adugle3.png"> </a> </center>
		<center> <h5> <i> Enter Website Details </i> </h5> </center>
		
		<form action="insert_site.php" method="post" enctype="multipart/form-data">
			
			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" for="stitle"> <b> Site Title </b> </label>

					<div class="col-sm-10">
						<input type="text" name="s_title" class="form-control" id="stitle" placeholder="Enter Site Title" required>
					</div>

				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" for="slink"> <b> Site Link </b> </label>

					<div class="col-sm-10">
						<input type="text" name="s_link" class="form-control" id="slink" placeholder="Enter Site Link" required>
					</div>
				</div>				
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" for="skey"> <b> Site Keywords </b> </label>

					<div class="col-sm-10">
						<input type="text" name="s_key" class="form-control" id="skey" placeholder="Enter Site Keywords" required>
					</div>
				</div>				
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" for="sdes"> <b> Site Description </b> </label>

					<div class="col-sm-10">
						<textarea  class="form-control" name="s_des" id="sdes" placeholder="Enter Site Description" required></textarea>
					</div>
				</div>				
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" for="simg"> <b> Site Image </b> </label>

					<div class="col-sm-10">
						<input type="file" name="simg" class="form-control" required>

					</div>
				</div>				
			</div>

			<div class="form-group">
				<div class="row" style="margin-left:40%">
					<center>
						<input type="submit" class="btn btn-success" name="submit" value="Add Website">
						&nbsp;&nbsp;
						<input type="reset" class="btn btn-danger" name="cancel" value="Cancel">
					</center>
				</div>
			</div>

		</form>

	</div>

	

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
	 
	if (isset($_POST["submit"]))
	{
	    #retrieve file title
	    $s_title = addslashes($_POST["s_title"]); 
	    $s_link = addslashes($_POST["s_link"]);
	    $s_key = addslashes($_POST["s_key"]);
	    $s_des = addslashes($_POST["s_des"]);
	     
	   	#file name with a random number so that similar dont get replaced
	    $pname = rand(1000,10000)."-".$_FILES["simg"]["name"];
	 
		#temporary file name to store file
		$tname = $_FILES["simg"]["tmp_name"];
	   
	    #upload directory path
	    $uploads_dir = 'img';
	    #TO move the uploaded file to specific location
	    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
	 
	    #sql query to insert into database
	    $sql = "INSERT into website(site_title,site_link,site_key,site_des,site_img) VALUES('$s_title','$s_link','$s_key','$s_des','$pname')";
	 
	    if(mysqli_query($conn,$sql))
	    {
	 
	    	echo "<script> alert('Site Uploaded Succesfully') </script>";
	    }
	    else{
	        echo "<script> alert('Uploading Failed') </script>";
	    }
	}
 
 




	/*$con = mysqli_connect("localhost", "root","","search");

	if($con)
	{
		echo "<script> alert('success') </script>";
	}
	else
	{
		echo "<script> alert('Failed') </script>";	
	}


	//mysqli_select_db("search");

	if(isset($_POST["submit"]))
	{
	 	$s_title = $_POST["s_title"];
	 	$s_link = $_POST["s_link"];
	 	$s_key = $_POST["s_key"];
	 	$s_des = $_POST["s_des"];
	 	$file = $_FILES["simg"] //["name"];

	 	move_uploaded_file($file["temp_name"],"img/". $file["name"])
	 	

	 		
	 		$sql = "INSERT INTO website(site_title,site_link,site_key,site_des,site_img) VALUES('$s_title','$s_link','$s_key','$s_des','$_simg')";

	 		$rs = mysqli_query($con, $sql);

	 		if($rs)
	 		{
	 			echo "<script> alert('Site Uploaded Succesfully') </script>";
	 		}

	 		else
	 		{
	 			echo "<script> alert('Uploading Failed') </script>";
	 		}
	 }*/
	 

?>