<?php
session_start();

// Redirect to login if not logged in
if (!isset($_SESSION['admin'])) {
  header("Location: admin_login.php");
  exit();
}

include('db_connect.php');

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $price = floatval($_POST['price']);
  $category = mysqli_real_escape_string($conn, $_POST['category']);

  // Prepare for image upload
  $target_dir = "uploads/";
  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true); // create folder if it doesn't exist
  }

  $image_name = basename($_FILES["image"]["name"]);
  $unique_name = time() . "_" . $image_name; // avoid filename collisions
  $target_file = $target_dir . $unique_name;

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $image_path = $target_file;

    // Insert item into the database
    $sql = "INSERT INTO menu_items (name, description, price, category, image)
            VALUES ('$name', '$description', $price, '$category', '$image_path')";

    if ($conn->query($sql)) {
      $message = "✅ Menu item added successfully!";
    } else {
      $message = "❌ Database error: " . $conn->error;
    }
  } else {
    $message = "❌ Failed to upload image.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Menu Item</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f8f8f8;
      display: flex;
      justify-content: center;
      padding: 50px 20px;
    }
    .form-box {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      width: 100%;
      max-width: 500px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
    }
    .form-box h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #ff6600;
    }
    .form-box input,
    .form-box textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    .form-box button {
      width: 100%;
      padding: 12px;
      background: #ff6600;
      color: #fff;
      border: none;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }
    .form-box button:hover {
      background: #e65c00;
    }
    .message {
      text-align: center;
      color: green;
      margin-bottom: 15px;
    }
    .back {
      text-align: center;
      margin-top: 20px;
    }
    .back a {
      color: #444;
      text-decoration: none;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="form-box">
    <h2>Add New Menu Item</h2>
    <?php if ($message): ?>
      <div class="message"><?= $message ?></div>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
      <input type="text" name="name" placeholder="Dish Name" required>
      <textarea name="description" placeholder="Description" rows="3" required></textarea>
      <input type="number" step="0.01" name="price" placeholder="Price (e.g. 1499.99)" required>
      <input type="text" name="category" placeholder="Category (e.g. Pizza, Drinks)" required>
      <input type="file" name="image" accept="image/*" required>
      <button type="submit">Add Item</button>
    </form>

    <div class="back">
      <a href="admin_dashboard.php">← Back to Dashboard</a>
    </div>
  </div>
</body>
</html>
