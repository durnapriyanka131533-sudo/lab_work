<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT

    HOUR(CURTIME()) AS hour_value,

    MINUTE(CURTIME()) AS minute_value,

    SECOND(CURTIME()) AS second_value,

    DATE_FORMAT(NOW(), '%d-%m-%Y %h:%i:%s %p') AS formatted_date,

    DATE_SUB(CURDATE(), INTERVAL 10 DAY) AS date_sub_result";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "<h3>MySQL Date and Time Functions</h3>";

echo "HOUR(): " . $row['hour_value'] . "<br>";
echo "MINUTE(): " . $row['minute_value'] . "<br>";
echo "SECOND(): " . $row['second_value'] . "<br>";
echo "DATE_FORMAT(): " . $row['formatted_date'] . "<br>";
echo "DATE_SUB(): " . $row['date_sub_result'];

mysqli_close($conn);

?>