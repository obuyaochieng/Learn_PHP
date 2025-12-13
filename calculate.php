<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>

<h2>Simple PHP Calculator</h2>

<form method="post">
    <input type="number" name="num1" placeholder="Enter first number" required>
    <br><br>

    <input type="number" name="num2" placeholder="Enter second number" required>
    <br><br>

    <select name="operator">
        <option value="add">Add (+)</option>
        <option value="sub">Subtract (-)</option>
        <option value="mul">Multiply (*)</option>
        <option value="div">Divide (/)</option>
    </select>
    <br><br>

    <button type="submit" name="calculate">Calculate</button>
</form>

<?php
// Check if form is submitted
if (isset($_POST['calculate'])) {

    // Variables
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = 0;

    // Logic
    if ($operator == "add") {
        $result = $num1 + $num2;
    } elseif ($operator == "sub") {
        $result = $num1 - $num2;
    } elseif ($operator == "mul") {
        $result = $num1 * $num2;
    } elseif ($operator == "div") {
        if ($num2 == 0) {
            echo "<p style='color:red;'>Cannot divide by zero</p>";
            exit;
        }
        $result = $num1 / $num2;
    }

    // Output
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
