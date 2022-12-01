<?php ob_start() ?>
<?php 
require "ExoMoyenClass1.php";
require "ExoMoyenClass2.php";
$arme1 = new Arme("Machette","15");
$arme2 = new Arme("hache","12");
$arme3 = new Arme("couteau d'or","270");
$arme4 = new Arme("stylo","0");
$player1 = new Player("reyna","200","200",$idarme);
$player2 = new Player("jett","200","150",$idarme);
$player3 = new Player("raze","200","150",$idarme);
$player4 = new Player("chamber","10000000000","200",$idarme);

$tabARME = arme::getListarme();
$tabPLAYER = Player::getListPlayer();
Echo "<br/>-------------------ARME-----------------------<br/>";
foreach($tabARME as $value){
    $value->presentationArme();
    echo "<br/>------------------------------------<br/>";
}Echo "<br/>-------------------PLAYER-----------------------<br/>";
foreach($tabPLAYER as $value){
    $value->presentationPlayer();
    echo "<br/>------------------------------------<br/>";
}Echo "<br/>-------------------FIN-----------------------<br/>";

?>
<?php 
$titre = "Exo Moyen 5";
$content = ob_get_clean();
require "template.php";
?>