<?php 
require "Class.php";

$Client = new Client("Bonsoooiiir", "PARRRRRRRIIIIIIISSSSS","10 place place place");

$Electeur = new Electeur("Electeur", "1","Bureau de poste dunkerque","A Voter");


echo $Client->setCoord()?><br><?php
echo $Electeur->avoter()?><br><?php
?>