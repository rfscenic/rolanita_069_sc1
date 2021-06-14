<?php

// Creating PHP Variables
$txt = "Hello world!";
$x = 5; // global scope
$y = 10.5;

// Output Variables
$txt = "W3Schools.com";
echo "I love $txt!" . "<br>";

echo "I love " . $txt . "!" . "<br>";

$a = 5; // global scope
$b = 4;
echo $a + $b;

echo "<br>";

// Global and Local Scope

echo "<h2>Global Variable</h2>";

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

echo "<h2>Local Variable</h2>";

function myTest2(){
    $c = 10; // local scope
    echo "<p>Variable c inside function is: $c</p>";
}

myTest2();

// using c outside the function will generate an error
echo "<p>Variable c outside function is: $c</p>";

echo "<h2>Global Keyword</h2>";

// PHP The Global Keyword
function myTest3() {
    global $x, $y;
    $y = $x + $y;
}
  
myTest3();
echo "<p>Hasil test Global Keyword: $y</p>"; // outputs 15

echo "<h2>Static Keyword</h2>";

function myTest4() {
    static $d = 0;
    echo $d;
    $d++;
    echo "<br>";
}
  
myTest4();
myTest4();
myTest4();
?>