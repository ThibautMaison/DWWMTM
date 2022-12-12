<?php
require "Class.php";

// Création d'un client
$client = new Client("Dupont", "Luc", "123456");

// Création d'une liste de produits
$products = array(
  new Product("Ordinateur", "Un ordinateur portable performant", "PC123", 999.99),
  new Product("Imprimante", "Une imprimante laser couleur", "IM456", 199.99),
  new Product("Souris", "Une souris sans fil ergonomique", "SO789", 49.99),
  new Product("Clavier", "Un clavier mécanique gamer", "KB321", 129.99),
  new Product("Écran", "Un écran LED Full HD 27 pouces", "EC654", 399.99),
  new Product("Casque", "Un casque audio sans fil Bluetooth", "CA987", 99.99),
  new Product("Tablette", "Une tablette tactile 10 pouces", "TB159", 299.99),
  new Product("Stylet", "Un stylet pour tablette", "ST753", 29.99),
  new Product("Chargeur", "Un chargeur sans fil pour smartphone", "CH147", 39.99),
  new Product("Haut-parleur", "Un haut-parleur Bluetooth portable", "HA258", 79.99),
);

// Affichage de la liste des produits
echo "Liste des produits disponibles :\n";
foreach ($products as $product) {
  echo "- " . $product->getlabel() . " (réf. " . $product->getreference() . ") : " . $product->getprice() . "€\n";
}

// Création de la commande
$order = array()

?>

