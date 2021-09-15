<!DOCTYPE html>
<html>
<head>
	<title> Adugle Admin </title>

	<link rel="shortcut icon" type="image/x-icon" href="bg/adugle2.png"/>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		input{
			margin-top: 20%;
			width: 150px;
		}
		input:hover{
			width: 200px;
			transition: 0.25s;
		}
		
	</style>

</head>
<body>
	<center>
		
		<a href="insert_site.php"><input type="submit" class="btn btn-success" name="add" value="Add Website"></a>
		
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
		<a href="delete.php"><input type="submit" class="btn btn-danger" name="add" value="Delete Website"></a><br><br>
		<a href="index.php" class="nav-link d-inline"><b> Go to Home </b> </a>
		
	</center>

	<script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
        if(isset($_POST['delete'])) 
        {
           	$dbhost = 'localhost:3036';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect:' . mysql_error());
            }
				
            $emp_id = $_POST['emp_id'];
            
            $sql = "DELETE FROM employee WHERE emp_id = $emp_id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted data successfully\n";
            
            mysql_close($conn);
        }
?>
