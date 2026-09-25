<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose Us',
    'bc_desc' => "Discover why thousands choose $company3 for hassle-free relocation.",
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]); ?>

<!-- 1. Intro Section with Normal Clean Image -->
<section class="about-section bg-light">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Clean Simple Content -->
      <div class="col-lg-6">
        <span class="about-tag">The V Move Advantage</span>
        <h2 class="about-heading">
          Why Choose <span><?= $company3 ?></span> for Your Next Move?
        </h2>
        <p class="about-desc">
          Choosing the right moving company means choosing safety, punctuality, and complete peace of mind. At <strong><?= $company3 ?></strong>, we take the stress out of household shifting, vehicle transport, and corporate relocation.
        </p>
        <p class="about-desc">
          We use standardized 5-ply defensive packing materials, employ full-time verified staff, and provide 100% comprehensive transit insurance so you never have to worry about damage or unexpected costs.
        </p>

        <!-- Simple Feature Checklist -->
        <ul class="about-checklist">
          <li><i class="bi bi-check-circle-fill"></i> Fixed, written quotes with zero surprise charges</li>
          <li><i class="bi bi-check-circle-fill"></i> Multi-layer bubble wrap &amp; customized furniture crating</li>
          <li><i class="bi bi-check-circle-fill"></i> Closed container trucks protecting goods from rain &amp; dust</li>
          <li><i class="bi bi-check-circle-fill"></i> Dedicated Move Manager providing regular transit updates</li>
        </ul>

        <div class="about-btn-group">
          <button type="button" class="btn-about-primary" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-calculator"></i> Get Free Quote
          </button>
          <a <?= $phonehtml ?> class="btn-about-outline">
            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
          </a>
        </div>
      </div>

      <!-- Normal Clean Image (No Overlapping or Badges) -->
      <div class="col-lg-6">
        <div class="about-image-wrap">
          <img src="<?= base_url('assets/img/about_truck.jpg') ?>" 
               alt="<?= $company3 ?> Weatherproof Container Truck" 
               class="img-fluid" 
               loading="lazy">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 2. Core Reasons / Feature Grid -->
<section class="about-section bg-surface border-top border-bottom">
  <div class="container">
    
    <div class="text-center mb-5">
      <span class="about-tag">Key Features</span>
      <h2 class="about-heading">What Sets Us <span>Apart</span></h2>
      <p class="about-desc about-subtitle-center">
        Designed to protect your belongings and deliver a reliable, professional moving experience every single time.
      </p>
    </div>

    <div class="row g-4">
      
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="about-simple-card">
          <div class="about-card-header">
            <div class="about-card-icon">
              <i class="bi bi-currency-rupee"></i>
            </div>
            <h3 class="about-card-title">Zero Hidden Charges</h3>
          </div>
          <p class="about-card-text">
            All estimates are clear and upfront. What we quote before the move is what you pay—no surprise fees at delivery.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="about-simple-card">
          <div class="about-card-header">
            <div class="about-card-icon">
              <i class="bi bi-person-check-fill"></i>
            </div>
            <h3 class="about-card-title">Verified &amp; Trained Crew</h3>
          </div>
          <p class="about-card-text">
            Our permanent, background-verified staff handle heavy furniture and fragile items with proper tools and care.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="about-simple-card">
          <div class="about-card-header">
            <div class="about-card-icon">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <h3 class="about-card-title">5-Ply Defensive Packing</h3>
          </div>
          <p class="about-card-text">
            High-grade bubble wrap, heavy cartons, foam corners, and customized crates protect all electronics and glassware.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="about-simple-card">
          <div class="about-card-header">
            <div class="about-card-icon">
              <i class="bi bi-shield-fill-check"></i>
            </div>
            <h3 class="about-card-title">100% Transit Insurance</h3>
          </div>
          <p class="about-card-text">
            Every shipment is covered by optional transit insurance to safeguard against unexpected highway accidents or hazards.
          </p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="about-simple-card">
          <div class="about-card-header">
            <div class="about-card-icon">
              <i class="bi bi-truck-front-fill"></i>
            </div>
            <h3 class="about-card-title">Closed Weatherproof Trucks</h3>
          </div>
          <p class="about-card-text">
            Sealed container vehicles protect your goods from rain, road dust, and highway turbulence during transit.
          </p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="about-simple-card">
          <div class="about-card-header">
            <div class="about-card-icon">
              <i class="bi bi-headset"></i>
            </div>
            <h3 class="about-card-title">Dedicated Move Manager</h3>
          </div>
          <p class="about-card-text">
            A single point of contact provides live updates, answers your questions, and manages your shifting smoothly.
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
            <h4>Ready to Book a Stress-Free Move?</h4>
            <p>Get your free moving quote today with upfront pricing and verified care from <?= $company3 ?>.</p>
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