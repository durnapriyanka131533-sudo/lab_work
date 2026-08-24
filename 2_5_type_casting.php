<?php

$value = "100";

echo "Original Value: " . $value . "<br>";
echo "Original Type: " . gettype($value) . "<br><br>";

settype($value, "integer");

echo "After Type Casting: " . $value . "<br>";
echo "New Type: " . gettype($value);

?>