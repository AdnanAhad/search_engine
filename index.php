<!DOCTYPE html>
<html>
<head>
	<title> Adugle </title>

	<link rel="shortcut icon" type="image/x-icon" href="bg/adugle2.png"/>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		
		.container{
			margin-top: 15%;
			width: 80%
		}
		.search{
			border-radius: 20px;
			height: 45px;
		}
		.btn{
			border-radius: 15px;
		}

	</style>

</head>

<body onload="ld()">

	<script>
		function ld()
		{
			document.search_box.search.focus();
		}
	</script>

	 <a class="nav-link fixed-top" href="dashboard.php" style="color: white;"> <b> Dashboard </b></a>
	 	
	<center>
		<div class="container fixed-top">
			<form name="search_box" action="result.php" method="get">
				<img src="bg/adugle3.png" style="width:30%;"> 	
				<input type="text" class="search form-control" name="search" placeholder="Search the Web" required style="width:60%; margin-top: 20px;">
				<input type="submit" class="btn btn-primary" name="search_button" value="Search" style="margin-top:15px;">
			</form>
		</div>
	</center>

	

		  	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
				    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			    </ol>
			    <div class="carousel-inner">
			      <div class="carousel-item active">
			        <img src="bg/search.jpg" class="d-block w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			        	<h5>Search World Wide Webs </h5>
			          	<p>Some say Adugle is God. Others say Adugle is Satan. But if they think Adugle is too powerful, remember that with search engines unlike other companies, all it takes is a single click to go to another search engine...</p>
			        </div>
			      </div>
			      <div class="carousel-item">
			        <img src="bg/explore.jpg" class="d-block w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h5> Explore World </h5>
			          <p> The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart...</p>
			        </div>
			      </div>
			      <div class="carousel-item">
			        <img src="bg/programming2.jpg" class="d-block w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h5> Learn New Things </h5>
			          <p> Never Stop Learning, Because Life Never Stops teachning... </p>
			        </div>
			      </div>
			    </div>
			    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			      <span class="carousel-control-next-icon" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
		 	</div>
		
	
	<script src="js/jquery-3.5.1.slim.min.js"></script>
	<script src="js/popper.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>