<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "foodnest_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_SESSION['user_id'];
$error = "";
$success = "";

// Handle update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $_POST["password"];
    $hashedPassword = $password ? password_hash($password, PASSWORD_DEFAULT) : null;

    // Image handling
    $imagePath = $_POST['current_image'];
    if (!empty($_FILES["image"]["name"])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        $fileName = basename($_FILES["image"]["name"]);
        $imagePath = $targetDir . time() . "_" . $fileName;

        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
            $error = "Image upload failed.";
        }
    }

    if (!$error) {
        $sql = "UPDATE users SET name=?, email=?, image=?";
        $params = [$name, $email, $imagePath];

        if ($hashedPassword) {
            $sql .= ", password=?";
            $params[] = $hashedPassword;
        }

        $sql .= " WHERE id=?";
        $params[] = $userId;

        $types = str_repeat("s", count($params) - 1) . "i";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param($types, ...$params);

        if ($stmt->execute()) {
            $success = "Profile updated!";
        } else {
            $error = "Update failed.";
        }

        $stmt->close();
    }
}

// Fetch user info
$result = $conn->query("SELECT * FROM users WHERE id = $userId");
$user = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile - FoodNest</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff9f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .signup-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="file"] {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button[type="submit"] {
            background-color: #e8491d;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #cf3c10;
        }

        img {
            display: block;
            margin: 10px auto;
            border-radius: 50%;
        }

        .error-msg, .success-msg {
            text-align: center;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 6px;
        }

        .error-msg {
            background-color: #ffd6d6;
            color: #c0392b;
        }

        .success-msg {
            background-color: #d6f5d6;
            color: #27ae60;
        }
    </style>
</head>
<body>
<div class="signup-container">
    <h2>Edit Your <span style="color:#e8491d;">Profile</span> 🍽️</h2>

    <?php if ($error): ?><div class="error-msg"><?= $error ?></div><?php endif; ?>
    <?php if ($success): ?><div class="success-msg"><?= $success ?></div><?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="name" value="<?= $user['name'] ?>" required />
        <input type="email" name="email" value="<?= $user['email'] ?>" required />
        <input type="password" name="password" placeholder="New Password (optional)" />
        <input type="file" name="image" accept="image/*" />
        <?php if ($user['image']): ?>
            <img src="<?= $user['image'] ?>" alt="Profile" style="width: 100px;">
        <?php endif; ?>
        <input type="hidden" name="current_image" value="<?= $user['image'] ?>" />
        <button type="submit">Update Profile</button>
    </form>
</div>
</body>
</html>
