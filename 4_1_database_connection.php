<?php

$conn = mysqli_connect("localhost", "root", "", "php_practical");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connected successfully.";

?>