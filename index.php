<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "calculator.php";
    define("ADDITION", "+");
    define("SUBTRACTION", "-");
    define("MULTIPLICATION", "*");
    define("DIVISION", "/");

    $firstNumber = $_POST["firstnumber"];
    $secondNumber = $_POST["secondnumber"];
    $operation = $_POST['operation'];

    $calculator = new Calculator();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Simple Calculator</h1>
    <form action="" method="post">
        <label for="">First Number </label>
        <input type="text" name="firstnumber"><br><br>

        <label for="">Operator:</label>
        <select name="operation" id="">
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select><br><br>

        <label for="">Second Number </label>
        <input type="text" name="secondnumber">
        <br><br>
        <input type="submit" value="Calculate">
    </form>
</div>

<?php
switch ($operation) {
    case ADDITION:
        echo "Result = " . $calculator->sum($firstNumber, $secondNumber);
        break;
    case SUBTRACTION:
        echo "Result = " . $calculator->sub($firstNumber, $secondNumber);
        break;
    case MULTIPLICATION:
        echo "Result = " . $calculator->mul($firstNumber, $secondNumber);
        break;
    case DIVISION:
        try {
            echo "Result = " . $calculator->div($firstNumber, $secondNumber);
        }catch (Exception $e){
            echo $e->getMessage();
        }
        break;
}
?>
</body>
</html>


