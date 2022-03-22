<?php
include "conn.php";
if(isset($_GET['id'])){
$id=$_GET['id'];
$delete=mysqli_query($conn,"DELETE FROM `customers` WHERE id='$id'");
if($delete)
{
    header ("location:tablee.php");
    die();
}
}

?>
<!DOCTYPEhtml>
<html>
<head>

<title>
revison crud
</title>
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
    button{background-color:red;color:white;border-radius:3px;color:white; }
    table{background-color:purple;border:2px solid red;}
    #redd{background-color:purple;}
    </style>
</head>
<body style="margin-top:50px;">

    <div class="container">
   <a href="crudd.php"><button class="btn btn-info text-white">ADD NEW RECORD</button></a> 
    <table class="table bg-info table-striped table-hover table-bordered table-hover">
    <tr class="bg-danger text-white">
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>NATIONALITY</th>
    <th>OCCUPATION</th>
    <th>RESIDENCE</th>
    <th>HOBBY</th>
    <th>OPERATIONS(delete/update)</th>

    </tr>
    <?php
    include "conn.php";
    $select=mysqli_query($conn,"SELECT * FROM `customers`");
    $num=mysqli_num_rows($select);
    if($num>0){
        while($result=mysqli_fetch_assoc($select)){
            echo "
            <tr>
            <td>".$result['id']."</td>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td>
            <td>".$result['nationality']."</td>
            <td>".$result['occupation']."</td>
            <td>".$result['residence']."</td>
            <td>".$result['hobby']."</td>
            <td>
            <a href='?id=".$result['id']."'><button id='red'>DELETE</button></a>
            <a href='crudd.php?id=".$result['id']."'><button id='redd'>EDIT/UPDATE</button></a>
            </td>
            
            </tr>
            
            
            ";
        }
    }
    
    
    ?>
    </table>
    </div>
</body>

</html>