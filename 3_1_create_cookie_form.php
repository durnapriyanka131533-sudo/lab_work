<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    // Cookie valid for 1 hour
    setcookie("username", $username, time() + 3600, "/");

    echo "Cookie created successfully.";
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Create Cookie</h2>

<form method="post">
    Enter Name:
    <input type="text" name="username" required>
    <input type="submit" value="Create Cookie">
</form>

</body>
</html>