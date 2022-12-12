<?php

class Client {
    private $name;
    private $firstname;
    private $number;

    public function __construct($name, $firstname, $number) {
       $this->name = $name;
       $this->firstname = $firstname;
       $this->number = $number;
    }


    public function getname(){return $this->name;}
    public function getfirstname(){return $this->firstname;}
    public function getnumber(){return $this->number;}


    public function setname($name){$this->name = $name;return $this;}
    public function setfirstname($firstname){$this->firstname = $firstname;return $this;}
    public function setnumber($number){$this->number = $number;return $this;}
}

class Product {
    private $label;
    private $description;
    private $reference;
    private $price;
    
    public function __construct($label, $description, $reference, $price) {
        $this->label = $label;
        $this->description = $description;
        $this->reference = $reference;
        $this->price = $price;
    }
    
        public function getlabel(){return $this->label;}
        public function getdescription(){return $this->description;}
        public function getreference(){return $this->reference;}
        public function getprice(){return $this->price;}
    
    
        public function setlabel($label){$this->label = $label;return $this;}
        public function setdescription($description){$this->description = $description;return $this;}
        public function setreference($reference){$this->reference = $reference;return $this;}
        public function setprice($price){$this->price = $price;return $this;}
    
        }

class OrderLine {
    private $product;
    private $quantity;
    private $total;

    public function __construct($product, $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->total = $product->price * $quantity;
    }

        public function getproduct(){return $this->product;}
        public function getquantity(){return $this->quantity;}
        public function gettotal(){return $this->total;}
    
    
        public function setproduct($product){$this->product = $product;return $this;}
        public function setquantity($quantity){$this->quantity = $quantity;return $this;}
        public function settotal($total){$this->total = $total;return $this;}
}
?>