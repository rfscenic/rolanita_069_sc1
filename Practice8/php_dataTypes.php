<?php
echo "<h1>PHP DATA TYPES</h1>";

// PHP String
echo "<h2>PHP String</h2>";

$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;

// PHP String
echo "<h2>PHP Integer</h2>";

$a = 5985;
var_dump($a);

// PHP Float
echo "<h2>PHP Float</h2>";

$b = 10.365;
var_dump($b);

// PHP Boolean
echo "<h2>PHP Boolean</h2>";

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

// PHP Object
echo "<h2>PHP Object</h2>";

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
  
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

// PHP Null Value
echo "<h2>PHP Null Value</h2>";

$c = "Hello world!";
$c = null;
var_dump($c);
?>