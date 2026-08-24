<?php
$username = "";
$password = "";

if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
}

if (isset($_COOKIE["password"])) {
    $password = $_COOKIE["password"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["remember"])) {

        setcookie("username", $username, time() + (86400 * 30), "/");
        setcookie("password", $password, time() + (86400 * 30), "/");

    } else {

        setcookie("username", "", time() - 3600, "/");
        setcookie("password", "", time() - 3600, "/");
    }

    echo "Login information saved.";
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login Form</h2>

<form method="post">

Username:
<input type="text" name="username"
value="<?php echo $username; ?>" required>

<br><br>

Password:
<input type="password" name="password"
value="<?php echo $password; ?>" required>

<br><br>

<input type="checkbox" name="remember"> Remember Me

<br><br>

<input type="submit" value="Login">

</form>

</body>
</html>