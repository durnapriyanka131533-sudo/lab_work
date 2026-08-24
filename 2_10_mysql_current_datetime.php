<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT

    CURDATE() AS current_date,

    CURTIME() AS current_time,

    UNIX_TIMESTAMP() AS unix_timestamp,

    FROM_UNIXTIME(UNIX_TIMESTAMP()) AS from_unixtime";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "<h3>MySQL Current Date and Time Functions</h3>";

echo "CURDATE(): " . $row['current_date'] . "<br>";
echo "CURTIME(): " . $row['current_time'] . "<br>";
echo "UNIX_TIMESTAMP(): " . $row['unix_timestamp'] . "<br>";
echo "FROM_UNIXTIME(): " . $row['from_unixtime'];

mysqli_close($conn);

?>