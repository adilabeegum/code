<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even</title>
</head>
<body>

<h2>Check Odd or Even</h2>

<form method="post">
    Enter a Number:
    <input type="number" name="num" required>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];

    if ($num % 2 == 0) {
        echo "The number is Even";
    } else {
        echo "The number is Odd";
    }
}
?>

</body>
</html>
