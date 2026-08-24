<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT

    DAYOFWEEK(CURDATE()) AS day_of_week,

    WEEKDAY(CURDATE()) AS week_day,

    DAYOFMONTH(CURDATE()) AS day_of_month,

    DAYOFYEAR(CURDATE()) AS day_of_year,

    DAYNAME(CURDATE()) AS day_name";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "<h3>MySQL Date Functions</h3>";

echo "DAYOFWEEK(): " . $row['day_of_week'] . "<br>";
echo "WEEKDAY(): " . $row['week_day'] . "<br>";
echo "DAYOFMONTH(): " . $row['day_of_month'] . "<br>";
echo "DAYOFYEAR(): " . $row['day_of_year'] . "<br>";
echo "DAYNAME(): " . $row['day_name'];

mysqli_close($conn);

?>