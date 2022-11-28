<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/sandstone/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" type="button" href="#" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Facile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarFacile">
          <a class="dropdown-item" href="Exo1Facile.php">Exo1</a>
          <a class="dropdown-item" href="Exo2Facile.php">Exo2</a>
          <a class="dropdown-item" href="Exo3Facile.php">Exo3</a>
          <a class="dropdown-item" href="Exo4Facile.php">Exo4</a>
          <a class="dropdown-item" href="Exo5Facile.php">Exo5</a>
          <a class="dropdown-item" href="Exo6Facile.php">Exo6</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarMoyen" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Moyen
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarMoyen">
          <a class="dropdown-item" href="ExoMoyen1.php">Exo1</a>
          <a class="dropdown-item" href="ExoMoyen2.php">Exo2</a>
          <a class="dropdown-item" href="ExoMoyen3.php">Exo3</a>
          <a class="dropdown-item" href="ExoMoyen4.php">Exo4</a>
          <a class="dropdown-item" href="ExoMoyen5.php">Exo5</a>
          <a class="dropdown-item" href="ExoMoyen5bis.php">Exo5bis</a>
          <a class="dropdown-item" href="ExoMoyen6.php">Exo6</a>
          <a class="dropdown-item" href="ExoMoyen7.php">Exo7</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDifficile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Difficile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDifficile">
          <a class="dropdown-item" href="ExoDifficile1.php">Exo1</a>
          <a class="dropdown-item" href="#">Exo2</a>
          <a class="dropdown-item" href="#">Exo3</a>
          <a class="dropdown-item" href="#">Exo4</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarArmes" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Armes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarArmes">
          <a class="dropdown-item" href="#">Exo1</a>
          <a class="dropdown-item" href="#">Exo2</a>
          <a class="dropdown-item" href="#">Exo3</a>
        </div>
      </li>
    </ul>
</nav>
    <div class="container">
        <h1 class=" rounded border border-dark p-2 m-2 text-center text-white bg-primary"><?= $titre?></h1>
        <?= $content ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>