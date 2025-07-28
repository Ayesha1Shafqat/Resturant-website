<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit();
}

$itemKey = $_GET['item'] ?? 'burger';

// Sample data — ideally from database
$menuItems = [
  'burger' => [
    'title' => 'Cheesy Burger',
    'description' => 'Beef patty with double cheese and house sauce.',
    'price' => 450,
    'image' => 'images/cheeseburger.jpg'
  ],
  'fries' => [
    'title' => 'Loaded Fries',
    'description' => 'Fries topped with cheese, jalapeños & secret sauce.',
    'price' => 250,
    'image' => 'images/loadedfries.jpg'
  ],
  'smoothie' => [
    'title' => 'Fruit Smoothie',
    'description' => 'Fresh seasonal fruit blended with yogurt.',
    'price' => 300,
    'image' => 'images/froutsmoothie.jpg'
  ],
  // Add other items similarly...
];

$item = $menuItems[$itemKey] ?? null;

if (!$item) {
  echo "<h2>Item not found.</h2>";
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order - <?= htmlspecialchars($item['title']) ?></title>
  <link rel="stylesheet" href="order.css">
</head>
<body>
  <div class="order-wrapper">
    <h1><?= htmlspecialchars($item['title']) ?></h1>
    <img src="<?= $item['image'] ?>" alt="<?= htmlspecialchars($item['title']) ?>">
    <p><?= htmlspecialchars($item['description']) ?></p>
    <p><strong>Price:</strong> Rs. <?= $item['price'] ?></p>

    <form action="confirm_order.php" method="POST">
      <input type="hidden" name="item_key" value="<?= htmlspecialchars($itemKey) ?>">
      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" name="quantity" min="1" value="1" required>

      <button type="submit">✅ Confirm Order</button>
    </form>
  </div>
</body>
</html>
