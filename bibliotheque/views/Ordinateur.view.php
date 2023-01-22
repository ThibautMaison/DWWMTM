<?php
ob_start();
?>
<div class="d-flex align-items-start justify-content-evenly mt-5 mx-5" >
    <div class="d-flex gap-4 flex-column w-25 mx-5" style="margin-left: 200px;">
        <div class="card border-primary border-3 mx-3">
            <h3 class="mt-4 mb-2 gap-2 d-flex justify-content-center text-uppercase fs-2 fw-bold">Produits</h3>
            <a class="btn btn-outline-light rounded text-dark border-white mt-4 mb-2 gap-2 fw-semibold fst-italic" href="<?= URL ?>Boutique/ordinateur">Ordinateur</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Ecrans</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Claviers</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Souris</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Casques</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Tapis de souris</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Chaise</a>
            <a class="btn btn-outline-light rounded text-dark border-white mt-2 mb-4 gap-2 fw-semibold" href="">Accessoires</a>
        </div>
        <div class="card border-primary border-3 mx-3">
            <p class="mt-4 mb-2 mx-4 gap-2 d-flex text-center fw-semibold fst-italic">Découvrez ce que j'utilise comme matériel au quotidien</p>
            <a class="btn btn-primary rounded-pill text-white border-primary mt-2 mb-4 mx-5 d-flex justify-content-center text-uppercase fs-5 fw-bold" href="">mon stuff</a>
        </div>
    </div>

    <div class="d-flex flex-wrap w-75">
        <div class="col-10 mx-auto d-flex align-items-center justify-content-evenly text-white my-5">
            <div class="text-center ">
                <h1 class="text-white text-uppercase fw-bold my-5" style="font-size: 100px;">Boutique</h1>
                <h2 class="text-white my-5 mx-5">Trouvez tous mes conseils pour vous équiper le mieux possible.
                    Je ne propose que des produits de très grande qualité et prévus pour durer.
                    Je précise que je suis totalement transparent dans le choix des marques.
                    Vous pouvez faire vos choix en toute confiance !</h2>
            </div>
        </div>
    </div>

</div>
<?php
$content = ob_get_clean();
require "template.php";
?>