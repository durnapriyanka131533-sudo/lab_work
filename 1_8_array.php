<?php

$input = readline("Enter array values separated by space: ");

$array = explode(" ", $input);

echo "Array Values:<br>";

foreach ($array as $value)
{
    echo $value . "<br>";
}

?>