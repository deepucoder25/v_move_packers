<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     ABOUT US SECTION WIDGET (Image Composition + Modern Relocation Story)
     ========================================================================== -->
<section class="home-section about-section" id="about-section" itemscope itemtype="https://schema.org/AboutPage">
  <div class="container">

    <!-- Main Content: Image Showcase on Left + Engaging Narrative on Right -->
    <div class="row align-items-center g-4 g-xl-5">
      
      <!-- Left Column: Visual Image Composition with Floating Badges -->
      <div class="col-12 col-lg-6">
        <div class="about-image-composition">
          <!-- Main Hero Image (Professional Packing Team) -->
          <div class="about-main-image-wrap">
            <img 
              src="<?= base_url('assets/img/about_packing.jpg') ?>" 
              alt="<?= $company3 ?> Trained Packing Crew Wrapping Furniture" 
              class="about-main-image img-fluid"
              loading="lazy"
              width="600"
              height="400"
            >
            <div class="about-image-gradient-overlay"></div>
          </div>

          <!-- Secondary Overlapping Image (Branded GPS Truck) -->
          <div class="about-secondary-image-wrap d-none d-sm-block">
            <img 
              src="<?= base_url('assets/img/about_truck.jpg') ?>" 
              alt="<?= $company3 ?> Branded Container Truck & Moving Crew" 
              class="about-secondary-image img-fluid"
              loading="lazy"
              width="280"
              height="190"
            >
            <span class="about-truck-tag"><i class="bi bi-truck"></i> Own GPS Fleet</span>
          </div>

          <!-- Floating Badge 1: Experience Pill (Top Left) -->
          <div class="about-floating-badge badge-experience">
            <div class="floating-badge-icon">
              <i class="bi bi-award-fill"></i>
            </div>
            <div class="floating-badge-text">
              <span class="badge-num"><?= $experience ?></span>
              <span class="badge-sub">Years of Trust</span>
            </div>
          </div>

          <!-- Floating Badge 2: Happy Clients (Bottom Left) -->
          <div class="about-floating-badge badge-rating">
            <div class="d-flex align-items-center gap-2 mb-1">
              <div class="badge-stars">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <strong class="text-white small">4.9 / 5</strong>
            </div>
            <span class="badge-sub-white">15,000+ Verified Moves</span>
          </div>

          <!-- Decorative Element -->
          <div class="about-decorative-dots"></div>
        </div>
      </div>

      <!-- Right Column: Relocation Value Proposition & Features -->
      <div class="col-12 col-lg-6">
        <div class="about-text-content">
          <div class="about-intro-badge">
            <i class="bi bi-shield-fill-check text-success"></i>
            <span>Verified &amp; Licensed Relocation Specialist</span>
          </div>

          <h3 class="about-heading">
            Your Belongings Are Safe In Our Hands From Pickup To Doorstep Unpacking
          </h3>

          <p class="about-description">
            Moving to a new home or relocating an office should be an exciting milestone, not a stressful ordeal. At <strong><?= $company3 ?></strong>, we combine modern logistical planning with surgical packing techniques to ensure every carton, delicate appliance, and piece of luxury furniture arrives intact.
          </p>

          <!-- 4 Feature Cards (2x2 Grid) -->
          <div class="about-features-grid">
            <div class="about-feature-card">
              <div class="feature-card-icon">
                <i class="bi bi-layers-fill"></i>
              </div>
              <div>
                <h4 class="feature-card-title">5-Layer Defensive Packing</h4>
                <p class="feature-card-desc">Bubble wraps, corrugated sheets, foam edge guards &amp; crating.</p>
              </div>
            </div>

            <div class="about-feature-card">
              <div class="feature-card-icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <h4 class="feature-card-title">Real-Time GPS Tracking</h4>
                <p class="feature-card-desc">Live truck location updates and scheduled ETA milestones.</p>
              </div>
            </div>

            <div class="about-feature-card">
              <div class="feature-card-icon">
                <i class="bi bi-person-check-fill"></i>
              </div>
              <div>
                <h4 class="feature-card-title">Dedicated Move Manager</h4>
                <p class="feature-card-desc">A single point of contact coordinating your entire shift.</p>
              </div>
            </div>

            <div class="about-feature-card">
              <div class="feature-card-icon">
                <i class="bi bi-shield-lock-fill"></i>
              </div>
              <div>
                <h4 class="feature-card-title">100% Transit Insurance</h4>
                <p class="feature-card-desc">Complete coverage policy against transit accident hazards.</p>
              </div>
            </div>
          </div>

          <!-- Bottom Trust Strip -->
          <div class="about-trust-mini-strip d-flex flex-wrap align-items-center gap-3 mb-4">
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small font-weight-bold text-dark">ISO 9001:2015</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small font-weight-bold text-dark">Zero Hidden Charges</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small font-weight-bold text-dark">Doorstep Assembly</span>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="about-cta-row">
            <a <?= $phonehtml ?> class="btn-home-primary" aria-label="Call <?= $phone ?>">
              <i class="bi bi-telephone-fill"></i>
              <span>Call <?= $phone ?></span>
            </a>
            <button type="button" class="btn-home-outline" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator"></i>
              <span>Get Free Estimate</span>
            </button>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
