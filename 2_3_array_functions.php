<?php

// 1. array_change_key_case()

$student = array(
    "NAME" => "Priyanka",
    "COURSE" => "BCA"
);

echo "<h3>array_change_key_case()</h3>";

$result = array_change_key_case($student, CASE_LOWER);

print_r($result);


// 2. array_chunk()

$months = array(
    "January", "February", "March",
    "April", "May", "June",
    "July", "August", "September",
    "October", "November", "December"
);

echo "<h3>array_chunk()</h3>";

$chunked = array_chunk($months, 3);

print_r($chunked);


// 3. array_count_values()

$numbers = array(10, 20, 10, 30, 20, 10);

echo "<h3>array_count_values()</h3>";

print_r(array_count_values($numbers));


// 4. array_pop()

$fruits = array("Apple", "Banana", "Mango");

echo "<h3>array_pop()</h3>";

array_pop($fruits);

print_r($fruits);


// 5. array_push()

echo "<h3>array_push()</h3>";

array_push($fruits, "Orange");

print_r($fruits);


// 6. array_unshift()

echo "<h3>array_unshift()</h3>";

array_unshift($fruits, "Grapes");

print_r($fruits);


// 7. array_shift()

echo "<h3>array_shift()</h3>";

array_shift($fruits);

print_r($fruits);

?>