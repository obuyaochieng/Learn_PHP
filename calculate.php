<!DOCTYPE html>
<html>
<body>

<h2>PHP Calculator</h2>

<form method="post">
    <input type="number" name="num1" required>
    <br><br>

    <input type="number" name="num2" required>
    <br><br>

    <select name="operator">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select>

    <br><br>
    <button type="submit" name="calculate">Calculate</button>
</form>

<?php
if (isset($_POST['calculate'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if ($operator == "add") {
        echo "Result: " . ($num1 + $num2);
    } elseif ($operator == "sub") {
        echo "Result: " . ($num1 - $num2);
    } elseif ($operator == "mul") {
        echo "Result: " . ($num1 * $num2);
    } elseif ($operator == "div") {
        echo "Result: " . ($num1 / $num2);
    }
}
?>

</body>
</html>
