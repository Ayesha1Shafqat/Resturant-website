<?php
session_start();

// Replace these with values from your database if needed
$valid_email = "admin@foodnest.com";
$valid_password = "admin123"; // You can hash this later using password_hash

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // For now, we’re using simple values. You can switch to DB lookup later.
    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['admin'] = $email;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login - FoodNest</title>
  <style>
    body {
      font-family: Arial;
      background: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      width: 350px;
    }
    h2 {
      text-align: center;
      color: #ff6600;
    }
    input[type="email"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 15px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      background: #ff6600;
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background: #e65c00;
    }
    .error {
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Admin Login</h2>
    <?php if ($error): ?>
      <p class="error"><?= $error ?></p>
    <?php endif; ?>
    <form method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
