<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: admin_login.php");
  exit();
}
include('db_connect.php');

$sql = "SELECT * FROM menu_items ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Menu Items</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f8f8f8;
      padding: 30px;
    }
    h2 {
      text-align: center;
      color: #ff6600;
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }
    th {
      background: #ff6600;
      color: white;
    }
    img {
      max-width: 80px;
    }
    .actions a {
      text-decoration: none;
      padding: 6px 10px;
      border-radius: 5px;
      font-size: 14px;
      margin-right: 5px;
    }
    .edit {
      background-color: #28a745;
      color: white;
    }
    .delete {
      background-color: #dc3545;
      color: white;
    }
    .back {
      text-align: center;
      margin-top: 20px;
    }
    .back a {
      text-decoration: none;
      color: #444;
    }
  </style>
</head>
<body>
  <h2>📋 All Menu Items</h2>
  <table>
    <tr>
      <th>#</th>
      <th>Image</th>
      <th>Name</th>
      <th>Price</th>
      <th>Category</th>
      <th>Actions</th>
    </tr>
    <?php if ($result->num_rows > 0): ?>
      <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><img src="<?= $row['image'] ?>" alt=""></td>
          <td><?= htmlspecialchars($row['name']) ?></td>
          <td>Rs <?= number_format($row['price'], 2) ?></td>
          <td><?= htmlspecialchars($row['category']) ?></td>
          <td class="actions">
            <a class="edit" href="edit_item.php?id=<?= $row['id'] ?>">Edit</a>
            <!-- Optional delete link: -->
            <!-- <a class="delete" href="delete_item.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a> -->
          </td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="6" style="text-align:center;">No items found.</td></tr>
    <?php endif; ?>
  </table>

  <div class="back">
    <a href="admin_dashboard.php">← Back to Dashboard</a>
  </div>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: admin_login.php");
  exit();
}
include('db_connect.php');

$sql = "SELECT * FROM menu_items ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Menu Items</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f8f8f8;
      padding: 30px;
    }
    h2 {
      text-align: center;
      color: #ff6600;
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }
    th {
      background: #ff6600;
      color: white;
    }
    img {
      max-width: 80px;
    }
    .actions a {
      text-decoration: none;
      padding: 6px 10px;
      border-radius: 5px;
      font-size: 14px;
      margin-right: 5px;
    }
    .edit {
      background-color: #28a745;
      color: white;
    }
    .delete {
      background-color: #dc3545;
      color: white;
    }
    .back {
      text-align: center;
      margin-top: 20px;
    }
    .back a {
      text-decoration: none;
      color: #444;
    }
  </style>
</head>
<body>
  <h2>📋 All Menu Items</h2>
  <table>
    <tr>
      <th>#</th>
      <th>Image</th>
      <th>Name</th>
      <th>Price</th>
      <th>Category</th>
      <th>Actions</th>
    </tr>
    <?php if ($result->num_rows > 0): ?>
      <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><img src="<?= $row['image'] ?>" alt=""></td>
          <td><?= htmlspecialchars($row['name']) ?></td>
          <td>Rs <?= number_format($row['price'], 2) ?></td>
          <td><?= htmlspecialchars($row['category']) ?></td>
          <td class="actions">
            <a class="edit" href="edit_item.php?id=<?= $row['id'] ?>">Edit</a>
            <!-- Optional delete link: -->
            <!-- <a class="delete" href="delete_item.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a> -->
          </td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="6" style="text-align:center;">No items found.</td></tr>
    <?php endif; ?>
  </table>

  <div class="back">
    <a href="admin_dashboard.php">← Back to Dashboard</a>
  </div>
</body>
</html>
