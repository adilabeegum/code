
<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>

<h2>Student Details Form</h2>

<form method="post">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email ID:
    <input type="email" name="email" required>
    <br><br>

    Address:
    <textarea name="address"></textarea>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Date of Birth:
    <input type="date" name="dob">
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php
if (isset($_REQUEST['submit'])) {

    echo "<h2>Student Details</h2>";

    echo "Name: " . htmlspecialchars($_REQUEST['name']) . "<br>";
    echo "Email ID: " . htmlspecialchars($_REQUEST['email']) . "<br>";
    echo "Address: " . htmlspecialchars($_REQUEST['address']) . "<br>";
    echo "Gender: " . htmlspecialchars($_REQUEST['gender'] ?? '') . "<br>";
    echo "Date of Birth: " . htmlspecialchars($_REQUEST['dob']) . "<br>";
}
?>

</body>
</html>
