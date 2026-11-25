
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<html>
<head>
    <title>Welcome Page</title>
</head>
<body>

<h1>
    Welcome <?php
    echo htmlspecialchars($_SESSION['username']);
    ?>!
</h1>

<p>Login Successful!</p>

<a href="login.php?logout=1">Logout</a>

</body>
</html>
