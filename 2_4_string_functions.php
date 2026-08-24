<?php

$string = "Hello Welcome to PHP Programming";

echo "Original String: " . $string . "<br><br>";


// 1. strlen()

echo "1. Length of String: " . strlen($string) . "<br>";


// 2. strpos()

echo "2. Position of PHP: " . strpos($string, "PHP") . "<br>";


// 3. str_word_count()

echo "3. Number of Words: " . str_word_count($string) . "<br>";


// 4. strrev()

echo "4. Reverse String: " . strrev($string) . "<br>";


// 5. strtolower()

echo "5. Lowercase: " . strtolower($string) . "<br>";


// 6. strtoupper()

echo "6. Uppercase: " . strtoupper($string);

?>
