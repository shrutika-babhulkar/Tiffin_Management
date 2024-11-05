<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Tiffin Management System">
  <title>Tiffin Management System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Header Section -->
  <header class="header">
    <div class="container">
      <h1>Tiffin Management System</h1>
      <nav class="navbar">
        <a href="#services">Services</a>
        <a href="#about">About Us</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Contact</a>
        <a href="#admin">Admin</a>
        <!-- <a href="#contact">Register</a>
        <a href="#admin">Login</a> -->
      </nav>
      <nav  class="navbar2">
      <a href="#">Register</a>
        <a href="login.php">Login</a>

      </nav>
      
    </div>
   
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h2>Delicious, Home-Cooked Meals </h2>
      <p>Your health and satisfaction are our priorities. Enjoy balanced meals with our tiffin service.</p>
      <!-- <a href="#menu" class="btn">View Our Menu</a> -->
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services">
    <div class="container">
      <h2>Our Services</h2>
      <div class="service-list">
        <div class="service-item">
          <h3>Home Delivery</h3>
          <p>Get freshly prepared meals delivered to your home daily.</p>
        </div>
        <div class="service-item">
          <h3>Customizable Plans</h3>
          <p>Choose from various meal plans according to your dietary needs.</p>
        </div>
        <div class="service-item">
          <h3>Affordable Prices</h3>
          <p>Enjoy quality meals at budget-friendly prices.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us Section -->
  <section id="about" class="about">
    <div class="container">
      <h2>About Us</h2>
      <p>We are dedicated to providing healthy, delicious, and affordable meals to our clients. With a focus on quality and customer satisfaction, we aim to bring the taste of home-cooked meals to your doorstep every day.</p>
    </div>
  </section>

  <!-- Menu Section -->
  <section id="menu" class="menu">
    <div class="container">
      <h2>Our Menu</h2>
      <p>Explore a variety of nutritious and delicious options to suit your taste and dietary needs.</p>
      <!-- Add menu items here -->
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="contact">
    <div class="container">
      <h2>Contact Us</h2>
      <form action="#" method="post">
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
      </form>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2023 Tiffin Management System. All rights reserved.</p>
      <p>Follow us on:
        <a href="#">Facebook</a> | 
        <a href="#">Twitter</a> | 
        <a href="#">Instagram</a>
      </p>
    </div>
  </footer>

</body>
</html>
