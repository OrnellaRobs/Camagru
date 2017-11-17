<?php
require 'inc/functions.php';
check_session();
logged_only();

?>
<?php require 'inc/header.php'; ?>
<h1>Bonjour <?= $_SESSION['auth']->name; ?></h1>
<form action="" method="POST">
	<div class="wrapper-filter-webcam">
		<label><input id="1" type="radio" name="filter" value="1" onClick="getFilter(1);"></label>
		<img src="images/donut.png" title="donut.png" width="60px"/>
		<label><input id="2" type="radio" name="filter" value="2" onClick="getFilter(2);"></label>
		<img src="images/pizza.png" title="pizza.png" width="80px"/>
		<label><input id="3" type="radio" name="filter" value="3" onClick="getFilter(3);"/></label>
		<img src="images/pow.png" title="pow.png" width="60px"/>
	<video id="video" class="webcam-live"></video>
	<button id="startbutton">Prendre une photo</button>
</div>
</form>
<canvas id="canvas" style="display:none;"></canvas>
<img src="http://placekitten.com/g/320/261" id="photo" alt="photo">
<script type="text/javascript" src="./webcam.js"></script>
<?php require 'inc/footer.php'; ?>