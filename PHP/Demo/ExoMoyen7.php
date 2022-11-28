<?php ob_start() ?>
<?php 
class Personne {
    public $nom ; 
    public $prenom ;
    public $adresse ;
    public $ville ;
    public $tel ;


    public function __construct($nom,$prenom,$adresse,$ville,$tel){
    $this -> nom = $nom;
    $this -> prenom = $prenom; 
    $this -> adresse = $adresse;
    $this -> ville = $ville; 
    $this -> tel = $tel;  
    }

    public function ecrire(){
        echo  $this-> nom ." " . $this-> prenom ." " . $this-> adresse ." " . $this-> ville ." " . $this-> tel ; 
    }
}      
$employer1 = new Personne("bonsoir","pariiiis","jesaispas","lechnord",0606060606);
$employer2 = new Personne("AAAAA","pariiiis","jesaispas","lechnord",0606060606);
$tab = [$employer1,$employer2];
sort($tab);
for ($i = 0; $i < count($tab); $i++) {
    $tab[$i]->ecrire(); ?>
    <br><?php
    }
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"><?php $nom?></th>
      <th scope="col">Prénom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Ville</th>
      <th scope="col">Telephone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<?php
$titre = "Exo Moyen 7";
$content = ob_get_clean();
require "template.php";
?>