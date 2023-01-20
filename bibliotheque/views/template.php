<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="/Style/style.css" >
</head>    

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=URL?>accueil">Accueil</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?=URL?>Boutique">Boutique</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?=URL?>Forum">Forum</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?=URL?>Optimisation">Optimisation</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?=URL?>Contact">Contact</a>
                    </li>
                </ul>
                <?php
                if(isset($_SESSION['Pseudo']))
                  { ?>
                  <button type="submit" class="header__btn" name="DECONNEXION"><a class="nav-link" href="<?=URL?>logout">DECONNEXION</a></button>
                  <?php
                    }elseif(isset($_SESSION['Pseudo']) == NULL){ ?>
                  <button class="header__btn"><a class="nav-link" href="<?=URL?>connexion">CONNEXION</a></button>
                  <button class="header__btn"><a class="nav-link" href="<?=URL?>inscription">INSCRIPTION</a></button>
                  <?php }
                ?> 
            </div>
        </div>
    </nav>
    <div class="container">
        <?= $content ?>
    </div>
    <footer>
    <div class="content-footer">
      <div class="bloc footer">
        <img class="logo" src="/public/Accueil/transparent-screen-icon-ventures-icon-pc-tower-and-monitor-ico-609030c4286439.4452916816200624041655.png" alt="logo">
        <p>@THIBAUT MAISON</p>
      </div>
      <div class="bloc footer-services">
        <h3>MENU</h3>
        <ul class="services-list">
          <li><a href="<?=URL?>accueil">Accueil</a></li>
          <li><a href="<?=URL?>Forum">Forum</a></li>
          <li><a href="<?=URL?>Boutique">Boutique</a></li>
          <li><a href="<?=URL?>Optimisation">Optimisation</a></li>
          <li><a href="<?=URL?>Contact">Contact</a></li>
        </ul>
      </div>
      <div class="bloc footer-medias">
        <h3>MEDIA</h3>
        <ul class="media-list">
          <li>
            <a >
              <svg
                aria-hidden="true"
                focusable="false"
                data-prefix="fab"
                data-icon="twitter"
                class="svg-inline--fa fa-twitter fa-w-16"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
              >
                <path
                  fill="currentColor"
                  d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                ></path>
              </svg>
              Twitter/TAIIZERR</a
            >
          </li>
          <li>
            <a >
              <svg
                aria-hidden="true"
                focusable="false"
                data-prefix="fab"
                data-icon="youtube"
                class="svg-inline--fa fa-youtube fa-w-18"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 576 512"
              >
                <path
                  fill="currentColor"
                  d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
                ></path>
              </svg>
              Youtube/TAIIZERR</a
            >
          </li>
        </ul>
      </div>
    </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>