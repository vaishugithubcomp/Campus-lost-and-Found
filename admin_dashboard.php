<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: admin.html");
  exit;
}

// Database connection
$conn = new mysqli("localhost", "root", "", "findit");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$lost_result = $conn->query("SELECT * FROM lost_items ORDER BY date_reported DESC");
$found_result = $conn->query("SELECT * FROM found_items ORDER BY date_reported DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      padding: 2rem;
      background-color: #f9fafb;
    }
    h2 {
      color: #1e3a8a;
      margin-top: 2rem;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
      margin-bottom: 2rem;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 0.75rem;
      text-align: left;
    }
    th {
      background-color: #1e3a8a;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f1f5f9;
    }
    a.logout {
      display: inline-block;
      margin-top: 1rem;
      color: #1e3a8a;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <h1>Welcome, Admin</h1>

  <h2>Lost Items</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Item Name</th>
      <th>Location</th>
      <th>Description</th>
      <th>Contact</th>
      <th>Date Reported</th>
    </tr>
    <?php while($row = $lost_result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['item_name']) ?></td>
        <td><?= htmlspecialchars($row['location']) ?></td>
        <td><?= htmlspecialchars($row['description']) ?></td>
        <td><?= htmlspecialchars($row['contact']) ?></td>
        <td><?= date('d M Y', strtotime($row['date_reported'])) ?></td>
      </tr>
    <?php endwhile; ?>
  </table>

  <h2>Found Items</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Item Name</th>
      <th>Location</th>
      <th>Description</th>
      <th>Contact</th>
      <th>Date Reported</th>
    </tr>
    <?php while($row = $found_result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['item_name']) ?></td>
        <td><?= htmlspecialchars($row['location']) ?></td>
        <td><?= htmlspecialchars($row['description']) ?></td>
        <td><?= htmlspecialchars($row['contact']) ?></td>
        <td><?= date('d M Y', strtotime($row['date_reported'])) ?></td>
      </tr>
    <?php endwhile; ?>
  </table>

  <a class="logout" href="logout.php">Logout</a>
</body>
</html>
