<?php
ob_start();
?>
<?php
if (isset($_SESSION['Pseudo'])) {
    if (($_SESSION['Role']) == 1) { ?>
        <div class="container">
        <div class="text-center py-5">
                <div class="fw-bold text-uppercase pt-5">
                    <h2 class="text-white">Manage location</h2>
                </div>
            </div>
            <table class="table table-striped table-hover text-white text-center mb-0">
                <thead>
                    <tr>
                        <th>
                        </th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Lien</th>
                        <th>idCategorie</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <div class="d-grid gap-2 col-6 mx-auto mb-4">
                    <a href="<?= URL ?>Admin/ajoutfilm" class="btn btn-success">Ajouter film</a>
                </div>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($location); $i++) : ?>
                        <tr>
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                    <label for="checkbox1"></label>
                                </span>
                            </td>
                            <td class="text-white"><?= $location[$i]->getName() ?></td>
                            <td class="text-white"><?= $location[$i]->getDescription() ?></td>
                            <td class="text-white"><?= $location[$i]->getPrix() ?></td>
                            <td class="text-white"><?= $location[$i]->getLien() ?></td>
                            <td class="text-white"><?= $location[$i]->getidCategorie() ?></td>
                            <td>
                                <div class="d-flex justify-content-center mb-2">
                                    <form action="<?= URL ?>Admin/modificationfilm/<?= $location[$i]->getId() ?>" method="POST">
                                        <button class="btn btn-warning mx-auto d-flex justify-content-center me-3" type="submit">Modifier</button>
                                    </form>
                                    <form action="<?= URL ?>Admin/supprimerfilm/<?= $location[$i]->getId() ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le produit ?')" method="POST">
                                        <button class="btn btn-danger mx-auto d-flex justify-content-center" type="submit">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table> 
        </div>
   
<?php }
} else {
    header("Location: " . URL . "connexion");
} ?>
<?php
$content = ob_get_clean();
require "template.php";
?>