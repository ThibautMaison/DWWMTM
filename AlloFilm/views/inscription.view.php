<?php
ob_start();
?>
<section class="vh-100 gradient-custom">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-12 col-md-8 col-lg-10 col-xl-8">
                <div class="card bg-dark btn-outline-light text-white w-100" style="border-radius: 1rem;">
                    <form method="POST" action="<?= URL ?>inscription/9" enctype="multipart/form-data" class="card-body p-5 text-center">

                        <div class="mb-md-2 mt-md-2 pb-2">

                            <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <div class="form-outline form-white mb-2">
                                <input type="text" class="form-control form-control-lg" id="Pseudo" name="Pseudo" placeholder="Pseudo :" />
                                <label class="form-label" for="Pseudo"></label>
                            </div>
                            <div class="form-outline form-white mb-2">
                                <input type="text" class="form-control form-control-lg" id="Email" name="Email" placeholder="Email :" />
                                <label class="form-label" for="Email"></label>
                            </div>
                            <div class="form-outline form-white">
                                <input type="password" class="form-control form-control-lg" id="Password" name="Password" placeholder="Password :" />
                                <label class="form-label" for="typePasswordX"></label>
                            </div>
                            <div class="validator-criters">
                                <span style="display: block;font-size: 13px;margin:0;" class="chiffre">Votre mot de passe doit avoir 1 chiffre</span>
                                <span style="display: block;font-size: 13px;margin:0;" class="majuscule">Votre mot de passe doit avoir 1 lettre majuscule</span>
                                <span style="display: block;font-size: 13px;margin:0;" class="minuscule">Votre mot de passe doit avoir 1 lettre minuscule</span>
                                <span style="display: block;font-size: 13px;margin: 0;" class="generique mb-5">Votre mot doit comporter 8 Caractères au minimum</span>
                            </div>

                            <div class="form-check d-flex justify-content-center m-4">
                                <input class="form-check-input me-2 mt-3" type="checkbox" value="" id="form2Example33" checked />
                                <label class="form-check-label text-white mt-3" for="form2Example33">
                                    Subscribe to our newsletter
                                </label>
                            </div>

                            <button class="btn btn-outline-light btn-lg px-5 mb-0" type="submit" name="Sinscrire">Register</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>



<?php
$content = ob_get_clean();
require "template.php";
?>