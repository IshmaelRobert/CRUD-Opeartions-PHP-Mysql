<!DOCTYPEhtml>
<html>
<head>
<title>crude table</title>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
        <link rel="stylesheet" href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
            $('#example').DataTable();
        } );
        </script>
        <style>
            button{width:100%;}
        </style>
</head>
<body>
    <div class="container">
    <a href="html.php"><button class="btn btn-danger text-white">Add New Record</button></a>
    <table class="table table-striped  table-hover" id="example" >
    <tr class="bg-warning">
    <th>ID</th>
    <th>USERNAME</th>
    <th>EMAIL</th>
    <th>LOCATION</th>
    <th>OCCUPATION</th>
    <th>INVESTMENT</th>
    <th>DATE</th>
    <th>TIME</th>
    <th>EDIT </th>
    <th>DELETE</th>
    </tr>
    <?php
    include "crud3con.php";
    $res=mysqli_query($conn,"SELECT * FROM `crud3` ");
    while($row=mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>"; echo $row["id"];echo "</td>";
        echo "<td>"; echo $row["username"];echo "</td>";
        echo "<td>"; echo $row["email"];echo "</td>";
        echo "<td>"; echo $row["location"];echo "</td>";
        echo "<td>"; echo $row["occupation"];echo "</td>";
        echo "<td>"; echo $row["investment"];echo "</td>";
        echo "<td>"; echo $row["date"];echo "</td>";
        echo "<td>"; echo $row["time"];echo "</td>";
        echo "<td>";?><a href="edit.php?id=<?php echo $row['id'];?>"> <button type="button"class="btn btn-success">edit</button></a><?php echo "</td>";
        echo "<td>";?><a href="delete.php?id=<?php echo $row['id'];?>"> <button type="button"class="btn btn-danger">delete</button></a><?php echo "</td>";
        echo "</tr>";
    }
    
    ?>
    </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</body>
</html>