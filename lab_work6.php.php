<?php
// Sample string
$str = "Hello World! Welcome to PHP Programming.";

// 1) strlen()
echo "Original String: " . $str . "<br><br>";
echo "1. Length of the string (strlen): " . strlen($str) . "<br><br>";

// 2) strpos()
echo "2. Position of the word 'Welcome' (strpos): " . strpos($str, "Welcome") . "<br><br>";

// 3) str_word_count()
echo "3. Number of words (str_word_count): " . str_word_count($str) . "<br><br>";

// 4) strrev()
echo "4. Reversed string (strrev): " . strrev($str) . "<br><br>";

// 5) strtolower()
echo "5. Lowercase string (strtolower): " . strtolower($str) . "<br><br>";

// 6) strtoupper()
echo "6. Uppercase string (strtoupper): " . strtoupper($str) . "<br>";
?>