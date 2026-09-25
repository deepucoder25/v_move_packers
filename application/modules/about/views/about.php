<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About Us',
    'bc_desc' => "Learn about $company3 — your trusted moving partner.",
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]); ?>

<!-- 1. Simple About Story Section -->
<section class="about-section bg-light">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Normal Clean Image (No Overlapping or Floating Badges) -->
      <div class="col-lg-6">
        <div class="about-image-wrap">
          <img src="<?= base_url('assets/img/about_packing.jpg') ?>" 
               alt="<?= $company3 ?> Moving Crew" 
               class="img-fluid" 
               loading="lazy">
        </div>
      </div>

      <!-- Simple Clean Content -->
      <div class="col-lg-6">
        <span class="about-tag">About Our Company</span>
        <h2 class="about-heading">
          Trusted Packers &amp; Movers Across India with <span><?= $company3 ?></span>
        </h2>
        <p class="about-desc">
          At <strong><?= $company3 ?></strong>, we are committed to making your home, office, and vehicle relocation as simple, safe, and stress-free as possible. With over <?= $experience ?> years of experience, we provide reliable door-to-door shifting across India.
        </p>
        <p class="about-desc">
          Our trained crew uses multi-layer packing materials including 5-ply corrugated sheets, bubble wrap, and waterproof wrapping to ensure all your household items and electronics remain secure throughout transit.
        </p>

        <!-- Simple Feature Checklist -->
        <ul class="about-checklist">
          <li><i class="bi bi-check-circle-fill"></i> Experienced &amp; background-verified moving staff</li>
          <li><i class="bi bi-check-circle-fill"></i> 100% Comprehensive transit insurance coverage</li>
          <li><i class="bi bi-check-circle-fill"></i> Multi-layer protective packaging for delicate goods</li>
          <li><i class="bi bi-check-circle-fill"></i> Transparent, itemized pricing with no hidden charges</li>
        </ul>

        <!-- Simple Button Group -->
        <div class="about-btn-group">
          <button type="button" class="btn-about-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-calculator"></i> Get Free Quote
          </button>
          <a <?= $phonehtml ?> class="btn-about-outline">
            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 2. Simple Stats Strip -->
<section class="about-section bg-surface py-4 border-top border-bottom">
  <div class="container">
    <div class="row g-3 text-center">
      
      <div class="col-6 col-md-3">
        <div class="about-stat-card">
          <div class="about-stat-number"><?= $experience ?></div>
          <div class="about-stat-label">Years of Experience</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="about-stat-card">
          <div class="about-stat-number"><?= $successfulMoves ?></div>
          <div class="about-stat-label">Successful Moves</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="about-stat-card">
          <div class="about-stat-number">100%</div>
          <div class="about-stat-label">Transit Insurance</div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="about-stat-card">
          <div class="about-stat-number"><?= $ratingValue ?> / 5</div>
          <div class="about-stat-label">Customer Rating</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 3. Simple Mission & Vision Cards -->
<section class="about-section bg-light">
  <div class="container">
    
    <div class="text-center mb-4">
      <span class="about-tag">Our Principles</span>
      <h2 class="about-heading">Mission &amp; <span>Commitment</span></h2>
      <p class="about-desc about-subtitle-center">
        Dedicated to delivering transparent, punctual, and safe relocation services for every family and business.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-md-4">
        <div class="about-simple-card">
          <div class="about-card-header">
            <div class="about-card-icon">
              <i class="bi bi-bullseye"></i>
            </div>
            <h3 class="about-card-title">Our Mission</h3>
          </div>
          <p class="about-card-text">
            To provide safe, reliable, and completely damage-free relocation services across India through disciplined packing standards and honest upfront pricing.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="about-simple-card">
          <div class="about-card-header">
            <div class="about-card-icon">
              <i class="bi bi-eye-fill"></i>
            </div>
            <h3 class="about-card-title">Our Vision</h3>
          </div>
          <p class="about-card-text">
            To be recognized as India's most dependable packers and movers, known for safety, on-time deliveries, and genuine customer care.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="about-simple-card">
          <div class="about-card-header">
            <div class="about-card-icon">
              <i class="bi bi-heart-fill"></i>
            </div>
            <h3 class="about-card-title">Core Values</h3>
          </div>
          <p class="about-card-text">
            Integrity, customer safety, transparency in all costs, and respectful handling of every client's valuable home and office belongings.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 4. Simple Call to Action Box -->
<section class="about-section bg-surface pt-0">
  <div class="container">
    <div class="about-simple-cta">
      <div class="row align-items-center g-3">
        <div class="col-lg-8">
          <div class="about-cta-text">
            <h4>Planning a Relocation Soon?</h4>
            <p>Get in touch with our moving experts for an upfront, competitive estimate and customized shifting plan.</p>
          </div>
        </div>
        <div class="col-lg-4 text-lg-end">
          <div class="about-btn-group justify-content-lg-end">
            <a <?= $phonehtml ?> class="btn-about-primary">
              <i class="bi bi-telephone-fill"></i> Call Now
            </a>
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn-about-wa">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>