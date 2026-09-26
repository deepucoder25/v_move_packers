<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$ci =& get_instance();
$comp = $ci->comp ?? [];
$phone = $phone ?? ($comp['phone'] ?? '+91 9728546183');
$phonehtml = $phonehtml ?? ($comp['phonehtml'] ?? 'href="tel:+919728546183"');
$whatsapphtml = $whatsapphtml ?? ($comp['whatsapphtml'] ?? 'https://wa.me/919728546183');
$company3 = $company3 ?? ($comp['company3'] ?? 'V Move Packers and Movers');
$experience = $experience ?? ($comp['experience'] ?? '20+');
$city = !empty($city) ? $city : ($comp['addressRegion'] ?? 'India');
$state = !empty($state) ? $state : ($comp['companystate'] ?? 'Maharashtra');
?>

<?php
// Breadcrumb Schema for City Page
$city_bc_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => site_url()
        ],
        [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => 'Service Areas',
            'item' => site_url('our-branches')
        ],
        [
            '@type' => 'ListItem',
            'position' => 3,
            'name' => $city,
            'item' => current_url()
        ]
    ]
];
?>
<script type="application/ld+json">
<?= json_encode($city_bc_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- ==========================================================================
     CITY HERO SLIDER SECTION (Left Content + Right Quote Form, Same as slider.php)
     ========================================================================== -->
<section class="hero-slider-section position-relative" aria-label="City Moving Hero Section and Instant Moving Quote">
  <!-- Background Image with V Move Branding -->
  <div class="hero-slide-bg-wrap">
    <img src="<?= base_url('assets/img/hero_slider.jpg') ?>" class="hero-slide-bg" alt="<?= $company3 ?> Moving Fleet &amp; Team in <?= $city ?>" loading="eager" width="1920" height="1080">
    <div class="hero-slide-overlay"></div>
  </div>

  <div class="container hero-slide-container position-relative">
    <div class="row align-items-center g-4 g-xl-5">
      <!-- Left Column: Hero Content & CTAs -->
      <div class="col-12 col-lg-7 col-xl-7">
        <div class="hero-slide-content">
          <!-- City Hero Breadcrumb -->
          <nav class="city-hero-breadcrumb" aria-label="breadcrumb">
            <ol class="city-hero-breadcrumb-list">
              <li class="city-hero-breadcrumb-item">
                <a href="<?= site_url() ?>" title="Home">
                  <i class="bi bi-house-door-fill"></i>
                  <span>Home</span>
                </a>
              </li>
              <li class="city-hero-breadcrumb-sep" aria-hidden="true"><i class="bi bi-chevron-right"></i></li>
              <li class="city-hero-breadcrumb-item">
                <a href="<?= site_url('our-branches') ?>">Service Areas</a>
              </li>
              <li class="city-hero-breadcrumb-sep" aria-hidden="true"><i class="bi bi-chevron-right"></i></li>
              <li class="city-hero-breadcrumb-item active" aria-current="page">
                <span><?= htmlspecialchars($city) ?></span>
              </li>
            </ol>
          </nav>

          <!-- Trust Pill Badge -->
          <div class="hero-badge-wrap">
            <span class="hero-pill-badge">
              <i class="bi bi-patch-check-fill text-white"></i>
              <span>ISO 9001:2015 Certified &bull; <?= $experience ?> Yrs Relocation Experience</span>
            </span>
          </div>

          <!-- Main Heading -->
          <h1 class="hero-title">
            <?= htmlspecialchars($city) ?>'s Trusted <span class="hero-text-accent">Packers &amp; Movers</span> For Safe Relocation
          </h1>

          <!-- Subtitle / Value Proposition -->
          <p class="hero-subtitle">
            Reliable household shifting, corporate office relocation, and nationwide vehicle transit across <?= htmlspecialchars($city) ?> with multi-layer defensive packing and verified moving crews.
          </p>

          <!-- Value Highlights / Feature Chips -->
          <div class="hero-feature-chips">
            <span class="hero-chip">
              <i class="bi bi-shield-check"></i> 100% Insured Shifting
            </span>
            <span class="hero-chip">
              <i class="bi bi-truck"></i> Own GPS Fleet
            </span>
            <span class="hero-chip">
              <i class="bi bi-clock-history"></i> On-Time <?= htmlspecialchars($city) ?> Delivery
            </span>
          </div>

          <!-- Action Buttons -->
          <div class="hero-cta-group">
            <a <?= $phonehtml ?> class="btn-hero-primary" aria-label="Call <?= $phone ?>">
              <i class="bi bi-telephone-fill"></i>
              <span>Call <?= $phone ?></span>
            </a>
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn-hero-wa" aria-label="Chat on WhatsApp">
              <i class="bi bi-whatsapp"></i>
              <span>WhatsApp</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Right Column: Quote Form Loaded Directly -->
      <div class="col-12 col-lg-5 col-xl-5">
        <div class="hero-right-quote-wrap">
          <?php $this->load->view('contacts/quoteform'); ?>
        </div>
      </div>
    </div>
  </div>
</section>