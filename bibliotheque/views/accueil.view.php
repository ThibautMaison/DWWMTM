<?php 
session_start();
ob_start();

?>
<div class="content" style="margin-bottom: 200px;margin-top: 200px;">
	<div class="content__text">
		<h1 class="content__h1">TAIIZERR</h1>
		<h2 class="content__h2">Bienvenue sur mon site !
        Retrouvez mes conseils pour le meilleur matériel et le forum pour vous aider et échanger librement.</h2>
	</div>

	<div class="main__imgs">
		<img class="main-img" src="/public/Accueil/Daco_5738059.png" alt="main">
	</div>
</div>

<?php
$content=ob_get_clean();
$Name="Page Accueil";
require "template.php";
?>