<?php


$mysqli=new mysqli('localhost','root','','crudoperation') or die(mysqli_error($mysqli));

if(isset($_POST['save']))
{

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $mysqli->query("INSERT INTO operation (username,email,password)VALUES('$username','$email','$password')") or die($mysqli->error);
}



?>
