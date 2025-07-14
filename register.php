<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "findit";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

if (strlen($username) < 3 || strlen($password) < 3) {
  die("<script>alert('Username and password must be at least 3 characters.'); window.location.href='register.html';</script>");
}

// Check if user already exists
$sql = "SELECT id FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
  echo "<script>alert('Username already exists. Choose another.'); window.location.href='register.html';</script>";
  exit();
}

$stmt->close();

// Insert new user
$hashed = hash('sha256', $password);
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashed);
$stmt->execute();

echo "<script>alert('Registration successful! You can now log in.'); window.location.href='login.html';</script>";
?>
