<!-- <?php
session_start();
?> -->
<div id="header" class="navbar">
</br>
	<a id="logo" href="home.php" title="APN"><img src="image/apn_logo.png" ></a>
	<a id="logo" href="gallerie.php" title="gallerie"><img src="image/gallery.png" ></a>
	<a id="logo" href="profil.php" title="profil"><img src="image/profil.png" ></a>
	<a id="logo" href="../../Controllers/deconnection.php" title="deconnection"><img src="image/logout.png" ></a>
	</br>
	<pre><?php print_r($_SESSION['login']);?></pre>
</div>
