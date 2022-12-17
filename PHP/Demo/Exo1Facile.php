<?php
// Démarre la temporisation de sortie
ob_start();
?>
<!-- Formulaire permettant à l'utilisateur d'entrer un nombre -->
<form action="" method="POST">
    <input type="number" name="nombre" />
    <button type="submit" name="submit">Entrez</button>
</form>
<?php
// Initialise la variable $carre à null
$carre = null;

// Si le formulaire a été soumis
if (isset($_POST["submit"])) {
    // Récupère la valeur entrée par l'utilisateur
    $val = $_POST['nombre'];
    // Calcul le carré de cette valeur
    $carre = $val * $val;
}

// Définit le titre de la page
$titre = "EXO 1";
// Récupère le contenu de la temporisation de sortie dans la variable $content
$content = ob_get_clean();
// Inclut le template HTML
require "template.php";
?>
<!-- Affiche le carré de la valeur entrée par l'utilisateur -->
<button>
    <h1><?php echo $carre ?></h1>
</button>
<?php 
// Définit le titre de la page
$titre = "EXO 5";
// Récupère le contenu de la temporisation de sortie dans la variable $content
$content = ob_get_clean();
// Inclut le template HTML
require "template.php";
?>