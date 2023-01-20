<?php
session_start();
ob_start();
$Name="Mes Composants";
require "Titre.view.php"?>


<div class="boutiques" style="margin-bottom: 1000px;">
<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <!-- Permet d'avoir 2 colonnes en une -->
        <th colspan="2">Actions</th>
    </tr>
    <!-- Va chercher dans la classe Livre, l'attribut Boutique (tableau des Boutique)  en faisant Livre::Boutique-->
    <?php 
    for($i=0;$i<count($Boutique);$i++): ?>
    <tr>
        <td class="align-middle text-white"><img src="public/images/<?= $Boutique[$i]-> getImage() ?>" width="60px"></td>
        <td class="align-middle"><a class="text-white" href="<?=URL ?>Boutique/l/<?= $Boutique[$i]-> getId() ?>"><?= $Boutique[$i]-> getName() ?></td>
        <td class="align-middle text-white"><?= $Boutique[$i]-> getDescription() ?></td>
        <td class="align-middle text-white"><a href="<?=URL ?>Boutique/m/<?= $Boutique[$i]-> getId() ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle text-white"> 
            <!-- onSubmit pour confirmer la suprresion -->
            <form action="<?= URL ?>Boutique/s/<?= $Boutique[$i]->getId() ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le livre ?')" method="POST">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
        </tr>
        <?php endfor ?>
    </table>
    <a href="<?= URL ?>Boutique/a" class="btn btn-success d-block">Ajouter</a>
</div>
<?php
$content=ob_get_clean();
require "template.php";
?>