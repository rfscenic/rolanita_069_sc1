<?php

echo "<h1>PHP LOOPS</h1>";

// The PHP while Loop
echo "<h2>The PHP while Loop</h2>";

$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

// The PHP do...while Loop
echo "<h2>The PHP do...while Loop</h2>";

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

// The PHP for Loop
echo "<h2>The PHP for Loop</h2>";

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

// The PHP foreach Loop
echo "<h2>The PHP foreach Loop</h2>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>