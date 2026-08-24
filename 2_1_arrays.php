<?php

// 1. Numeric Array
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h3>Numeric Array</h3>";

foreach ($days as $day) {
    echo $day . "<br>";
}


// 2. Associative Array
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<h3>Associative Array</h3>";

foreach ($months as $month => $daysCount) {
    echo $month . " => " . $daysCount . "<br>";
}


// 3. Multidimensional Array
$laptops = array(
    array("Company" => "Dell", "Model" => "Inspiron", "Price" => 55000),
    array("Company" => "HP", "Model" => "Pavilion", "Price" => 60000)
);

echo "<h3>Laptop Details</h3>";

foreach ($laptops as $laptop) {
    echo "Company: " . $laptop["Company"] . "<br>";
    echo "Model: " . $laptop["Model"] . "<br>";
    echo "Price: " . $laptop["Price"] . "<br><br>";
}

?>