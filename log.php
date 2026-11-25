
<?php
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    die("Connection Failed");
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

$msg = "";

if (isset($_POST['submit'])) {

    $u = $_POST['username'];
    $p = $_POST['password'];

    // Check username
    $stmt = mysqli_prepare(
        $conn,
        "SELECT password FROM users WHERE username = ?"
    );

    mysqli_stmt_bind_param($stmt, "s", $u);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        if ($row['password'] == $p) {

            $_SESSION['username'] = $u;

            // Open welcome page in new tab
            echo "<script>
                window.open('welcome.php', '_blank');
            </script>";

        } else {
            $msg = "Incorrect Password";
        }

    } else {
        $msg = "Incorrect Username";
    }

    mysqli_stmt_close($stmt);
}
?>

<html>
<head>
    <title>Login Page</title>
</head>
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
