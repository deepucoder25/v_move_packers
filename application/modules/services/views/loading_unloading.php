<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Professional Loading & Unloading Services',
    'bc_desc' => 'Trained labor crew with hydraulic lifters, dollies, pallet trucks & zero-drop protocols for safe loading and unloading of homes, offices & commercial cargo.',
    'breadcrumbs' => [
        ['name' => 'Loading & Unloading']
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
          <i class="bi bi-patch-check-fill"></i> Certified Heavy Cargo &amp; Household Handlers
        </span>
        
        <h1 class="service-title-lg">
          Trained &amp; Mechanized <span>Loading &amp; Unloading</span> Services
        </h1>
        
        <p class="service-desc service-desc-lead">
          The most critical phase of any move is physically carrying heavy furniture and delicate appliances across doorframes, staircases, and truck beds. At <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong>, we eliminate risk with our specialized, full-time loading crew.
        </p>
        
        <p class="service-desc">
          We never hire casual roadside labor. Our disciplined, background-verified team is trained in ergonomic lifting techniques and equipped with mechanized gear—including hydraulic lifters, furniture dollies, stair-climbing hand trucks, and padded floor sliders—ensuring zero drops, zero property scratches, and complete peace of mind.
        </p>

        <!-- Service Highlights Checklist -->
        <ul class="service-checklist">
          <li>
            <i class="bi bi-tools"></i>
            <span><strong>Mechanized Moving Equipment:</strong> Heavy hydraulic jacks, 4-wheel furniture dollies, and padded shoulder-lifting harness straps.</span>
          </li>
          <li>
            <i class="bi bi-shield-shaded"></i>
            <span><strong>Floor &amp; Wall Surface Protection:</strong> Neoprene floor runners and corner guards protecting marble tiles and wooden doorways.</span>
          </li>
          <li>
            <i class="bi bi-layers-half"></i>
            <span><strong>Scientific Truck Weight Stacking:</strong> Heavy goods positioned low on truck axles, lighter fragile cartons securely racked atop.</span>
          </li>
          <li>
            <i class="bi bi-person-check-fill"></i>
            <span><strong>100% Background-Verified Staff:</strong> Full-time, uniformed handling technicians trained in handling multi-story staircases.</span>
          </li>
        </ul>

        <!-- Action Buttons -->
        <div class="d-flex flex-wrap align-items-center gap-3">
          <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-calculator"></i> Book Loading Crew
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
            <i class="bi bi-lightning-charge-fill text-danger"></i>
            <span>Same-Day Deployment</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-shield-check text-danger"></i>
            <span>Zero Drop Guarantee</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-cash-stack text-danger"></i>
            <span>Transparent Hourly/Job Rates</span>
          </div>
        </div>

      </div>

      <!-- Right Column: Visual Value Anchor Card (Image-Free Design) -->
      <div class="col-lg-5">
        <div class="service-hero-highlight-box">
          <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
            <div>
              <h3 class="h6 fw-bold mb-1">Handling Integrity Standard</h3>
              <small class="text-secondary">Standard on every loading &amp; unloading assignment</small>
            </div>
            <div class="service-rating-badge">
              <i class="bi bi-star-fill text-warning"></i>
              <span>4.9 / 5 (30,000+ Jobs)</span>
            </div>
          </div>

          <div class="d-flex flex-column gap-3">
            
            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-tools"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Mechanized Lifting Equipment</h5>
                <p class="small text-secondary mb-0">High-capacity dollies, hydraulic pallet jacks, and heavy appliance lifting belts.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-shield-fill-check"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Zero-Drop Handling Protocol</h5>
                <p class="small text-secondary mb-0">Two-to-four man coordinated lifts ensure heavy almirahs, sofas, and fridges never tilt or slip.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-arrow-up-circle-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Multi-Floor Staircase Specialists</h5>
                <p class="small text-secondary mb-0">Trained to navigate tight stairwell corners and high-rise service elevators safely.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-house-door-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Room-Wise Floor Placement</h5>
                <p class="small text-secondary mb-0">Goods are carried directly into your designated rooms rather than dumped at the doorway.</p>
              </div>
            </div>

          </div>

          <!-- Quick Quote Action Box -->
          <div class="bg-light border rounded-3 p-3 mt-4 text-center">
            <h5 class="h6 fw-bold mb-1">Need Labor Crew Right Now?</h5>
            <p class="small text-secondary mb-3">Get an upfront, transparent quote for professional loading and unloading labor.</p>
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
        <i class="bi bi-boxes service-stat-icon"></i>
        <div class="service-stat-number">35,000+</div>
        <p class="service-stat-label">Tons Loaded &amp; Handled</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-shield-shaded service-stat-icon"></i>
        <div class="service-stat-number">100%</div>
        <p class="service-stat-label">Zero-Drop Safety Record</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-people-fill service-stat-icon"></i>
        <div class="service-stat-number">500+</div>
        <p class="service-stat-label">Full-Time Trained Crew</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-stars service-stat-icon"></i>
        <div class="service-stat-number">4.9 / 5</div>
        <p class="service-stat-label">Customer Satisfaction Rating</p>
      </div>

    </div>
  </div>
</section>

<!-- 3. Defensive Safety Standard (5-Tier Mechanized Handling Standard) -->
<section class="service-section service-bg-surface border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">Safe Handling Protocol</span>
      <h2 class="service-title-md">Our <span>5-Tier Mechanized</span> Handling Standard</h2>
      <p class="service-desc">
        We replace clumsy physical brute-force with calculated ergonomic mechanics. Every item is transferred with protective blankets, specialized sliders, and secure truck stacking.
      </p>
    </div>

    <div class="service-layers-grid">
      
      <!-- Layer 1 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-tools"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Hydraulic &amp; Dolly Mobility</h4>
          <span class="service-layer-num ms-auto">01</span>
        </div>
        <p class="small text-secondary mb-0">
          Heavy refrigerators, washing machines, and safes are rolled on smooth rubber-caster dollies to eliminate drag.
        </p>
      </div>

      <!-- Layer 2 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-border-all"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Surface &amp; Tile Guards</h4>
          <span class="service-layer-num ms-auto">02</span>
        </div>
        <p class="small text-secondary mb-0">
          Tough felt sliders and padded floor runners prevent scratches and scuffing on delicate marble and wooden floors.
        </p>
      </div>

      <!-- Layer 3 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-person-arms-up"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Shoulder Harness Straps</h4>
          <span class="service-layer-num ms-auto">03</span>
        </div>
        <p class="small text-secondary mb-0">
          Ergonomic forearm and shoulder webbing straps distribute bulky 100+ kg furniture weight across strong torso muscles.
        </p>
      </div>

      <!-- Layer 4 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-layers-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Calibrated Axle Stacking</h4>
          <span class="service-layer-num ms-auto">04</span>
        </div>
        <p class="small text-secondary mb-0">
          Cargo is stacked with structural integrity: dense heavy goods on the truck bed floor, delicate cartons elevated.
        </p>
      </div>

      <!-- Layer 5 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-lock-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Cargo Webbing Anchors</h4>
          <span class="service-layer-num ms-auto">05</span>
        </div>
        <p class="small text-secondary mb-0">
          Heavy nylon tie-down belts lock entire tiers firmly against the container walls to prevent shifting during road transit.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- 4. Step-by-Step Relocation Process -->
<section class="service-section bg-white border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">Operational Workflow</span>
      <h2 class="service-title-md">A Coordinated <span>5-Step</span> Loading Protocol</h2>
      <p class="service-desc">
        Our crew executes according to an orderly sequence that protects your possessions and eliminates bottlenecks at both ends of your relocation.
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
          <h4 class="h6 fw-bold mb-0">Inventory Walkthrough</h4>
        </div>
        <p class="small text-secondary mb-0">
          Our supervisor conducts a walkthrough to identify fragile items, heavy weights, and narrow doorway clearances.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">2</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-shield-check service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Corridor &amp; Floor Prep</h4>
        </div>
        <p class="small text-secondary mb-0">
          Padded floor runners and doorway jamb protectors are positioned along the primary carrying path to shield walls.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">3</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-truck service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Tiered Truck Loading</h4>
        </div>
        <p class="small text-secondary mb-0">
          Heavy furniture, beds, and machinery are loaded first, padded with moving blankets, and lashed with ratchet straps.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">4</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-arrow-down-circle-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Careful Unloading</h4>
        </div>
        <p class="small text-secondary mb-0">
          Upon arrival, items are unloaded systematically using dollies and ramps without dragging or dropping on ground surfaces.
        </p>
      </div>

      <!-- Step 5 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">5</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-check-circle-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Room Placement</h4>
        </div>
        <p class="small text-secondary mb-0">
          Cartons and furniture are carried directly into your designated rooms, beds re-assembled, and heavy items set in place.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- 5. Why Choose V-Move Advantage (Core Trust Highlights) -->
<section class="service-section service-bg-surface border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">The V-Move Advantage</span>
      <h2 class="service-title-md">Why Choose <span><?= @$company3 ?: 'V-Move' ?></span> Loading Crew</h2>
      <p class="service-desc">
        Don't risk irreversible damage with untrained casual laborers. Discover the standard of safety our dedicated handling professionals bring to every move.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-person-badge"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">100% Verified Full-Time Staff</h4>
            <p class="small text-secondary mb-0">We never supply unvetted street labor. Our crew members undergo criminal background checks, drug screenings, and rigorous safety training.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-tools"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Modern Mechanized Equipment</h4>
            <p class="small text-secondary mb-0">Equipped with heavy-duty furniture dollies, stair-walking hand trucks, pallet lifters, and nylon tie-down ratchet straps.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-building"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Multi-Floor Staircase Mastery</h4>
            <p class="small text-secondary mb-0">Moving to a 4th floor walk-up without a lift? Our seasoned handlers use coordinated harness lifts to carry bulky furniture without gouging walls.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-boxes"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Commercial &amp; Warehouse Versatility</h4>
            <p class="small text-secondary mb-0">From residential double beds and almirahs to heavy factory machinery, commercial display counters, and warehouse pallet crates.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-currency-rupee"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Honest, Transparent Pricing</h4>
            <p class="small text-secondary mb-0">Clear pricing upfront based on volume and floor count. No aggressive demands for baksheesh, tea tips, or sudden mid-job surcharges.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-lightning-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">On-Demand Rapid Deployment</h4>
            <p class="small text-secondary mb-0">Need emergency labor for a truck already waiting at your building gate? We deploy trained handling squads within 60 to 90 minutes.</p>
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
      <h2 class="service-title-md">Frequently Asked Questions on <span>Loading &amp; Unloading</span></h2>
      <p class="service-desc">
        Find clear answers about labor hiring, equipment supplied, multi-floor walk-ups, and commercial cargo handling.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        <div class="accordion service-accordion" id="loadingUnloadingFaq">
          
          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="loadingFaqHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#loadingFaqCollapseOne" aria-expanded="true" aria-controls="loadingFaqCollapseOne">
                1. Can I hire only loading and unloading labor without renting a truck?
              </button>
            </h3>
            <div id="loadingFaqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="loadingFaqHeadingOne" data-bs-parent="#loadingUnloadingFaq">
              <div class="accordion-body">
                Yes! We offer standalone loading and unloading labor services. If you have already arranged your own vehicle, container, or train cargo and simply need a disciplined, trained squad of handlers to load or unload your goods safely, you can hire our crew on a flexible per-job or daily slot basis.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="loadingFaqHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadingFaqCollapseTwo" aria-expanded="false" aria-controls="loadingFaqCollapseTwo">
                2. How do you handle heavy items on upper floors without a service elevator?
              </button>
            </h3>
            <div id="loadingFaqHeadingTwo" class="accordion-collapse collapse" aria-labelledby="loadingFaqHeadingTwo" data-bs-parent="#loadingUnloadingFaq">
              <div class="accordion-body">
                Our crew members are specifically trained in multi-person stairwell maneuvers. Using heavy-duty shoulder lifting straps and furniture forearm webbings, the weight is distributed evenly between handlers. For narrow staircases, we dismantle modular furniture units or utilize specialized balcony rope hoists when necessary.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="loadingFaqHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadingFaqCollapseThree" aria-expanded="false" aria-controls="loadingFaqCollapseThree">
                3. Will your workers protect my building walls and marble floors?
              </button>
            </h3>
            <div id="loadingFaqHeadingThree" class="accordion-collapse collapse" aria-labelledby="loadingFaqHeadingThree" data-bs-parent="#loadingUnloadingFaq">
              <div class="accordion-body">
                Yes. Before moving heavy goods, our team rolls out protective floor runners along corridors and fits high-density foam edge guards on critical doorways. Furniture feet are covered with soft felt sliders so sliding or setting down items leaves zero scratches or chipped tiles.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="loadingFaqHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadingFaqCollapseFour" aria-expanded="false" aria-controls="loadingFaqCollapseFour">
                4. How many crew members are typically assigned for a move?
              </button>
            </h3>
            <div id="loadingFaqHeadingFour" class="accordion-collapse collapse" aria-labelledby="loadingFaqHeadingFour" data-bs-parent="#loadingUnloadingFaq">
              <div class="accordion-body">
                Squad size depends on inventory volume, walking distance, and floor level. Typically: a 1 BHK requires 2 to 3 trained handlers, a 2 BHK requires 3 to 4 handlers, and a 3 BHK or independent villa requires 5 to 7 handlers including a dedicated supervisor.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="loadingFaqHeadingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadingFaqCollapseFive" aria-expanded="false" aria-controls="loadingFaqCollapseFive">
                5. Do your handlers bring their own tools and dollies?
              </button>
            </h3>
            <div id="loadingFaqHeadingFive" class="accordion-collapse collapse" aria-labelledby="loadingFaqHeadingFive" data-bs-parent="#loadingUnloadingFaq">
              <div class="accordion-body">
                Yes! Our crew arrives fully equipped with heavy-duty 4-wheel flatbed dollies, two-wheel hand trucks, padded moving blankets, basic carpentry toolkits (for bed/table dismantling), and high-tension cargo ratchet belts. You do not need to provide any lifting tools.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="loadingFaqHeadingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loadingFaqCollapseSix" aria-expanded="false" aria-controls="loadingFaqCollapseSix">
                6. Do you handle commercial warehouse and factory pallet loading?
              </button>
            </h3>
            <div id="loadingFaqHeadingSix" class="accordion-collapse collapse" aria-labelledby="loadingFaqHeadingSix" data-bs-parent="#loadingUnloadingFaq">
              <div class="accordion-body">
                Yes. Beyond residential relocations, we regularly service commercial warehouses, retail showrooms, exhibitions, and industrial units. Our team is trained in operating manual hydraulic pallet jacks, stacking palletized cartons, and securing heavy wooden machinery crates.
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
            <i class="bi bi-tag-fill"></i> Verified Crew Ready for Immediate Dispatch
          </span>
          <h2 class="service-cta-title">
            Need Expert <span>Loading &amp; Unloading</span> Labor?
          </h2>
          <p class="service-cta-desc mb-4 text-white-50">
            Hire background-verified, uniformed handling specialists from <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong>. Guaranteed zero-drop safety and honest transparent pricing.
          </p>
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-3">
            <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator"></i> Book Handling Crew
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
              <span class="small text-white">Full-Time Verified Laborers</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Modern Dollies &amp; Shoulder Straps</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Floor &amp; Wall Corner Protection</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Zero Drop &amp; Damage Guarantee</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>