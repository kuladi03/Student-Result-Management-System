<?php
include 'db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'teacher') {
    header('Location: teacher_login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333333;
            margin-bottom: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
            display: block;
        }
        input[type="text"],
        input[type="number"] {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            text-decoration: none;
            color: #007bff;
            margin-left: 10px;
        }
        a:hover {
            text-decoration: underline;
        }
        .back-link {
            margin-top: 20px;
            text-align: center;
        }
        .back-link a {
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
            transition: color 0.3s ease;
        }
        .back-link a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Teacher Dashboard</h2>
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <form action="add_student.php" method="post">
            <h3>Add Student</h3>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="roll_number">Roll Number:</label>
            <input type="text" id="roll_number" name="roll_number" required>
            <label for="class">Class:</label>
            <input type="text" id="class" name="class" required>
            <label for="marks">Marks:</label>
            <input type="number" id="marks" name="marks" required>
            <label for="result">Result:</label>
            <input type="text" id="result" name="result" required>
            <input type="submit" value="Add Student">
        </form>
        <form action="delete_student.php" method="post">
            <h3>Delete Student</h3>
            <label for="id">Student ID:</label>
            <input type="number" id="id" name="id" required>
            <input type="submit" value="Delete Student">
        </form>
        <form action="view_students.php" method="post">
            <h3>View All Students</h3>
            <input type="submit" value="View All Students">
        </form>
        <form action="view_specific_student.php" method="post">
            <h3>View Specific Student</h3>
            <label for="roll_number">Roll Number:</label>
            <input type="text" id="roll_number" name="roll_number" required>
            <input type="submit" value="View Student">
        </form>
        <div class="back-link">
            <a href="logout.php">Logout</a>
    </div>
    </div>
</body>
</html>
