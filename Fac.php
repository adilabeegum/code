<!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
</head>
<body>

<h2>Factorial of a Number</h2>

<form method="post">
    Enter a number:
    <input type="number" name="num" required>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST["num"])) {
    $n = $_POST["num"];
    $fact = 1;

    for ($i = 1; $i <= $n; $i++) {
        $fact = $fact * $i;
    }

    echo "Factorial of $n is $fact";
}
?>

</body>
</html>
