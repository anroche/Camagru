<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>FT_CAMAGRU !</title>
	<link rel="stylesheet" type="text/css" href="camagru.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/d/d4/Icone_appareil_photo.svg" />

</head>

<body>
<?php
 if (isset($_SESSION['login'])) {
   header('Location: home.php');
 }
 else
 	include "header.php"
 ?>
	<table  id="btn">
		<form action="connexion.php" method="post">
		<tr><td>Connexion<?php getenv("MYSQL_HOST"); ?></td></tr>
 	 	<tr><td>login</td><td><input type="text" name="login" value="login"></td></tr>
  		<tr><td>password</td><td><input type="password" name="password" value="password"></td></tr>
  		<tr><td><input type="submit" name="OK" value="OK"><td></tr>
		</form>
	</table>
<br>
	<table  id="btn">
		<form action="inscription.php" method="post">
		<tr><td>Inscription</td></tr>
 	 	<tr><td>Login</td><td><input type="text" name="login" value="login"></td></tr>
  		<tr><td>Password</td><td><input type="password" name="PW1" value="password"></td></tr>
  		<tr><td>Mail</td><td><input type="mail" name="mail" value="mail"></td></tr>
  		<tr><td><input type="submit" name="OK" value="OK"><td></tr>
		</form>
	</table>
	<?php include "footer.php" ?>
</body>
</html>
