<?php

function getPosts()
{
   $req = ["ANROCHE", "NINJA", "APERO"];
    return $req;
}


function signout ()
{
    session_start();
    session_destroy();
    // header('location: ../index.php');
    exit;
}
?>
