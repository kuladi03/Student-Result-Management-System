<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);

    if ($id > 0) {
        $sql = "DELETE FROM students WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid ID";
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