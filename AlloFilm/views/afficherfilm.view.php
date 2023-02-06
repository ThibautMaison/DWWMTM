<?php 
ob_start()?>
            <div class="container px-4 px-lg-5 p-5">
                <div class="row gx-4 gx-lg-5 align-items-center p-5">
                    <div class="col-md-6 p-5"><img class="card-img-top mb-5 mb-md-0 rounded btn-outline-light" src="<?=URL ?>public/images/<?= $film->getImage() ?>" alt="..." /></div>
                    <div class="col-md-6 p-5">
                        <h1 class="display-5 text-white text-uppercase fw-bolder"><?= $film->getName() ?></h1>
                        <div class="fs-5 mb-4">
                            <span class="text-white"><?= $film->getPrix() ?>$/mois</span>
                        </div>
                        <p class="lead text-white mb-5"><?= $film->getDescription() ?></p>
                        <div class="d-flex">
                            <a href="<?= $film->getLien() ?>"><button class="btn btn-outline-light flex-shrink-0 p-3" type="button">
                            COMMENCER A LOUER
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>

<?php
    $Name=$film->getName();
    $content=ob_get_clean();
    require "template.php";
?>