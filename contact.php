<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us | FoodNest</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</head>
<body>

<!-- 🌐 Navbar -->
<header class="navbar">
  <div class="logo">🍔 FoodNest</div>
  <nav>
    <ul class="nav-links">
      <li><a href="home.php">Home</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php" class="active">Contact</a></li>
    </ul>
  </nav>
</header>

<!-- 📬 Contact Form Section -->
<section class="contact-section" data-aos="fade-up">
  <div class="form-info-wrapper">
    
    <!-- Left: Contact Form -->
    <div class="form-container">
      <h2>Contact Us</h2>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = htmlspecialchars($_POST['name']);
          $email = htmlspecialchars($_POST['email']);
          $message = htmlspecialchars($_POST['message']);
          echo "<div class='success-msg'>Thank you, <strong>$name</strong>! We'll get back to you soon.</div>";
      }
      ?>
      <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>

    <!-- Right: Info -->
    <div class="info-container">
      <h3>📍 Visit Us</h3>
      <p>FoodNest, Main Food Street, Lahore</p>

      <h3>📞 Call Us</h3>
      <p>+92 300 1234567</p>

      <h3>🕒 Opening Hours</h3>
      <p>Mon-Sun: 11 AM – 11 PM</p>

      <h3>📍 Google Map</h3>
      <div class="map-box">
        <iframe src="https://maps.google.com/maps?q=Food%20Street%20Lahore&t=&z=15&ie=UTF8&iwloc=&output=embed" 
          width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>

  </div>
</section>

<!-- 🔗 Footer -->
<footer class="footer">
  <p>&copy; <?php echo date("Y"); ?> FoodNest. All rights reserved.</p>
</footer>

<!-- AOS Animation Script -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
