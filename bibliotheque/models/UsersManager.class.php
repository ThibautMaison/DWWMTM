<?php
require_once "Model.class.php";
require_once "Users.class.php";

// Permet de mettre tous les User dans le même tableau
class UsersManager extends Model{
    private $User; //tableau de Users

    public function ajoutUser($Users){
        $this->User[]=$Users;
    }

    public function getUser(){return $this->User;}

    // Va permettre de recup User bdd
    public function chargementUser(){
        // appelle connexion à la bdd
        $req=$this->getBdd()->prepare("SELECT * FROM Users");
        // on execute req
        $req->execute();
        // permet deviter des doublons
        
        $mesUser=$req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();


        foreach($mesUser as $Users){
            // genere Users de la classe Users
            $l=new Users($Users["id"],$Users["Pseudo"],$Users["Email"],$Users["Password"]);
            $this->ajoutUser($l);
        }

    }
    public function getUsersById($id){
        for($i=0;$i<count($this->User);$i++){
            if($this->User[$i]->getId() === $id){
                return $this->User[$i];
            }
        }
    }

    public function ajoutUsersBd($Pseudo,$Email,$Password){
        // // Insérez le code pour l'inscription de l'utilisateur ici
        $req=("INSERT INTO Users SET Pseudo = :Pseudo,Email = :Email, Password = :Password ");

        $Password = password_hash($_POST['Password'],PASSWORD_BCRYPT);
        // var_dump($Password);
        // connexion à bd
        $stmt=$this->getBdd()->prepare($req);
        // on met en lien la req avec ce qu'il y a dans la bd
        $stmt->bindValue(":Pseudo",$Pseudo,PDO::PARAM_STR); //PDO::PARAM_STR sert à securiser le type de données
        $stmt->bindValue(":Email",$Email,PDO::PARAM_STR);
        $stmt->bindValue(":Password",$Password,PDO::PARAM_STR);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // on ajoute le Users a la classe Users
            $Users=new Users($this->getBdd()->lastInsertId(),$Pseudo,$Email,$Password);
            // ajoute Users au tableau de Users
            $this->ajoutUser($Users);
        }
    }
    public function ConnexionUser($Pseudo, $Password) {
        // Préparation de la requête pour récupérer l'utilisateur avec les informations de connexion
        $req=("select * from Users where Pseudo = :Pseudo");
        // Préparation de la requête à être exécutée
        $stmt=$this->getBdd()->prepare($req);
        // liaison des valeurs pour les paramètres de la requête
        $stmt->bindValue(":Pseudo",$Pseudo,PDO::PARAM_STR);
        // Exécution de la requête
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $data = $stmt->fetchAll();
            var_dump($data);
            if(password_verify($Password, $data[0]['Password'])){

                $_SESSION['Pseudo'] = $Pseudo;
            }else{
                echo"reessaye";
            }

        } 
    $stmt->closeCursor();
    }
}
?>