<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "findit";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (hash('sha256', $password) === $user['password']) {
        $_SESSION['user'] = $user['username'];
        header("Location: new.php");
        exit();
    }
}

echo "<script>alert('Invalid username or password'); window.location.href='login.html';</script>";
?>
