<?php
ob_start();

?>
<section class="pt-9">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 text-md-start text-center ">
				<h1 class="mb-4 fw-bold text-white text-uppercase text-center" style="font-size: 75px;">allofilm</h1>
				<p class="mb-6 lead fs-4 text-white text-center">Découvrez notre vaste sélection de films de tous genres. Louez en ligne à tout moment et en tout lieu. Profitez de la meilleure expérience de streaming à la demande.</p>

			</div>
			<div class="col-md-6 text-end mt-5"><img class="pt-7 pt-md-0 img-fluid" src="/public/images/BlackgroundAccueil.png" alt="" style="width: 650px;" /></div>
		</div>
	</div>
</section>
<?php
$content = ob_get_clean();
$Name = "Page Accueil";
require "template.php";
?>