<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Professional Car Carrier & Transportation Services',
    'bc_desc' => 'Safe door-to-door car transport across India using enclosed hydraulic auto trailers, zero driven kilometers, thorough pre-loading inspection & all-risk insurance.',
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
    ]
]);
?>

<!-- 1. Hero / Overview Section (Clean, High-Converting, No Images) -->
<section class="service-section service-bg-surface border-bottom">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Service Details & CTAs -->
      <div class="col-lg-7">
        <span class="service-pill-badge">
          <i class="bi bi-patch-check-fill"></i> ISO 9001:2015 Certified Automobile Logistics
        </span>
        
        <h1 class="service-title-lg">
          Damage-Free &amp; Reliable <span>Car Carrier Services</span> Across India
        </h1>
        
        <p class="service-desc service-desc-lead">
          Relocating to another city shouldn't mean exhausting long-distance driving or risking highway stone chips and wear on your prized automobile. At <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong>, we specialize in premium, nationwide car shipping tailored to family cars, luxury sedans, and SUVs.
        </p>
        
        <p class="service-desc">
          Your car is loaded directly onto specialized enclosed or double-deck multi-car trailers with low-angle hydraulic ramps. Secured by heavy-duty 4-point wheel harnesses and covered against highway grime, we guarantee zero road mileage and absolute transit safety from pickup to your new home.
        </p>

        <!-- Service Highlights Checklist -->
        <ul class="service-checklist">
          <li>
            <i class="bi bi-shield-fill-check"></i>
            <span><strong>Dedicated Hydraulic Car Carriers:</strong> Multi-car covered trailers with non-slip ramps and gentle incline angles.</span>
          </li>
          <li>
            <i class="bi bi-card-checklist"></i>
            <span><strong>25-Point Pre-Loading Inspection:</strong> Detailed digital condition audit, photographic records, and odometer documentation.</span>
          </li>
          <li>
            <i class="bi bi-speedometer2"></i>
            <span><strong>Zero Driven Highway Mileage:</strong> Your vehicle travels securely atop our carriers without engine or tire wear.</span>
          </li>
          <li>
            <i class="bi bi-file-earmark-lock2-fill"></i>
            <span><strong>100% Comprehensive All-Risk Insurance:</strong> Complete transit insurance coverage guarding against unexpected highway contingencies.</span>
          </li>
        </ul>

        <!-- Action Buttons -->
        <div class="d-flex flex-wrap align-items-center gap-3">
          <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-calculator"></i> Get Free Car Quote
          </button>
          <a <?= @$phonehtml ?> class="btn btn-service-outline d-inline-flex align-items-center justify-content-center gap-2 fw-bold">
            <i class="bi bi-telephone-fill"></i> Call <?= @$phone ?: 'Helpline' ?>
          </a>
          <a href="<?= @$whatsapphtml ?: '#' ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success d-inline-flex align-items-center justify-content-center gap-2 fw-bold">
            <i class="bi bi-whatsapp"></i> WhatsApp Us
          </a>
        </div>

        <!-- Trust Metric Strip -->
        <div class="d-flex flex-wrap align-items-center gap-3 mt-4 pt-3 border-top">
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-geo-alt-fill text-danger"></i>
            <span>Doorstep Car Handover</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-clipboard2-check-fill text-danger"></i>
            <span>Verified 25-Point Condition Sheet</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-cash-stack text-danger"></i>
            <span>Guaranteed Binding Quote</span>
          </div>
        </div>

      </div>

      <!-- Right Column: Visual Value Anchor Card (Image-Free Design) -->
      <div class="col-lg-5">
        <div class="service-hero-highlight-box">
          <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
            <div>
              <h3 class="h6 fw-bold mb-1">Car Move Protection Guarantee</h3>
              <small class="text-secondary">Standard on every car carrier dispatch</small>
            </div>
            <div class="service-rating-badge">
              <i class="bi bi-star-fill text-warning"></i>
              <span>4.9 / 5 (12,500+ Cars)</span>
            </div>
          </div>

          <div class="d-flex flex-column gap-3">
            
            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-truck-front"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Enclosed Hydraulic Car Carrier</h5>
                <p class="small text-secondary mb-0">Completely weatherproof steel body trucks prevent highway stone chips, dust, and rain.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-slash-circle-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Individual Wheel Lock Harnesses</h5>
                <p class="small text-secondary mb-0">High-tension wheel clamping system holds all four tires firmly to the chassis bed.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-shield-shaded"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Protective Interior Seat Covers</h5>
                <p class="small text-secondary mb-0">Steering wheels, floor mats, and driver seats are wrapped in protective covers before loading.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Assigned Car Move Manager</h5>
                <p class="small text-secondary mb-0">Direct point of contact providing live trailer tracking and scheduled arrival updates.</p>
              </div>
            </div>

          </div>

          <!-- Quick Quote Action Box -->
          <div class="bg-light border rounded-3 p-3 mt-4 text-center">
            <h5 class="h6 fw-bold mb-1">Calculate Your Car Moving Cost</h5>
            <p class="small text-secondary mb-3">Instant price calculation based on car model and route distance in under 2 minutes.</p>
            <button type="button" class="btn btn-service-primary w-100 d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-lightning-charge-fill"></i> Request Instant Estimate
            </button>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- 2. Key Numbers / Statistics Counter Bar -->
<section class="service-section-sm bg-white border-bottom">
  <div class="container">
    <div class="service-stats-grid">
      
      <div class="service-stat-box">
        <i class="bi bi-car-front-fill service-stat-icon"></i>
        <div class="service-stat-number">18,000+</div>
        <p class="service-stat-label">Cars Safely Delivered</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-shield-shaded service-stat-icon"></i>
        <div class="service-stat-number">100%</div>
        <p class="service-stat-label">All-Risk Insurance Protection</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-pin-map-fill service-stat-icon"></i>
        <div class="service-stat-number">150+</div>
        <p class="service-stat-label">Direct Intercity Auto Routes</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-stars service-stat-icon"></i>
        <div class="service-stat-number">4.9 / 5</div>
        <p class="service-stat-label">Car Owner Satisfaction Rating</p>
      </div>

    </div>
  </div>
</section>

<!-- 3. Defensive Safety Standard (5-Point Car Carrier Safeguards) -->
<section class="service-section service-bg-surface border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">Automobile Safety Protocol</span>
      <h2 class="service-title-md">Our <span>5-Point Defensive</span> Car Safeguards</h2>
      <p class="service-desc">
        We handle family sedans, luxury SUVs, and vintage cars with rigorous engineering standards. From low-angle ramp loading to individual wheel locks, your car is buffered against every road contingency.
      </p>
    </div>

    <div class="service-layers-grid">
      
      <!-- Layer 1 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-clipboard2-pulse-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">25-Point Condition Audit</h4>
          <span class="service-layer-num ms-auto">01</span>
        </div>
        <p class="small text-secondary mb-0">
          Photographic catalog of body panels, glass, odometer reading, and fuel levels signed jointly prior to transport.
        </p>
      </div>

      <!-- Layer 2 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Interior Cabin Armor</h4>
          <span class="service-layer-num ms-auto">02</span>
        </div>
        <p class="small text-secondary mb-0">
          Protective film covers on steering wheel, driver seat, and floor mats ensure zero smudges or grease transfers.
        </p>
      </div>

      <!-- Layer 3 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-arrow-up-right-square-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Low-Angle Ramp Loading</h4>
          <span class="service-layer-num ms-auto">03</span>
        </div>
        <p class="small text-secondary mb-0">
          Specialized gradual hydraulic incline prevents undercarriage scraping on low ground-clearance sedans and sports coupes.
        </p>
      </div>

      <!-- Layer 4 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-slash-circle-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">4-Point Wheel Harnessing</h4>
          <span class="service-layer-num ms-auto">04</span>
        </div>
        <p class="small text-secondary mb-0">
          Individual heavy-duty polyester straps clamp all four tires to trailer chassis grooves, isolating car suspension.
        </p>
      </div>

      <!-- Layer 5 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-lock-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Weather &amp; Gravel Seal</h4>
          <span class="service-layer-num ms-auto">05</span>
        </div>
        <p class="small text-secondary mb-0">
          Sealed container trucks protect car finish from flying highway gravel, sun exposure, diesel soot, and rainstorms.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- 4. Step-by-Step Relocation Process -->
<section class="service-section bg-white border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">How It Works</span>
      <h2 class="service-title-md">A Seamless <span>5-Step</span> Car Transport Roadmap</h2>
      <p class="service-desc">
        From initial booking and physical condition mapping to safe doorstep handover at your destination, our standardized workflow guarantees peace of mind.
      </p>
    </div>

    <div class="service-process-timeline">
      
      <!-- Step 1 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">1</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-calculator-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Free Survey &amp; Quote</h4>
        </div>
        <p class="small text-secondary mb-0">
          Enter your car model, source, and destination city. Receive a guaranteed written quote with zero hidden terminal charges.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">2</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-camera-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Doorstep Pickup &amp; Audit</h4>
        </div>
        <p class="small text-secondary mb-0">
          Our specialist verifies your vehicle at your doorstep, records pre-existing conditions with photos, and issues your consignment note.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">3</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-truck service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Carrier Bed Securing</h4>
        </div>
        <p class="small text-secondary mb-0">
          Your car is driven gently up the hydraulic ramp, positioned onto the carrier deck, and anchored with 4-point tire locks.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">4</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-broadcast-pin service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">GPS Tracked Transit</h4>
        </div>
        <p class="small text-secondary mb-0">
          The trailer travels along dedicated highway corridors with real-time tracking updates shared by your Move Coordinator.
        </p>
      </div>

      <!-- Step 5 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">5</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-key-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Destination Handover</h4>
        </div>
        <p class="small text-secondary mb-0">
          Unloaded right outside your new residence, inspected jointly against the pickup audit sheet, and handed over spotless.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- 5. Why Choose V-Move Advantage (Core Trust Highlights) -->
<section class="service-section service-bg-surface border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">The V-Move Edge</span>
      <h2 class="service-title-md">Why Car Owners Trust <span><?= @$company3 ?: 'V-Move' ?></span></h2>
      <p class="service-desc">
        We treat your vehicle with the same care and precision as our own. Discover what makes us India's preferred automobile relocation partner.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-truck-front-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Dedicated Closed Auto Carriers</h4>
            <p class="small text-secondary mb-0">We never compromise with open flatbeds. Your automobile is safeguarded inside specialized covered carriers away from highway debris.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-ev-front-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">EV &amp; Luxury Vehicle Certified</h4>
            <p class="small text-secondary mb-0">Specialized protocols for electric vehicles (EVs) and luxury brands (Mercedes, BMW, Audi) with sensitive electronic sensor protections.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-speedometer"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Zero Driven Kilometers</h4>
            <p class="small text-secondary mb-0">Your odometer is documented at pickup and verified at delivery. We never drive client cars between cities under any circumstance.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-file-earmark-check-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Written Binding Quotations</h4>
            <p class="small text-secondary mb-0">Our quotes include tolls, taxes, insurance, and doorstep handover. No surprise destination terminal charges ever.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-shield-lock-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">100% Comprehensive Transit Insurance</h4>
            <p class="small text-secondary mb-0">Every vehicle is secured with all-risk transit coverage from authorized national insurance partners with rapid claim settlement.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-clock-history"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Punctual Transit Timelines</h4>
            <p class="small text-secondary mb-0">Scheduled highway departures across major economic corridors mean your car reaches your new destination right on calendar schedule.</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 6. Frequently Asked Questions (FAQ Accordion) -->
<section class="service-section bg-white border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">Common Questions</span>
      <h2 class="service-title-md">Frequently Asked Questions on <span>Car Transportation</span></h2>
      <p class="service-desc">
        Find direct answers to common queries regarding car carrier types, luggage inside cars, paperwork, and insurance coverage.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        <div class="accordion service-accordion" id="carShiftingFaq">
          
          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="carFaqHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#carFaqCollapseOne" aria-expanded="true" aria-controls="carFaqCollapseOne">
                1. How will my car be transported—driven or carried on a truck?
              </button>
            </h3>
            <div id="carFaqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="carFaqHeadingOne" data-bs-parent="#carShiftingFaq">
              <div class="accordion-body">
                Your car will be carried on a dedicated multi-car carrier or enclosed auto transport trailer. It is driven only for a few meters to gently navigate up the hydraulic loading ramp onto the carrier bed. We strictly never drive client vehicles across highways between cities.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="carFaqHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#carFaqCollapseTwo" aria-expanded="false" aria-controls="carFaqCollapseTwo">
                2. Can I keep personal luggage or household cartons inside the car?
              </button>
            </h3>
            <div id="carFaqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="carFaqHeadingTwo" data-bs-parent="#carShiftingFaq">
              <div class="accordion-body">
                While small personal luggage (up to 20–30 kg in the boot) is generally permitted, we recommend avoiding valuable, fragile, or heavy goods inside the car. Heavy loads shift center-of-gravity during highway braking, and personal contents inside the vehicle are typically excluded from automobile transit insurance policies.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="carFaqHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#carFaqCollapseThree" aria-expanded="false" aria-controls="carFaqCollapseThree">
                3. What documents are needed for interstate car transportation?
              </button>
            </h3>
            <div id="carFaqCollapseThree" class="accordion-collapse collapse" aria-labelledby="carFaqHeadingThree" data-bs-parent="#carShiftingFaq">
              <div class="accordion-body">
                To comply with interstate transport laws, please provide clear photocopies of: (1) Vehicle Registration Certificate (RC), (2) Valid Comprehensive Car Insurance policy, (3) Valid Pollution Under Control (PUC) certificate, and (4) ID proof of the vehicle owner (Aadhaar Card, Passport, or PAN card). Original documents should remain in your personal custody.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="carFaqHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#carFaqCollapseFour" aria-expanded="false" aria-controls="carFaqCollapseFour">
                4. How do you prevent undercarriage scraping on low-clearance sedans?
              </button>
            </h3>
            <div id="carFaqCollapseFour" class="accordion-collapse collapse" aria-labelledby="carFaqHeadingFour" data-bs-parent="#carShiftingFaq">
              <div class="accordion-body">
                Our car carriers feature extended, multi-stage hydraulic ramps with shallow approach angles engineered specifically for low ground-clearance sedans (such as Honda City, Skoda Octavia, or luxury sports sedans). This guarantees that front splitters and catalytic converters never scrape the ramp surface.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="carFaqHeadingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#carFaqCollapseFive" aria-expanded="false" aria-controls="carFaqCollapseFive">
                5. How much fuel should be in the car tank prior to shipping?
              </button>
            </h3>
            <div id="carFaqCollapseFive" class="accordion-collapse collapse" aria-labelledby="carFaqHeadingFive" data-bs-parent="#carShiftingFaq">
              <div class="accordion-body">
                Please maintain around one-quarter (15% to 25%) of a tank of fuel. This provides enough fuel to load and unload the vehicle onto the trailer, while reducing overall deadweight and minimizing fire safety hazards inside the transport trailer.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="carFaqHeadingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#carFaqCollapseSix" aria-expanded="false" aria-controls="carFaqCollapseSix">
                6. What happens if accidental transit damage occurs?
              </button>
            </h3>
            <div id="carFaqCollapseSix" class="accordion-collapse collapse" aria-labelledby="carFaqHeadingSix" data-bs-parent="#carShiftingFaq">
              <div class="accordion-body">
                Every vehicle shipment is insured under comprehensive transit insurance. At delivery, you and our executive conduct a joint walk-around inspection comparing current condition against the 25-point pickup audit sheet. In the rare case of any discrepancies, our dedicated claims desk facilitates immediate claim documentation and rapid processing.
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>

<!-- 7. High-Converting Bottom CTA Card -->
<section class="service-section service-bg-surface">
  <div class="container">
    <div class="service-cta-card">
      <div class="row align-items-center g-4">
        
        <div class="col-lg-8">
          <span class="service-pill-badge service-pill-badge-light mb-3">
            <i class="bi bi-tag-fill"></i> Save Up to 20% on Advance Car Bookings
          </span>
          <h2 class="service-cta-title">
            Moving Your <span>Car to Another City</span>?
          </h2>
          <p class="service-cta-desc mb-4 text-white-50">
            Trust your vehicle with <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong>. Enjoy zero driven miles, enclosed car trailers, and comprehensive transit insurance.
          </p>
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-3">
            <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator"></i> Get Free Car Quote
            </button>
            <a <?= @$phonehtml ?> class="btn btn-outline-light d-inline-flex align-items-center justify-content-center gap-2 fw-bold">
              <i class="bi bi-telephone-fill"></i> Call <?= @$phone ?: 'Us' ?>
            </a>
            <a href="<?= @$whatsapphtml ?: '#' ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success d-inline-flex align-items-center justify-content-center gap-2 fw-bold">
              <i class="bi bi-whatsapp"></i> WhatsApp Quote
            </a>
          </div>
        </div>

        <div class="col-lg-4 text-lg-end">
          <div class="service-cta-feature-box d-inline-flex flex-column gap-2 text-start p-3 rounded-3">
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Closed Container Car Carrier</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Doorstep Pickup &amp; Safe Delivery</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">25-Point Condition Audit Sheet</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">100% Comprehensive Transit Insurance</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
