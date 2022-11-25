<?php ob_start() ?>


<?php
$pair = null ;
$nombre1 = 5;
if($nombre1%2 == 0){
    $pair = " est un nombre pair "; 
}
else{
    $pair = " est un nombre impair ";
    }
?>
<p><?php echo $nombre1 . $pair ?></p>




<?php 
$pair = null ;
$nombre2 =122;
if($nombre2%2 == 0){
    $pair = " est un nombre pair "; 
}
else{
    $pair = " est un nombre impair";
    }
?>
<p><?php echo $nombre2 . $pair ?></p>




<?php 
$titre = "EXO 3";
$content = ob_get_clean();
require "template.php";
?>