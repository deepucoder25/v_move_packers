<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php 
// Include dynamic content generation for city
include 'city_content.php'; 
?>

<!-- ========================================================================
     MAIN CITY ABOUT & RELOCATION HUB SECTION
     ======================================================================== -->
<section class="city-section">
    <div class="container">
        <div class="row g-4 g-xl-5">
            
            <!-- Left Column: City Detailed Content, Reviews, and FAQs -->
            <div class="col-12 col-lg-8">
                
                <!-- Main City Content Card -->
                <article class="city-about-card">
                    <span class="city-badge">
                        <i class="bi bi-geo-alt-fill"></i> Local &amp; Nationwide Moving
                    </span>
                    <h2 class="city-section-title">
                        Top Packers and Movers in <span><?= htmlspecialchars($city) ?></span>, <?= htmlspecialchars($state) ?>
                    </h2>
                    
                    <!-- City Intro HTML Content -->
                    <div class="city-intro-text text-secondary" style="line-height: 1.75; font-size: 1.025rem;">
                        <?= $htmlcontent ?>
                    </div>

                    <!-- Feature Pills -->
                    <div class="city-feature-pills">
                        <div class="city-pill"><i class="bi bi-shield-check"></i> 100% Insured Shifting</div>
                        <div class="city-pill"><i class="bi bi-truck"></i> Real-time GPS Tracking</div>
                        <div class="city-pill"><i class="bi bi-box-seam"></i> Premium Multi-layer Packing</div>
                        <div class="city-pill"><i class="bi bi-clock-history"></i> On-Time Delivery Guaranteed</div>
                    </div>

                    <!-- 4 Relocation Service Pillars in City -->
                    <h3 class="city-section-title-sm">
                        <i class="bi bi-box-seam"></i> Relocation Services Offered in <?= htmlspecialchars($city) ?>
                    </h3>
                    <div class="city-service-grid">
                        <!-- Service 1 -->
                        <div class="city-service-box">
                            <div class="city-service-icon">
                                <i class="bi bi-house-door-fill"></i>
                            </div>
                            <div>
                                <h4 class="city-service-title">Household Shifting</h4>
                                <p class="city-service-desc">Safe packing of furniture, crockery, appliances &amp; clothing with doorstep unpacking.</p>
                            </div>
                        </div>

                        <!-- Service 2 -->
                        <div class="city-service-box">
                            <div class="city-service-icon">
                                <i class="bi bi-briefcase-fill"></i>
                            </div>
                            <div>
                                <h4 class="city-service-title">Office Relocation</h4>
                                <p class="city-service-desc">Planned IT and commercial moves executed on weekends to guarantee zero business downtime.</p>
                            </div>
                        </div>

                        <!-- Service 3 -->
                        <div class="city-service-box">
                            <div class="city-service-icon">
                                <i class="bi bi-bicycle"></i>
                            </div>
                            <div>
                                <h4 class="city-service-title">Bike &amp; Car Transport</h4>
                                <p class="city-service-desc">Enclosed carriers with customized wheel chocks for 100% scratch-free vehicle shipping.</p>
                            </div>
                        </div>

                        <!-- Service 4 -->
                        <div class="city-service-box">
                            <div class="city-service-icon">
                                <i class="bi bi-building-lock"></i>
                            </div>
                            <div>
                                <h4 class="city-service-title">Warehouse &amp; Storage</h4>
                                <p class="city-service-desc">Safe, pest-controlled, and 24x7 CCTV-monitored storage while waiting for home possession.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Local Shifting Insights -->
                    <div class="city-extra-content">
                        <?= $htmlcontent1 ?>
                        <?= $htmlcontent2 ?>
                    </div>

                    <!-- Moving Guarantee Banner inside Card -->
                    <div class="mt-4 p-3 rounded-3 bg-light border d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-shield-fill-check text-success fs-4"></i>
                            <span class="small fw-bold text-dark">Verified Crews &bull; 100% Transit Insurance &bull; No Hidden Toll or Labour Surcharge</span>
                        </div>
                        <a <?= $phonehtml ?> class="btn btn-sm btn-danger rounded-pill fw-bold px-3">
                            <i class="bi bi-telephone-fill me-1"></i> Call <?= $phone ?>
                        </a>
                    </div>
                </article>

                <!-- City Map Component -->
                <div class="city-map-wrap">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                        <div>
                            <span class="city-badge">
                                <i class="bi bi-geo-alt-fill"></i> Operational Coverage
                            </span>
                            <h3 class="h4 fw-bold text-dark mb-1">
                                Our Service Network in <span class="text-danger"><?= htmlspecialchars($city) ?></span>
                            </h3>
                            <p class="text-secondary small mb-0">Local shifting routes, secure transit corridors, and doorstep packing coverage across <?= htmlspecialchars($city) ?>.</p>
                        </div>
                        <div class="d-none d-sm-flex align-items-center gap-2">
                            <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-3 py-2 rounded-pill fw-semibold small">
                                <i class="bi bi-truck me-1"></i> Live Service Area
                            </span>
                        </div>
                    </div>

                    <!-- Map Frame Container -->
                    <div class="city-map-container">
                        <?php include 'city_map.php'; ?>
                    </div>

                    <!-- Map Feature Strip -->
                    <div class="city-map-footer d-flex align-items-center justify-content-between flex-wrap gap-2 mt-3 pt-2">
                        <div class="d-flex align-items-center gap-2 text-secondary small">
                            <i class="bi bi-shield-check text-success fs-5"></i>
                            <span>All localities in <strong><?= htmlspecialchars($city) ?></strong> covered with zero long-carry or toll surcharges.</span>
                        </div>
                        <a href="https://www.google.com/maps?q=<?= urlencode($city . ' ' . $state) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-danger rounded-pill px-3 fw-semibold">
                            <i class="bi bi-box-arrow-up-right me-1"></i> View on Google Maps
                        </a>
                    </div>
                </div>

                <!-- City Customer Reviews Component -->
                <?php include 'city_reviews.php'; ?>

                <!-- City FAQ Accordion Component -->
                <?php include 'city_faq.php'; ?>

            </div>

            <!-- Right Column: City Sticky Sidebar -->
            <div class="col-12 col-lg-4">
                <?php include 'city_siderbar.php'; ?>
            </div>

        </div>
    </div>
</section>
