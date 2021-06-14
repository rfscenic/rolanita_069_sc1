<?php
echo "<h1>PHP STRINGS</h1>";

// strlen() - Return the Length of a String
echo "<h2>strlen()</h2>";

echo "Hello world! = ", strlen("Hello world!"); // outputs 12

// str_word_count() - Count Words in a String
echo "<h2>str_word_count()</h2>";

echo "Hello world! = ", str_word_count("Hello world!"); // outputs 2

// strrev() - Reverse a String
echo "<h2>strrev()</h2>";

echo "Hello world! = ", strrev("Hello world!"); // outputs !dlrow olleH

// strpos() - Search For a Text Within a String
echo "<h2>strpos()</h2>";

echo "Hello world! = ", strpos("Hello world!", "world"); // outputs 6

// str_replace() - Replace Text Within a String
echo "<h2>str_replace()</h2>";

echo "Hello world! = ", str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>