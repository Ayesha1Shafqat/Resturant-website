<?php
session_start();
include("db_connect.php"); // replace with your actual DB config file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $checkQuery = $conn->prepare("SELECT * FROM admins WHERE email = ?");
    $checkQuery->bind_param("s", $email);
    $checkQuery->execute();
    $result = $checkQuery->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['signup_error'] = "Email already exists.";
        header("Location: admin_signup.php");
        exit();
    }

    // Insert into admin table
    $insertQuery = $conn->prepare("INSERT INTO admins (email, password) VALUES (?, ?)");
    $insertQuery->bind_param("ss", $email, $password);

    if ($insertQuery->execute()) {
        $_SESSION['signup_success'] = "Signup successful. Please login.";
        header("Location: admin_login.php");
        exit();
    } else {
        $_SESSION['signup_error'] = "Signup failed. Try again.";
        header("Location: admin_signup.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Signup - FoodNest</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body {
      background: #fdf6f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      width: 360px;
    }

    h2 {
      color: #27ae60;
      margin-bottom: 20px;
      text-align: center;
    }

    label {
      font-weight: 600;
      margin-bottom: 5px;
      display: block;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #27ae60;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background-color: #219150;
    }

    p {
      text-align: center;
      color: red;
    }

    .login-link {
      margin-top: 10px;
      text-align: center;
    }

    .login-link a {
      text-decoration: none;
      color: #27ae60;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <form action="" method="POST">
    <h2>Admin Signup</h2>

    <?php
    if (isset($_SESSION['signup_error'])) {
        echo "<p>" . $_SESSION['signup_error'] . "</p>";
        unset($_SESSION['signup_error']);
    }

    if (isset($_SESSION['signup_success'])) {
        echo "<p style='color:green;'>" . $_SESSION['signup_success'] . "</p>";
        unset($_SESSION['signup_success']);
    }
    ?>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Sign Up</button>

    <div class="login-link">
      Already have an account? <a href="admin_login.php">Login here</a>
    </div>
  </form>

</body>
</html>
