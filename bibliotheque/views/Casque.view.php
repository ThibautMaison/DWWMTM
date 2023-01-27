<?php
ob_start();
?><div class="col-10 mx-auto d-flex align-items-center justify-content-evenly text-white mt-5">
<div class="me-5">
    <h1 class="text-white text-uppercase fw-bold mb-5 fst-italic d-flex justify-content-center" style="font-size: 100px;">Boutique</h1>
    <h2 class="text-white my-5 fs-3 text-center">Trouvez tous mes conseils pour vous équiper le mieux possible.
        Je ne propose que des produits de très grande qualité et prévus pour durer dans le temps.
        Je précise que je suis totalement transparent dans le choix des marques.
        Vous pouvez faire vos choix en toute confiance !</h2>
</div>
<img class="" src="/public/Accueil/Frame 2.png" alt="main" style="width: 600px;">
</div>
<div id="target" class="d-flex col-10 mx-auto ">
<div class="d-flex gap-4 flex-column w-25 wrap me-3 mt-5">
    <div class="card border-primary border-3" style="background-color: #c7c7c7;">
        <h3 class="mt-4 mb-2 gap-2 d-flex justify-content-center text-uppercase fs-2 fw-bold">Produits</h3>
        <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique#target">Tous les produits</a>
        <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/ordinateur#target">Ordinateur</a>
        <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/ecran#target">Ecrans</a>
        <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/clavier#target">Claviers</a>
        <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/souris#target">Souris</a>
        <a class="btn btn-dark rounded col-10 mx-auto rounded text-white my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/casque#target">Casques</a>
        <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/tapisdesouris#target">Tapis de souris</a>
        <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/chaise#target">Chaise</a>
        <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/accessoire#target">Accessoires</a>
    </div>
    <div class="card border-primary border-3" style="background-color: #c7c7c7;">
        <p class="mt-4 mb-2 mx-4 gap-2 d-flex text-center fw-semibold fst-italic">Découvrez ce que j'utilise comme matériel au quotidien</p>
        <a class="btn btn-primary rounded-pill text-white border-primary mt-2 mb-4 mx-5 d-flex justify-content-center text-uppercase fs-5 fw-bold" href="<?= URL ?>Boutique/stuffperso">mon stuff</a>
    </div>
</div>
<div class="d-flex container flex-wrap  w-75 mt-5">
        <?php
        for ($i = 0; $i < count($Boutique); $i++) : ?>
            <a href="<?= URL ?>Boutique/l/<?= $Boutique[$i]->getId() ?>" class="link-dark text-decoration-none">
                <div class="d-grid ms-2 mb-2">
                    <div class="card mx-auto bg-white ">
                        <div style="background-color: #c7c7c7;">
                            <img src="/public/images/<?= $Boutique[$i]->getImage() ?>" class=" d-grid gap-2 d-flex justify-content-center services-list my-3 mx-3" style="height: 200px;width: 200px;">
                        </div>
                        <h5 class=" d-grid gap-2 mx-auto d-flex justify-content-center my-3 "><?= $Boutique[$i]->getName() ?></h5>
                        <h5 class=" d-grid gap-2 mx-auto d-flex justify-content-center mb-3"><?= $Boutique[$i]->getPrix() ?>€</h5>
                    </div>
                </div>
            </a>
        <?php endfor ?>
    </div>
</div>
<?php
$content = ob_get_clean();
require "template.php";
?>
