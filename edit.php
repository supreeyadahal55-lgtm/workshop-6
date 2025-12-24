<?php
require 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id = $id");
$student = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name" value="<?= $student['name'] ?>" required><br><br>
        Email: <input type="email" name="email" value="<?= $student['email'] ?>" required><br><br>
        Course: <input type="text" name="course" value="<?= $student['course'] ?>" required><br><br>
        <input type="submit" name="update" value="Update Student">
    </form>
    <br>
    <a href="index.php">Back to Students List</a>
</body>
</html>
