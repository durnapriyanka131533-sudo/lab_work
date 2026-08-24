<?php

$conn = mysqli_connect("localhost", "root", "", "php_practical");

$sql = "INSERT INTO students (name, email, mobile)
        VALUES ('Priyanka', 'priyanka@gmail.com', '9876543210')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>