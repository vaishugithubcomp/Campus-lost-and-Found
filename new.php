<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);
$username = $isLoggedIn ? $_SESSION['user'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>findit@campus</title>
  <link rel="stylesheet" href="style.css">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  
</head>
<body>
  <header>
    <div class="logo">findit@campus</div>
    <nav>
      <a href="#">Home</a>
      <a href="#" onclick="showModal('lostModal')">Lost Items</a>
      <a href="#" onclick="showModal('foundModal')">Found Items</a>
      <a href="admin.html">Admin</a>

      
      <?php if ($isLoggedIn): ?>
  
  <a href="logout.php">Logout</a>
<?php else: ?>
  <a href="login.html">Login</a>
<?php endif; ?>

    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <?php if ($isLoggedIn): ?>
  <p style="font-size: 1.5rem; font-weight: 900; color: #1e3a8a; margin-bottom: 3rem;">
    👋 Welcome, <?= htmlspecialchars($username) ?>!
  </p>
<?php endif; ?>

      <h1>Lost Something? <br />Found Something ?</h1>
      <p>Report and recover items safely within campus.</p>
      <div class="buttons">
        <button onclick="showModal('lostModal')">Report Lost Item</button>
        <button onclick="showModal('foundModal')">Report Found Item</button>
        <button onclick="window.location.href='listings.php'">Browse Listings</button>
      </div>
    </div>
    <div class="illustration">
      <img src="girl.jpg.png" alt="Illustration of a person with backpack" />
    </div>
  </section>

    <div class="image-row">
    <div class="image-container">
      <img src="lost.png" alt="Report Lost" class="image">
      <div class="caption">
        <b>Report a Lost Item</b><br>
        Fill out a simple form to upload details of the item you've lost, including descriptions,contact information, and location.
      </div>
    </div>
    <div class="image-container">
      <img src="found.png" alt="Search Found" class="image">
      <div class="caption">
        <b>Search Found Items</b><br>
        Filter through a list of found items reported by others to see if your lost belongings have been recovered.
      </div>
    </div>
    <div class="image-container">
      <img src="lo&fo.png" alt="View History" class="image">
      <div class="caption">
        <b>View Lost & Found History</b><br>
        Access a complete log of all reported lost and found items on campus. 
        
      </div>
    </div>
  </div>

  <!-- Lost Item Modal -->
  <div id="lostModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('lostModal')">&times;</span>
      <h2>Report Lost Item</h2>
      <form action="submit_lost.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="item" placeholder="Item Name" required>
  <input type="text" name="location" placeholder="Last Seen Location" required>
 

  <textarea name="description" placeholder="Description"></textarea>
  <input type="text" name="contact" placeholder="Your Contact" required>
  
  <button type="submit">Submit</button>
</form>

    </div>
  </div>

  <!-- Found Item Modal -->
  <div id="foundModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal('foundModal')">&times;</span>
      <h2>Report Found Item</h2>
      <form action="submit_found.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="item" placeholder="Item Name" required>
  <input type="text" name="location" placeholder="Last Seen Location" required>
  

  <textarea name="description" placeholder="Description"></textarea>
  <input type="text" name="contact" placeholder="Your Contact" required>
  
  <button type="submit">Submit</button>
</form>

    </div>
  </div>

  <script>
    function showModal(id) {
      document.getElementById(id).style.display = 'block';
    }
    function closeModal(id) {
      document.getElementById(id).style.display = 'none';
    }
    window.onclick = function(event) {
      const modals = document.querySelectorAll('.modal');
      modals.forEach(modal => {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      });
    }
  </script>
</body>
</html>
