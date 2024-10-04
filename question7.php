<!DOCTYPE html>
<html>
<head>
    <title>Rectangle Area Calculator</title>
</head>
<body>

<h1>Calculate the Area of a Rectangle⬛</h1>

<form method="post">
    Please enter the length: <input type="number" name="length" required><br><br>
    Please enter the width: <input type="number" name="width" required><br><br>
    <input type="submit" name="submit" value="Calculate Area">
</form>

<?php
if (isset($_POST['submit'])) {
    $length = $_POST['length'];
    $width = $_POST['width'];

    function calculateArea($length, $width) {
        return $length * $width;
    }

    $area = calculateArea($length, $width);
    
    echo "<br><h1>The area of the rectangle is: <span style='color: purple;'>$area</span></h1>";
}
?>

</body>
</html>
