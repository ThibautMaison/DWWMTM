<?php
require "Class.php";

$rectangle = new Rectangle(5, 10);
echo $rectangle->afficherRectangle();

$triangle = new Triangle(5, 10);
echo $triangle->afficherTriangle();

$cercle = new Cercle(20);
echo $cercle->afficherCercle();

$pave = new Pave(5, 10, 2);
$pave->afficher();

$pyramide = new Pyramide(5, 10, 15);
$pyramide->afficher();

?>