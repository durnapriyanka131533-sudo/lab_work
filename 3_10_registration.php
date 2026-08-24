<?php

include "db_connect.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (name, username, email, password)
            VALUES ('$name', '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $message = "Registration successful!";
    } else {
        $message = "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>

<body>

<h2>User Registration Form</h2>

<?php
echo $message;
?>

<br><br>

<form method="post">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Username:
    <input type="text" name="username" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>