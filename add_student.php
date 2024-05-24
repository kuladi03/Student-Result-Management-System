<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $roll_number = $conn->real_escape_string($_POST['roll_number']);
    $class = $conn->real_escape_string($_POST['class']);
    $marks = intval($_POST['marks']);
    $result = $conn->real_escape_string($_POST['result']);

    $sql = "INSERT INTO students (name, roll_number, class, marks, result) VALUES ('$name', '$roll_number', '$class', '$marks', '$result')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <style>
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
<head>
    <div class="back-link">
            <a href="teacher_dashboard.php">Go Back to Dashboard</a>
    </div>
</head>
