<?php
// Fonction qui crée un monstre ou un bandit manchot aléatoirement
function createMonster()
{
    // Ratio aléatoire entre 1 et 3
    $ratio = rand(1, 3);
    // Si le ratio vaut 1, création d'un objet BanditManchot
    // Sinon, création d'un objet Monster
    return $ratio == 1 ? new BanditManchot() : new Monster();
}

// Fonction qui retourne le vainqueur du combat entre un monstre et un joueur
function getWinner($monster, $player)
{
    // Si le joueur a encore des points de vie, il est le vainqueur
    if ($player->getLifePoint() > 0) return $player;
    // Sinon, c'est le monstre qui a gagné
    return $monster;
}

// Fonction qui simule un combat entre un monstre et un joueur
function fightMonster($monster, $player)
{
    // Tant que le monstre et le joueur ont encore des points de vie, le combat continue
    while ($monster->getLifePoint() > 0 && $player->getLifePoint() > 0) {
        // Le joueur attaque le monstre
        $playerDamage = $player->attack();
        // La vie du monstre est diminuée du dégât infligé par le joueur
        $monster->setLifePoint($monster->getLifePoint() - $playerDamage);
        // Si le monstre n'a plus de points de vie, fin du combat
        if (!$monster->getLifePoint()) {
            echo  'Le joueur a ' . $player->getLifePoint() . "\n";
            echo  'Le monstre a ' . $monster->getLifePoint() . "\n";
            break;
        }
        // Le monstre attaque le joueur
        $monsterDamage = $monster->attack();
        // La vie du joueur est diminuée du dégât infligé par le monstre
        $player->setLifePoint($player->getLifePoint() - $monsterDamage);
        // Affichage des points de vie du joueur et du monstre
        echo  'Le joueur a ' . $player->getLifePoint() . "\n";
        echo  'Le monstre a ' . $monster->getLifePoint() . "\n";
    }
    // Affichage du vainqueur du combat
    echo "\n Le combat est terminé, le vainqueur est " . getWinner($monster, $player) . "\n";
}

// Fonction qui ajoute des points au score du joueur en fonction du nombre de points gagnés en combattant le monstre
function addPointsToPlayer($monster, $player)
{
    // Ajout des points gagnés au score du joueur
    $player->setScore($player->getScore() + $monster->getPoints());
}