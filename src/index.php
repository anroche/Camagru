<?php
require('Controllers/frontend.php');

try {
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'accueil') {
            home();
        } elseif ($_GET['page'] == 'test') {
            test();
        } else {
            home();
        }
    } else {
        home();
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
