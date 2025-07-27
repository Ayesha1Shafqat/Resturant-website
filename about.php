<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us | FoodNest</title>
  <link rel="stylesheet" href="about.css" />
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
</head>
<body>
  <!-- 🌟 Navbar -->
  <header class="navbar">
    <div class="logo">🍔 FoodNest</div>
    <nav>
      <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="about.php" class="active">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- 🧾 About Section -->
  <section class="about-section" data-aos="fade-up">
    <div class="about-text">
      <h1>About FoodNest</h1>
      <p>
        At <strong>FoodNest</strong>, we believe fast food should be fresh, flavorful, and full of heart.
        Born out of love for comfort food and community vibes, we bring you the best burgers, snacks, desserts, and drinks — all under one cozy digital nest.
      </p>
      <p>
        Whether you're dining in or ordering from your couch, our goal is to deliver joy — one bite at a time.
        Welcome to the nest that feeds your soul!
      </p>
    </div>
    <div class="about-image">
      <img src="images/aboutus.jpg" alt="FoodNest interior or team" />
    </div>
  </section>

  <!-- 💬 Our Story -->
  <section class="story-section" data-aos="fade-right">
    <h2>📖 Our Story</h2>
    <p>
      FoodNest began as a small kitchen with big dreams. What started as a weekend food stall quickly grew into a brand loved by families, students, and foodies alike.
      Our founder, Zara, envisioned a cozy place where flavors from all over could nest together — and that dream became FoodNest.
    </p>
  </section>

  <!-- 💎 Our Promise -->
  <section class="promise-section" data-aos="fade-left">
    <h2>💎 Our Promise</h2>
    <ul>
      <li>✅ 100% Fresh Ingredients</li>
      <li>✅ Fast & Friendly Service</li>
      <li>✅ Affordable Prices</li>
      <li>✅ Hygienic & Safe Preparation</li>
    </ul>
  </section>

  <!-- ❤️ Why People Love Us -->
  <section class="why-section" data-aos="fade-up">
    <h2>❤️ Why People Love FoodNest</h2>
    <div class="reasons">
      <div class="reason-box">👨‍👩‍👧‍👦 Family-friendly</div>
      <div class="reason-box">🚀 Super Fast Delivery</div>
      <div class="reason-box">🍩 Variety of Dishes</div>
      <div class="reason-box">💖 Passionate Team</div>
    </div>
  </section>

  <!-- 👥 Testimonials -->
  <section class="testimonials-section" data-aos="zoom-in">
    <h2>🌟 What Our Customers Say</h2>
    <div class="testimonial">
      <p>"FoodNest never disappoints! Always hot, tasty, and on time." — <strong>Areeba M.</strong></p>
    </div>
    <div class="testimonial">
      <p>"Their molten lava cake is a dream! 💖" — <strong>Usman T.</strong></p>
    </div>
    <div class="testimonial">
      <p>"Best fries in town, and the staff is so friendly!" — <strong>Fatima S.</strong></p>
    </div>
  </section>

  <!-- 🕰️ Visit Us -->
  <section class="visit-section" data-aos="fade-up">
    <h2>📍 Visit Us</h2>
    <p>📍 Gulberg, Lahore | ⏰ Open Daily: 12 PM – 11 PM</p>
    <a href="https://maps.google.com?q=Gulberg+Lahore" target="_blank" class="cta-button">📍 View on Map</a>
  </section>

  <!-- 👩‍🍳 Meet the Team -->
  <section class="team-section" data-aos="fade-up">
    <h2>👩‍🍳 Meet Our Team</h2>
    <div class="team-container">
      <div class="team-member">
        <img src="images/sara.jpg" alt="Chef">
        <h3>Chef Ayesha</h3>
        <p>Head of Flavor & Innovation</p>
      </div>
      <div class="team-member">
        <img src="images/ali.jpg" alt="Manager">
        <h3>Ali Raza</h3>
        <p>Operations & Customer Care</p>
      </div>
      <div class="team-member">
        <img src="images/barista.jpg" alt="Barista">
        <h3>Ayesha Shafqat</h3>
        <p>Beverage Wizard</p>
      </div>
    </div>
  </section>

  <!-- 📜 AOS Script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>AOS.init();</script>

  <!-- 🔗 Footer -->
  <footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> FoodNest. All rights reserved.</p>
  </footer>
</body>
</html>
