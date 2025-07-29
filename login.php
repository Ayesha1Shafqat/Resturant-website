<?php
session_start();

// Redirect if already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Handle login form submission
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    // Connect to DB (edit with your DB details)
    $conn = new mysqli("localhost", "root", "", "foodnest_db");
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Escape + query
    $email = $conn->real_escape_string($email);
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['name'];

            // Optional: redirect to previous order page if stored
            $redirect = $_SESSION['redirect_after_login'] ?? 'index.php';
            unset($_SESSION['redirect_after_login']);
            header("Location: $redirect");
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "No user found with that email.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - FoodNest</title>
  <link rel="stylesheet" href="login.css" />
</head>
<body>
  <div class="login-container">
    <h2>Welcome Back to <span style="color:#e8491d;">FoodNest</span> 🍽️</h2>
    <?php if ($error): ?>
      <div class="error-msg"><?= $error ?></div>
    <?php endif; ?>
    <form method="POST" class="login-form">
      <input type="email" name="email" placeholder="Enter your email" required />
      <input type="password" name="password" placeholder="Enter your password" required />
      <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="signup.php">Create one</a></p>
  </div>
</body>
</html>
