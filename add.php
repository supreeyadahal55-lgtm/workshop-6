<?php
require 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course) VALUES ('$name', '$email', '$course')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect to main page
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h2>Add New Student</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Course: <input type="text" name="course" required><br><br>
        <input type="submit" name="submit" value="Add Student">
    </form>
    <br>
    <a href="index.php">Back to Students List</a>
</body>
</html>
