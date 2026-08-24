<?php

$input = readline("Enter array values separated by space: ");

$array = explode(" ", $input);

$reverse = array_reverse($array);

echo "Original Array:<br>";

foreach ($array as $value)
{
    echo $value . " ";
}

echo "<br><br>Reversed Array:<br>";

foreach ($reverse as $value)
{
    echo $value . " ";
}

?>