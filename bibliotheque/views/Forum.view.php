<?php
session_start();
ob_start();
$Name="FORUM";
require "Titre.view.php"?>



<?php
$content=ob_get_clean();
require "template.php";
?>