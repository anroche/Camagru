<?php
session_start();
require_once('./db.php');

$db = connect();
if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['password']) && !empty($_POST['password'])))
{
	$db->query("USE camagru_anroche;");
	$req = $db->prepare('SELECT id, login, password, active FROM users WHERE login = ?');
	$req->execute(array($_POST['login']));
	$req1 = $req->fetchAll();
	if (count($req1) === 0)
	{
		die("Aucun utilisateur n'a ce login");
	}
	else
	{
		if ($req1[0]['password'] === hash('whirlpool', $_POST['password']) && $req1[0]['active'] == '1')
		{
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['id'] = $req1[0]['id'];
			header('Location: home.php');
		}
		else
		{
			?>
			<script language="javascript">
				alert("Soit tu t'es trompé d'identifiant, soit t'as pas activé ton compte !");
			</script>
			<?php
		}
	}
}
else echo "identifiant incorrect";

?>