<?php
ob_start();
?>
<section class="vh-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-md-8 col-lg-10 col-xl-8">
        <div class="card bg-dark btn-outline-light text-white w-100" style="border-radius: 1rem;">
          <form method="POST" action="####" enctype="multipart/form-data" class="card-body p-5 text-center">

            <div class="mb-md-2 mt-md-2 pb-2">

              <h2 class="fw-bold mb-2 text-uppercase">Contact us!</h2>
              <p class="text-white-50 mb-5">Please enter your message!</p>

              <div class="form-outline form-white mb-2">
                <input type="text" class="form-control form-control-lg" id="Pseudo" name="Pseudo" placeholder="Pseudo :" />
                <label class="form-label" for="Pseudo"></label>
              </div>
              <div class="form-outline form-white mb-2">
                <input type="text" class="form-control form-control-lg" id="Email" name="Email" placeholder="Email :" />
                <label class="form-label" for="Email"></label>
              </div>
              <div class="form-outline form-white mb-2">
                <input type="text" class="form-control form-control-lg" id="Sujet" name="Sujet" placeholder="Sujet :" />
                <label class="form-label" for="Sujet"></label>
              </div>
              <div class="form-outline form-white">
                <textarea class="form-control" name="Message" placeholder="Message :" rows="6"></textarea>
                <label class="form-label" for="Message"></label>
              </div>
              <div class="form-check d-flex justify-content-center m-4">
                <input class="form-check-input me-2 mt-3" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label text-white mt-3" for="form2Example33">
                Send me a copy of this message
                </label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5 mb-0" type="submit" name="Sinscrire">Send message</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php

if (isset($_POST['Envoyer'])) {
  $Message = "Ce message vous a été envoyé via la page conatct du site SHOP.TAIIZERR.fr
    Nom : " . $_POST["Nom"] . "
    Email : " . $_POST["Email"] . "
    Sujet : " . $_POST["Sujet"] . "
    Message : " . $_POST["Message"];

  $retour = mail(
    "thibauttayzer@gmail.com",
    $_POST["Sujet"],
    $Message,
    "From:contact@exemple.fr " . "\r\n" . "Reply-to:" . $_POST["Email"]
  );
  if ($retour) {
    echo "Le messagee a bien été envoyé";
  }
}
?>
<?php
$content = ob_get_clean();
require "template.php";
?>