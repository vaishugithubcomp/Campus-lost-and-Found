<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "findit";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$type = $_GET['type'];

if ($type === 'lost') {
    $table = 'lost_items';
} elseif ($type === 'found') {
    $table = 'found_items';
} else {
    die("Invalid type");
}

// Delete item by ID
$sql = "DELETE FROM $table WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();

header("Location: listings.php?type=$type&deleted=1");
exit();
?>
