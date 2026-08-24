<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT
    LENGTH('Hello PHP') AS length_result,

    CONCAT('Hello', ' ', 'World') AS concat_result,

    CONCAT_WS('-', '2026', '08', '24') AS concat_ws_result,

    TRIM('   Hello PHP   ') AS trim_result,

    LTRIM('   Hello PHP') AS ltrim_result,

    RTRIM('Hello PHP   ') AS rtrim_result,

    LPAD('PHP', 10, '*') AS lpad_result,

    RPAD('PHP', 10, '*') AS rpad_result,

    LOCATE('PHP', 'Hello PHP Programming') AS locate_result";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "<pre>";

print_r($row);

echo "</pre>";

mysqli_close($conn);

?>
