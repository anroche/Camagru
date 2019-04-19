<?php
session_start();

if (empty($_SESSION['login'])) {
  header('Location: index.php');
}
else
  include "header.php"
?>

<!DOCTYPE html>
<html>

<head>
	<title>FT_CAMAGRU !</title>
	<link rel="stylesheet" type="text/css" href="camagru.css">
</head>

<body>
	<script src="webcam.js" charset="utf-8"></script>
    <article class="main">
    <div class="videobox">
  <video id="video"></video>
  <img id="image" height="640px" width="480px" style="display: none;"/>
  <div id="canvasvideo"></div>
    <br/>
     <br/>
      <button class="button" id="snap" onclick="javascript:Shot()">Prendre une photo</button>
    </br>
    </br>
    <input type='file' accept="image/*" onchange="readURL(this);" />
    <br/>
    <img id="image" height="640px" width="480px" style="display: none;"/>
  </div>
  </article>
  </br>
<div id="alcool">
  <form id="img_filter" ALIGN="CENTER">
  <label for="42" class="42">
    <input type="radio" name="img_filter" value="image/filtre/42.png" id="42" onchange="myimage('42')">
    <img class="img" src="image/filtre/42.png" height="128" width="128">
  </label>
  <label for="choupi" class="choupi">
    <input type="radio" name="img_filter" value="image/filtre/choupi.png" id="choupi" onchange="myimage('choupi')">
    <img class="img" src="image/filtre/choupi.png" height="128" width="128">
  </label>
  <label for="ah" class="ah">
    <input type="radio" name="img_filter" value="image/filtre/ah.png" id="ah" onchange="myimage('ah')">
    <img class="img" src="image/filtre/ah.png" height="128" width="128">
  </label>
  <label for="beer" class="beer">
    <input type="radio" name="img_filter" value="image/filtre/beer.png" id="beer" onchange="myimage('beer')">
    <img class="img" src="image/filtre/beer.png" height="128" width="128">
  </label>
  <label for="cuzu" class="cuzu">
    <input type="radio" name="img_filter" value="image/filtre/cuzu.png" id="cuzu" onchange="myimage('cuzu')">
    <img class="img" src="image/filtre/cuzu.png" height="128" width="128">
  </label>
  <label for="ballon" class="ballon">
    <input type="radio" name="img_filter" value="image/filtre/ballon.png" id="ballon" onchange="myimage('ballon')">
    <img class="img" src="image/filtre/ballon.png" height="128" width="128">
  </label>
  <label for="pillon" class="pillon">
    <input type="radio" name="img_filter" value="image/filtre/pillon.png" id="pillon" onchange="myimage('pillon')">
    <img class="img" src="image/filtre/pillon.png" height="128" width="128">
  </label>
  <label for="gasp" class="gasp">
    <input type="radio" name="img_filter" value="image/filtre/gasp.png" id="gasp" onchange="myimage('gasp')">
    <img class="img" src="image/filtre/gasp.png" height="128" width="128">
  </label>
  <label for="titus" class="titus">
    <input type="radio" name="img_filter" value="image/filtre/titus.png" id="titus" onchange="myimage('titus')">
    <img class="img" src="image/filtre/titus.png" height="128" width="128">
  </label>
  <label for="cbarbier" class="cbarbier">
    <input type="radio" name="img_filter" value="image/filtre/cbarbier.png" id="cbarbier" onchange="myimage('cbarbier')">
    <img class="img" src="image/filtre/cbarbier.png" height="128" width="128">
  </label>
  <label for="dguy" class="dguy">
    <input type="radio" name="img_filter" value="image/filtre/dguy.png" id="dguy" onchange="myimage('dguy')">
    <img class="img" src="image/filtre/dguy.png" height="128" width="128">
  </label>
  <label for="e2r5" class="e2r5">
    <input type="radio" name="img_filter" value="image/filtre/e2r5.png" id="e2r5" onchange="myimage('e2r5')">
    <img class="img" src="image/filtre/e2r5.png" height="128" width="128">
  </label>
   <label for="e2r5tv" class="e2r5tv">
    <input type="radio" name="img_filter" value="image/filtre/e2r5tv.png" id="e2r5tv" onchange="myimage('e2r5tv')">
    <img class="img" src="image/filtre/e2r5tv.png" height="128" width="128">
  </label>
   <label for="glan" class="glan">
    <input type="radio" name="img_filter" value="image/filtre/glan.png" id="glan" onchange="myimage('glan')">
    <img class="img" src="image/filtre/glan.png" height="128" width="128">
  </label>
   <label for="fgre" class="fgre">
    <input type="radio" name="img_filter" value="image/filtre/fgre.png" id="fgre" onchange="myimage('fgre')">
    <img class="img" src="image/filtre/fgre.png" height="128" width="128">
  </label>
   <label for="notraore" class="notraore">
    <input type="radio" name="img_filter" value="image/filtre/notraore.png" id="notraore" onchange="myimage('notraore')">
    <img class="img" src="image/filtre/notraore.png" height="128" width="128">
  </label>
  <label for="fmaury" class="fmaury">
    <input type="radio" name="img_filter" value="image/filtre/fmaury.png" id="fmaury" onchange="myimage('fmaury')">
    <img class="img" src="image/filtre/fmaury.png" height="128" width="128">
  </label>
      </form>
</div>
</br>
  <aside class="aside2">
    <h3>Aperçu</h3>
    <div id="scroll">
    <div class="videobox">
    <div id="canvas" class="biere"></div>
    <form method='post' accept-charset='utf-8' name='form'>
      <input name='img' id='img' type='hidden'/>
      <input name='user' id='user' type='hidden' value='<?=$_SESSION[login];?>'/>
    </form>
    </div>
  </div>
  </aside>

	<?php include "footer.php" ?>
</body>
</html>
