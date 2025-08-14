<?php
header("Location: admin_dashboard.php");
include('db_connect.php'); // make sure this connects to your DB

$sql = "SELECT * FROM menu_items"; // table name
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Menu Items</title>
  <link rel="stylesheet" href="style.css"> <!-- your CSS file -->
  <style>
    body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 20px;
  background: #fefefe;
}

.menu-heading {
  text-align: center;
  font-size: 2.5rem;
  margin-bottom: 30px;
  color: #333;
}

.menu-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
  padding: 20px;
}

.menu-item {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  width: 280px;
  padding: 20px;
  text-align: center;
  transition: transform 0.3s;
}

.menu-item:hover {
  transform: translateY(-5px);
}

.menu-item img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 8px;
}

.menu-item h2 {
  font-size: 1.5rem;
  color: #333;
  margin: 15px 0 10px;
}

.menu-item p {
  font-size: 0.95rem;
  color: #666;
  margin: 5px 0;
}

.menu-item strong {
  font-size: 1.1rem;
  color: #000;
}

.btn {
  display: inline-block;
  margin-top: 10px;
  padding: 10px 20px;
  background: #ff6f61;
  color: white;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
  transition: background 0.3s;
}

.btn:hover {
  background: #e6594f;
}

.no-items {
  text-align: center;
  color: #777;
  font-size: 1.2rem;
}

  </style>
</head>

<body>

<h1 class="menu-heading">Our Menu</h1>

<div class="menu-container">
  <?php if ($result && $result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
      <div class="menu-item">
        <img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
        <h2><?= htmlspecialchars($row['name']) ?></h2>
        <p><?= htmlspecialchars($row['description']) ?></p>
        <p><strong>Rs. <?= htmlspecialchars($row['price']) ?></strong></p>
        <a href="order.php?item=<?= urlencode($row['name']) ?>" class="btn">Order Now</a>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <p class="no-items">No menu items available. Please check back later!</p>
  <?php endif; ?>
</div>

</body>
</html>
