<?php
echo "<h1>PHP MATH</h1>";

// PHP pi() Function
echo "<h2>PHP pi() Function</h2>";

echo "nilai dari pi() = ", (pi()); // returns 3.1415926535898

// PHP min() and max() Functions
echo "<h2>PHP min() and max() Functions</h2>";

echo "nilai min dari min(0, 150, 30, 20, -8, -200) = ", (min(0, 150, 30, 20, -8, -200)), "<br>";  // returns -200
echo "nilai min dari max(0, 150, 30, 20, -8, -200) = ", (max(0, 150, 30, 20, -8, -200));  // returns 150

// PHP abs() Function
echo "<h2>PHP abs() Function</h2>";

echo "Nilai absolut dari -6.7 = ", (abs(-6.7));  // returns 6.7

// PHP sqrt() Function
echo "<h2>PHP sqrt() Function</h2>";

echo "Nilai akar kuadrat 64 = ", (sqrt(64));  // returns 8

// PHP round() Function
echo "<h2>PHP round() Function</h2>";

echo "Nilai pembulatan dari 0.60 = ", (round(0.60)), "<br>";  // returns 1
echo "Nilai pembulatan dari 0.49 = ", (round(0.49));  // returns 0

// PHP Random Numbers
echo "<h2>Random Numbers</h2>";

echo "Angka Random = ", (rand()), "<br>";
echo "Angka Random antara 10 - 100 = ", (rand(10, 100));

?>