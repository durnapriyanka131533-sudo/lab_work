<?php
setcookie("username", "Priyanka", time() + 3600, "/");

// Redirect to another page
header("Location: 3_2_read_cookie.php");
exit();
?>