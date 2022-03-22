

<!DOCTYPE html>
<html>
	<head>
		<title>foobar</title>
	</head>
	<body>
		<?php
		
		require_once'connect2.php';
		?>
		<?php
		
		$mysqli=new mysqli('localhost','root','','crudoperation') or die(mysqli_error($mysqli));
		$result=$mysqli->query("SELECT * FROM operation") or die($mysqli->error);
		pre_r($result);
		pre_r($result->fetch_assoc());
		pre_r($result->fetch_assoc());
		pre_r($result->fetch_assoc());
		pre_r($result->fetch_assoc());
		pre_r($result->fetch_assoc());
		function pre_r($array)
		{

			echo "<pre>";
			print_r($array);
			echo "</pre>";
		}
		
		
		?>
		
		
		<form method="post"action="connect2.php">
			<legend>user registration form</legend>
			<label for="username">username:</label><br />
			<input type="text"name="username"placeholder="username"><br />
			<label for="username">useremail:</label><br />
			<input type="email"name="email"placeholder="useremail"><br />

			

			<label for="password">password:</label><br />
			<input type="password"name="password"placeholder="userpassword"><br />
			<input type="submit"name="save"value="submit"style="background-color:green;padding:10px">
			
		</form>
		
	</body>
</html>
