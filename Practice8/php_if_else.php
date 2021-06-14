<?php
echo "<h1>PHP IF ELSE STATEMENTS</h1>";

$t = date("H");

echo "<h2>PHP - The if Statement</h2>";

if ($t < "20") {
    echo "Have a good day!";
  }

echo "<h2>PHP - The if...else Statement</h2>";

if ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
}

echo "<h2>PHP - The if...elseif...else Statement</h2>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>