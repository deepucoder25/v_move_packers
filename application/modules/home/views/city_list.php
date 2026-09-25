<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
/**
 * Service Locations Section (Targeting Key Cities)
 * Displays only the requested cities with direct landing links.
 */
$cities = [
    [
        'title' => 'V Move Packers and Movers in Ambernath',
        'city'  => 'Ambernath',
        'state' => 'maharashtra',
        'slug'  => 'ambernath-packers-movers-maharashtra'
    ],
    [
        'title' => 'V Move Packers and Movers in Ghatkopar',
        'city'  => 'Ghatkopar',
        'state' => 'maharashtra',
        'slug'  => 'ghatkopar-packers-movers-maharashtra'
    ],
    [
        'title' => 'V Move Packers and Movers in Badlapur',
        'city'  => 'Badlapur',
        'state' => 'maharashtra',
        'slug'  => 'badlapur-packers-movers-maharashtra'
    ],
    [
        'title' => 'V Move Packers and Movers in Kharghar',
        'city'  => 'Kharghar',
        'state' => 'maharashtra',
        'slug'  => 'kharghar-packers-movers-maharashtra'
    ],
    [
        'title' => 'V Move Packers and Movers in Palava City (Dombivli)',
        'city'  => 'Palava City (Dombivli)',
        'state' => 'maharashtra',
        'slug'  => 'palava-city-dombivli-packers-movers-maharashtra'
    ],
];
?>

<!-- ==========================================================================
     SERVICE LOCATIONS SECTION (Targeting: 5 Primary Cities)
     ========================================================================== -->
<section class="home-section city-locations-section" id="service-locations" aria-label="Our Service Locations">
    <div class="container">
        
        <!-- Section Header -->
        <div class="sec-header text-center">
            <div class="sec-badge">
                <i class="bi bi-geo-alt-fill"></i>
                <span>SERVICE LOCATIONS</span>
            </div>
            <h2 class="sec-title">
                Locations &amp; Cities <span class="sec-title-accent">We Serve</span>
            </h2>
            <div class="sec-divider">
                <span class="sec-divider-line"></span>
                <span class="sec-divider-icon"><i class="bi bi-geo-alt"></i></span>
                <span class="sec-divider-line"></span>
            </div>
            <p class="sec-subtitle">
                Looking for verified shifting nearby? Explore top locations served by <strong>V Move Packers and Movers</strong> with fast door-to-door transit and 100% care.
            </p>
        </div>

        <!-- 5 Cities Grid -->
        <div class="row g-3 justify-content-center">
            <?php foreach ($cities as $loc): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="<?= site_url($loc['slug']) ?>" class="city-loc-card" aria-label="<?= htmlspecialchars($loc['title']) ?>">
                        <div class="city-loc-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="city-loc-info">
                            <h3 class="city-loc-title"><?= htmlspecialchars($loc['title']) ?></h3>
                            <span class="city-loc-tag">Safe Relocation &amp; Transport</span>
                        </div>
                        <div class="city-loc-arrow">
                            <i class="bi bi-arrow-right-short"></i>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>