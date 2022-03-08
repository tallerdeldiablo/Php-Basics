<?php
  class Animal {
    protected $name;
    protected $age;

    public function __construct($name, $age){
      $this->name = $name;
      $this->age = $age;
    }
  }
  class Vertebrates extends Animal {
    private $legs;

    public function __construct($name, $age, $legs){
      parent::__construct($name, $age);
      $this->legs = $legs;
    }

    public function extremid($amount){
      return $this->name . ' #Legs' . $amount;
    }

    public function getLegs(){
      return $this->legs;
    }
    public function getName(){
      return $this->name;
    }
  }

  $vertebrate1 = new Vertebrates('Cow', 3, 4);
  echo $vertebrate1->getName();
  echo "# of legs ";
  echo $vertebrate1->getLegs();

?>