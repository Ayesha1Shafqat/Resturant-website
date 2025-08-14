<?php
session_start();

// Redirect if user not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Connect to DB
$conn = new mysqli("localhost", "root", "", "foodnest_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user details
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "User not found.";
    exit();
}

$user = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Profile - FoodNest</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #fff8f0;
    }

    .profile-container {
      max-width: 500px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .profile-container img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 3px solid #e8491d;
    }

    .profile-container h2 {
      margin-bottom: 10px;
    }

    .profile-container p {
      font-size: 16px;
      margin: 5px 0;
    }

    .profile-links a {
      display: inline-block;
      margin: 10px 5px;
      padding: 10px 15px;
      background-color: #e8491d;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s;
    }

    .profile-links a:hover {
      background-color: #c43d15;
    }
  </style>
</head>
<body>
  <div class="profile-container">
    <img src="<?= htmlspecialchars($user['image']) ?: 'default-profile.png' ?>" alt="Profile Picture">
    <h2><?= htmlspecialchars($user['name']) ?></h2>
    <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>

    <div class="profile-links">
      <a href="home.php">🏠 Home</a>
      <a href="logout.php">🚪 Logout</a>
       <a href="Edit_profile.php">Edit profile</a>
    </div>


  </div>

</body>
</html>
