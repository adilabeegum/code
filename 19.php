
<!DOCTYPE html>
<html>
<head>
    <title>Book Information</title>
</head>
<body>

<h2>Book Information</h2>

<form method="POST">
    Book Number:
    <input type="number" name="book_no" required><br><br>

    Title:
    <input type="text" name="title" required><br><br>

    Edition:
    <input type="text" name="edition" required><br><br>

    Publisher:
    <input type="text" name="publisher" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "library");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    $book_no = $_POST['book_no'];
    $title = $_POST['title'];
    $edition = $_POST['edition'];
    $publisher = $_POST['publisher'];

    $sql = "INSERT INTO book_details
            (book_no, title, edition, publisher)
            VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param(
        $stmt, "isss",
        $book_no, $title, $edition, $publisher
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "<p>Book details inserted successfully!</p>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

$result = mysqli_query($conn, "SELECT * FROM book_details");

echo "<h2>Book Details</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>Book No</th>
        <th>Title</th>
        <th>Edition</th>
        <th>Publisher</th>
      </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['book_no']) . "</td>";
    echo "<td>" . htmlspecialchars($row['title']) . "</td>";
    echo "<td>" . htmlspecialchars($row['edition']) . "</td>";
    echo "<td>" . htmlspecialchars($row['publisher']) . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>

</body>
</html>
