<?php ob_start() ?>

<form action="" method="GET">
    <caption>CALCULATRICE</caption>
    <input type="text" name="nb1" placeholder="Valeur1" />
    <input type="text" name="nb2" placeholder="Valeur1" />
    <input type="button" name="+" value="+">
    <input type="button" name="-" value="-">
    <input type="button" name="*" value="*">
    <input type="button" name="/" value="/">
    <button type="submit" name="submit">Entrez</button>
</form>

<?php 
switch ($menu){
    case '+':
        $result=$_POST['nb1'] + $$_POST['nb2'];
        echo $_POST['nb1']. "+" . $$_POST['nb2']. "=" .$result;
        break;
    case '-':
        $result=$_POST['nb1'] - $$_POST['nb2'];
        echo $_POST['nb1']. "-" . $$_POST['nb2']. "=" .$result;
        break;
   case '*':
        $result=$_POST['nb1'] * $$_POST['nb2'];
        echo $_POST['nb1']. "*" . $$_POST['nb2']. "=" .$result;
        break;
    case '/':
        $result=$_POST['nb1'] / $$_POST['nb2'];
        echo $_POST['nb1']. "/" . $$_POST['nb2']. "=" .$result;
        break;
}
?>

<?php 
$titre = "ExoDifficile1";
$content = ob_get_clean();
require "template.php";
?>