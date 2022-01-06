<?php

class Fruit{
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
    function __destruct() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

?>
