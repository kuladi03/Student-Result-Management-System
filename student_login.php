<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $roll_number = $_POST['roll_number'];

    $name = $conn->real_escape_string($name);
    $roll_number = $conn->real_escape_string($roll_number);

    $sql = "SELECT * FROM students WHERE name='$name' AND roll_number='$roll_number'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $_SESSION['student'] = $result->fetch_assoc();
        header('Location: student_result.php'); // Redirect to the student result page
        exit;
    } else {
        $error = "Invalid name or roll number.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            color: #333333;
            margin-bottom: 20px;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            font-size: 16px;
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
        .error {
            color: red;
            margin-top: 10px;
            text-align: center;
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
        <h2>Student Login</h2>
        <form action="student_login.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="roll_number">Roll Number:</label>
            <input type="text" id="roll_number" name="roll_number" required>
            <input type="submit" value="Login">
        </form>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <div class="back-link">
            <a href="index.html">Go back to Dashboard</a>
    </div>
    </div>
    
</body>
</html>
