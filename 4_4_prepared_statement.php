<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "php_practical"
);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare(
    "INSERT INTO students (name, email, mobile)
     VALUES (?, ?, ?)"
);

$stmt->bind_param(
    "sss",
    $name,
    $email,
    $mobile
);

$name = "Rahul";
$email = "rahul@gmail.com";
$mobile = "9876543211";

$stmt->execute();

echo "Data inserted using prepared statement.";

$stmt->close();
$conn->close();

?>