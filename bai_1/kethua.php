<?php

class Fruit{
    private $name;
    private $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function set_name($name){
        $this->name = $name;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_color($color){
        $this->color = $color;
    }
    public function get_color(){
        return $this->color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit {
    private $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
echo $strawberry->message();
echo '<br>';
echo $strawberry->intro();

?>
