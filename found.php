<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Report Lost Item - findit@campus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f0f4f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      background-color: #ffffff;
      padding: 2.5rem 3rem;
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #1e3a8a;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: #374151;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    textarea {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #d1d5db;
      border-radius: 6px;
      margin-bottom: 1.25rem;
      font-size: 1rem;
    }

    textarea {
      resize: vertical;
      height: 100px;
    }

    input[type="submit"] {
      background-color: #3b82f6;
      color: white;
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: 6px;
      font-size: 1rem;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #2563eb;
    }

    .back-link {
      text-align: center;
      margin-top: 1rem;
    }

    .back-link a {
      color: #3b82f6;
      text-decoration: none;
    }

    .back-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Report Found Item</h2>
    <form action="found_process.php" method="post">
      <label for="item">Item Name:</label>
      <input type="text" id="item" name="item" required>

      <label for="location">Lost Location:</label>
      <input type="text" id="location" name="location" required>

      <label for="date">Date Lost:</label>
      <input type="date" id="date" name="date" required>

      <label for="description">Description:</label>
      <textarea id="description" name="description" required></textarea>

      <label for="contact">Your Contact Info:</label>
      <input type="text" id="contact" name="contact" required>

      <input type="submit" value="Submit Report">
    </form>

    <div class="back-link">
      <a href="index.php">← Back to Home</a>
    </div>
  </div>

</body>
</html>
