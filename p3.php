<?php
$a = 20;
$b = 10;

// Arithmetic Operators
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

// Comparison Operators
echo "Equal: " . ($a == $b ? "True" : "False") . "<br>";
echo "Greater Than: " . ($a > $b ? "True" : "False") . "<br>";

// Logical Operators
echo "AND Operation: " . (($a > 15 && $b < 15) ? "True" : "False");
?>