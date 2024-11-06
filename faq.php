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


    <!-- FAQ Section -->
    <section class="faq" id="faq">
      <h2 class="faq-title">Apa yang perlu Anda ketahui?</h2>
      <div class="faq-grid">
        <div class="faq-item">
          <div class="faq-question">
            <h3>Kapan bulan terbaik untuk berwisata ke Bali?</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            <p>
              Waktu terbaik untuk mengunjungi Bali adalah selama musim kemarau,
              yaitu antara bulan April hingga Oktober. Pada periode ini, cuaca
              cenderung cerah dan kering, sempurna untuk aktivitas outdoor dan
              menikmati pantai.
            </p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h3>Bagaimana cara mendapatkan DISKON di Bali?</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            <p>
              Anda dapat mendapatkan diskon melalui kartu member BaliEscape,
              mengikuti social media kami untuk info promo terbaru, atau booking
              di low season. Kami juga menyediakan paket wisata dengan harga
              spesial untuk group.
            </p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h3>Apakah saya membutuhkan pemandu wisata?</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            <p>
              Meskipun Anda bisa menjelajahi Bali sendiri, pemandu wisata bisa
              memberikan pengalaman yang lebih mendalam dengan pengetahuan lokal
              mereka. Kami menyediakan pemandu berpengalaman dan bersertifikat.
            </p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            <h3>Bagaimana dengan transportasi di Bali?</h3>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="faq-answer">
            <p>
              BaliEscape menyediakan berbagai opsi transportasi mulai dari sewa
              motor, mobil pribadi dengan sopir, hingga shuttle bus untuk
              rombongan. Semua kendaraan kami terawat dan memiliki asuransi
              lengkap.
            </p>
          </div>
        </div>
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
    </div>

    <script src="script.js"></script>
    <!-- Linked to script.js ini maksudku nell -->
  </body>
</html>
