<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #ffffff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
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
    <h2>View Students</h2>
    <?php
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result !== false) {
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>Roll Number</th><th>Class</th><th>Marks</th><th>Result</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["roll_number"]."</td><td>".$row["class"]."</td><td>".$row["marks"]."</td><td>".$row["result"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    ?>
    <div class="back-link">
            <a href="teacher_dashboard.php">Go back to Dashboard</a>
    </div>
</body>
</html>
