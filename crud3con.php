<?php

$conn=mysqli_connect("localhost","root","","crud3");
if($conn){
  // header ("location:html.php");  // 
  // echo "connection succeful";
}else{
    echo "an error was encountered";
}

?>