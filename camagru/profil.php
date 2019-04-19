<?php
session_start();

if (empty($_SESSION['login'])) {
  header('Location: index.php');
}
else
	include "header.php"
?>

<!DOCTYPE html>
<html>

<head>
	<title>FT_CAMAGRU !</title>
	<link rel="stylesheet" type="text/css" href="camagru.css">
</head>

<body>
	<table  id="btn">
		<form action="modification.php" method="post">
		<tr><td>Modification</td></tr>
 	 	<tr><td>Login</td><td><input type="text" name="login" value="login"></td></tr>
  		<tr><td>Password</td><td><input type="password" name="PW1" value="password"></td></tr>
  		<tr><td>Mail</td><td><input type="mail" name="mail" value="mail"></td></tr>
  		<tr><td><input type="submit" name="OK" value="OK"><td></tr>

		</form> 
	</table>

	<?php include "footer.php" ?>
</body>
</html>
