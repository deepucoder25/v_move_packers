<?php
?>

<!-- ==========================================================================
     MAIN SITE FOOTER SECTION (Modern Light / White Theme)
     ========================================================================== -->
<footer class="site-footer pt-5">
  <div class="container pb-4">
    <div class="row g-4 g-lg-5">
      <!-- Col 1: Brand & Credentials -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-col">
          <!-- Direct Attractive Brand Name -->
          <a href="<?= site_url() ?>" class="footer-brand-title-wrap d-inline-flex align-items-center gap-3 mb-3 text-decoration-none" aria-label="<?= $company3 ?>">
            <div class="footer-brand-symbol shadow-sm">
              <i class="bi bi-truck"></i>
            </div>
            <div class="footer-brand-text-block">
              <span class="footer-brand-title">V-MOVE</span>
              <span class="footer-brand-subtitle">PACKERS &amp; MOVERS</span>
            </div>
          </a>
          <p class="footer-about-text mb-3">
            <?= $company3 ?> is India's leading ISO 9001:2015 certified relocation specialist. Delivering seamless home, office, and vehicle transport solutions across 100+ cities with zero damage guarantee.
          </p>
          <!-- Trust Badges Row -->
          <div class="footer-trust-grid d-flex flex-wrap gap-2 mb-4">
            <div class="footer-badge-pill">
              <i class="bi bi-patch-check-fill"></i>
              <span>ISO 9001:2015</span>
            </div>
            <div class="footer-badge-pill">
              <i class="bi bi-star-fill text-warning"></i>
              <span><?= $ratingValue ?>/5 (<?= $ratingCount ?>+ Reviews)</span>
            </div>
            <div class="footer-badge-pill">
              <i class="bi bi-shield-check text-success"></i>
              <span>100% Transit Insured</span>
            </div>
          </div>
          <!-- Social Media Icons -->
          <div class="footer-social-links d-flex align-items-center gap-2">
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn wa-icon" aria-label="WhatsApp">
              <i class="bi bi-whatsapp"></i>
            </a>
            <a href="<?= $facebookhtml ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="<?= $instagramhtml ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Instagram">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="<?= $linkedinhtml ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="LinkedIn">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="<?= $youtubehtml ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="YouTube">
              <i class="bi bi-youtube"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Col 2: Relocation Services (Matches Navigation Exactly) -->
      <div class="col-lg-2 col-md-6 col-6">
        <div class="footer-col">
          <h5 class="footer-title fw-bold mb-3">Our Services</h5>
          <ul class="footer-links list-unstyled mb-0">
            <li><a href="<?= site_url('home-relocation') ?>"><i class="bi bi-chevron-right"></i> Household Shifting</a></li>
            <li><a href="<?= site_url('office-relocation') ?>"><i class="bi bi-chevron-right"></i> Office Relocation</a></li>
            <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-chevron-right"></i> Car Transportation</a></li>
            <li><a href="<?= site_url('bike-transportation') ?>"><i class="bi bi-chevron-right"></i> Bike Transportation</a></li>
            <li><a href="<?= site_url('packing-and-moving') ?>"><i class="bi bi-chevron-right"></i> Packing &amp; Moving</a></li>
            <li><a href="<?= site_url('loading-unloading') ?>"><i class="bi bi-chevron-right"></i> Loading &amp; Unloading</a></li>
          </ul>
        </div>
      </div>

      <!-- Col 3: Quick Links & Resources (Matches Navigation Exactly) -->
      <div class="col-lg-2 col-md-6 col-6">
        <div class="footer-col">
          <h5 class="footer-title fw-bold mb-3">Quick Links</h5>
          <ul class="footer-links list-unstyled mb-0">
            <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-chevron-right"></i> About Company</a></li>
            <li><a href="<?= site_url('why-choose-us') ?>"><i class="bi bi-chevron-right"></i> Why Choose Us</a></li>
            <li><a href="<?= site_url('photo-gallery') ?>"><i class="bi bi-chevron-right"></i> Photo Gallery</a></li>
            <li><a href="<?= site_url('video-gallery') ?>"><i class="bi bi-chevron-right"></i> Video Gallery</a></li>
            <li><a href="<?= site_url('reviews') ?>"><i class="bi bi-chevron-right"></i> Customer Reviews</a></li>
            <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-chevron-right"></i> Helpful FAQs</a></li>
            <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-chevron-right"></i> Our Branches</a></li>
            <li><a href="<?= site_url('tracking') ?>"><i class="bi bi-chevron-right"></i> Track Order <span class="badge rounded-pill pulse-badge text-white ms-1">LIVE</span></a></li>
            <li><a href="<?= site_url('blog') ?>"><i class="bi bi-chevron-right"></i> Moving Blog</a></li>
            <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-chevron-right"></i> Contact Us</a></li>
          </ul>
        </div>
      </div>

      <!-- Col 4: Contact & Help Info -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-col">
          <h5 class="footer-title fw-bold mb-3">Head Office &amp; Help</h5>
          <div class="footer-contact-items d-flex flex-column gap-3 mb-4">
            <!-- Address -->
            <div class="d-flex align-items-start gap-3">
              <span class="footer-contact-icon flex-shrink-0"><i class="bi bi-geo-alt-fill"></i></span>
              <div class="footer-contact-text">
                <span class="d-block fw-bold text-dark mb-1">Corporate Office</span>
                <span class="text-secondary"><?= $address ?></span>
              </div>
            </div>
            <!-- Phone -->
            <div class="d-flex align-items-start gap-3">
              <span class="footer-contact-icon flex-shrink-0"><i class="bi bi-telephone-fill"></i></span>
              <div class="footer-contact-text">
                <span class="d-block fw-bold text-dark mb-1">24x7 Customer Helpline</span>
                <a <?= $phonehtml ?> class="text-decoration-none fw-bold footer-phone-link"><?= $phone ?></a>
              </div>
            </div>
            <!-- Email -->
            <div class="d-flex align-items-start gap-3">
              <span class="footer-contact-icon flex-shrink-0"><i class="bi bi-envelope-fill"></i></span>
              <div class="footer-contact-text">
                <span class="d-block fw-bold text-dark mb-1">Email Support</span>
                <a href="<?= $mailhtml ?>" class="text-decoration-none footer-mail-link"><?= $mail ?></a>
              </div>
            </div>
            <!-- Hours -->
            <div class="d-flex align-items-start gap-3">
              <span class="footer-contact-icon flex-shrink-0"><i class="bi bi-clock-fill"></i></span>
              <div class="footer-contact-text">
                <span class="d-block fw-bold text-dark mb-1">Working Hours</span>
                <span class="text-secondary">24 Hours &bull; 7 Days a Week (All India)</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Copyright Bar -->
  <div class="footer-bottom-bar py-3">
    <div class="container">
      <div class="row align-items-center g-2 text-center text-md-start">
        <div class="col-md-6">
          <p class="mb-0 small text-white">
            &copy; <?= date('Y') ?> <span class="text-white fw-bold"><?= $company3 ?></span>. All Rights Reserved.
          </p>
        </div>
        <div class="col-md-6">
          <div class="d-flex align-items-center justify-content-center justify-content-md-end gap-3 small flex-wrap">
            <a href="<?= site_url('about-us') ?>" class="footer-bottom-link text-decoration-none">About Us</a>
            <span class="text-white-50">&bull;</span>
            <a href="<?= site_url('our-branches') ?>" class="footer-bottom-link text-decoration-none">Our Branches</a>
            <span class="text-white-50">&bull;</span>
            <a href="<?= site_url('tracking') ?>" class="footer-bottom-link text-decoration-none">Track Order</a>
            <span class="text-white-50">&bull;</span>
            <a href="<?= site_url('blog') ?>" class="footer-bottom-link text-decoration-none">Blog</a>
            <span class="text-white-50">&bull;</span>
            <a href="<?= site_url('contact-us') ?>" class="footer-bottom-link text-decoration-none">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Sticky Action Bar (Desktop Floating Dock + Mobile Sticky Bar) -->
<div class="site-sticky-bar">
  <div class="container py-1 px-3">
    <div class="d-flex align-items-center gap-2 sticky-actions-inner">
      <!-- Call Button -->
      <a <?= $phonehtml ?> class="btn sticky-btn-call d-flex align-items-center justify-content-center text-decoration-none" aria-label="Call <?= $phone ?>">
        <span class="sticky-icon-circle call-circle">
          <i class="bi bi-telephone-fill sticky-phone-ring"></i>
        </span>
        <span class="sticky-btn-label">Call Now</span>
      </a>

      <!-- Get Quote Button (Opens Quote Modal) -->
      <button type="button" class="btn sticky-btn-quote d-flex align-items-center justify-content-center text-decoration-none" data-bs-toggle="modal" data-bs-target="#qteModal" aria-label="Get Free Quote">
        <span class="sticky-icon-circle quote-circle">
          <i class="bi bi-lightning-charge-fill sticky-bolt-pulse"></i>
        </span>
        <span class="sticky-btn-label">Get Quote</span>
      </button>
    </div>
  </div>
</div>

<!-- Quote Modal Component -->
<?php $this->load->view('contacts/quotemodal'); ?>

<!-- Back to Top Button -->
<button type="button" class="btn btn-back-to-top shadow" id="btnBackToTop" aria-label="Back to Top">
  <i class="bi bi-arrow-up"></i>
</button>

<!-- Fallback & Interaction Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  var btnBackToTop = document.getElementById('btnBackToTop');
  if (btnBackToTop) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 300) {
        btnBackToTop.style.display = 'inline-flex';
      } else {
        btnBackToTop.style.display = 'none';
      }
    });

    btnBackToTop.addEventListener('click', function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/form.js') ?>"></script>
</body>
</html>
