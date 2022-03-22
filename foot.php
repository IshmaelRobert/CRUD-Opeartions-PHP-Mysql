<?php
echo'test two ';
$stringone ='my email is ';
$stringTwo='rotichrobert36@gmail.com ';

echo $stringOne.$stringTwo;

$name = 'fRTYank';
//echo 'my name is '.$name;
echo strlen($name);
echo strtoupper($name);
echo strtolower($name);
echo str_replace('f','z',$name);

//$id=3;
//$vm=8;
//$mv=10;
//$sm=4;
//$ms=4
//$cho =id*ms;
//echo $cho;
$peopleone=['frank','edu','vinny','mum','uncle'];
echo $peopleone[2];
$peopletwo=array('mike','francis','ken','ann','mutweri');
echo $peopletwo[3];
$ages=[34,78,80,90,76];
print_r($ages);
echo $ages[3];
$ages[1]=60;
print_r($ages);
$ages[]=80;
print_r($ages); 
array_push($ages,90);
print_r($ages);
?>
<!doctype html>
<html>
<head>
<title>
PHP
</title>
</head>
<body>
   
   <div><?php echo 'my name is $name \"whaa\"';?></div>
</body>
</html>