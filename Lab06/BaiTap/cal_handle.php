<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$result = 0;

switch ($_GET['type']) {
    case "plus":
        $result = $num1 + $num2;
        break;
    case "-":
        $result = $num1 - $num2;
        break;
    case "*":
        $result = $num1 * $num2;
        break;
    case "/":
        $result = $num1 / $num2;
        break;
}

echo $result;