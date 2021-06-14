<?php //declare(strict_types=1); // strict requirement

echo "<h1>PHP FUNCTIONS</h1>";

echo "<h2>Create a User Defined Function in PHP</h2>";
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function

// PHP Function Arguments
echo "<h2>PHP Function Arguments</h2>";

function familyName($fname) {
    echo "$fname Refsnes.<br>";
}
  
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

// PHP is a Loosely Typed Language
echo "<h2>PHP is a Loosely Typed Language</h2>";

function addNumbers(int $a, int $b) {
    return $a + $b;
}

echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

// PHP Default Argument Value
echo "<h2>PHP Default Argument Value</h2>";

function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}
  
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

// PHP Functions - Returning values
echo "<h2>PHP Functions - Returning values</h2>";

function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4);

// PHP Return Type Declarations
echo "<h2>PHP Return Type Declarations</h2>";

function addNumbers2(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbers2(1.2, 5.2);

// Passing Arguments by Reference
echo "<h2>Passing Arguments by Reference</h2>";

function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num

?>