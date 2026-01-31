<?php
// You can add session start or other PHP logic here if needed later
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dough Re Mi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="home.css" />
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo"><img src="img/x.png"></div>
      <ul class="nav-menu">
        <li><a href="logout.php">LOGOUT</a></li>
        <li class="cart-icon">🛒</li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h1 class="hero-title">Dough Re Mi</h1>
    <p class="hero-subtitle">
      Dough re mi, let the flavors sing..<br />
      EXPERIENCE OUR BEST SELLING FOOD PRODUCTS
    </p>
    <a href="#" class="btn-primary">MENU</a>
    <a href="#" class="btn-primary2">ORDERS</a>
  </section>

  <section class="preview-cards">
    <div class="card card-left">
      <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=400&q=80" alt="Bakery Food" />
      <div class="card-text">
        <h3>Bakery Food</h3>
        <p>Explore our unique bakery delights.</p>
      </div>
    </div>
    <div class="card card-center">
      <img src="img/a.jpg" alt="Pastries" />
      <div class="card-text">
        <h3>Pastries & Sweets</h3>
        <p>Freshly baked treats every day.</p>
      </div>
    </div>
    <div class="card card-right">
      <img src="img/f.avif" alt="Coffee" />
      <div class="card-text">
        <h3>Perfect Coffee</h3>
        <p>The perfect drink companion for your treats.</p>
      </div>
    </div>
  </section>
</body>
</html>
