
<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    die("Connection Failed");
}

$msg = "";

if (isset($_POST['submit'])) {

    $u = $_POST['username'];
    $p = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$u'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        if ($row['password'] == $p) {
            $_SESSION['username'] = $u;

            echo "<script>
                window.open('welcome.php', '_blank');
            </script>";
        }
        else {
            $msg = "Incorrect Password";
        }

    }
    else {

        $sql2 = "SELECT * FROM users WHERE password='$p'";
        $result2 = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($result2) > 0) {
            $msg = "Incorrect Username";
        }
        else {
            $msg = "Incorrect Username and Password";
        }
    }
}
?>

<html>
<body>

<h2>Login Page</h2>

<form method="POST">

Username:
<input type="text" name="username" required>
<br><br>

Password:
<input type="password" name="password" required>
<br><br>

<input type="submit" name="submit" value="Login">

</form>

<p><?php echo $msg; ?></p>

</body>
</html>
