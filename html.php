<?php
include "crud3con.php";
$msg="";

	if(isset($_POST['insert'])){
	$insert=mysqli_query($conn,"INSERT INTO `crud3` VALUES(null,'$_POST[name]',
	'$_POST[email]','$_POST[location]',
	'$_POST[occupation]','$_POST[investment]','$_POST[date]','$_POST[time]')");
	if($insert){
		header ("location:htmlt.php");
		//$msg="data inserted succefully!!";
	}else{
		$msg="data not inserted!!";
	}
	
	}
	
	
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<title>foobar</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="jquerylib/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="boot/css/bootstrap.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
        <script type="text/javascript" src="boot/js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
	<style>
	fieldset{width:70%;background-color:aqua;}label{margin:20px;}
	#form{align:center;margin-left:30%;margin-top:5%;}input{width:80%;padding:10px;margin:10px;}.sub{width:20%;}
	</style>
	<body>
	<div id="form"class="container mb-3 my-6">
	<a href="htmlt.php"><button class="btn btn-danger text-white">VIEW CUSTOMER'S DETAILS</button></a>
	<form action=""method="post">
	<fieldset>
	<label for="username">USERNAME:</label><br >
	<input type="text"name="name"placeholder="username"><br />
	<label for="email">EMAIL:</label><br >
	<input type="email"name="email"placeholder="email"><br />
	<label for="location">LOCATION:</label><br >
	<input type="text"name="location"placeholder="location"><br />
	<label for="occupation">OCCUPATION:</label><br >
	<input type="text"name="occupation"placeholder="occupation"><br />
	<label for="investment">INVESTMENTS:</label><br >
	<input type="text"name="investment"placeholder="investment"><br /><br />
	<label for="date">DATE:</label><br >
	<input type="date"name="date"placeholder="date"><br /><br />
	<label for="time">TIME:</label><br >
	<input type="time"name="time"placeholder="time"><br /><br />
	<span><?php echo $msg;?></span><br />
	<input  class="sub btn btn-warning"type="submit"name="insert"value="INSERT">
	
	
	<br /><br />
	</fieldset>

	</form>
	</div><br /><br />
	
		<div>foobar</div>
		
	</body>
</html>
