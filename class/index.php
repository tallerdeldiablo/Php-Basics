<?php
 class Animal {
    public $name;
    public function welcome(){
      return ' Welcome' . $this->name ;
    }
  }
  $animal1 = new Animal();
  $animal1->name = ' Firulais';

  echo $animal1->welcome();
 
?>
