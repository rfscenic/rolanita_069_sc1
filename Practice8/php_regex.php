<?php
echo "<h1>PHP Regular Expressions</h1>";

// Using preg_match()
echo "<h2>Using preg_match()</h2>";

$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1

// Using preg_match_all()
echo "<h2>Using preg_match_all()</h2>";

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4

// Using preg_replace()
echo "<h2>Using preg_replace()</h2>";

$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"

// Grouping
echo "<h2>Grouping</h2>";

$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1
?>