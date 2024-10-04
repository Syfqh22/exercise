<!DOCTYPE html>
<html>
<head>
    <title>Diasss</title>
    <style>
        .star {
            color: lightblue;
        }
    </style>
</head>
<body>

<h1>HAH..QUARTER OF DIAMOND✨</h1>

<?php
for ($i = 1; $i <= 8; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<span class='star'>*</span>";
    }
    echo "<br>";
}
?>

</body>
</html>