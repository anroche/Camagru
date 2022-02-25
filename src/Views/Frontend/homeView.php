<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
<?php include __DIR__ . "/../header.php" ?>
<h1>PAGE 1 :</h1>
<p>Derniers billets du blog :</p>

<?php  $test = $_GET['page'] ?>
<?php $data = $posts; ?>
<div> data : <?= $data[1] ?> test</div>
<div> test : <?= $test ?> /</div>
<?php include __DIR__ . "/../footer.php" ?>

<!-- <?php $posts->closeCursor(); ?> -->
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>