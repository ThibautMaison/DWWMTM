<?php
ob_start();
?>
<div id="target" class="container-fluid pt-5">
	<div class="row px-xl-3">
		<div class="col-10 py-3 container">
			<div class="d-flex flex-wrap w-100 justify-content-center">
				<h1 class="mb-4 fw-bolder text-white text-uppercase text-center" style="font-size: 75px;">location</h1>
				<p class="mb-6 lead fs-4 text-white text-center">Trouvez tous mes conseils pour vous équiper le mieux possible.
					Je ne propose que des produits de très grande qualité et prévus pour durer dans le temps.
					Je précise que je suis totalement transparent dans le choix des marques.
					Vous pouvez faire vos choix en toute confiance !</p>
			</div>
		</div>
	</div>
</div>

<div id="target" class="container-fluid pt-5">
	<div class="row px-xl-3">
		<div class="col-10 py-3 container">
			<div class="d-flex flex-wrap w-100 justify-content-center">
				<?php
				for ($i = 0; $i < count($location); $i++) : ?>
					<a href="<?= URL ?>location/l/<?= $location[$i]->getId() ?>" class="link-dark text-decoration-none">
						<div class="d-grid ms-4 mb-4">
							<div class="card mx-auto bg-dark btn-outline-light zoom" style="transition: transform 0.5s ease;">
								<div>
									<img src="/public/images/<?= $location[$i]->getImage() ?>" class=" d-grid gap-2 d-flex justify-content-center services-list btn-outline-light" style="width: 250px;">
								</div>
								<h5 class=" d-grid gap-2 mx-auto d-flex justify-content-center my-3 text-uppercase fw-bolder text-light"><?= $location[$i]->getName() ?></h5>
							</div>
						</div>
					</a>
				<?php endfor ?>
			</div>
		</div>
	</div>
</div>
<?php
$content = ob_get_clean();
require "template.php";
?>