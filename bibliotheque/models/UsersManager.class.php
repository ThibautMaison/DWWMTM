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

    public function chargementUser(){
        $req=$this->getBdd()->prepare("SELECT * FROM Users");
        $req->execute();
        $mesUser=$req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        foreach($mesUser as $Users){
            $l=new Users($Users["id"],$Users["Pseudo"],$Users["Email"],$Users["Password"],$Users["Role"]);
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
        $req=("INSERT INTO Users SET Pseudo = :Pseudo,Email = :Email, Password = :Password");
        $Password = password_hash($_POST['Password'],PASSWORD_BCRYPT);
        $stmt=$this->getBdd()->prepare($req);
        $stmt->bindValue(":Pseudo",$Pseudo,PDO::PARAM_STR);
        $stmt->bindValue(":Email",$Email,PDO::PARAM_STR);
        $stmt->bindValue(":Password",$Password,PDO::PARAM_STR);
        $resultat=$stmt->execute();
        $stmt->closeCursor();
        if($resultat>0){
            $Users=new Users($this->getBdd()->lastInsertId(),$Pseudo,$Email,$Password,null);
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
            $data = $stmt->fetch();
            $_SESSION['Role'] = $data['Role'];
            if(password_verify($Password, $data['Password'])){

                $_SESSION['Pseudo'] = $Pseudo;
            }else{
                echo"reessaye";
            }
    $stmt->closeCursor();
    }
}
}
?>