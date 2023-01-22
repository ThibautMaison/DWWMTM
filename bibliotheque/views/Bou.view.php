<?php
ob_start();
?>

<div class="col-9 mx-auto me-auto d-flex align-items-center text-white" style="margin: 150px">
    <div class="text-center ">
        <h1 class="text-white text-uppercase fw-bold my-5" style="font-size: 100px;">Boutique</h1>
        <h2 class="text-white my-5">Trouvez tous mes conseils pour vous équiper le mieux possible.
            Je ne propose que des produits de très grande qualité et prévus pour durer.
            Je précise que je suis totalement transparent dans le choix des marques.
            Vous pouvez faire vos choix en toute confiance !</h2>
    </div>
    <img class="main-img" src="/public/Accueil/Daco_5738059.png" alt="main">
</div>

<div class="d-flex align-items-start d-flex justify-content-center mt-5 " style="margin-left: 250px;margin-right: 250px;">
    <div class="d-flex gap-4 flex-column w-75">
        <div class="card border-primary border-3 mx-3">
            <h3 class="mt-4 mb-2 gap-2 d-flex justify-content-center text-uppercase fs-2 fw-bold">Produits</h3>
            <a class="btn btn-outline-light rounded text-dark border-white mt-4 mb-2 gap-2 fw-semibold fst-italic" href="">Ordinateur</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Ecrans</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Claviers</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Souris</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Casques</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Tapis de souris</a>
            <a class="btn btn-outline-light rounded text-dark border-white my-2 gap-2 fw-semibold fst-italic" href="">Chaise</a>
            <a class="btn btn-outline-light rounded text-dark border-white mt-2 mb-4 gap-2 fw-semibold" href="">Accessoires</a>
        </div>
        <div class="card border-primary border-3 mx-3">
            <p class="mt-4 mb-2 mx-4 gap-2 d-flex text-center fw-semibold fst-italic">Découvre ce que j'utilise comme matériel au quotidien</p>
            <a class="btn btn-primary rounded-pill text-white border-primary mt-2 mb-4 mx-5 d-flex justify-content-center text-uppercase fs-5 fw-bold" href="">mon stuff</a>
        </div>
    </div>
    <div class="d-grid gap-4">
        <div class="d-grid gap-4 mx-auto d-flex justify-content-center shadow-lg">
            <div class="card w-25">
                <img src="/public/images/benq.jpg" class="w-75 d-grid gap-2 mx-auto d-flex justify-content-center mt-4 hover-shadow " />
                <h5 class="mt-4 d-grid gap-2 mx-auto d-flex justify-content-center">XL2566K</h5>
                <h6 class="mb-4 d-grid gap-2 mx-auto d-flex justify-content-center">$61.99</h6>
            </div>
            <div class="card w-25">
                <img src="/public/images/benq.jpg" class="w-75 d-grid gap-2 mx-auto d-flex justify-content-center mt-4 hover-shadow " />
                <h5 class="mt-4 d-grid gap-2 mx-auto d-flex justify-content-center">Product name</h5>
                <h6 class="mb-4 d-grid gap-2 mx-auto d-flex justify-content-center">$61.99</h6>
            </div>

            <div class="card w-25">
                <img src="/public/images/benq.jpg" class="w-75 d-grid gap-2 mx-auto d-flex justify-content-center mt-4 hover-shadow " />
                <h5 class="mt-4 d-grid gap-2 mx-auto d-flex justify-content-center">Product name</h5>
                <h6 class="mb-4 d-grid gap-2 mx-auto d-flex justify-content-center">$61.99</h6>
            </div>
        </div>
    </div>

</div>


<?php
$content = ob_get_clean();
require "template.php";
?>