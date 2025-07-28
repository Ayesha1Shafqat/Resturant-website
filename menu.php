<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Menu | FoodNest</title>
  <link rel="stylesheet" href="menu.css" />
</head>
<body>

  <!-- 🌟 Navbar -->
  <header class="navbar">
    <div class="logo">🍔 FoodNest</div>
    <nav>
      <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="menu.php" class="active">Menu</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- 🔍 Search & Filter -->
  <section class="search-section">
    <input type="text" id="searchInput" placeholder="Search for dishes..." />
    <div class="categories">
      <button onclick="filterMenu('all')">All</button>
      <button onclick="filterMenu('starters')">Starters</button>
      <button onclick="filterMenu('main')">Main Course</button>
      <button onclick="filterMenu('desserts')">Desserts</button>
      <button onclick="filterMenu('beverages')">Beverages</button>
    </div>
  </section>

  <!-- 🍽️ Menu Items -->
  <section class="menu-container" id="menuContainer">

    <?php
    $menuItems = [
      ["category" => "main", "img" => "cheeseburger.jpg", "title" => "Cheesy Burger", "desc" => "Beef patty with double cheese and house sauce", "price" => 499],
      ["category" => "starters", "img" => "loadedfries.jpg", "title" => "Loaded Fries", "desc" => "Fries topped with cheese, jalapeños & secret sauce", "price" => 299],
      ["category" => "beverages", "img" => "froutsmoothie.jpg", "title" => "Fruit Smoothie", "desc" => "Fresh seasonal fruit blended with yogurt", "price" => 199],
      ["category" => "desserts", "img" => "brownie.jpg", "title" => "Chocolate Brownie", "desc" => "Fudgy warm brownie with vanilla ice cream", "price" => 249],
      ["category" => "main", "img" => "pizza.jpg", "title" => "Spicy Chicken Pizza", "desc" => "Wood-fired pizza topped with grilled chicken", "price" => 799],
      ["category" => "starters", "img" => "nachos.jpg", "title" => "Loaded Nachos", "desc" => "Crunchy nachos layered with cheese, beans & salsa", "price" => 349],
      ["category" => "beverages", "img" => "lemonada.jpg", "title" => "Mint Lemonade", "desc" => "Refreshing lemonade with mint and lemon zest", "price" => 149],
      ["category" => "desserts", "img" => "cake.jpg", "title" => "Molten Lava Cake", "desc" => "Warm chocolate cake with a gooey lava center", "price" => 299],
      ["category" => "main", "img" => "shawarma.jpg", "title" => "Chicken Shawarma", "desc" => "Grilled marinated chicken wrapped in soft pita bread", "price" => 399],
      ["category" => "starters", "img" => "rolls.jpg", "title" => "Veggie Spring Rolls", "desc" => "Crispy rolls stuffed with seasoned vegetables", "price" => 199],
      ["category" => "main", "img" => "steak.jpg", "title" => "Grilled Steak", "desc" => "Juicy steak grilled to perfection with herbs", "price" => 899],
      ["category" => "beverages", "img" => "icedcoffee.jpg", "title" => "Iced Coffee", "desc" => "Chilled coffee blended with milk and a shot of espresso", "price" => 249],
      ["category" => "desserts", "img" => "Triamisu.jpg", "title" => "Classic Tiramisu", "desc" => "Layers of coffee-soaked ladyfingers and mascarpone cream", "price" => 399],
      ["category" => "desserts", "img" => "donut.jpg", "title" => "Choco Glazed Donut", "desc" => "Soft, fluffy donut topped with rich chocolate glaze", "price" => 149],
      ["category" => "desserts", "img" => "icecream.jpg", "title" => "Vanilla Dream Ice Cream", "desc" => "Vanilla scoop served with caramel drizzle and nuts", "price" => 199],
      ["category" => "beverages", "img" => "StrawberryLemonade.jpg", "title" => "Strawberry Lemonade", "desc" => "Cool and fizzy Strawberry Lemonade blend", "price" => 169]
    ];

    foreach ($menuItems as $item) {
      echo '<div class="menu-item ' . $item["category"] . '">';
      echo '  <img src="images/' . $item["img"] . '" alt="' . $item["title"] . '">';
      echo '  <h3>' . $item["title"] . '</h3>';
      echo '  <p>' . $item["desc"] . '</p>';
      echo '  <p class="price">Rs. ' . $item["price"] . '</p>';
      echo '  <button onclick="orderNow(\'' . urlencode($item["title"]) . '\')">Order Now</button>';
      echo '</div>';
    }
    ?>
  </section>

  <!-- 🔗 Footer -->
  <footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> FoodNest. All rights reserved.</p>
  </footer>

  <!-- 💡 Script -->
  <script>
    const isLoggedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;

    function orderNow(item) {
      if (!isLoggedIn) {
        window.location.href = 'login.php';
      } else {
        window.location.href = 'order.php?item=' + item;
      }
    }

    function filterMenu(category) {
      const items = document.querySelectorAll('.menu-item');
      items.forEach(item => {
        if (category === 'all' || item.classList.contains(category)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }

    document.getElementById('searchInput').addEventListener('keyup', function () {
      const value = this.value.toLowerCase();
      const items = document.querySelectorAll('.menu-item');
      items.forEach(item => {
        const name = item.querySelector('h3').innerText.toLowerCase();
        item.style.display = name.includes(value) ? 'block' : 'none';
      });
    });
  </script>

</body>
</html>
