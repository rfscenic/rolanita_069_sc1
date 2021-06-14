<?php

echo "<h1>PHP ARRAYS</h1>";

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// Get The Length of an Array - The count() Function
echo "<h2>Get The Length of an Array - The count() Function</h2>";
echo $arrlength;

// Loop Through an Indexed Array
echo "<h2>Loop Through an Indexed Array</h2>";
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

// Loop Through an Associative Array
echo "<h2>Loop Through an Associative Array</h2>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

// PHP Multidimensional Arrays
echo "<h2>PHP Multidimensional Arrays</h2>";

$cars2 = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars2[$row][$col]."</li>";
    }
    echo "</ul>";
}

// PHP Sorting Arrays
echo "<h2>PHP Sorting Arrays</h2>";

echo "Ascending <br>";
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

echo "<br>Descending <br>";

rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>