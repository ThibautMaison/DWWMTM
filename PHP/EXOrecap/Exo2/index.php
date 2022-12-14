<?php 
require "Class.php";

$form = new Form();
$form->setText("prenom", "Jean");
$form->setText("nom", "Dupont");
$form->setSubmit("Envoyer");
echo $form->getForm();

$form2 = new Form2();
$form2->setText("prenom", "Jean");
$form2->setText("nom", "Dupont");
$form2->setSubmit("Envoyer");
echo $form2->getForm2();

