<?php
echo "<h1>PHP NUMBERS</h1>";

// PHP Integer
echo "<h2>PHP Integer</h2>";

$x = 5985;
echo $x, " adalah integer = ", var_dump(is_int($x)), "<br>";

$x = 59.85;
echo $x, " adalah integer = ", var_dump(is_int($x)), "<br>";

// PHP Float
echo "<h2>PHP Float</h2>";

$x = 10.365;
echo $x, " adalah float = ", var_dump(is_float($x));

// PHP Infinity
echo "<h2>PHP Infinity</h2>";

$x = 1.9e411;
echo $x, " adalah finite = ", var_dump(is_finite($x)), "<br>";
echo $x, " adalah infinite = ", var_dump(is_infinite($x));

// PHP NaN
echo "<h2>PHP NaN</h2>";

$x = acos(8);
echo $x, " adalah Not a Number = ", var_dump(is_nan($x));

// PHP Numerical Strings
echo "<h2>PHP Numerical Strings</h2>";

$x = 5985;
echo $x, " adalah numeric string = ",var_dump(is_numeric($x)), "<br>";

$x = "5985";
echo $x, " adalah numeric string = ",var_dump(is_numeric($x)), "<br>";

$x = "59.85" + 100;
echo $x, " adalah numeric string = ",var_dump(is_numeric($x)), "<br>";

$x = "Hello";
echo $x, " adalah numerik string = ",var_dump(is_numeric($x));

// PHP Casting Strings and Floats to Integers
echo "<h2>PHP Casting Strings and Floats to Integers</h2>";

// Cast float to int
echo "Cast float to int<br>";
$x = 23465.768;
$int_cast = (int)$x;
echo "from $x to ", $int_cast;

echo "<br>";

// Cast string to int
echo "Cast string to int<br>";
$x = "23465.768";
$int_cast = (int)$x;
echo "from $x to ", $int_cast;
?>