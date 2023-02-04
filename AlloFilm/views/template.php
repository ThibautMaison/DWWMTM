<!DOCTYPE html>
<html lang="fr" class="bg-dark">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch/dist/vapor/bootstrap.min.css">
  <link rel="stylesheet" href="/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark border border-light">
    <div class="container my-3 ">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="<?= URL ?>accueil">Accueil</a></li>
          <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="<?= URL ?>location">Location</a></li>
          <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="<?= URL ?>Forum">Forum</a></li>
          <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="<?= URL ?>Contact">Contact</a></li>
        </ul>
        <form class="">
        <?php
          if (isset($_SESSION['Pseudo'])) {
            if (($_SESSION['Role']) == 1) { ?>
              <a class="text-white text-decoration-none me-3" aria-current="page" href="<?= URL ?>Admin">Admin</a>
          <?php }
          } else {
          } ?>
          <?php
          if (isset($_SESSION['Pseudo'])) { ?>
            <div class="btn-group dropdown-end me-5">
              <a type="button" class="btn btn-outline-dark text-white rounded" data-bs-toggle="dropdown" aria-expanded="false">
                COMPTE
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle ms-2" height="22" alt="" loading="lazy" />
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start bg-dark">
                <li><a class="btn btn-dark text-white rounded d-flex justify-content-center" href="">Parametre</a></li>
                <li><a class="btn btn-dark text-white rounded d-flex justify-content-center" href="<?= URL ?>logout">Deconnexion</a></li>
              </ul>
            </div>
          <?php
          } else { ?>
            <a class="btn btn-outline-dark text-white me-2" href="<?= URL ?>connexion">CONNEXION</a>
            <a class="btn btn-outline-dark text-white" href="<?= URL ?>inscription">INSCRIPTION</a>
          <?php }
          ?>

        </form>
      </div>
    </div>
  </nav>

  <div class="container-fluide bg-dark">
    <?= $content ?>
  </div>

  <script src="/script.js"></script>



  <footer class="text-center text-lg-start text-white bg-dark p-5" style="bottom: 0;">
    <div class="container p-5">
      <hr class="mt-5 primary">
      <section class=" mt-5">
        <div class="text-center">
          © 2022 THIBAUT MAISON
        </div>
      </section>
    </div>
  </footer>
<script src="/scriptMDP.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>