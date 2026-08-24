<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Example username and password
    if ($username == "admin" && $password == "12345") {
        $_SESSION["username"] = $username;

        header("Location: home.php");
        exit();
    } else {
        echo "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

</body>
</html>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Example username and password
    if ($username == "admin" && $password == "12345") {
        $_SESSION["username"] = $username;

        header("Location: home.php");
        exit();
    } else {
        echo "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

</body>
</html>


<?php
session_start();

session_unset();
session_destroy();

header("Location: 3_7_login.php");
exit();
?>