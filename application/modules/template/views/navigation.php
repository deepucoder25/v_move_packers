<body>
<?php

$ci =& get_instance();
$class = strtolower($ci->router->fetch_class());
$method = strtolower($ci->router->fetch_method());
$segment1 = strtolower($ci->uri->segment(1) ?? '');

// Active tab detection
$active_tab = 'home';
if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
} elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials', 'photo-gallery', 'video-gallery'])) {
    $active_tab = 'about';
} elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-relocation', 'office-relocation', 'car-transportation', 'bike-transportation', 'packing-and-moving', 'loading-unloading'])) {
    $active_tab = 'services';
} elseif ($class === 'packers_movers' || $segment1 === 'our-branches' || strpos($segment1, 'packers-movers') !== false) {
    $active_tab = 'locations';
} elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
} elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
} elseif ($class === 'tracking' || $segment1 === 'tracking') {
    $active_tab = 'tracking';
} elseif ($class === 'reviews' || $segment1 === 'reviews') {
    $active_tab = 'reviews';
}
?>

<!-- ==========================================================================
     TOP BAR SECTION
     ========================================================================== -->
<div class="site-topbar py-1 py-md-2">
  <div class="container">
    <!-- Desktop Layout (>= 768px) -->
    <div class="d-none d-md-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-2 gap-lg-3 flex-wrap">
        <a <?= $phonehtml ?> class="d-inline-flex align-items-center gap-1 text-decoration-none">
          <i class="bi bi-telephone-fill topbar-icon"></i>
          <span class="fw-semibold"><?= $phone ?></span>
        </a>

        <span class="text-white-50 d-none d-sm-inline">|</span>

        <a href="<?= $mailhtml ?>" class="d-none d-sm-inline-flex align-items-center gap-1 text-decoration-none text-white-50">
          <i class="bi bi-envelope-fill topbar-icon"></i>
          <span><?= $mail ?></span>
        </a>

        <span class="badge rounded-pill topbar-iso-badge d-none d-lg-inline-flex align-items-center gap-1">
          <i class="bi bi-patch-check-fill"></i>
          <span><?= $experience ?> Yrs Experience &bull; ISO Certified</span>
        </span>
      </div>

      <div class="d-flex align-items-center gap-3">
        <span class="text-white-50 d-none d-xl-inline-flex align-items-center gap-1">
          <i class="bi bi-clock-history topbar-icon"></i> 24x7 Shifting Support
        </span>

        <a href="<?= site_url('tracking') ?>" class="d-inline-flex align-items-center gap-1 text-decoration-none text-white">
          <i class="bi bi-crosshair2 topbar-icon"></i>
          <span>Track Order</span>
        </a>

        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="topbar-wa-btn d-inline-flex align-items-center gap-1 text-decoration-none">
          <i class="bi bi-whatsapp"></i>
          <span>WhatsApp</span>
        </a>
      </div>
    </div>

    <!-- Mobile Layout (< 768px) - Single Clean, Balanced Row -->
    <div class="d-flex d-md-none align-items-center justify-content-between flex-nowrap py-1">
      <span class="badge rounded-pill topbar-iso-badge d-inline-flex align-items-center gap-1 text-nowrap">
        <i class="bi bi-patch-check-fill"></i>
        <span><?= $experience ?> Yrs Experience &bull; ISO Certified</span>
      </span>

      <div class="d-flex align-items-center gap-2 flex-nowrap">
        <a href="<?= site_url('tracking') ?>" class="d-inline-flex align-items-center gap-1 text-decoration-none text-white text-nowrap topbar-mobile-track">
          <i class="bi bi-crosshair2 topbar-icon"></i>
          <span>Track</span>
        </a>

        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="topbar-wa-btn d-inline-flex align-items-center gap-1 text-decoration-none text-nowrap">
          <i class="bi bi-whatsapp"></i>
          <span>WhatsApp</span>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- ==========================================================================
     MAIN NAVBAR SECTION
     ========================================================================== -->
<header class="site-header sticky-top">
  <nav class="navbar navbar-expand-lg site-navbar py-0" id="mainNavbar">
    <div class="container">
      <!-- Brand Logo -->
      <a class="navbar-brand d-flex align-items-center py-0 me-3" href="<?= site_url() ?>" aria-label="<?= $company3 ?>">
        <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="<?= $company3 ?>" class="navbar-logo" width="180" height="54">
      </a>

      <!-- Mobile Quick Actions & Toggler -->
      <div class="d-flex align-items-center gap-2 d-lg-none">
        <a <?= $phonehtml ?> class="btn-nav-phone-mobile d-inline-flex align-items-center justify-content-center text-decoration-none" aria-label="Call <?= $phone ?>">
          <span class="mobile-phone-text"><?= $phone ?></span>
        </a>
        <button class="navbar-toggler custom-navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNavDrawer" aria-controls="mobileNavDrawer" aria-label="Open Navigation">
          <span class="toggler-bar bar-top"></span>
          <span class="toggler-bar bar-mid"></span>
          <span class="toggler-bar bar-bot"></span>
        </button>
      </div>

      <!-- Desktop Navigation Menu -->
      <div class="collapse navbar-collapse" id="desktopNavContent">
        <ul class="navbar-nav ms-auto align-items-center gap-1 gap-xl-2">
          <!-- Home -->
          <li class="nav-item">
            <a class="nav-link <?= $active_tab === 'home' ? 'active' : '' ?>" href="<?= site_url() ?>">
              <i class="bi bi-house-door"></i>
              <span>Home</span>
            </a>
          </li>

          <!-- About Us Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $active_tab === 'about' ? 'active' : '' ?>" href="<?= site_url('about-us') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-info-circle"></i>
              <span>About Us</span>
            </a>
            <ul class="dropdown-menu shadow">
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('about-us') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-building"></i></span>
                    <div>
                      <span class="dropdown-item-title">About Company</span>
                      <span class="dropdown-item-desc">Our story, vision &amp; credentials</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('why-choose-us') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-award"></i></span>
                    <div>
                      <span class="dropdown-item-title">Why Choose Us</span>
                      <span class="dropdown-item-desc">Verified, insured &amp; trusted</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('photo-gallery') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-images"></i></span>
                    <div>
                      <span class="dropdown-item-title">Photo Gallery</span>
                      <span class="dropdown-item-desc">Live packing &amp; fleet photos</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('video-gallery') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-camera-video"></i></span>
                    <div>
                      <span class="dropdown-item-title">Video Gallery</span>
                      <span class="dropdown-item-desc">Field videos &amp; operations</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('faqs') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-question-circle"></i></span>
                    <div>
                      <span class="dropdown-item-title">FAQs</span>
                      <span class="dropdown-item-desc">Answers to common moving queries</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('reviews') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-star"></i></span>
                    <div>
                      <span class="dropdown-item-title">Customer Reviews</span>
                      <span class="dropdown-item-desc">Verified 5-star testimonials</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
            </ul>
          </li>

          <!-- Services Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= $active_tab === 'services' ? 'active' : '' ?>" href="<?= site_url('our-services') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-box-seam"></i>
              <span>Services</span>
            </a>
            <ul class="dropdown-menu shadow">
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('home-relocation') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-house-door"></i></span>
                    <div>
                      <span class="dropdown-item-title">Household Shifting</span>
                      <span class="dropdown-item-desc">Safe door-to-door home moving</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('office-relocation') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-briefcase"></i></span>
                    <div>
                      <span class="dropdown-item-title">Office Relocation</span>
                      <span class="dropdown-item-desc">Zero downtime corporate shifts</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('car-transportation') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-car-front"></i></span>
                    <div>
                      <span class="dropdown-item-title">Car Transportation</span>
                      <span class="dropdown-item-desc">Enclosed carriers across India</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('bike-transportation') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-bicycle"></i></span>
                    <div>
                      <span class="dropdown-item-title">Bike Transportation</span>
                      <span class="dropdown-item-desc">Scratch-free two-wheeler delivery</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('packing-and-moving') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-box-seam"></i></span>
                    <div>
                      <span class="dropdown-item-title">Packing &amp; Moving</span>
                      <span class="dropdown-item-desc">Multi-layer bubble protection</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?= site_url('loading-unloading') ?>">
                  <div class="d-flex align-items-center">
                    <span class="dropdown-item-icon"><i class="bi bi-truck"></i></span>
                    <div>
                      <span class="dropdown-item-title">Loading &amp; Unloading</span>
                      <span class="dropdown-item-desc">Skilled crew &amp; modern tools</span>
                    </div>
                  </div>
                  <i class="bi bi-chevron-right dropdown-item-arrow"></i>
                </a>
              </li>
            </ul>
          </li>

          <!-- Our Branches -->
          <li class="nav-item">
            <a class="nav-link <?= $active_tab === 'locations' ? 'active' : '' ?>" href="<?= site_url('our-branches') ?>">
              <i class="bi bi-geo-alt"></i>
              <span>Our Branches</span>
            </a>
          </li>

          <!-- Tracking with Live Badge -->
          <li class="nav-item">
            <a class="nav-link <?= $active_tab === 'tracking' ? 'active' : '' ?>" href="<?= site_url('tracking') ?>">
              <i class="bi bi-crosshair2"></i>
              <span>Tracking</span>
              <span class="badge rounded-pill pulse-badge text-white ms-1">Live</span>
            </a>
          </li>

          <!-- Blog -->
          <li class="nav-item">
            <a class="nav-link <?= $active_tab === 'blog' ? 'active' : '' ?>" href="<?= site_url('blog') ?>">
              <i class="bi bi-newspaper"></i>
              <span>Blog</span>
            </a>
          </li>

          <!-- Contact Us -->
          <li class="nav-item">
            <a class="nav-link <?= $active_tab === 'contact' ? 'active' : '' ?>" href="<?= site_url('contact-us') ?>">
              <i class="bi bi-telephone"></i>
              <span>Contact</span>
            </a>
          </li>

          <!-- Call Number Button with Animation -->
          <li class="nav-item ms-lg-2">
            <a <?= $phonehtml ?> class="btn btn-nav-phone d-inline-flex align-items-center gap-2" aria-label="Call <?= $phone ?>">
              <span class="phone-icon-bubble"><i class="bi bi-telephone-fill phone-ring-icon"></i></span>
              <span class="phone-number-text"><?= $phone ?></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- ==========================================================================
     MOBILE OFFCANVAS DRAWER (Fully Responsive & Modern)
     ========================================================================== -->
<div class="offcanvas offcanvas-end mobile-nav-offcanvas" tabindex="-1" id="mobileNavDrawer" aria-labelledby="mobileNavDrawerLabel">
  <!-- Offcanvas Header without Logo -->
  <div class="offcanvas-header drawer-header d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center gap-2">
      <span class="drawer-header-badge">
        <i class="bi bi-grid-fill"></i>
      </span>
      <div>
        <div class="drawer-header-title">Menu &amp; Services</div>
        <div class="drawer-header-subtitle"><?= $company3 ?></div>
      </div>
    </div>
    <button type="button" class="drawer-close-btn shadow-none" data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>

  <!-- Offcanvas Body -->
  <div class="offcanvas-body d-flex flex-column justify-content-between p-3">
    <div>
      <!-- Quick Action Buttons -->
      <div class="row g-2 mb-3">
        <div class="col-6">
          <a <?= $phonehtml ?> class="btn drawer-call-btn w-100 d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-telephone-fill"></i>
            <span>Call Now</span>
          </a>
        </div>
        <div class="col-6">
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn drawer-wa-btn w-100 d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-whatsapp"></i>
            <span>WhatsApp</span>
          </a>
        </div>
      </div>

      <!-- Mobile Navigation Links -->
      <div class="mobile-nav-list d-flex flex-column gap-1">
        <!-- Home -->
        <a href="<?= site_url() ?>" class="mobile-nav-link <?= $active_tab === 'home' ? 'active' : '' ?>">
          <span class="d-flex align-items-center gap-2">
            <span class="drawer-icon-box"><i class="bi bi-house-door-fill"></i></span>
            <span>Home</span>
          </span>
        </a>

        <!-- About Accordion -->
        <div>
          <a class="mobile-nav-link <?= $active_tab === 'about' ? 'active' : '' ?>" data-bs-toggle="collapse" href="#mobileAboutSubmenu" role="button" aria-expanded="<?= $active_tab === 'about' ? 'true' : 'false' ?>" aria-controls="mobileAboutSubmenu">
            <span class="d-flex align-items-center gap-2">
              <span class="drawer-icon-box"><i class="bi bi-info-circle-fill"></i></span>
              <span>About Us</span>
            </span>
            <i class="bi bi-chevron-down drawer-arrow"></i>
          </a>
          <div class="collapse <?= $active_tab === 'about' ? 'show' : '' ?> mobile-submenu" id="mobileAboutSubmenu">
            <a href="<?= site_url('about-us') ?>" class="mobile-sub-link"><i class="bi bi-building"></i> About Company</a>
            <a href="<?= site_url('why-choose-us') ?>" class="mobile-sub-link"><i class="bi bi-award"></i> Why Choose Us</a>
            <a href="<?= site_url('photo-gallery') ?>" class="mobile-sub-link"><i class="bi bi-images"></i> Photo Gallery</a>
            <a href="<?= site_url('video-gallery') ?>" class="mobile-sub-link"><i class="bi bi-play-btn"></i> Video Gallery</a>
            <a href="<?= site_url('faqs') ?>" class="mobile-sub-link"><i class="bi bi-question-circle"></i> FAQs</a>
            <a href="<?= site_url('reviews') ?>" class="mobile-sub-link"><i class="bi bi-star"></i> Customer Reviews</a>
          </div>
        </div>

        <!-- Services Accordion -->
        <div>
          <a class="mobile-nav-link <?= $active_tab === 'services' ? 'active' : '' ?>" data-bs-toggle="collapse" href="#mobileServicesSubmenu" role="button" aria-expanded="<?= $active_tab === 'services' ? 'true' : 'false' ?>" aria-controls="mobileServicesSubmenu">
            <span class="d-flex align-items-center gap-2">
              <span class="drawer-icon-box"><i class="bi bi-box-seam-fill"></i></span>
              <span>Our Services</span>
            </span>
            <i class="bi bi-chevron-down drawer-arrow"></i>
          </a>
          <div class="collapse <?= $active_tab === 'services' ? 'show' : '' ?> mobile-submenu" id="mobileServicesSubmenu">
            <a href="<?= site_url('home-relocation') ?>" class="mobile-sub-link"><i class="bi bi-house-door"></i> Household Shifting</a>
            <a href="<?= site_url('office-relocation') ?>" class="mobile-sub-link"><i class="bi bi-briefcase"></i> Office Relocation</a>
            <a href="<?= site_url('car-transportation') ?>" class="mobile-sub-link"><i class="bi bi-car-front"></i> Car Transportation</a>
            <a href="<?= site_url('bike-transportation') ?>" class="mobile-sub-link"><i class="bi bi-bicycle"></i> Bike Transportation</a>
            <a href="<?= site_url('packing-and-moving') ?>" class="mobile-sub-link"><i class="bi bi-box"></i> Packing &amp; Moving</a>
            <a href="<?= site_url('loading-unloading') ?>" class="mobile-sub-link"><i class="bi bi-truck"></i> Loading &amp; Unloading</a>
          </div>
        </div>

        <!-- Our Branches -->
        <a href="<?= site_url('our-branches') ?>" class="mobile-nav-link <?= $active_tab === 'locations' ? 'active' : '' ?>">
          <span class="d-flex align-items-center gap-2">
            <span class="drawer-icon-box"><i class="bi bi-geo-alt-fill"></i></span>
            <span>Our Branches</span>
          </span>
        </a>

        <!-- Tracking -->
        <a href="<?= site_url('tracking') ?>" class="mobile-nav-link <?= $active_tab === 'tracking' ? 'active' : '' ?>">
          <span class="d-flex align-items-center gap-2">
            <span class="drawer-icon-box"><i class="bi bi-crosshair2 text-danger"></i></span>
            <span>Consignment Tracking</span>
          </span>
          <span class="badge rounded-pill pulse-badge text-white">Live</span>
        </a>

        <!-- Blog -->
        <a href="<?= site_url('blog') ?>" class="mobile-nav-link <?= $active_tab === 'blog' ? 'active' : '' ?>">
          <span class="d-flex align-items-center gap-2">
            <span class="drawer-icon-box"><i class="bi bi-newspaper"></i></span>
            <span>Moving Blog</span>
          </span>
        </a>

        <!-- Contact Us -->
        <a href="<?= site_url('contact-us') ?>" class="mobile-nav-link <?= $active_tab === 'contact' ? 'active' : '' ?>">
          <span class="d-flex align-items-center gap-2">
            <span class="drawer-icon-box"><i class="bi bi-headset"></i></span>
            <span>Contact Us</span>
          </span>
        </a>
      </div>

      <!-- CTA in Drawer -->
      <div class="mt-3">
        <a href="<?= site_url('contact-us') ?>" class="btn btn-drawer-quote w-100 d-flex align-items-center justify-content-center gap-2">
          <i class="bi bi-send-fill"></i>
          <span>Get Instant Free Quote</span>
        </a>
      </div>
    </div>

    <!-- Mobile Contact & Trust Info Footer -->
    <div class="mobile-contact-card mt-3">
      <div class="d-flex align-items-center gap-2 mb-2 pb-2 border-bottom">
        <span class="trust-badge-icon"><i class="bi bi-patch-check-fill"></i></span>
        <div>
          <div class="trust-badge-title">ISO Certified &amp; Insured</div>
          <div class="trust-badge-sub">100% Safe Relocation Guarantee</div>
        </div>
      </div>
      <a <?= $phonehtml ?> class="d-flex align-items-center gap-2 text-decoration-none drawer-info-link mb-1">
        <i class="bi bi-telephone-fill"></i>
        <span class="fw-bold drawer-info-phone"><?= $phone ?></span>
        <span class="badge bg-success-subtle text-success ms-auto drawer-badge-24x7">24x7</span>
      </a>
      <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-2 text-decoration-none text-muted drawer-info-link mb-1 small">
        <i class="bi bi-envelope"></i>
        <span class="text-truncate"><?= $mail ?></span>
      </a>
      <div class="d-flex align-items-center gap-2 text-muted small mt-1">
        <i class="bi bi-geo-alt"></i>
        <span>PAN India Service &bull; 100+ Branches</span>
      </div>
    </div>
  </div>
</div>

<!-- ==========================================================================
     SEO Friendly SiteNavigationElement Schema
     ========================================================================== -->
<?php
$nav_schema = [
  "@context" => "https://schema.org",
  "@graph" => [
    ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
    ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
    ["@type" => "SiteNavigationElement", "name" => "Household Shifting", "url" => site_url('home-relocation')],
    ["@type" => "SiteNavigationElement", "name" => "Office Relocation", "url" => site_url('office-relocation')],
    ["@type" => "SiteNavigationElement", "name" => "Car Transportation", "url" => site_url('car-transportation')],
    ["@type" => "SiteNavigationElement", "name" => "Bike Transportation", "url" => site_url('bike-transportation')],
    ["@type" => "SiteNavigationElement", "name" => "Our Branches", "url" => site_url('our-branches')],
    ["@type" => "SiteNavigationElement", "name" => "Consignment Tracking", "url" => site_url('tracking')],
    ["@type" => "SiteNavigationElement", "name" => "Moving Blog", "url" => site_url('blog')],
    ["@type" => "SiteNavigationElement", "name" => "Contact Us", "url" => site_url('contact-us')]
  ]
];
?>
<script type="application/ld+json">
<?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
</script>

<!-- ==========================================================================
     Self-Contained Fallback & Scroll Event Handlers
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Sticky Navbar shadow on scroll
  var mainNavbar = document.getElementById('mainNavbar');
  if (mainNavbar) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 20) {
        mainNavbar.classList.add('shadow');
      } else {
        mainNavbar.classList.remove('shadow');
      }
    });
  }

  // Fallback Vanilla Offcanvas Handler in case Bootstrap bundle JS has any issue
  var drawerToggler = document.querySelector('[data-bs-target="#mobileNavDrawer"]');
  var drawerElement = document.getElementById('mobileNavDrawer');
  var drawerClose = drawerElement ? drawerElement.querySelector('[data-bs-dismiss="offcanvas"]') : null;

  if (drawerToggler && drawerElement) {
    drawerToggler.addEventListener('click', function (e) {
      if (typeof bootstrap === 'undefined' || !bootstrap.Offcanvas) {
        e.preventDefault();
        drawerElement.classList.add('show');
        drawerElement.style.visibility = 'visible';
        document.body.classList.add('offcanvas-open');
      }
    });
  }

  if (drawerClose && drawerElement) {
    drawerClose.addEventListener('click', function (e) {
      if (typeof bootstrap === 'undefined' || !bootstrap.Offcanvas) {
        e.preventDefault();
        drawerElement.classList.remove('show');
        drawerElement.style.visibility = 'hidden';
        document.body.classList.remove('offcanvas-open');
      }
    });
  }
});
</script>