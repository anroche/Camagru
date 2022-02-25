<?php

require('Models/frontend.php');

function home()
{
    $posts = getPosts();

    require('Views/Frontend/homeView.php');
}


function test()
{
    // $post = getPost($_GET['action']);
    // $comments = getComments($_GET['id']);

    require('Views/Frontend/postView.php');
}

?>