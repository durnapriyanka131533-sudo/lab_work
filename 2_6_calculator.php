<?php

function calculator($num1, $num2, $operation)
{
    switch ($operation) {

        case "add":
            return $num1 + $num2;

        case "subtract":
            return $num1 - $num2;

        case "multiply":
            return $num1 * $num2;

        case "divide":
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Cannot divide by zero";
            }
    }
}

$result = "";

if (isset($_POST['calculate'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    $result = calculator($num1, $num2, $operation);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>

<body>

<h2>Simple Calculator</h2>

<form method="post">

    Number 1:
    <input type="number" name="num1" required>
    <br><br>

    Number 2:
    <input type="number" name="num2" required>
    <br><br>

    Operation:

    <select name="operation">

        <option value="add">Addition</option>
        <option value="subtract">Subtraction</option>
        <option value="multiply">Multiplication</option>
        <option value="divide">Division</option>

    </select>

    <br><br>

    <input type="submit" name="calculate" value="Calculate">

</form>

<?php

if ($result !== "") {
    echo "<h3>Result: $result</h3>";
}

?>

</body>
</html>
