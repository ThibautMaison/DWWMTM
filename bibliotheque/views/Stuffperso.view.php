<?php
ob_start();
?><div class="col-10 mx-auto d-flex align-items-center justify-content-evenly text-white mt-5">
<div class="me-5">
    <h1 class="text-white text-uppercase fw-bold mb-5 fst-italic d-flex justify-content-center" style="font-size: 100px;">Stuff perso</h1>
    <h2 class="text-white my-5 fs-3 text-center">Trouvez tous mes conseils pour vous équiper le mieux possible.
        Je ne propose que des produits de très grande qualité et prévus pour durer dans le temps.
        Je précise que je suis totalement transparent dans le choix des marques.
        Vous pouvez faire vos choix en toute confiance !</h2>
</div>
<img class="" src="/public/Accueil/Frame 2.png" alt="main" style="width: 600px;">
</div>
<div class="d-flex align-items-start justify-content-evenly mx-5" >
    <div class="d-flex gap-4 flex-column w-25 mx-5" style="margin-left: 200px;">
        <div class="card border-primary border-3 mx-3" style="background-color: #c7c7c7;" >
            <h3 class="mt-4 mb-2 gap-2 d-flex justify-content-center text-uppercase fs-2 fw-bold">Produits</h3>
            <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique">Tous les produits</a>
            <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/ordinateur">Ordinateur</a>
            <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/ecran">Ecrans</a>
            <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/clavier">Claviers</a>
            <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/souris">Souris</a>
            <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/casque">Casques</a>
            <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/tapisdesouris">Tapis de souris</a>
            <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/chaise">Chaise</a>
            <a class="btn rounded text-dark col-10 mx-auto my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/accessoire">Accessoires</a>
        </div>
        <div class="card border-primary border-3 mx-3" style="background-color: #c7c7c7;">
            <p class="mt-4 mb-2 mx-4 gap-2 d-flex text-center fw-semibold fst-italic">Découvrez ce que j'utilise comme matériel au quotidien</p>
            <a class="btn btn-dark rounded-pill text-white mt-2 mb-4 mx-5 d-flex justify-content-center text-uppercase fs-5 fw-bold" href="<?= URL ?>Boutique/stuffperso">mon stuff</a>
        </div>
    </div>

    <div class="d-flex flex-wrap w-75 mt-5">
        <?php
        for ($i = 0; $i < count($Boutique); $i++) : ?>
            <a href="<?= URL ?>Boutique/l/<?= $Boutique[$i]->getId() ?>" class="link-dark">
                <div class="d-grid ms-4 mb-4 ">
                    <div class="card mx-auto bg-white">
                        <div style="background-color: #c7c7c7;">
                        <img src="/public/images/<?= $Boutique[$i]->getImage() ?>" class=" d-grid gap-2 d-flex justify-content-center services-list my-3 mx-3" style="height: 200px;width: 220px;">
                    </div>
                        <h5 class=" d-grid gap-2 mx-auto d-flex justify-content-center my-3"><?= $Boutique[$i]->getName() ?></h5>
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
