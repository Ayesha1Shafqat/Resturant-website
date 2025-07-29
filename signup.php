<?php
session_start();

// Redirect if already logged in
if (isset($_SESSION['user_id'])) {
  header("Location: index.php");
  exit();
}

$error = "";
$success = "";

// Form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"] ?? "";
  $email = $_POST["email"] ?? "";
  $password = $_POST["password"] ?? "";
  $confirmPassword = $_POST["confirm_password"] ?? "";

  // Validate
  if ($password !== $confirmPassword) {
    $error = "Passwords do not match.";
  } else {
    // DB connection
    $conn = new mysqli("localhost", "root", "", "foodnest_db");
    if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }

    // Check if email exists
    $email = $conn->real_escape_string($email);
    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check->num_rows > 0) {
      $error = "Email is already registered.";
    } else {
      // Hash password
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      $name = $conn->real_escape_string($name);

      // Image Upload
      $imagePath = "";
      if (!empty($_FILES["image"]["name"])) {
        $targetDir = "uploads/";
        $fileName = basename($_FILES["image"]["name"]);
        $imagePath = $targetDir . time() . "_" . $fileName;
        move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
      }

      // Insert
      $stmt = $conn->prepare("INSERT INTO users (name, email, password, image) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $name, $email, $hashedPassword, $imagePath);

      if ($stmt->execute()) {
        $success = "Account created successfully! You can now <a href='login.php'>Login</a>.";
      } else {
        $error = "Something went wrong. Try again.";
      }

      $stmt->close();
    }

    $conn->close();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Signup - FoodNest</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="signup.css" />
</head>
<body>
  <div class="signup-container">
    <h2>Join <span style="color:#e8491d;">FoodNest</span> 🍕</h2>
    
    <?php if ($error): ?>
      <div class="error-msg"><?= $error ?></div>
    <?php endif; ?>
    <?php if ($success): ?>
      <div class="success-msg"><?= $success ?></div>
    <?php endif; ?>
    
    <form method="POST" enctype="multipart/form-data" class="signup-form">
      <input type="text" name="name" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="password" name="password" placeholder="Password" required />
      <input type="password" name="confirm_password" placeholder="Confirm Password" required />
      <input type="file" name="image" accept="image/*" />
      <button type="submit">Create Account</button>
    </form>
    
    <p>Already have an account? <a href="login.php">Login here</a></p>
  </div>
</body>
</html>
