<!DOCTYPE html>
<html>
<head>
    <title>Integer Identifier</title>
</head>
<body>

<h1>Positive or Negative!?</h1>

<form method="post">
    Please enter your number: <input type="text" name="num" required><br><br>
    <input type="submit" name="submit" value="Check Integer">
</form>

<?php
if (isset($_POST['submit'])) {
    // Get the input value from the form
    $num = $_POST['num'];

    // Check if the input is a number
    if (!is_numeric($num)) {
        echo "<span style='color: purple;'>That is not a number lh.</span>";
    } elseif ($num > 0) {
        echo "<span style='color: green;'>The number is positive.</span>";
    } elseif ($num < 0) {
        echo "<span style='color: red;'>The number is negative.</span>";
    } else {
        echo "<span style='color: purple;'>The number is zero.</span";
    }
}
?>

</body>
</html>



</body>
</html>
