<!DOCTYPE html>
<html>
<head>
    <title>Sum Calculator</title>
</head>
<body>

<h1>Let's Add Two Numbers!🕷</h1>

<form method="post">
    Please enter the first number: <input type="number" name="num1" required><br><br>
    Please enter the second number: <input type="number" name="num2" required><br><br>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    function sum($x, $y) {
        return $x + $y;
    }

    $result = sum($num1, $num2);
    
    echo "<br><span style='color: grey;'><h1>🕸The sum of $num1 and $num2 is: $result 🕸</span></h1>";
}
?>

</body>
</html>
