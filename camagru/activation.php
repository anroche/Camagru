<?php
#session_start();
require_once('./db.php');
$db = connect();

$db->query("USE camagru_anroche;");
$req = $db->prepare('SELECT active, code_activation FROM users WHERE 1');
$req->execute(array($_POST['active'],$_POST['code_activation']));
$ret = $req->fetchAll();


print_r ($ret);
echo $code_activation;
echo $_GET['code_activation'];


if($active == '1') // Si le compte est déjà actif on prévient
{
   echo "Votre compte est déjà actif !";
}
else
{        
   echo $_GET['cle'];
   echo $_GET['code_activation'];

    //if($cle == $code_activation) // On compare nos deux clés	
   // {
       // Si elles correspondent on active le compte !	
       //echo "Votre compte a bien été activé !";

       // La requête qui va passer notre champ actif de 0 à 1
       
    //}
 // else // Si les deux clés sont différentes on provoque une erreur...
  //  {
      // echo "Erreur ! Votre compte ne peut être activé...";
  //  }
}
?>