<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$ct_slug = strtolower(str_replace(" ", "-", $city));
$st_slug = strtolower(str_replace(" ", "-", $state));
?>

<!-- ========================================================================
     PREMIUM CITY SIDEBAR WIDGETS
     ======================================================================== -->
<aside class="city-sidebar" id="citySidebar">

    <!-- Widget 1: Instant Relocation Assistance Card -->
    <div class="city-contact-card">
        <div class="city-contact-badge">
            <span class="city-pulse-dot"></span>
            <span>24/7 Verified <?= htmlspecialchars($city) ?> Movers</span>
        </div>
        <h4 class="city-contact-heading">Moving in or from <?= htmlspecialchars($city) ?>?</h4>
        <p class="city-contact-sub">Talk to our local relocation supervisor for an upfront quote, free survey &amp; slot booking.</p>
        
        <div class="city-contact-actions">
            <a <?= $phonehtml ?> class="city-btn-call">
                <i class="bi bi-telephone-fill"></i>
                <span>Call <?= $phone ?></span>
            </a>
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="city-btn-whatsapp">
                <i class="bi bi-whatsapp"></i>
                <span>WhatsApp Quote</span>
            </a>
            <button type="button" class="city-btn-estimate" data-bs-toggle="modal" data-bs-target="#qteModal">
                <i class="bi bi-calculator"></i>
                <span>Calculate Moving Cost</span>
            </button>
        </div>

        <div class="city-trust-strip">
            <div class="city-trust-item">
                <i class="bi bi-shield-fill-check text-success"></i>
                <span>Transit Insurance</span>
            </div>
            <div class="city-trust-dot">&bull;</div>
            <div class="city-trust-item">
                <i class="bi bi-patch-check-fill text-primary"></i>
                <span>ISO Certified</span>
            </div>
            <div class="city-trust-dot">&bull;</div>
            <div class="city-trust-item">
                <i class="bi bi-currency-rupee text-warning"></i>
                <span>No Hidden Fees</span>
            </div>
        </div>
    </div>


    <!-- Widget 3: Local Shifting Price Estimate Guide -->
    <div class="city-widget">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="city-widget-title mb-0">Local Moving Rates</h5>
            <span class="badge bg-light text-secondary border px-2 py-1 small"><?= htmlspecialchars($city) ?></span>
        </div>
        <div class="table-responsive">
            <table class="city-rate-table">
                <thead>
                    <tr>
                        <th>Shifting Size</th>
                        <th class="text-end">Approx Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="bi bi-house me-1 text-muted"></i> 1 BHK Complete</td>
                        <td class="text-end city-rate-price">&#8377;4,500 - &#8377;9,000</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-house me-1 text-muted"></i> 2 BHK Complete</td>
                        <td class="text-end city-rate-price">&#8377;7,500 - &#8377;15,000</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-house-door me-1 text-muted"></i> 3 BHK Complete</td>
                        <td class="text-end city-rate-price">&#8377;12,000 - &#8377;22,000</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-bicycle me-1 text-muted"></i> Two-Wheeler / Bike</td>
                        <td class="text-end city-rate-price">&#8377;2,500 - &#8377;5,500</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-car-front me-1 text-muted"></i> Car Carrier Transit</td>
                        <td class="text-end city-rate-price">&#8377;7,000 - &#8377;16,000</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-building me-1 text-muted"></i> Office (per desk)</td>
                        <td class="text-end city-rate-price">&#8377;1,200 - &#8377;2,500</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="city-rate-note">
            <i class="bi bi-info-circle me-1"></i> Final quote depends on distance, goods volume, elevator access &amp; packing quality.
        </p>
    </div>

</aside>