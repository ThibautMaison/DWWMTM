<?php
ob_start();
?>
<?php
if (isset($_SESSION['Pseudo'])) {
    if (($_SESSION['Role']) == 1) { ?>
      <div class=" container position-sticky d-flex justify-content-center">
        <div class="list-group list-group-flush mx-3 mt-4 col-6 d-flex justify-content-center">
          <a href="<?= URL ?>Admin/boutique" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>BOUTIQUE</span>
          </a>
          <a href="<?= URL ?>Admin/users" class="list-group-item list-group-item-action py-2 ripple active">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>UTILISATEUR</span>
          </a>
        </div>
      </div>
<?php }
} else {
    header("Location: " . URL . "connexion");
} ?>
<?php
$content = ob_get_clean();
require "template.php";
?>