<!-- Start Footer -->
<footer class="footer">
  <div class="container">
      <!-- Logo dan Nama Website -->
      <div class="footer-logo text-center mb-4">
          <strong><span>SIMRATEK</span></strong>
          <p>Sistem Manajemen Ruangan dan Tempat untuk Event Kampus</p>
      </div>

      <!-- Informasi Kontak dan Media Sosial -->
      <div class="footer-contact text-center mb-4">
          <p>Contact us: <a href="mailto:info@simratek.com" class="footer-email">info@simratek.com</a></p>
          <div class="footer-social">
              <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
          </div>
      </div>

      <!-- Footer Copyright -->
      <div class="footer-bottom text-center">
          <p>&copy; Copyright <strong><span>SIMRATEK</span></strong>. All Rights Reserved</p>
          <p>
              <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat & Ketentuan</a>
          </p>
      </div>
  </div>
</footer>
<!-- End Footer -->
<style>
/* Footer Section */
.footer {
    background: linear-gradient(135deg, #9B5DE5, #00B4D8); /* Biru-ungu gradien */
    color: white;
    padding: 40px 0;
}

.footer .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Logo dan Nama Website */
.footer-logo {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 15px;
}

.footer-logo span {
    color: #FFD700; /* Warna emas untuk logo */
}

.footer-logo p {
    font-size: 1.1rem;
    color: #fff;
}

/* Menu Navigasi */
.footer-links {
    margin-bottom: 20px;
}

.footer-links a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-size: 1rem;
}

.footer-links a:hover {
    color: #FFD700;
}

.footer-social {
    margin-top: 10px;
}

.footer-social a {
    color: white;
    font-size: 1.5rem;
    margin: 0 10px;
    transition: color 0.3s ease;
}

.footer-social a:hover {
    color: #FFD700;
}

/* Newsletter */
.footer-newsletter p {
    font-size: 1.1rem;
    margin-bottom: 10px;
}

.newsletter-form {
    display: inline-block;
}

.newsletter-input {
    padding: 10px;
    font-size: 1rem;
    border-radius: 5px;
    border: none;
    margin-right: 10px;
    width: 250px;
}

.newsletter-input:focus {
    outline: none;
    border: 2px solid #FFD700;
}

.btn-primary {
    background: linear-gradient(135deg, #9B5DE5, #00B4D8);
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #00B4D8, #9B5DE5);
}

/* Footer Bottom */
.footer-bottom p {
    font-size: 1rem;
    margin-top: 15px;
}

.footer-bottom a {
    color: white;
    text-decoration: none;
    margin: 0 10px;
}

.footer-bottom a:hover {
    color: #FFD700;
}

/* Responsif */
@media (max-width: 768px) {
    .footer-logo {
        font-size: 1.5rem;
    }

    .footer-links a {
        font-size: 0.9rem;
        margin: 0 10px;
    }

    .footer-contact p {
        font-size: 0.9rem;
    }

    .newsletter-input {
        width: 200px;
    }

    .footer-bottom p {
        font-size: 0.9rem;
    }
}
</style>
