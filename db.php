<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";  // For XAMPP, WAMP, MAMP the default is an empty string. For LAMP, you might need to set up a password.
$dbname = "student_results";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function authenticate($username, $password) {
    global $conn;
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        return true;
    } else {
        return false;
    }
}

?>