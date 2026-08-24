<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "php_practical"
);

$id = 1;

$sql = "SELECT * FROM students WHERE id = $id";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>

<body>

<h2>User Profile</h2>

<p><b>Name:</b> <?php echo $user['name']; ?></p>

<p><b>Email:</b> <?php echo $user['email']; ?></p>

<p><b>Mobile:</b> <?php echo $user['mobile']; ?></p>

<a href="4_10_edit_profile.php">
    Edit Profile
</a>

</body>
</html>