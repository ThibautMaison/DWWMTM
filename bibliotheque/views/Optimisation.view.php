<?php
session_start();
ob_start();
$Name="OPTIMISATION";
require "Titre.view.php"?>

<div class="content" style="margin-bottom: 200px;margin-top: 200px;">
	<div class="content__text">
		<h1 class="content__h1">COMING SOON !!!</h1>

	</div>


<?php
$content=ob_get_clean();
require "template.php";
?>