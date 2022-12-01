<?php ob_start() ?>
<?php 
class Maison {
    private static $maison = [];
    private static $identifiant = 0 ;
    private $identifiantmaison;
    private $date ; 
    private $nombrechambre ;
    private $surface ;


    public function __construct($date,$nombrechambre,$surface,){
    self::$identifiant =self::$identifiant+1;
    $this -> identifiantmaison = self::$identifiant;
    $this -> date = $date;
    $this -> nombrechambre = $nombrechambre;
    $this -> surface = $surface; 
    self::$maison[] = $this;
    }

    public function presentation(){
        echo "<b>identifiant : </b>" . $this -> identifiantmaison . "<br/>";
        echo "<b>date : </b>" . $this->date . "<br/>";
        echo "<b>nombrechambre : </b>" . $this->nombrechambre  . "<br/>";
        echo "<b>surface : </b>" . $this->surface . "<br/>";
    }

    public function getdate(){return $this->date;}
    public function getnombrechambre(){return $this->nombrechambre;}
    public function getsurface(){return $this->surface;}
    public function getListidentifiant(){return $this -> identifiantmaison;}
    public static function getListmaison(){return self::$maison;}
}  
$maison1 = new Maison("2015","5","250");
$maison2 = new Maison("2020","2","80");
$maison3 = new Maison("2009","3","120");
$maison4 = new Maison("2013","4","155");

$tab = Maison::getListmaison();

foreach($tab as $value){
    $value->presentation();
    echo "<br/>------------------------------------<br/>";
}
?>
<?php 
$titre = "Exo Moyen 5";
$content = ob_get_clean();
require "template.php";
?>