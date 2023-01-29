<?php
ob_start();
?>
<section class="pt-7">
    <div class="container mt-5 ">
        <div class="row align-items-center mt-5">
            <div class="col-md-6 text-md-start text-center py-6 ">
                <h1 class="mb-4 fw-bold text-white text-uppercase text-center" style="font-size: 75px;">Casque</h1>
                <p class="mb-6 lead fs-4 text-white text-center">Trouvez tous mes conseils pour vous équiper le mieux possible.
                    Je ne propose que des produits de très grande qualité et prévus pour durer dans le temps.
                    Je précise que je suis totalement transparent dans le choix des marques.
                    Vous pouvez faire vos choix en toute confiance !</p>

            </div>
            <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="/public/Accueil/backTEST.png" alt="" style="width: 600px;" /></div>
        </div>
    </div>
</section>


<div id="target" class="container-fluid pt-5">
    <div class="row px-xl-3">
        <div class="col-lg-3 col-md-4">
            <div class="p-4 mb-30 rounded mx-5 " style="background-color: #c7c7c7;">
                <h3 class="mb-4 gap-2 d-flex justify-content-center text-uppercase fs-2 fw-bold">Produits</h3>
                <a class="btn btn-dark rounded d-flex justify-content-center rounded text-white my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique#target">Tous les produits</a>
                <a class="btn rounded text-dark d-flex justify-content-center my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/ordinateur#target">Ordinateur</a>
                <a class="btn rounded text-dark d-flex justify-content-center my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/ecran#target">Ecrans</a>
                <a class="btn rounded text-dark d-flex justify-content-center my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/clavier#target">Claviers</a>
                <a class="btn rounded text-dark d-flex justify-content-center my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/souris#target">Souris</a>
                <a class="btn rounded text-dark d-flex justify-content-center my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/casque#target">Casques</a>
                <a class="btn rounded text-dark d-flex justify-content-center my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/tapisdesouris#target">Tapis de souris</a>
                <a class="btn rounded text-dark d-flex justify-content-center my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/chaise#target">Chaise</a>
                <a class="btn rounded text-dark d-flex justify-content-center my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/accessoire#target">Accessoires</a>
            </div>

            <div class="p-4 mb-30 rounded mt-4 mx-5" style="background-color: #c7c7c7;">
                <p class="mb-4 gap-2 text-center fw-semibold fst-italic">Découvrez ce que j'utilise comme matériel au quotidien</p>
                <a class="btn btn-primary rounded-pill text-white border-primary mt-3 d-flex justify-content-center text-uppercase fs-5 fw-bold" href="<?= URL ?>Boutique/stuffperso">mon stuff</a>
            </div>
        </div>
        <div class="col py-3 container">
            <div class="d-flex flex-wrap w-100 mx-3">
                <?php
                for ($i = 0; $i < count($Boutique); $i++) : ?>
                    <a href="<?= URL ?>Boutique/l/<?= $Boutique[$i]->getId() ?>" class="link-dark text-decoration-none">
                        <div class="d-grid ms-4 mb-4">
                            <div class="card mx-auto bg-white ">
                                <div style="background-color: #c7c7c7;">
                                    <img src="/public/images/<?= $Boutique[$i]->getImage() ?>" class=" d-grid gap-2 d-flex justify-content-center services-list my-3 mx-3" style="height: 225px;width: 250px;">
                                </div>
                                <h5 class=" d-grid gap-2 mx-auto d-flex justify-content-center my-3 "><?= $Boutique[$i]->getName() ?></h5>
                                <h5 class=" d-grid gap-2 mx-auto d-flex justify-content-center mb-3"><?= $Boutique[$i]->getPrix() ?>€</h5>
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
