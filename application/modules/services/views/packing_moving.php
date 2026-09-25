<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'End-to-End Packing & Moving Services',
    'bc_desc' => 'India\'s premier all-in-one packing and moving service with 5-layer industrial protection, background-verified packing specialists, weather-sealed trucks & guaranteed safety.',
    'breadcrumbs' => [
        ['name' => 'Packing & Moving']
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
          <i class="bi bi-patch-check-fill"></i> Pan-India Certified Packing &amp; Moving Specialist
        </span>
        
        <h1 class="service-title-lg">
          Complete &amp; Reliable <span>Packing &amp; Moving</span> Services Across India
        </h1>
        
        <p class="service-desc service-desc-lead">
          Relocating your household, corporate office, or commercial goods requires systematic planning, premium packing materials, and disciplined execution. At <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong>, we deliver complete, end-to-end relocation where you don't have to lift a single finger.
        </p>
        
        <p class="service-desc">
          From supplying heavy 5-ply cartons, bubble cushioning, and custom wooden crates to expert furniture dismantling, mechanized loading into all-weather container trucks, express transit, and white-glove unpacking at your new doorstep—we handle your transition with zero damage and absolute accountability.
        </p>

        <!-- Service Highlights Checklist -->
        <ul class="service-checklist">
          <li>
            <i class="bi bi-box-seam-fill"></i>
            <span><strong>Industrial Grade 5-Layer Packing:</strong> Bubble wraps, edge protectors, heavy corrugated sheets, and moisture barrier films.</span>
          </li>
          <li>
            <i class="bi bi-tools"></i>
            <span><strong>Skilled Carpentry &amp; Appliance Handling:</strong> Dismantling and reassembly of double beds, modular wardrobes, and home theatre systems.</span>
          </li>
          <li>
            <i class="bi bi-truck-front-fill"></i>
            <span><strong>Weather-Sealed Container Trucks:</strong> Modern, dedicated fleet guarding goods against highway rain, dust, and transit heat.</span>
          </li>
          <li>
            <i class="bi bi-shield-check"></i>
            <span><strong>100% Comprehensive Transit Insurance:</strong> Transparent, written contractual quotes with full claim facilitation for absolute security.</span>
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
            <span>Punctual Morning Dispatch</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-person-check-fill text-danger"></i>
            <span>Permanent Verified Crews</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-cash-stack text-danger"></i>
            <span>Zero Hidden Surcharges</span>
          </div>
        </div>

      </div>

      <!-- Right Column: Visual Value Anchor Card (Image-Free Design) -->
      <div class="col-lg-5">
        <div class="service-hero-highlight-box">
          <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
            <div>
              <h3 class="h6 fw-bold mb-1">Total Move Assurance</h3>
              <small class="text-secondary">Standard on every relocation package</small>
            </div>
            <div class="service-rating-badge">
              <i class="bi bi-star-fill text-warning"></i>
              <span>4.9 / 5 (45,000+ Moves)</span>
            </div>
          </div>

          <div class="d-flex flex-column gap-3">
            
            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-box2-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Room-by-Room Packing System</h5>
                <p class="small text-secondary mb-0">Systematic inventory labeling ensures all boxes are carried directly to their designated rooms.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-tv-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Fragile &amp; Electronics Crating</h5>
                <p class="small text-secondary mb-0">Custom foam crating and heavy bubble cushioning for OLED TVs, chinaware, and glass tabletops.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-wrench-adjustable-circle-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Furniture Dismantling &amp; Reassembly</h5>
                <p class="small text-secondary mb-0">Trained carpenters dismantle heavy beds and modular units, reassembling them securely at destination.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Assigned Move Coordinator &amp; GPS</h5>
                <p class="small text-secondary mb-0">Direct point of contact providing live highway truck tracking and arrival coordination.</p>
              </div>
            </div>

          </div>

          <!-- Quick Quote Action Box -->
          <div class="bg-light border rounded-3 p-3 mt-4 text-center">
            <h5 class="h6 fw-bold mb-1">Need an All-Inclusive Quote?</h5>
            <p class="small text-secondary mb-3">Our moving specialist will provide an instant, guaranteed price estimate in under 2 minutes.</p>
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
        <div class="service-stat-number">45,000+</div>
        <p class="service-stat-label">Relocations Completed</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-shield-shaded service-stat-icon"></i>
        <div class="service-stat-number">99.7%</div>
        <p class="service-stat-label">Zero-Claim Safe Moves</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-truck service-stat-icon"></i>
        <div class="service-stat-number">200+</div>
        <p class="service-stat-label">Sealed Container Trucks</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-stars service-stat-icon"></i>
        <div class="service-stat-number">4.9 / 5</div>
        <p class="service-stat-label">Verified Customer Review</p>
      </div>

    </div>
  </div>
</section>

<!-- 3. Defensive Safety Standard (5-Tier All-Goods Protective Shield) -->
<section class="service-section service-bg-surface border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">Zero Damage Standard</span>
      <h2 class="service-title-md">Our <span>5-Tier Defensive</span> Packing Shield</h2>
      <p class="service-desc">
        We never cut corners with cheap recycled boxes or newspaper wrapping. Every consignment is fortified using an engineered multi-tier defense system designed to absorb severe shocks and vibrations.
      </p>
    </div>

    <div class="service-layers-grid">
      
      <!-- Layer 1 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-record-circle-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">High-Gauge Air Bubbles</h4>
          <span class="service-layer-num ms-auto">01</span>
        </div>
        <p class="small text-secondary mb-0">
          Dense air-pocket wrap acts as a shock absorber against potholes, road bumps, and physical contact.
        </p>
      </div>

      <!-- Layer 2 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-layers-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Heavy 5-Ply Cartons</h4>
          <span class="service-layer-num ms-auto">02</span>
        </div>
        <p class="small text-secondary mb-0">
          Heavy crush-resistant corrugated boxes prevent collapse when stacked inside container vehicles.
        </p>
      </div>

      <!-- Layer 3 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-shield-shaded"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Stretch Barrier Film</h4>
          <span class="service-layer-num ms-auto">03</span>
        </div>
        <p class="small text-secondary mb-0">
          Industrial moisture-tight film seals cartons from torrential monsoon rain, dust, and highway humidity.
        </p>
      </div>

      <!-- Layer 4 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-bounding-box-circles"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Rigid Edge Guards</h4>
          <span class="service-layer-num ms-auto">04</span>
        </div>
        <p class="small text-secondary mb-0">
          Dense foam angle boards protect fragile table corners, wooden edges, and mirror frames from chipping.
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
          High-tensile nylon strapping bands and tamper-evident security tapes secure all cartons firmly.
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
        From your very first enquiry to the moment the last box is unpacked and empty packaging cleared away, our structured workflow eliminates chaos.
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
          Schedule a free doorstep or video survey. We audit the inventory and deliver a fixed, transparent written quotation.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">2</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-box2-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Multi-Layer Packing</h4>
        </div>
        <p class="small text-secondary mb-0">
          Our verified squad arrives on time with fresh cartons, bubble wraps, and tools to dismantle furniture and pack room-by-room.
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
          Heavier items are moved on flatbed dollies and safety straps into sealed, weather-resistant closed container trucks.
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
          Your shipment moves under continuous satellite GPS tracking with live location milestones shared by your Move Manager.
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
          Goods are unloaded into your designated rooms, dismantled beds reassembled, and all empty carton debris cleared away.
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
        We treat your possessions with the utmost respect and care. Discover why families and businesses across India count on us for reliable relocation.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-person-badge"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Verified Full-Time Squad</h4>
            <p class="small text-secondary mb-0">We never hire casual roadside labor. Our disciplined team undergoes thorough background checks and professional packing training.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">100% Transit Insurance Cover</h4>
            <p class="small text-secondary mb-0">Every consignment can be protected under comprehensive all-risk transit insurance from recognized national insurance partners.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-truck-front"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Dedicated Weatherproof Fleet</h4>
            <p class="small text-secondary mb-0">Our container vehicles prevent damage caused by highway torrential rain, dust storms, sun exposure, and highway turbulence.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-calculator-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Fixed Binding Estimates</h4>
            <p class="small text-secondary mb-0">No sudden rate escalations or hidden delivery charges. Every estimate is binding and transparently line-itemed upfront.</p>
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
            <p class="small text-secondary mb-0">Our packing team arrives at the agreed morning time slot and completes relocation on the committed schedule without delays.</p>
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
            <p class="small text-secondary mb-0">After unpacking and reassembling furniture, our team packs away all empty carton debris and tapes, leaving your home spotless.</p>
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
      <h2 class="service-title-md">Frequently Asked Questions on <span>Packing &amp; Moving</span></h2>
      <p class="service-desc">
        Find direct answers to common questions about materials, fragile items, unpacking, insurance, and booking procedures.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        <div class="accordion service-accordion" id="packingMovingFaq">
          
          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="packingFaqHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#packingFaqCollapseOne" aria-expanded="true" aria-controls="packingFaqCollapseOne">
                1. What is included in your end-to-end packing and moving service?
              </button>
            </h3>
            <div id="packingFaqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="packingFaqHeadingOne" data-bs-parent="#packingMovingFaq">
              <div class="accordion-body">
                Our complete packing and moving package covers everything from start to finish: supply of all packing materials (bubble wrap, corrugated sheets, 5-ply cartons, and tape), dismantling of double beds and modular wardrobes, room-by-room packing, mechanized loading into container trucks, transportation, unloading at your new address, placement into designated rooms, and reassembly of dismantled furniture.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="packingFaqHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packingFaqCollapseTwo" aria-expanded="false" aria-controls="packingFaqCollapseTwo">
                2. Do I need to buy my own carton boxes or tape?
              </button>
            </h3>
            <div id="packingFaqHeadingTwo" class="accordion-collapse collapse" aria-labelledby="packingFaqHeadingTwo" data-bs-parent="#packingMovingFaq">
              <div class="accordion-body">
                Not at all! Our team arrives on moving day with fresh, high-grade 5-ply corrugated carton boxes, thick bubble wrap rolls, foam sheets, packing paper, and heavy-duty adhesive tape. Everything required to securely wrap your home or office is included in your agreed quotation.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="packingFaqHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packingFaqCollapseThree" aria-expanded="false" aria-controls="packingFaqCollapseThree">
                3. How do you protect delicate glassware, crockery, and expensive electronics?
              </button>
            </h3>
            <div id="packingFaqHeadingThree" class="accordion-collapse collapse" aria-labelledby="packingFaqHeadingThree" data-bs-parent="#packingMovingFaq">
              <div class="accordion-body">
                Glassware and chinaware are individually bubble-wrapped and placed vertically into cell-partitioned cartons to prevent compression cracks. Electronics like LED TVs, monitors, and soundbars are cushioned with anti-static wrap, placed inside dedicated heavy-gauge cartons with reinforced foam corner bumpers, and strapped firmly.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="packingFaqHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packingFaqCollapseFour" aria-expanded="false" aria-controls="packingFaqCollapseFour">
                4. Will your team unpack the boxes and take away empty cartons?
              </button>
            </h3>
            <div id="packingFaqHeadingFour" class="accordion-collapse collapse" aria-labelledby="packingFaqHeadingFour" data-bs-parent="#packingMovingFaq">
              <div class="accordion-body">
                Yes. Upon arrival at your new address, our team carries all boxes into their corresponding rooms, unloads furniture, and reassembles beds and tables. For complete unpacking service, our staff unwraps items, places them on flat surfaces, and gathers all discarded cartons and wraps so your new home remains pristine.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="packingFaqHeadingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packingFaqCollapseFive" aria-expanded="false" aria-controls="packingFaqCollapseFive">
                5. What items should I pack personally instead of giving to movers?
              </button>
            </h3>
            <div id="packingFaqHeadingFive" class="accordion-collapse collapse" aria-labelledby="packingFaqHeadingFive" data-bs-parent="#packingMovingFaq">
              <div class="accordion-body">
                We strongly advise all customers to personally carry: valuable jewelry, cash, credit cards, original property deeds, passports, stock certificates, important personal medicines, and essential daily gadgets (laptops and phones). Flammable items like gas cylinders, fireworks, and acids cannot be transported in our trucks.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="packingFaqHeadingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#packingFaqCollapseSix" aria-expanded="false" aria-controls="packingFaqCollapseSix">
                6. How does your transit insurance claim process work?
              </button>
            </h3>
            <div id="packingFaqHeadingSix" class="accordion-collapse collapse" aria-labelledby="packingFaqHeadingSix" data-bs-parent="#packingMovingFaq">
              <div class="accordion-body">
                In the rare event of transit damage, our supervisor documents the item on the delivery inventory sheet before you sign. Our claims desk then initiates a fast-track insurance claim with our partnered national insurer, ensuring rapid survey and prompt reimbursement without paperwork hassles.
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
            Planning Your <span>Move with Ease</span>?
          </h2>
          <p class="service-cta-desc mb-4 text-white-50">
            Book your relocation with <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong> today. Experience 5-layer defensive packing, verified crews, and complete peace of mind.
          </p>
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-3">
            <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator"></i> Get Free Moving Quote
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