<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodNest | Access Panel</title>
  <link rel="stylesheet" href="panel-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #ffe5ec, #f9dcc4);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.panel-container {
  text-align: center;
  background: white;
  padding: 40px 30px;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 400px;
}

.panel-container h1 {
  font-size: 28px;
  margin-bottom: 15px;
  color: #e63946;
}
.panel-container p {
  font-size: 16px;
  margin-bottom: 30px;
  color: #444;
}

.panel-buttons {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 15px;
}

.btn {
  text-decoration: none;
  padding: 12px 20px;
  font-weight: bold;
  border-radius: 8px;
  transition: all 0.3s ease;
  width: 140px;
  text-align: center;
  display: inline-block;
}

.admin-btn {
  background-color: #ff6b6b;
  color: white;
}
.admin-btn:hover {
  background-color: #e63946;
}

.customer-btn {
  background-color: #4ecdc4;
  color: white;
}
.customer-btn:hover {
  background-color: #3cbdb4;
}

  </style>
</head>

<body>

  <div class="panel-container">
    <h1>🍔 Welcome to FoodNest Control Panel</h1>
    <p>Please choose your access point:</p>

    <div class="panel-buttons">
      <a href="admin_login.php" class="btn admin-btn">Admin Dashboard</a>
      <a href="home.php" class="btn customer-btn">Customer Home</a>
    </div>
  </div>

</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodNest | Access Panel</title>
  <link rel="stylesheet" href="panel-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #ffe5ec, #f9dcc4);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.panel-container {
  text-align: center;
  background: white;
  padding: 40px 30px;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 400px;
}

.panel-container h1 {
  font-size: 28px;
  margin-bottom: 15px;
  color: #e63946;
}
.panel-container p {
  font-size: 16px;
  margin-bottom: 30px;
  color: #444;
}

.panel-buttons {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 15px;
}

.btn {
  text-decoration: none;
  padding: 12px 20px;
  font-weight: bold;
  border-radius: 8px;
  transition: all 0.3s ease;
  width: 140px;
  text-align: center;
  display: inline-block;
}

.admin-btn {
  background-color: #ff6b6b;
  color: white;
}
.admin-btn:hover {
  background-color: #e63946;
}

.customer-btn {
  background-color: #4ecdc4;
  color: white;
}
.customer-btn:hover {
  background-color: #3cbdb4;
}

  </style>
</head>

<body>

  <div class="panel-container">
    <h1>🍔 Welcome to FoodNest Control Panel</h1>
    <p>Please choose your access point:</p>

    <div class="panel-buttons">
      <a href="admin_login.php" class="btn admin-btn">Admin Dashboard</a>
      <a href="home.php" class="btn customer-btn">Customer Home</a>
    </div>
  </div>

</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodNest | Access Panel</title>
  <link rel="stylesheet" href="panel-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #ffe5ec, #f9dcc4);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.panel-container {
  text-align: center;
  background: white;
  padding: 40px 30px;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 400px;
}

.panel-container h1 {
  font-size: 28px;
  margin-bottom: 15px;
  color: #e63946;
}
.panel-container p {
  font-size: 16px;
  margin-bottom: 30px;
  color: #444;
}

.panel-buttons {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 15px;
}

.btn {
  text-decoration: none;
  padding: 12px 20px;
  font-weight: bold;
  border-radius: 8px;
  transition: all 0.3s ease;
  width: 140px;
  text-align: center;
  display: inline-block;
}

.admin-btn {
  background-color: #ff6b6b;
  color: white;
}
.admin-btn:hover {
  background-color: #e63946;
}

.customer-btn {
  background-color: #4ecdc4;
  color: white;
}
.customer-btn:hover {
  background-color: #3cbdb4;
}

  </style>
</head>

<body>

  <div class="panel-container">
    <h1>🍔 Welcome to FoodNest Control Panel</h1>
    <p>Please choose your access point:</p>

    <div class="panel-buttons">
      <a href="admin_login.php" class="btn admin-btn">Admin Dashboard</a>
      <a href="home.php" class="btn customer-btn">Customer Home</a>
    </div>
  </div>

</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodNest | Access Panel</title>
  <link rel="stylesheet" href="panel-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #ffe5ec, #f9dcc4);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.panel-container {
  text-align: center;
  background: white;
  padding: 40px 30px;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 400px;
}

.panel-container h1 {
  font-size: 28px;
  margin-bottom: 15px;
  color: #e63946;
}
.panel-container p {
  font-size: 16px;
  margin-bottom: 30px;
  color: #444;
}

.panel-buttons {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 15px;
}

.btn {
  text-decoration: none;
  padding: 12px 20px;
  font-weight: bold;
  border-radius: 8px;
  transition: all 0.3s ease;
  width: 140px;
  text-align: center;
  display: inline-block;
}

.admin-btn {
  background-color: #ff6b6b;
  color: white;
}
.admin-btn:hover {
  background-color: #e63946;
}

.customer-btn {
  background-color: #4ecdc4;
  color: white;
}
.customer-btn:hover {
  background-color: #3cbdb4;
}

  </style>
</head>

<body>

  <div class="panel-container">
    <h1>🍔 Welcome to FoodNest Control Panel</h1>
    <p>Please choose your access point:</p>

    <div class="panel-buttons">
      <a href="admin_login.php" class="btn admin-btn">Admin Dashboard</a>
      <a href="home.php" class="btn customer-btn">Customer Home</a>
    </div>
  </div>

</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodNest | Access Panel</title>
  <link rel="stylesheet" href="panel-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #ffe5ec, #f9dcc4);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.panel-container {
  text-align: center;
  background: white;
  padding: 40px 30px;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 400px;
}

.panel-container h1 {
  font-size: 28px;
  margin-bottom: 15px;
  color: #e63946;
}
.panel-container p {
  font-size: 16px;
  margin-bottom: 30px;
  color: #444;
}

.panel-buttons {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 15px;
}

.btn {
  text-decoration: none;
  padding: 12px 20px;
  font-weight: bold;
  border-radius: 8px;
  transition: all 0.3s ease;
  width: 140px;
  text-align: center;
  display: inline-block;
}

.admin-btn {
  background-color: #ff6b6b;
  color: white;
}
.admin-btn:hover {
  background-color: #e63946;
}

.customer-btn {
  background-color: #4ecdc4;
  color: white;
}
.customer-btn:hover {
  background-color: #3cbdb4;
}

  </style>
</head>

<body>

  <div class="panel-container">
    <h1>🍔 Welcome to FoodNest Control Panel</h1>
    <p>Please choose your access point:</p>

    <div class="panel-buttons">
      <a href="admin_login.php" class="btn admin-btn">Admin Dashboard</a>
      <a href="home.php" class="btn customer-btn">Customer Home</a>
    </div>
  </div>

</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodNest | Access Panel</title>
  <link rel="stylesheet" href="panel-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #ffe5ec, #f9dcc4);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.panel-container {
  text-align: center;
  background: white;
  padding: 40px 30px;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 400px;
}

.panel-container h1 {
  font-size: 28px;
  margin-bottom: 15px;
  color: #e63946;
}
.panel-container p {
  font-size: 16px;
  margin-bottom: 30px;
  color: #444;
}

.panel-buttons {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 15px;
}

.btn {
  text-decoration: none;
  padding: 12px 20px;
  font-weight: bold;
  border-radius: 8px;
  transition: all 0.3s ease;
  width: 140px;
  text-align: center;
  display: inline-block;
}

.admin-btn {
  background-color: #ff6b6b;
  color: white;
}
.admin-btn:hover {
  background-color: #e63946;
}

.customer-btn {
  background-color: #4ecdc4;
  color: white;
}
.customer-btn:hover {
  background-color: #3cbdb4;
}

  </style>
</head>

<body>

  <div class="panel-container">
    <h1>🍔 Welcome to FoodNest Control Panel</h1>
    <p>Please choose your access point:</p>

    <div class="panel-buttons">
      <a href="admin_login.php" class="btn admin-btn">Admin Dashboard</a>
      <a href="home.php" class="btn customer-btn">Customer Home</a>
    </div>
  </div>

</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodNest | Access Panel</title>
  <link rel="stylesheet" href="panel-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #ffe5ec, #f9dcc4);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.panel-container {
  text-align: center;
  background: white;
  padding: 40px 30px;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 400px;
}

.panel-container h1 {
  font-size: 28px;
  margin-bottom: 15px;
  color: #e63946;
}
.panel-container p {
  font-size: 16px;
  margin-bottom: 30px;
  color: #444;
}

.panel-buttons {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 15px;
}

.btn {
  text-decoration: none;
  padding: 12px 20px;
  font-weight: bold;
  border-radius: 8px;
  transition: all 0.3s ease;
  width: 140px;
  text-align: center;
  display: inline-block;
}

.admin-btn {
  background-color: #ff6b6b;
  color: white;
}
.admin-btn:hover {
  background-color: #e63946;
}

.customer-btn {
  background-color: #4ecdc4;
  color: white;
}
.customer-btn:hover {
  background-color: #3cbdb4;
}

  </style>
</head>

<body>

  <div class="panel-container">
    <h1>🍔 Welcome to FoodNest Control Panel</h1>
    <p>Please choose your access point:</p>

    <div class="panel-buttons">
      <a href="admin_login.php" class="btn admin-btn">Admin Dashboard</a>
      <a href="home.php" class="btn customer-btn">Customer Home</a>
    </div>
  </div>

</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FoodNest | Access Panel</title>
  <link rel="stylesheet" href="panel-style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(to right, #ffe5ec, #f9dcc4);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.panel-container {
  text-align: center;
  background: white;
  padding: 40px 30px;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 400px;
}

.panel-container h1 {
  font-size: 28px;
  margin-bottom: 15px;
  color: #e63946;
}
.panel-container p {
  font-size: 16px;
  margin-bottom: 30px;
  color: #444;
}

.panel-buttons {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 15px;
}

.btn {
  text-decoration: none;
  padding: 12px 20px;
  font-weight: bold;
  border-radius: 8px;
  transition: all 0.3s ease;
  width: 140px;
  text-align: center;
  display: inline-block;
}

.admin-btn {
  background-color: #ff6b6b;
  color: white;
}
.admin-btn:hover {
  background-color: #e63946;
}

.customer-btn {
  background-color: #4ecdc4;
  color: white;
}
.customer-btn:hover {
  background-color: #3cbdb4;
}

  </style>
</head>

<body>

  <div class="panel-container">
    <h1>🍔 Welcome to FoodNest Control Panel</h1>
    <p>Please choose your access point:</p>

    <div class="panel-buttons">
      <a href="admin_login.php" class="btn admin-btn">Admin Dashboard</a>
      <a href="home.php" class="btn customer-btn">Customer Home</a>
    </div>
  </div>

</body>
</html>
