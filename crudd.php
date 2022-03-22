<?php
include "conn.php";
//$msg="";
$name="";
$email="";
$nationality="";
$occupation="";
$residence="";
$hobby="";
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$select=mysqli_query($conn,"SELECT * FROM `customers` WHERE id='$id'");
	$data=mysqli_fetch_assoc($select);
	$name=$data['name'];
	$email=$data['email'];
	$nationality=$data['nationality'];
	$occupation=$data['occupation'];
	$residence=$data['residence'];
	$hobby=$data['hobby'];

}



if(isset($_POST['sub'])){
	$name=$_POST['username'];
	$email=$_POST['email'];
	$nationality=$_POST['nationality'];
	$occupation=$_POST['occupation'];
	$residence=$_POST['residence'];
	$hobby=$_POST['hobby'];
	if(isset($_GET['id'])){
		$update=mysqli_query($conn,"UPDATE `customers` SET 
		`name`='$name',`email`='$email',
		`nationality`='$nationality',`occupation`='$occupation'
		,`residence`='	$residence',`hobby`='$hobby' WHERE id='$id'");
		
	
		if($update){
			header ("location:tablee.php");//$msg="data updated successfully!!";
		}else{
			
			header ("location:tablee.php");
			
		}
	
		}

	$insert=mysqli_query($conn,"INSERT INTO `customers`(`name`,
			`email`, `nationality`, `occupation`, `residence`, `hobby`)
			VALUES ('$name','$email','$nationality',
			'$occupation','$residence','$hobby')");
			if($insert){
				header ("location:tablee.php");//$msg="data inserted succeful!!!";
			}else{
			   $msg="an error was encountered!!!";
			}

	
		
	

	
}

?>
<?php
include "conn.php";




?>

<!DOCTYPEhtml>

<html>
<head>
<title>revision</title>
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
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <style>
	*{padding:0;margin:0;box-sizing:border-box;font-family:'verdana',san serif;}
	body{width:100%;height:100vh;display:flex;justify-content:center;align-items:center;
	background-color:#5d6d7d;}.container{
		max-width:500px;width: 100%;background-color:#ffff;
	}
	.container form{width:100%;padding:30px;}.container form .sub-btn{
		width:100%;padding:10px 30px;background-color:red;color:white;font-size:1em;
		outline:none;
	} .container form .data-insert{
		width:100%;padding:12px 10px;outline:none;border:1px solid #111;margin:8px 0px;
	}
	</style>
	
</head>
<body>
	<div class="container">
	<a href="tablee.php"><button class="btn btn-info text-white my-4️⃣"style="margin:20px;">VIEW CUSTOMER'S RECORDS</button></a> 

	<form action=""method="post">
	<label for="username">USERNAME:</label><br />
	<input type="text"name="username"placeholder="username"class="data-insert"required value="<?php echo $name;?>"><br />
	<label for="email">EMAIL:</label><br />
	<input type="email" value="<?php echo $email;?>"name="email"placeholder="email"class="data-insert"required><br />
	<label for="nationality">NATIONALITY:</label><br />
	<input type="text"value="<?php echo $nationality;?>"name="nationality"placeholder="nationality"class="data-insert"required><br />
	<label for="occupation">OCCUPATION:</label><br />
	<input type="text"value="<?php echo $occupation;?>"name="occupation"placeholder="occupation"class="data-insert"required><br />
	<label for="residence">RESIDENCE:</label><br />
	<input type="text"value="<?php echo $residence;?>"name="residence"placeholder="residence"class="data-insert"required><br />
	<label for="hobby">HOBBY:</label><br />
	<input type="text"value="<?php echo $hobby;?>"name="hobby"placeholder="hobby"class="data-insert"required><br />
	<input type="submit"name="sub"value="submit"class="sub-btn">
	
	
	<span> <?php //echo $msg;?></span>
	</form>
	
	</div>
</body>
</html>
