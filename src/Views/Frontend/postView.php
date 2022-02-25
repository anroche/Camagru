<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<h1>PAGE 2</h1>
<p>Derniers billets du blog :</p>
<?php $data = $posts; ?>
<div> data : <?= $data ?> test</div>

<?php $posts->closeCursor(); ?>
<!-- <?php $content = ob_get_clean(); ?> -->

<?php require('template.php'); ?>
