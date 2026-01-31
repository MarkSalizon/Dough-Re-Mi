<?php
session_start();
if (isset($_SESSION["user_id"])) {
    header("Location: home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dough Re Mi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css" />
</head>
<body>

<!-- AUTH BUTTONS -->
<div class="auth-buttons">
  <a href="#loginModal">Log In</a>
  <a href="#signupModal">Sign Up</a>
</div>

<!-- HERO -->
<section class="hero">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h1 class="hero-title">Dough Re Mi</h1>
    <p class="hero-subtitle">
      Where every bite sings sweetness.<br>
      PREMIUM BAKED GOODS MADE WITH LOVE
    </p>
    <a href="#loginModal" class="btn-primary">ENTER SHOP</a>
  </div>
</section>

<!-- ABOUT / OUR STORY -->
<section class="about-section">
  <div class="about-container">
    <div class="about-text">
      <h2>Our Story</h2>
      <p>
        At Dough Re Mi, every creation starts with a passion for baking and a love for bringing joy to people’s lives. 
        Our bakery began as a small family venture, inspired by traditional recipes and a desire to craft desserts 
        that not only taste incredible but also tell a story. From the very first cake we baked to the elaborate 
        pastries we create today, every item is crafted with care, precision, and the finest ingredients. 
        We believe that a dessert is more than just a sweet treat—it’s a moment, a memory, and an experience.
      </p>
      <p>
        Over the years, we have honed our craft, blending classic baking techniques with innovative flavors 
        to delight every palate. Our signature cakes, buttery pastries, and decadent desserts are made fresh 
        daily, ensuring each bite is a burst of flavor and happiness. At Dough Re Mi, we don’t just bake; 
        we create experiences that linger long after the last crumb is enjoyed. Join us on our sweet journey, 
        and let your taste buds sing!
      </p>
    </div>
    <div class="about-images">
      <img src= "img/v.jpg"/> 
      <img src= "img/c.jpg"/>
      <img src="img/t.webp" />
      <img src="img/g.webp" />
      
    </div>
  </div>
</section>

<!-- FEATURED PRODUCTS -->
<section class="products-section">
  <h2>Our Best Selling Products</h2>

  <div class="products-grid">
    <div class="product-card">
      <img src="img/a.jpg" />
      <h3>Chocolate Cake</h3>
      <p>A piece of art baked with love and care.</p>
    </div>

    <div class="product-card">
      <img src="img/r.jpg" />
      <h3>Cinnamon Rolls</h3>
      <p>Creamy and baked fresh daily.</p>
    </div>

    <div class="product-card">
      <img src="img/h.webp" />
      <h3>Hot Choco</h3>
      <p>Hot and Sweet that we all need in everyday.</p>
    </div>
  </div>
</section>

<!-- CONTACT US -->
<section class="contact-section">
  <h2>Contact Us</h2>
  <div class="contact-content">
    <div class="contact-item">
      <i class="fas fa-map-marker-alt"></i>
      <p>Dough Re Mi Bakery, Philippines</p>
    </div>
    <div class="contact-item">
      <i class="fas fa-phone-alt"></i>
      <p>+63 912 345 6789</p>
    </div>
    <div class="contact-item">
      <i class="fas fa-envelope"></i>
      <p>dougremi@gmail.com</p>
    </div>
  </div>
</section>

<!-- Include Font Awesome CDN in <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>


<!-- FOOTER -->
<footer class="footer">
  <p>© <?php echo date("Y"); ?> Dough Re Mi Bakery</p>
  <p>Crafted with ❤️ and sugar</p>
</footer>

<!-- LOGIN MODAL -->
<div id="loginModal" class="modal">
  <div class="modal-content">
    <a href="#" class="close">&times;</a>
    <h2>Log In</h2>
    <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button class="modal-btn" type="submit">Log In</button>
    </form>
    <p class="switch-text">Don’t have an account? <a href="#signupModal">Sign Up</a></p>
  </div>
</div>

<!-- SIGNUP MODAL -->
<div id="signupModal" class="modal">
  <div class="modal-content">
    <a href="#" class="close">&times;</a>
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button class="modal-btn" type="submit">Create Account</button>
    </form>
    <p class="switch-text">Already have an account? <a href="#loginModal">Log In</a></p>
  </div>
</div>

</body>
</html>
