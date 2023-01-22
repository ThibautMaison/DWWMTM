<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.c">
</head>

<body style="background-image: url(/public/Accueil/375782.jpg);  background-repeat: no-repeat;background-size: cover;background-position: center center;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 rounded " style="background-image: url(/public/Accueil/375782.jpg);  background-repeat: no-repeat;background-size: cover;background-position: center center;">>
    <div class="container-fluid m-0" style="margin-bottom: 30px; margin-top: 30px;">
      <div class="navbar-collapse ">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= URL ?>accueil">Accueil</a>
          </li>
          <li>
            <a class="nav-link text-white" href="<?= URL ?>Boutique">Boutique</a>
          </li>
          <li>
            <a class="nav-link text-white" href="<?= URL ?>Forum">Forum</a>
          </li>
          <li>
            <a class="nav-link text-white" href="<?= URL ?>Bou">Bout</a>
          </li>
          <li>
            <a class="nav-link text-white" href="<?= URL ?>Contact">Contact</a>
          </li>
        </ul>
        <?php
        if (isset($_SESSION['Pseudo'])) { ?>
          <a class="btn btn-outline-light rounded-pill me-4 text-white border-white" href="<?= URL ?>logout">Deconnexion</a>
        <?php
        } elseif (isset($_SESSION['Pseudo']) == NULL) { ?>
          <a class="btn btn-outline-light rounded-pill me-4 " href="<?= URL ?>connexion">Connexion</a>
          <a class="btn btn-outline-light rounded-pill me-4 " href="<?= URL ?>inscription">Inscription</a>
        <?php }
        ?>
      </div>
    </div>
  </nav>


  <div class="container-fluide">
    <?= $content ?>
  </div>




  <footer class="text-center text-lg-start text-white" style="margin-top: 350px;">
    <div class="container p-4 pb-0">
      <section class="">
        <div class="row">
          <div class="col-md-2 mb-4col-lg-2 col-xl-2 mx-auto mt-3 services-list text-center">
            <img class="mb-4" style="width: 100px;height: 60px;" src="/public/Accueil/transparent-screen-icon-ventures-icon-pc-tower-and-monitor-ico-609030c4286439.4452916816200624041655.png" alt="logo">
            <P>Bienvenue sur Shop.TAIIZERR.fr !
              Retrouvez mes conseils pour le meilleur matériel et le forum pour vous aider et échanger librement.</P>
          </div>

          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto services-list mt-3 text-center">
            <h6 class="text-uppercase mb-4 font-weight-bold display-6">MENU</h6>
            <p>
              <a href="<?= URL ?>accueil" class="text-white">Accueil</a>
            </p>
            <p>
              <a href="<?= URL ?>Forum" class="text-white">Forum</a>
            </p>
            <p>
              <a href="<?= URL ?>Boutique" class="text-white">Boutique</a>
            </p>
            <p>
              <a href="<?= URL ?>Bou" class="text-white">Bou</a>
            </p>
            <p>
              <a href="<?= URL ?>Contact" class="text-white">Contact</a>
            </p>
          </div>

          <hr class="w-100 clearfix d-md-none" />

          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-center">
            <h6 class="text-uppercase mb-4 font-weight-bold display-6">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Dunkerque, France</p>
            <p><i class="fas fa-envelope mr-3"></i> thibautmaison59@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 06 06 06 06 06</p>
            <p><i class="fas fa-print mr-3"></i> + 06 06 06 06 06</p>
          </div>
        </div>
      </section>

      <hr class="my-3">

      <section class="p-3 pt-0">
        <div class="p-3 text-center">
          © 2022 THIBAUT MAISON
        </div>
      </section>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>