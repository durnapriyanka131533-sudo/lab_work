<?php

if (isset($_POST['submit'])) {

    $input = $_POST['numbers'];

    // Convert input string to array
    $numbers = explode(" ", $input);

    // Sort array
    sort($numbers);

    echo "Sorted Array: ";

    foreach ($numbers as $number) {
        echo $number . " ";
    }
}

?>

<form method="post">

    Enter numbers separated by space:
    <input type="text" name="numbers" required>

    <input type="submit" name="submit" value="Sort">

</form>