<?php 
class Form {
    protected $form;
    protected $fieldset;
  
    // Constructeur
    public function __construct() {
      $this->form = "<form>\n";
      $this->fieldset = "<fieldset>\n";
    }
  
    // Méthode pour ajouter une zone de texte
    public function setText($name, $value="") {
      $this->fieldset .= "<input type='text' name='$name' value='$value'>\n";
    }
  
    // Méthode pour ajouter un bouton d'envoi
    public function setSubmit($value) {
      $this->fieldset .= "<input type='submit' value='$value'>\n";
    }
  
    // Méthode pour récupérer le code HTML du formulaire
    public function getForm() {
      $this->fieldset .= "</fieldset>\n";
      $this->form .= $this->fieldset;
      $this->form .= "</form>\n";
      return $this->form;
    }
  }
  class Form2 {
      protected $form;
      protected $fieldset;
    
      // Constructeur
      public function __construct() {
        $this->form = "<form>\n";
        $this->fieldset = "<fieldset>\n";
      }
    
      // Méthode pour ajouter une zone de texte
      public function setText($name, $value="") {
        $this->fieldset .= "<input type='radio' name='$name' value='$value'>$value\n";
      }
    
      // Méthode pour ajouter un bouton d'envoi
      public function setSubmit($value) {
        $this->fieldset .= "<input type='checkbox' value='$value'>$value\n";
      }
    
      // Méthode pour récupérer le code HTML du formulaire
      public function getForm2() {
        $this->fieldset .= "</fieldset>\n";
        $this->form .= $this->fieldset;
        $this->form .= "</form>\n";
        return $this->form;
      }
    }