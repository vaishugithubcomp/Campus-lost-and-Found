<?php
$type = $_GET['type'] ?? 'lost'; // default to lost
$search = $_GET['search'] ?? '';

$host = "localhost";
$user = "root";
$pass = "";
$db = "findit";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$table = $type === 'found' ? 'found_items' : 'lost_items';

$sql = "SELECT * FROM $table WHERE item_name LIKE ? OR location LIKE ? ORDER BY date_reported DESC";
$stmt = $conn->prepare($sql);
$searchParam = "%" . $search . "%";
$stmt->bind_param("ss", $searchParam, $searchParam);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Listings - FindIt@Campus</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div style="text-align: center; margin-top: 3rem; margin-bottom: 2rem;"> 
  <a href="new.php" style="
    color: #1e3a8a;
    text-decoration: underline;
    font-weight: 500;
    font-size: 1rem;
  ">← Back to Home</a>


</div>

  <header class="listing-header">
    <h1><?php echo ucfirst($type); ?> Items</h1>
  </header>

  <div class="tabs">
    <a href="listings.php?type=lost" class="<?= $type === 'lost' ? 'active' : '' ?>">Lost Items</a>
    <a href="listings.php?type=found" class="<?= $type === 'found' ? 'active' : '' ?>">Found Items</a>
    

  </div>

 <form method="GET" action="listings.php" class="search-form">
  <input type="hidden" name="type" value="<?= $type ?>">
  <input type="text" name="search" placeholder="Search by item or location..." value="<?= htmlspecialchars($search) ?>" />
  <button type="submit">🔍 Search</button>
</form>


  <div class="listing-grid">
    <?php if ($result->num_rows > 0): ?>
      <?php while($row = $result->fetch_assoc()): ?>
        <div class="card">
          
          <h3><?= htmlspecialchars($row['item_name']) ?></h3>
          <p><strong>Location:</strong> <?= htmlspecialchars($row['location']) ?></p>
          

          <p><strong>Description:</strong> <?= htmlspecialchars($row['description']) ?></p>
          <p><strong>Contact:</strong> <?= htmlspecialchars($row['contact']) ?></p>
          <p><em>Reported on <?= date('d M Y', strtotime($row['date_reported'])) ?></em></p>
          <p>
    <a href="delete.php?id=<?= $row['id'] ?>&type=<?= $type ?>"
       onclick="return confirm('Are you sure you want to delete this item?')"
       style="color: red; text-decoration: underline;">🗑️ Delete</a>
  </p>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p style="text-align:center;">No items found.</p>
    <?php endif; ?>
  </div>
</body>
</html>
