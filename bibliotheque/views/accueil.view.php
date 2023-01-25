<?php 
ob_start();

?>
<div class="col-10 mx-auto d-flex align-items-center text-white" >
	<div class="">
		<h1 class="text-white text-uppercase mb-5 fw-bold fst-italic d-flex justify-content-center " style="font-size: 100px;">TAIIZERR</h1>
		<h2 class="text-white mb-5 fs-3 text-center">Bienvenue sur shop-TAIIZERR.fr !
        Retrouvez mes conseils pour le meilleur matériel et le forum pour vous aider et échanger librement.</h2>
	</div>
		<img class="mt-5" src="/public/Accueil/Daco_5738059.png" alt="main">
</div>
<?php
$content=ob_get_clean();
$Name="Page Accueil";
require "template.php";
?>