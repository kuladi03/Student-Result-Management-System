<?php
session_start();

if (!isset($_SESSION['student'])) {
    header('Location: student_login.php');
    exit;
}

$student = $_SESSION['student'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333333;
            margin-bottom: 20px;
            text-align: center;
        }
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Result</h2>
        <p><strong>Name:</strong> <?php echo $student['name']; ?></p>
        <p><strong>Roll Number:</strong> <?php echo $student['roll_number']; ?></p>
        <p><strong>Class:</strong> <?php echo $student['class']; ?></p>
        <p><strong>Marks:</strong> <?php echo $student['marks']; ?></p>
        <p><strong>Result:</strong> <?php echo $student['result']; ?></p>
        <a href="student_login.php">Logout</a>
    </div>
</body>
</html>

