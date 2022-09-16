<?php
// Interface definition
interface Animal {
  public function makenoise();
}

// Class definitions
class Cat implements Animal {
  public function makenoise() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makenoise() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makenoise() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($abc as $animal) {
  $animal->makeSound();
}
?>