<?php
session_start();

// Optional: Replace with database-driven login system later
$valid_username = 'admin';
$valid_password = 'foodnest123';

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    // If not logged in, redirect to login page
    header("Location: admin_login.php");
    exit();
}

// Get admin name/email from session
$admin = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>FoodNest | Admin Dashboard</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f6f6f6;
      margin: 0;
      padding: 0;
    }
    .dashboard {
      max-width: 800px;
      margin: 50px auto;
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }
    h1 {
      color: #ff6600;
      text-align: center;
    }
    .welcome {
      text-align: center;
      margin-bottom: 30px;
      font-size: 18px;
    }
    .nav-links {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .nav-links a {
      display: block;
      padding: 15px;
      background: #ff6600;
      color: white;
      text-decoration: none;
      font-weight: bold;
      text-align: center;
      border-radius: 8px;
      transition: 0.3s;
    }
    .nav-links a:hover {
      background: #e65c00;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <h1>🍴 FoodNest Admin Panel</h1>
    <div class="welcome">
      Welcome, <strong><?= htmlspecialchars($admin) ?></strong>!<br/>
      Manage your menu and keep things tasty. 😋
    </div>

    <div class="nav-links">
      <a href="add_item.php">➕ Add New Menu Item</a>
      <a href=view_menu.php">📋 View / Edit Menu</a>
      <a href="admin_logout.php">🚪 Logout</a>
    </div>
  </div>
</body>
</html>
