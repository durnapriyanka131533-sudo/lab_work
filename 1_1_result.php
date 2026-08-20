<?php

define("COLLEGE", "ABC College");
define("TOTAL_MARKS", 500);

$name = "Priyanka";
$marks = 425;

$percentage = ($marks / TOTAL_MARKS) * 100;

echo "College Name: " . COLLEGE . "<br>";
echo "Student Name: " . $name . "<br>";
echo "Total Marks: " . TOTAL_MARKS . "<br>";
echo "Marks Obtained: " . $marks . "<br>";
echo "Percentage: " . $percentage . "%";

?>