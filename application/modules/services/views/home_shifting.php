<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Household & Home Relocation Services',
    'bc_desc' => 'Professional, stress-free household moving with 5-layer defensive packing, verified crew & zero damage guarantee.',
    'breadcrumbs' => [
        ['name' => 'Home Relocation']
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
          <i class="bi bi-patch-check-fill"></i> ISO 9001:2015 Certified Household Movers
        </span>
        
        <h1 class="service-title-lg">
          Safe &amp; Stress-Free <span>Home Relocation</span> Across India
        </h1>
        
        <p class="service-desc service-desc-lead">
          Moving your home shouldn't be stressful. At <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong>, we deliver complete, end-to-end household shifting tailored to your family's schedule and prized belongings.
        </p>
        
        <p class="service-desc">
          From careful dismantling of heavy modular beds and wardrobes to 5-layer defensive packing of fragile glassware, electronic appliances, and chinaware—our full-time, background-verified team ensures every item arrives at your new doorstep in spotless condition.
        </p>

        <!-- Service Highlights Checklist -->
        <ul class="service-checklist">
          <li>
            <i class="bi bi-shield-fill-check"></i>
            <span><strong>Multi-Layer Defensive Packaging:</strong> Bubble wrap, heavy 5-ply cartons, edge protectors, and corrugated sheets.</span>
          </li>
          <li>
            <i class="bi bi-tools"></i>
            <span><strong>Free Furniture Dismantling &amp; Reassembly:</strong> Expert technicians for beds, modular wardrobes, and dining tables.</span>
          </li>
          <li>
            <i class="bi bi-truck-front-fill"></i>
            <span><strong>All-Weather Sealed Containers:</strong> Dedicated weatherproof container trucks guarding goods from rain, dust, and transit heat.</span>
          </li>
          <li>
            <i class="bi bi-file-earmark-lock2-fill"></i>
            <span><strong>100% Comprehensive Transit Insurance:</strong> Zero hidden fees, written contractual quote with complete peace of mind.</span>
          </li>
        </ul>

        <!-- Action Buttons -->
        <div class="d-flex flex-wrap align-items-center gap-3">
          <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-calculator"></i> Get Free Moving Quote
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
            <i class="bi bi-clock-history text-danger"></i>
            <span>Guaranteed On-Time Pick-Up</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-person-check-fill text-danger"></i>
            <span>Verified Permanent Staff</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-cash-stack text-danger"></i>
            <span>Zero Hidden Charges</span>
          </div>
        </div>

      </div>

      <!-- Right Column: Visual Value Anchor Card (Image-Free Design) -->
      <div class="col-lg-5">
        <div class="service-hero-highlight-box">
          <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
            <div>
              <h3 class="h6 fw-bold mb-1">Move Protection Guarantee</h3>
              <small class="text-secondary">Standard on every household shifting</small>
            </div>
            <div class="service-rating-badge">
              <i class="bi bi-star-fill text-warning"></i>
              <span>4.9 / 5 (4,500+ Moves)</span>
            </div>
          </div>

          <div class="d-flex flex-column gap-3">
            
            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-box-seam-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Complete Packing &amp; Unpacking</h5>
                <p class="small text-secondary mb-0">Systematic room-by-room packing with itemized inventory labels for effortless setup.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-tv-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Specialized Fragile &amp; TV Crating</h5>
                <p class="small text-secondary mb-0">Triple bubble wrap, foam corner guards, and rigid wooden crates for LED TVs and chinaware.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-wrench-adjustable-circle-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Skilled Carpentry &amp; Appliance Setup</h5>
                <p class="small text-secondary mb-0">Trained crew handles dismantling of double beds, almirahs, and basic appliance setup.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Real-Time GPS Tracking &amp; Move Manager</h5>
                <p class="small text-secondary mb-0">Direct contact with your assigned Move Coordinator for live location and arrival updates.</p>
              </div>
            </div>

          </div>

          <!-- Quick Quote Action Box -->
          <div class="bg-light border rounded-3 p-3 mt-4 text-center">
            <h5 class="h6 fw-bold mb-1">Need an Exact Price Estimate?</h5>
            <p class="small text-secondary mb-3">Our moving specialist will provide an instant, all-inclusive quote in under 2 minutes.</p>
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
        <i class="bi bi-house-check-fill service-stat-icon"></i>
        <div class="service-stat-number">15,000+</div>
        <p class="service-stat-label">Homes Safely Shifted</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-shield-shaded service-stat-icon"></i>
        <div class="service-stat-number">99.4%</div>
        <p class="service-stat-label">Zero-Damage Record</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-pin-map-fill service-stat-icon"></i>
        <div class="service-stat-number">100+</div>
        <p class="service-stat-label">Pan-India Network Cities</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-stars service-stat-icon"></i>
        <div class="service-stat-number">4.9 / 5</div>
        <p class="service-stat-label">Customer Satisfaction Rating</p>
      </div>

    </div>
  </div>
</section>

<!-- 3. Our 5-Layer Defensive Packaging Standard (Unique Image-Free Visual Grid) -->
<section class="service-section service-bg-surface border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">Zero Damage Standard</span>
      <h2 class="service-title-md">Our <span>5-Layer Defensive</span> Packing System</h2>
      <p class="service-desc">
        We do not compromise with cheap newspaper or substandard materials. Every household item is wrapped with a calibrated 5-tier protective barrier engineered to absorb shocks, highway vibrations, and extreme weather.
      </p>
    </div>

    <div class="service-layers-grid">
      
      <!-- Layer 1 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-record-circle-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Bubble Cushioning</h4>
          <span class="service-layer-num ms-auto">01</span>
        </div>
        <p class="small text-secondary mb-0">
          High-gauge air pocket wrap absorbs physical shocks, road bumps, and direct impact on delicate surfaces.
        </p>
      </div>

      <!-- Layer 2 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-layers-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">5-Ply Cartons</h4>
          <span class="service-layer-num ms-auto">02</span>
        </div>
        <p class="small text-secondary mb-0">
          Heavy crush-resistant corrugated boxes prevent collapsing when stacked, ensuring structural safety.
        </p>
      </div>

      <!-- Layer 3 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-shield-shaded"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Stretch Film Seal</h4>
          <span class="service-layer-num ms-auto">03</span>
        </div>
        <p class="small text-secondary mb-0">
          Industrial moisture-tight film seals against rainwater, highway dust, smudges, and high humidity during transit.
        </p>
      </div>

      <!-- Layer 4 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-bounding-box-circles"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Edge &amp; Corner Guards</h4>
          <span class="service-layer-num ms-auto">04</span>
        </div>
        <p class="small text-secondary mb-0">
          Rigid foam protectors shield vulnerable furniture corners, wooden tabletops, and mirror frames from chipping.
        </p>
      </div>

      <!-- Layer 5 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-lock-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Reinforced Strapping</h4>
          <span class="service-layer-num ms-auto">05</span>
        </div>
        <p class="small text-secondary mb-0">
          Heavy nylon strapping bands and tamper-evident security tapes secure all cartons and crated items firmly.
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
      <h2 class="service-title-md">A Seamless <span>5-Step</span> Relocation Journey</h2>
      <p class="service-desc">
        From your very first enquiry to the moment the last carton is unpacked at your new home, our structured workflow eliminates surprises and delays.
      </p>
    </div>

    <div class="service-process-timeline">
      
      <!-- Step 1 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">1</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-clipboard2-check service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Free Survey &amp; Quote</h4>
        </div>
        <p class="small text-secondary mb-0">
          Submit an online request or schedule a free virtual/doorstep survey. We examine the inventory and provide a fixed, transparent written quotation.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">2</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-box2-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Defensive Packing</h4>
        </div>
        <p class="small text-secondary mb-0">
          On moving day, our verified team arrives on time with heavy cartons, bubble wraps, and tools to dismantle modular furniture and pack room by room.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">3</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-truck-flatbed service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Mechanized Loading</h4>
        </div>
        <p class="small text-secondary mb-0">
          Heavier items are secured using moving dollies and safety straps into sealed, weather-resistant closed container vehicles to avoid transit movement.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">4</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-broadcast-pin service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Tracked Transit</h4>
        </div>
        <p class="small text-secondary mb-0">
          Your shipment moves under continuous GPS tracking. Your dedicated Move Manager gives you regular milestone updates until safe arrival.
        </p>
      </div>

      <!-- Step 5 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">5</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-check-circle-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Unloading &amp; Setup</h4>
        </div>
        <p class="small text-secondary mb-0">
          Goods are unloaded, carried into your designated rooms, beds and furniture are reassembled, and all empty packaging cartons are cleared away.
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
      <h2 class="service-title-md">Why Indian Families Trust <span><?= @$company3 ?: 'V-Move' ?></span></h2>
      <p class="service-desc">
        We treat your household belongings with the same care and respect as our own. Discover what makes us the preferred choice for residential moving.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-person-badge"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Verified Permanent Crew</h4>
            <p class="small text-secondary mb-0">We do not hire daily casual laborers. Our full-time staff undergoes background verification, drug screening, and professional packing training.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">100% Transit Insurance</h4>
            <p class="small text-secondary mb-0">Every domestic household consignment can be covered under optional all-risk transit insurance from recognized insurance partners for complete financial safety.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-truck-front"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Weatherproof Closed Fleet</h4>
            <p class="small text-secondary mb-0">Our dedicated container trucks prevent damage caused by torrential monsoon rain, dust storms, sun exposure, and highway turbulence.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-calculator-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Fixed Written Estimate</h4>
            <p class="small text-secondary mb-0">No sudden price escalations on moving day. Every quote includes detailed line items so you know exactly what you are paying for upfront.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-alarm-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Punctual Execution</h4>
            <p class="small text-secondary mb-0">We respect your time. Our packing team arrives right at the committed morning slot and delivers on the scheduled day without excuses.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-recycle"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Debris &amp; Box Removal</h4>
            <p class="small text-secondary mb-0">Once unpacking and placement are complete, our team gathers all used carton boxes, bubble wraps, and tapes so your new home remains pristine.</p>
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
      <h2 class="service-title-md">Frequently Asked Questions on <span>Home Relocation</span></h2>
      <p class="service-desc">
        Find clear, direct answers to common queries regarding household shifting, safety measures, insurance, and booking procedures.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        <div class="accordion service-accordion" id="homeShiftingFaq">
          
          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                1. What is included in your household shifting services?
              </button>
            </h3>
            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#homeShiftingFaq">
              <div class="accordion-body">
                Our comprehensive household shifting service covers everything from start to finish. This includes: supply of high-grade packing materials (bubble wrap, corrugated sheets, stretch film, cartons, and tape), dismantling of large double beds and modular wardrobes, safe loading into weatherproof container trucks, door-to-door transportation, unloading at your new home, room-wise placement, and reassembly of dismantled furniture.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                2. How do you calculate the household moving charges?
              </button>
            </h3>
            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#homeShiftingFaq">
              <div class="accordion-body">
                Relocation costs are calculated based on three primary factors: (1) Total volume and weight of goods (which dictates the packing material and truck size), (2) The transit distance between pickup and destination, and (3) Physical access conditions such as floor level, availability of a working service elevator, and walking distance from the truck to your building gate. We provide a transparent, fixed written estimate after our free survey.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                3. How far in advance should I book my household relocation?
              </button>
            </h3>
            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#homeShiftingFaq">
              <div class="accordion-body">
                For local city moves, we recommend booking at least 2 to 4 days in advance. For interstate or long-distance domestic relocation, booking 5 to 7 days ahead allows us to reserve dedicated container slots and arrange pre-move survey seamlessly. However, we also cater to urgent, same-day requests subject to fleet availability.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                4. How do you protect delicate electronics like OLED TVs and glassware?
              </button>
            </h3>
            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#homeShiftingFaq">
              <div class="accordion-body">
                Fragile electronics are packed using a dedicated 4-tier process: first wrapped in anti-static foam, cushioned with thick high-density bubble wrap, placed inside heavy-duty LED TV cartons with corner shock absorbers, and strapped securely. Glassware and chinaware are individually wrapped in air-bubble pockets and packed vertically in cell-divided cartons to prevent compression breakage.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeadingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                5. Do you handle AC uninstallation, carpentry, and electrical work?
              </button>
            </h3>
            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#homeShiftingFaq">
              <div class="accordion-body">
                Our moving team carries all necessary tools and handles standard carpentry dismantling and reassembly (such as beds, dining tables, modular storage) free of charge. For split AC uninstallation/re-installation, geysers, or wall-mounting TVs, we can arrange certified third-party technicians upon request at nominal standardized add-on rates.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeadingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
                6. What items cannot be transported in household shifting?
              </button>
            </h3>
            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#homeShiftingFaq">
              <div class="accordion-body">
                For safety and legal compliance, we cannot transport hazardous or perishable materials. This includes: gas cylinders (unless completely emptied and certified), petroleum products, flammable liquids, paints, fireworks, fresh perishable foods, and pets. Cash, gold, original property deeds, and important personal jewelry must always be carried personally by the customer.
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
            <i class="bi bi-tag-fill"></i> Save Up to 20% on Advance Bookings
          </span>
          <h2 class="service-cta-title">
            Planning Your <span>Home Move</span> Soon?
          </h2>
          <p class="service-cta-desc mb-4 text-white-50">
            Book your household move with <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong> today. Get a transparent, guaranteed estimate with zero hidden costs and total moving safety.
          </p>
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-3">
            <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator"></i> Get Free Quote Online
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
              <span class="small text-white">Free Doorstep / Virtual Survey</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Written Price Guarantee</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">5-Ply Defensive Packaging</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">24/7 Dedicated Move Coordinator</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>
