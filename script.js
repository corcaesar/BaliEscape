// FAQ Toggle
document.querySelectorAll(".faq-item").forEach((item) => {
  item.addEventListener("click", () => {
    item.classList.toggle("active");
  });
});

// Modal Functionality
const modal = document.querySelector(".modal");
const closeModal = document.querySelector(".close-modal");
const featureCards = document.querySelectorAll(".feature-card");

const serviceDetails = {
  hotel: {
    title: "Hotel & Villa",
    description:
      "Kami menyediakan berbagai pilihan akomodasi dari hotel bintang 5 hingga vila pribadi dengan pelayanan premium. Semua properti telah diverifikasi untuk memastikan kenyamanan Anda.",
    features: [
      "24/7 Room Service",
      "Kolam Renang",
      "Restaurant",
      "Spa",
      "Transfer Bandara",
    ],
  },
  discount: {
    title: "Kartu Diskon",
    description:
      "Dapatkan diskon spesial di berbagai merchant partner kami di seluruh Bali. Hemat hingga 50% untuk kuliner, aktivitas, dan tempat wisata.",
    features: [
      "Diskon Restaurant",
      "Diskon Aktivitas",
      "Diskon Spa",
      "Cashback",
      "Member Rewards",
    ],
  },
  motorcycle: {
    title: "Sewa Motor",
    description:
      "Nikmati kebebasan menjelajahi Bali dengan motor yang terawat. Tersedia berbagai jenis motor dari matic hingga sport.",
    features: [
      "Helm Gratis",
      "Asuransi",
      "Perawatan Rutin",
      "Layanan Antar-Jemput",
      "24/7 Support",
    ],
  },
  transport: {
    title: "Transportasi",
    description:
      "Layanan transportasi profesional dengan armada lengkap dan sopir berpengalaman untuk menjamin kenyamanan perjalanan Anda.",
    features: [
      "Airport Transfer",
      "Private Car",
      "Bus Wisata",
      "24/7 Booking",
      "Tour Paket",
    ],
  },
};

featureCards.forEach((card) => {
  card.addEventListener("click", () => {
    const service = card.dataset.service;
    const details = serviceDetails[service];

    document.getElementById("modal-details").innerHTML = `
          <h3>${details.title}</h3>
          <p>${details.description}</p>
          <ul>
              ${details.features
                .map((feature) => `<li>${feature}</li>`)
                .join("")}
          </ul>
      `;

    modal.style.display = "flex";
  });
});

closeModal.addEventListener("click", () => {
  modal.style.display = "none";
});

window.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
  }
});
document.addEventListener("DOMContentLoaded", function() {
  const featuresSection = document.getElementById('features');
  const featureCards = document.querySelectorAll('.feature-card');

  const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              featuresSection.classList.add('visible');
              featureCards.forEach((card, index) => {
                  setTimeout(() => {
                      card.classList.add('visible');
                  }, index * 100); // Menambahkan delay untuk setiap kartu
              });
              observer.unobserve(entry.target);
          }
      });
  });

  observer.observe(featuresSection);
});

document.addEventListener("DOMContentLoaded", function() {
  const heroContent = document.querySelector('.hero-content');

  const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              heroContent.classList.add('visible');
              observer.unobserve(entry.target);
          }
      });
  });

  observer.observe(heroContent);
});

document.addEventListener("DOMContentLoaded", function() {
  const activityCards = document.querySelectorAll('.activity-card');

  const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('visible');
              observer.unobserve(entry.target);
          }
      });
  });

  activityCards.forEach(card => {
      observer.observe(card);
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const faqSection = document.querySelector('.faq');

  function checkVisibility() {
      const rect = faqSection.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom >= 0) {
          faqSection.classList.add('visible');
      }
  }

  window.addEventListener('scroll', checkVisibility);
  checkVisibility(); // Panggil fungsi saat halaman pertama kali dimuat
});

