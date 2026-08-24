<?php

$array1 = array(10, 20, 30);
$array2 = array(40, 50, 60);

$mergedArray = array_merge($array1, $array2);

echo "Merged Array:<br>";

foreach ($mergedArray as $value)
{
    echo $value . " ";
}

?>