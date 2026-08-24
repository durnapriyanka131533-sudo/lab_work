<?php
if (isset($_COOKIE["visited"])) {
    echo "Welcome back! You are a repeated user.";
} else {
    setcookie("visited", "yes", time() + (86400 * 30), "/");

    echo "Welcome! You are a new user.";
}
?>