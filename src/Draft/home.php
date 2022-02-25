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
	<?php include "assembly.php" ?>
	<?php include "footer.php" ?>
</body>
</html>
