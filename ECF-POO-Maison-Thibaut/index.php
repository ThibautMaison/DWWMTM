<?php
require "fonctions.php";
require_once "class.php";
// Demande le pseudo de l'utilisateur et stocke la réponse dans la variable $pseudo
$pseudo = readline("Quel est votre pseudo? ");

// Crée un nouvel objet Player avec le pseudo de l'utilisateur
$player = new Player($pseudo);

// Tant que le nombre de points de vie du joueur est supérieur à 0
while ($player->getLifePoint() > 0) {
    // Si le joueur ne peut pas bouger, quitter la boucle
    if (!$player->move()) break;
    // Crée un monstre aléatoire
    $monster = createMonster();
    // Si le monstre est une instance de la classe Monster
    if ($monster instanceof Monster) {
        // Combat le monstre avec le joueur
        fightMonster($monster, $player);
        // Ajoute des points au joueur en fonction du monstre combattu
        addPointsToPlayer($monster, $player);
    } else {
        // Demande à l'utilisateur s'il souhaite jouer à un jeu de hasard avec le Bandit Mancho
        $choix = readline("souhaites tu jouer à un jeu de hasard avec le Bandit Mancho qui mettra en jeu des points de vies (o/n)");
        // Si l'utilisateur souhaite jouer
        if ($choix === "o") {
            // Détermine si le joueur gagne ou perd de la vie au jeu de hasard
            $isAddingLife = $monster->winOrLose();
            // Détermine combien de points de vie le joueur gagne ou perd
            $howManyWeWinOrLose = $monster->howManyWeWinOrLose();
            // Stocke le nombre de points de vie du joueur avant le jeu de hasard
            $oldLifePoint = $player->getLifePoint();
            // Si le joueur gagne de la vie
            if ($isAddingLife) {
                // Ajoute les points gagnés au nombre de points de vie du joueur
                $player->setLifePoint($player->getLifePoint() + $howManyWeWinOrLose);
                // Affiche un message indiquant que le joueur a gagné de la vie et son nouveau nombre de points de vie
                echo "Le player " . $player->getPseudo()  . " gagne de la vie (" . $oldLifePoint . " + " . $howManyWeWinOrLose . ") \n";
                echo "le Player " . $player->getPseudo() . " a désormais " . $player->getLifePoint() . "\n";
            } // Si la condition n'est pas vraie, alors on exécute le code suivant
            else {
            // On enlève les points de vie au joueur en utilisant la méthode setLifePoint()
            $player->setLifePoint($player->getLifePoint() - $howManyWeWinOrLose);
            // On affiche un message indiquant que le joueur a perdu de la vie et combien il lui en reste
                echo "Le player " . $player->getPseudo()  . " perds de la vie (" . $oldLifePoint . " - " . $howManyWeWinOrLose . ") \n ";
                echo "Le Player " . $player->getPseudo() . " a désormais " . $player->getLifePoint() . "\n";
              }
            }
          }
        }
            
// On affiche un message indiquant que la partie est terminée
echo 'La partie est terminée' . "\n";
// On affiche le score final du joueur
echo 'Le score du joueur ' . $player->getPseudo() . ' est: ' . $player->getScore();