<?php

echo "<h1>PHP CONSTANTS</h1>";

// Create a PHP Constant
echo "<h2>Create a PHP Constant</h2>";

echo "<h3>Case-Sensitive</h3>";
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<br>";

echo "<h3>Case-Insensitive</h3>";
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

// PHP Constant Arrays
echo "<h2>PHP Constant Arrays</h2>";

define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];

// Constants are Global
echo "<h2>Constants are Global</h2>";

function myTest() {
  echo GREETING;
}
 
myTest();

?>