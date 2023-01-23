<?php
ob_start();
?><div class="col-10 mx-auto d-flex align-items-center justify-content-evenly text-white my-5">
    <div class="">
        <h1 class="text-white text-uppercase fw-bold my-5 fst-italic" style="font-size: 100px;">Boutique</h1>
        <h2 class="text-white my-5 fs-3">Trouvez tous mes conseils pour vous équiper le mieux possible.
            Je ne propose que des produits de très grande qualité et prévus pour durer dans le temps.
            Je précise que je suis totalement transparent dans le choix des marques.
            Vous pouvez faire vos choix en toute confiance !</h2>
    </div>
    <img class="mb-5" src="/public/Accueil/Frame 2.png" alt="main" style="width: 600px;">
</div>
<?php
if (isset($_SESSION['Pseudo'])) {
    if (($_SESSION['Role']) == 1) { ?>
        <div class="d-grid gap-2 col-6 mx-auto mt-5">
            <a href="<?= URL ?>Boutique/a" class="btn btn-success">Ajouter</a>
        </div>
<?php }
} else {
} ?>
<div class="d-flex align-items-start justify-content-evenly mt-5 mx-5" >
    <div class="d-flex gap-4 flex-column w-25 mx-5" style="margin-left: 200px;">
        <div class="card border-primary border-3 mx-3" style="background-color: #c7c7c7;" >
            <h3 class="mt-4 mb-2 gap-2 d-flex justify-content-center text-uppercase fs-2 fw-bold">Produits</h3>
            <a class="btn rounded text-dark my-2 col-10 mx-auto gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique">Tous les produits</a>
            <a class="btn btn-dark rounded col-10 mx-auto text-white my-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/ordinateur">Ordinateur</a>
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
            <a class="btn btn-primary rounded-pill text-white border-primary mt-2 mb-4 mx-5 d-flex justify-content-center text-uppercase fs-5 fw-bold" href="<?= URL ?>Boutique/stuffperso">mon stuff</a>
        </div>
    </div>

<div class="d-flex flex-wrap w-75 mt-5">
        <?php
        for ($i = 0; $i < count($Boutique); $i++) : ?>
        <a href="<?=$Boutique[$i]->getLien()?>">
            <div class="d-grid ms-2 mb-2" >
                <div class="card mx-auto" style="background-color: #c7c7c7;">
                    <img src="/public/images/<?= $Boutique[$i]->getImage() ?>" class=" d-grid gap-2 mx-3 d-flex justify-content-center mt-4" style="height: 200px;width: 200px;">
                    <h5 class="mb-2 d-grid gap-2 mx-auto d-flex justify-content-center <?= $Boutique[$i]->getId() ?>"><?= $Boutique[$i]->getName() ?></h5>
                    <?php
                        if (isset($_SESSION['Pseudo'])) {
                            if (($_SESSION['Role']) == 1) { ?>
                                <div class="d-flex justify-content-center gap-2">
                                    <form action="<?= URL ?>Boutique/m/<?= $Boutique[$i]->getId() ?>" method="POST">
                                        <button class="btn btn-warning mx-auto d-flex justify-content-center" type="submit">Modifier</button>
                                    </form>
                                    <form action="<?= URL ?>Boutique/s/<?= $Boutique[$i]->getId() ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le produit ?')" method="POST">
                                        <button class="btn btn-danger mx-auto d-flex justify-content-center" type="submit">Supprimer</button>
                                    </form>
                                </div>
                        <?php }
                        } else {
                        } ?>
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