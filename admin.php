<?php
session_start();

// Static admin credentials (can be replaced with DB check later)
$admin_user = "admin";
$admin_pass = "admin123";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['admin_username'] ?? '';
    $password = $_POST['admin_password'] ?? '';

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['admin'] = true;
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "<script>alert('Invalid admin credentials'); window.location.href='admin.html';</script>";
    }
} else {
    echo "Form not submitted correctly.";
}
?>
