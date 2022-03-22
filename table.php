
<?php

include'conn.php';

if(isset($_GET['id']))
{

    $id=$_GET['id'];
        $delete=mysqli_query($conn,"DELETE FROM crud1 WHERE id='$id'");
        if($delete){
    header("location:table.php");
    die();
    }

}


?>











<!doctypehtml>
<html>
    <head>
        <title>
            fetch table
        </title>
    </head>
    <body>
        
    <div style="width: 50%;margin: 0 auto;border: 2px double #ff0000;background-color: white;box-shadow: 1px 1px 10px 1px;display:justify">

    <h2 align="center">check records</h2>
        <table border="1 "style="padding: 20px;text-align: center;" >
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>operation</th>
               
            </tr>
            <?php

include'conn.php';

$select=mysqli_query($conn,"SELECT * FROM crud1");
$num=mysqli_num_rows($select);
if($num>0)
{
    while($result=mysqli_fetch_assoc($select))
    {
        echo "
        <tr>
        
        <td>".$result['id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>
       <button> <a href='?id=".$result['id']."'>delete</a></button>
       <button> <a href='crudd.php ?id=".$result['id']."'>edit/update</a> </button>
        
        
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
