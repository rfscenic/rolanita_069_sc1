<?php
echo "<h1>PHP OPERATORS</h1>";

// PHP Arithmetic Operators
echo "<h2>PHP Arithmetic Operators</h2>";

$x = 10;  
$y = 6;

echo ("x = 10 <br>");
echo ("y = 6 <br>");

echo "<br>";

echo "x + y     = ", $x + $y, "<br>";
echo "x - y     = ", $x - $y, "<br>";
echo "x * y     = ", $x * $y, "<br>";
echo "x / y     = ", $x / $y, "<br>";
echo "x % y     = ", $x % $y, "<br>";
echo "x ** y    = ", $x ** $y;

// PHP Assignment Operators
echo "<h2>PHP Assignment Operators</h2>";

echo "x = x     : ", $x, "<br>";
echo "x += y    : ", $x += $y, "<br>";

echo "<br> Nilai x sekarang : ", $x, "<br><br>";
echo "x -= y    : ", $x -= $y, "<br>";

echo "<br> Nilai x sekarang : ", $x, "<br><br>";
echo "x *= y    : ", $x *= $y, "<br>";

echo "<br> Nilai x sekarang : ", $x, "<br><br>";
echo "x /= y    : ", $x /= $y, "<br>";

echo "<br> Nilai x sekarang : ", $x, "<br><br>";
echo "x %= y    : ", $x %= $y;

// PHP Comparison Operators
echo "<h2>PHP Comparison Operators</h2>";

echo "Nilai x : ", $x, "<br>";
echo "Nilai y : ", $y, "<br>";

echo "Nilai x == nilai y  : ", var_dump($x == $y), "<br>"; // returns false because values are not equal
echo "Nilai x === nilai y : ", var_dump($x === $y), "<br>";
echo "Nilai x != nilai y  : ", var_dump($x != $y), "<br>";
echo "Nilai x <> nilai y  : ", var_dump($x <> $y), "<br>";
echo "Nilai x !== nilai y : ", var_dump($x !== $y), "<br>";
echo "Nilai x > nilai y   : ", var_dump($x > $y), "<br>";
echo "Nilai x < nilai y   : ", var_dump($x < $y), "<br>";
echo "Nilai x >= nilai y  : ", var_dump($x >= $y), "<br>";
echo "Nilai x <= nilai y  : ", var_dump($x <= $y), "<br>";
echo "Nilai x <=> nilai y : ", var_dump($x <=> $y);

// PHP Increment / Decrement Operators
echo "<h2>PHP Increment / Decrement Operators</h2>";

echo "Nilai x : ", $x, "<br>";
echo "Pre-increment dari x : ", ++$x, "<br>";

echo "<br>Nilai x : ", $x, "<br>";
echo "Post-increment dari x : ", $x++, "<br>";

echo "<br>Nilai x : ", $x, "<br>";
echo "Pre-decrement dari x : ", --$x, "<br>";

echo "<br>Nilai x : ", $x, "<br>";
echo "Post-decrement dari x : ", $x--, "<br>";

// PHP Logical Operators
echo "<h2>PHP Logical Operators</h2>";

$x = 100;  
$y = 50;

echo "Nilai x : $x <br>";
echo "Nilai y : $y <br><br>";

echo "Jika x = 100 and y = 50, maka : ";
if ($x == 100 and $y == 50) {
    echo "Hello world!";
}

echo "<br> Jika x = 100 or y = 80, maka : ";
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}

echo "<br> Jika x = 100 xor y = 80, maka : ";
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}

echo "<br> Jika x = 100 && y = 50, maka : ";
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}

echo "<br> Jika x = 100 || y = 80, maka : ";
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}

echo "<br> Jika x != 90, maka : ";
if ($x !== 90) {
    echo "Hello world!";
}

// PHP String Operators
echo "<h2>PHP String Operators</h2>";

$txt1 = "Hello";
$txt2 = " world!";

echo "Nilai variabel txt1 : $txt1 <br> Nilai variabel txt2 : $txt2 <br>";
echo $txt1 . $txt2;

// PHP Array Operators
echo "<h2>PHP Array Operators</h2>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");

echo "Array x : ";
print_r ($x);
echo "<br> Array y : ";
print_r ($y);

echo "<br>";

echo "Union : ";
print_r($x + $y); // union of $x and $y

echo "<br> Equality between array x and y : ", var_dump($x == $y);

echo "<br> Identity between array x and y : ", var_dump($x === $y);

echo "<br> Inequality between array x and y : ", var_dump($x != $y);

echo "<br> Inequality between array x and y : ", var_dump($x <> $y);

echo "<br> Non-identity between array x and y : ", var_dump($x !== $y);

// PHP Conditional Assignment Operators
echo "<h2>PHP Conditional Assignment Operators</h2>";

echo "Ternary (?:) <br>";

// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";

echo "<br><br>Null Coalescing (??) <br>";

// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";
echo("<br>");
  
// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";
?>