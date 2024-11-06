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
          </ul>
        </nav>
      </header>

    <!-- Hero Section -->


    <!-- Features Section -->
    <section class="features" id="features">
      <h2 class="features-title">Layanan Kami</h2>
      <div class="features-grid">
        <div class="feature-card" data-service="hotel">
          <i class="fas fa-hotel feature-icon"></i>
          <h3>Hotel & Villa</h3>
          <p>Temukan akomodasi terbaik sesuai budget Anda</p>
        </div>
        <div class="feature-card" data-service="discount">
          <i class="fas fa-percent feature-icon"></i>
          <h3>Kartu Diskon</h3>
          <p>Hemat dengan kartu diskon khusus wisatawan</p>
        </div>
        <div class="feature-card" data-service="motorcycle">
          <i class="fas fa-motorcycle feature-icon"></i>
          <h3>Sewa Motor</h3>
          <p>Jelajahi Bali dengan bebas dan nyaman</p>
        </div>
        <div class="feature-card" data-service="transport">
          <i class="fas fa-car feature-icon"></i>
          <h3>Transportasi</h3>
          <p>Layanan transportasi aman dan terpercaya</p>
        </div>
      </div>
    </section>

    <!-- Activities Section -->

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
    </div>

    <script src="script.js"></script>
    <!-- Linked to script.js ini maksudku nell -->
  </body>
</html>
