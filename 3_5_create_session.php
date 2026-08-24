<?php
session_start();

$_SESSION["username"] = "Priyanka";
$_SESSION["course"] = "BCA";

echo "Session created successfully.<br>";

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"];
?>