<?php 
ob_start();

?>
<div class="col-10 mx-auto d-flex align-items-center justify-content-evenly text-white my-5" style="margin: 150px">
	<div class="text-center">
		<h1 class="text-white text-uppercase fw-bold" style="font-size: 100px;">TAIIZERR</h1>
		<h2 class="text-white my-5 mx-5">Bienvenue sur shop.TAIIZERR.fr !
        Retrouvez mes conseils pour le meilleur matériel et le forum pour vous aider et échanger librement.</h2>
	</div>
		<img class="main-img" src="/public/Accueil/Daco_5738059.png" alt="main">
</div>

<?php
$content=ob_get_clean();
$Name="Page Accueil";
require "template.php";
?>