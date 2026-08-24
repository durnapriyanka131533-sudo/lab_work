<?php

try {

    $conn = new PDO(
        "mysql:host=localhost;dbname=php_practical",
        "root",
        ""
    );

    $sql = "INSERT INTO students_pdo (name, email, mobile)
            VALUES ('Priyanka', 'priyanka@gmail.com', '9876543210')";

    $conn->exec($sql);

    echo "Data inserted successfully using PDO.";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}

$conn = null;

?>