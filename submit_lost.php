<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "findit";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$item = $_POST['item'];
$location = $_POST['location'];
$description = $_POST['description'];
$contact = $_POST['contact'];
$sql = "INSERT INTO lost_items (item_name, description, location, contact)
        VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $item, $description, $location, $contact);



$stmt->execute();

header("Location: listings.php?type=lost&status=success");
exit();
?>
