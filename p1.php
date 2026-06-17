<?php
// Constant
define("COLLEGE_NAME", "ABC College");

// Variables
$studentName = "Prasham Parmar";
$semester = 4;
$totalMarks = 600;
$obtainedMarks = 510;

$percentage = ($obtainedMarks / $totalMarks) * 100;

echo "<h3>" . COLLEGE_NAME . "</h3>";
echo "Student Name: " . $studentName . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Obtained Marks: " . $obtainedMarks . "<br>";
echo "Total Marks: " . $totalMarks . "<br>";
echo "Percentage: " . $percentage . "%";
?>