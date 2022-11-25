<?php ob_start() ?>

<form action="" method="GET">
    <input type="string" name="pseudo" />
    <input type="number" name="age" />
    <button type="submit" name="submit">Entrez</button>
</form>


<?php
$nom = null;
$age = null;
if (isset($_GET["submit"])) {
    $nom = $_GET["pseudo"];
    $age = $_GET["age"];
}
?>
<p><?= $nom ?> à <?= $age ?></p>


<?php
$titre = "EXO 4";
$content = ob_get_clean();
require "template.php";
?>