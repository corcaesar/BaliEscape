<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BaliEscape - Your Ultimate Bali Travel Guide</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <!-- Linked to styles.css ini maksud aku -->
  </head>
  <body>
    <!-- Header -->
    <header>
      <nav>
        <div class="logo">
          <i class="fas fa-umbrella-beach logo-icon"></i>
          <h1>BaliEscape</h1>
        </div>
        <ul class="nav-links">
          <li><a href="index.html">Beranda</a></li>
          <li><a href="layanan.html">Layanan</a></li>
          <li><a href="aktivitas.html">Aktivitas</a></li>
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="login.html" class="auth-link">Login</a></li>
          <li><a href="signup.html" class="auth-link signup">Sign Up</a></li>
      </ul>
      </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
      <div class="hero-content">
        <h1>Jelajahi Keajaiban Pulau Dewata</h1>
        <p>Temukan pengalaman liburan tak terlupakan di Bali</p>
        <a href="layanan.html"class="cta-button">Mulai Petualangan</a>
      </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
      <div class="footer-content">
        <div class="footer-section">
          <h3>Tentang BaliEscape</h3>
          <p>
            Platform travel terpercaya untuk menjelajahi keindahan Pulau Bali
            dengan pengalaman tak terlupakan.
          </p>
        </div>
        <div class="footer-section">
          <h3>Kontak Kami</h3>
          <p>Email: info@baliescape.com</p>
          <p>Telepon: +62 361 123456</p>
          <p>WhatsApp: +62 812 3456 7890</p>
        </div>
        <div class="footer-section">
          <h3>Ikuti Kami</h3>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 BaliEscape. All rights reserved.</p>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal">
      <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2>Detail Layanan</h2>
        <div id="modal-details"></div>
      </div>
    </div>R

    <script src="script.js"></script>
    <!-- Linked to script.js ini maksudku nell -->
  </body>
</html>
