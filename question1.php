<!DOCTYPE html>
<html>
<head>
    <title>Voting Age</title>
</head>
<body>

<h1>Are you old enough???</h1>

<form method="post">
    Please enter your age: <input type="number" name="age" required><br><br>
    <input type="submit" name="submit" value="Check Eligibility">
</form>

<?php
if (isset($_POST['submit'])) {
    $age = $_POST['age'];

    if ($age >= 18) {
        echo "<br>YAY! You are eligible to vote.<h1><span style='color: pink;'>♥♥♥</span></h1>";
    } else {
        echo "Apologies, it seems that your age hasn't passed the minimum requirement for voting.";
    }
}
?>

</body>
</html>
