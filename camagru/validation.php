<?php

require_once('./db.php');

if($code_activation == '1') // Si le compte est déjà actif on prévient
{
   echo "Votre compte est déjà actif !";
}
else
{
    if($cle == $code_activation) // On compare nos deux clés	
    {
       // Si elles correspondent on active le compte !	
       echo "Votre compte a bien été activé !";

       // La requête qui va passer notre champ actif de 0 à 1
       
    }
  else // Si les deux clés sont différentes on provoque une erreur...
    {
       echo "Erreur ! Votre compte ne peut être activé...";
    }
}
?>