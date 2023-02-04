<?php
ob_start();
?>
<?php
if (isset($_SESSION['Pseudo'])) {
  if (($_SESSION['Role']) == 1) { ?>
    <div class="d-flex justify-content-center container flex-wrap w-75 pt-5">
      <a href="<?= URL ?>Admin/location" class="link-dark text-decoration-none pt-5">
        <div class="d-grid ms-4 mb-4">
          <div class="card mx-auto bg-dark btn-outline-light zoom" style="transition: transform 0.5s ease;">
            <div >
              <img src="/public/images/BlackgroundAccueil.png" class=" d-grid gap-2 d-flex justify-content-center services-list btn-outline-light" style="height: 300px;width: 300px;">
            </div>
            <h5 class=" d-grid gap-2 mx-auto d-flex justify-content-center my-4 fw-bold fs-2 text-uppercase text-light">location</h5>
          </div>
        </div>
      </a>
      <a href="<?= URL ?>Admin/users" class="link-dark text-decoration-none pt-5">
        <div class="d-grid ms-4 mb-4 ">
          <div class="card mx-auto bg-dark btn-outline-light zoom" style="transition: transform 0.5s ease;">
            <div>
              <img src="/public/images/AdminUser.png" class=" d-grid gap-2 d-flex justify-content-center services-list btn-outline-light" style="height: 300px;width: 300px;">
            </div>
            <h5 class=" d-grid gap-2 mx-auto d-flex justify-content-center my-4 fw-bold fs-2 text-uppercase text-light ">UTILISATEUR</h5>
          </div>
        </div>
      </a>
    </div>
<?php }
} else {
  header("Location: " . URL . "connexion");
} ?>
<?php
$content = ob_get_clean();
require "template.php";
?>