<?php
session_start();
require_once('./db.php');
include "index.php";

$db = connect();
if (isset($_POST['login'], $_POST['PW1'], $_POST['mail'])){	
	try {
		$db->query("USE camagru_anroche;");

		$rq = $db->prepare("SELECT login, email FROM users WHERE login = ? OR email = ?");		
		$rq->execute(array($_POST['login'],$_POST['mail']));
		$r = $rq->fetchAll();
		if ($r) {
				?>
			<script language="javascript">
				alert("Login ou/et  mail deja utilisé, change enculé de gauchiste!!");
			</script>
				<?php
		}
		else { 

			if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
    		
			$req = $db->prepare("INSERT INTO users (login, password, email)VALUES (:login, :password, :email);");
			$test = $req->execute(array(':login' => $_POST['login'],
							':password' => hash('whirlpool', $_POST['PW1']),
							':email' => $_POST['mail']));
			$req->closeCursor();
			$message = "Wesh".$_POST['login']." !\nClique sur le lien !\nhttp://localhost:8080/ptojet/camagru/activation.php?hash=".$hashid."\n\------------- \n This is an automated email, please do not answer.";
			mail($_POST['mail'], 'Validation du compte Camagru', $message);
			?>
			<script language="javascript">
				alert("Check tes mails!");
			</script>
			<?php
			}
			else
			{
				?>
			<script language="javascript">
				alert("mail invalide sale fdp !!");
			</script>
				<?php
			}
		}
	}
	catch (Exception $e){
			echo($e);
			}
}
else{
	?>
			<script language="javascript">
				alert("Putain faut remplir tout les champs abrutits !!");
			</script>
			<?php
}
?>