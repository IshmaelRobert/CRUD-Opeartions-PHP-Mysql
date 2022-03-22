<?php
$connect=mysql_connect("localhost","root","") or 
die(mysql_error());
$con=mysql_select_db("crud3",$connect) or die(mysql_error());


?>