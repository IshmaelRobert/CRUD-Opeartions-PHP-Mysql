
<?php

include "connt.php";
$sql="SELECT * FROM `crud3`";
$query=mysqli_query($sql);


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
	<body>
    <div class="container"> 
        
        <table>
        <tr class="bg-danger text-white">
        <th>ID</th>
        <th>USERNAME</th>
        <th>EMAIL</th>
        <th>LOCATION</th>
        <th>OCCUPATION</th>
        
        </tr>
        <?php 
        include "connt.php";
        while($res=mysqli_fetch_array($query)){?>

        <tr>
        <td><?php echo $res["id"];?></td>
        <td><?php echo $res["username"];?></td>
        <td><?php echo $res["email"];?></td>
        <td><?php echo $res["location"];?></td>
        <td><?php echo $res["occupation"];?></td>
        </tr>

        <?php}?>
        
        
        </table>

       

    </div>
		<div>foobar</div>
	</body>
</html>
