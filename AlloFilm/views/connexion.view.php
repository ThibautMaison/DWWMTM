<?php
ob_start();
?>

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-75">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark btn-outline-light text-white" style="border-radius: 1rem;">
                    <form method="POST" action="<?= URL ?>connexion/3" enctype="multipart/form-data" class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>

                            <div class="form-outline form-white mb-4">
                                <input type="text" class="form-control form-control-lg" id="Pseudo" name="Pseudo" placeholder="Pseudo :" />
                                <label class="form-label" for="typeEmailX"></label>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <input type="password" class="form-control form-control-lg" id="Password" name="Password" placeholder="Password :" />
                                <label class="form-label" for="typePasswordX"></label>
                            </div>

                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                            <button class="btn btn-outline-light btn-lg px-5" type="submit" name="Connecter">Login</button>
                        </div>

                        <div>
                            <p class="mb-0">Don't have an account? <a href="inscription" class="text-white-50 fw-bold">Sign Up</a>
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require "template.php";
?>