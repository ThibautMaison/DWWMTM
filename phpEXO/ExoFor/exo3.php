<?php
$nombre = readline("Entrez un nombre: ");
$facto = 1;
for ($i = 1; $i <= $nombre; $i++) {
    $facto = $facto * $i;
}
echo 'Le factoriel de ' . $nombre . ' vaut: ' . $facto;
?>