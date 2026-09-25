<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Two Wheeler & Bike Transportation Services',
    'bc_desc' => 'Specialized door-to-door two-wheeler relocation across India with zero-scratch multi-layer foam packing, enclosed bike carrier trucks & comprehensive transit insurance.',
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
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
          <i class="bi bi-patch-check-fill"></i> Certified Two-Wheeler Relocation Specialist
        </span>
        
        <h1 class="service-title-lg">
          Safe &amp; Scratch-Free <span>Bike Transportation</span> Across India
        </h1>
        
        <p class="service-desc service-desc-lead">
          Your motorcycle is more than just a vehicle—it represents freedom, passion, and personal pride. At <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong>, we deliver dedicated two-wheeler relocation engineered to protect every millimeter of your machine.
        </p>
        
        <p class="service-desc">
          Whether shifting a daily commuter scooter, a high-torque Royal Enfield, or an imported superbike, our certified logistics team uses high-density foam blankets, 5-ply cartons, and specialized wheel-chock strapping inside closed container trucks to prevent vibrations, scratches, and highway hazards.
        </p>

        <!-- Service Highlights Checklist -->
        <ul class="service-checklist">
          <li>
            <i class="bi bi-shield-fill-check"></i>
            <span><strong>Multi-Tier Protective Wrapping:</strong> Heavy foam wrap, bubble cushioning on fuel tanks, console shields, and headlamp guards.</span>
          </li>
          <li>
            <i class="bi bi-tools"></i>
            <span><strong>Handlebar &amp; Mirror Safety Protocol:</strong> Precision disassembly and bubble encasement of rear-view mirrors and indicator lights.</span>
          </li>
          <li>
            <i class="bi bi-truck-front-fill"></i>
            <span><strong>Dedicated Enclosed Bike Carriers:</strong> Weatherproof closed trucks featuring internal tie-down belts and wheel-lock brackets.</span>
          </li>
          <li>
            <i class="bi bi-file-earmark-lock2-fill"></i>
            <span><strong>100% Comprehensive Transit Insurance:</strong> All-risk coverage against highway transit hazards with transparent written documentation.</span>
          </li>
        </ul>

        <!-- Action Buttons -->
        <div class="d-flex flex-wrap align-items-center gap-3">
          <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-calculator"></i> Get Free Bike Quote
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
            <span>Doorstep Pickup &amp; Delivery</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-file-text text-danger"></i>
            <span>Joint Inspection Sheet</span>
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
              <h3 class="h6 fw-bold mb-1">Bike Protection Guarantee</h3>
              <small class="text-secondary">Standard on every two-wheeler move</small>
            </div>
            <div class="service-rating-badge">
              <i class="bi bi-star-fill text-warning"></i>
              <span>4.9 / 5 (8,200+ Bikes)</span>
            </div>
          </div>

          <div class="d-flex flex-column gap-3">
            
            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Zero-Scratch Multi-Layer Armor</h5>
                <p class="small text-secondary mb-0">High-grade foam rolls, air bubble film, and corrugated wrapping on all painted fairings.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-fuel-pump-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Fuel &amp; Battery Safety Check</h5>
                <p class="small text-secondary mb-0">Certified drainage procedure to prevent fire hazards, fluid leaks, and battery discharge during transit.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-lock-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Wheel-Chock &amp; Webbing Clamps</h5>
                <p class="small text-secondary mb-0">Tires are anchored into metal floor chocks and clamped with 1,500 kg test nylon ratchets.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Live Highway GPS Monitoring</h5>
                <p class="small text-secondary mb-0">Real-time truck location updates from pickup terminal to delivery at your doorstep.</p>
              </div>
            </div>

          </div>

          <!-- Quick Quote Action Box -->
          <div class="bg-light border rounded-3 p-3 mt-4 text-center">
            <h5 class="h6 fw-bold mb-1">Get an Exact Bike Moving Quote</h5>
            <p class="small text-secondary mb-3">Instant price calculation based on bike model and route distance in under 2 minutes.</p>
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
        <i class="bi bi-bicycle service-stat-icon"></i>
        <div class="service-stat-number">25,000+</div>
        <p class="service-stat-label">Bikes Safely Transported</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-shield-shaded service-stat-icon"></i>
        <div class="service-stat-number">99.8%</div>
        <p class="service-stat-label">Zero-Scratch Record</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-pin-map-fill service-stat-icon"></i>
        <div class="service-stat-number">120+</div>
        <p class="service-stat-label">Pan-India Transit Hubs</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-stars service-stat-icon"></i>
        <div class="service-stat-number">4.9 / 5</div>
        <p class="service-stat-label">Rider Satisfaction Rating</p>
      </div>

    </div>
  </div>
</section>

<!-- 3. Defensive Safety Standard (5-Tier Motorcycle Protection System) -->
<section class="service-section service-bg-surface border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">Zero Scratch Standard</span>
      <h2 class="service-title-md">Our <span>5-Tier Defensive</span> Bike Packaging</h2>
      <p class="service-desc">
        We never ship a two-wheeler naked or with flimsy plastic sheets. Every motorcycle is protected with high-performance, shock-absorbing materials calibrated for highway vibration resistance.
      </p>
    </div>

    <div class="service-layers-grid">
      
      <!-- Layer 1 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-record-circle-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">High-Density Foam</h4>
          <span class="service-layer-num ms-auto">01</span>
        </div>
        <p class="small text-secondary mb-0">
          Dense closed-cell foam sheets wrap around painted fuel tanks, mudguards, and fairings to cushion vibration shocks.
        </p>
      </div>

      <!-- Layer 2 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-layers-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Air Bubble Cushioning</h4>
          <span class="service-layer-num ms-auto">02</span>
        </div>
        <p class="small text-secondary mb-0">
          Heavy 80 GSM air pocket wrap encases the headlight, digital instrument cluster, exhaust pipe, and turn indicators.
        </p>
      </div>

      <!-- Layer 3 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-shield-shaded"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Corrugated Armor</h4>
          <span class="service-layer-num ms-auto">03</span>
        </div>
        <p class="small text-secondary mb-0">
          Heavy-duty 5-ply corrugated sheets shield vulnerable chrome exhausts, footpegs, and side panels from accidental bumps.
        </p>
      </div>

      <!-- Layer 4 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-bounding-box-circles"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Moisture-Proof Seal</h4>
          <span class="service-layer-num ms-auto">04</span>
        </div>
        <p class="small text-secondary mb-0">
          Industrial waterproof stretch film seals the entire bike from road grit, diesel soot, and torrential highway monsoon rain.
        </p>
      </div>

      <!-- Layer 5 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-lock-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Chock &amp; Webbing Lock</h4>
          <span class="service-layer-num ms-auto">05</span>
        </div>
        <p class="small text-secondary mb-0">
          Front and rear wheels are clamped into steel wheel-chocks and tied with 4 high-tension nylon ratchet straps.
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
      <h2 class="service-title-md">A Transparent <span>5-Step</span> Bike Moving Journey</h2>
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
            <i class="bi bi-clipboard2-check service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Instant Booking</h4>
        </div>
        <p class="small text-secondary mb-0">
          Share your bike make, pickup city, and delivery destination. Receive a transparent, fixed-price quote with no terminal fee surprises.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">2</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-card-checklist service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Condition Audit</h4>
        </div>
        <p class="small text-secondary mb-0">
          Our field executive arrives at your doorstep, conducts a joint condition audit, records odometer and fuel levels, and issues a signed report.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">3</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-box-seam-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Defensive Wrapping</h4>
        </div>
        <p class="small text-secondary mb-0">
          Mirrors are safely unbolted or wrapped, fuel tank and fairings are encased in foam and bubble cushioning, and the chassis is strapped.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">4</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-truck-front-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Enclosed Transit</h4>
        </div>
        <p class="small text-secondary mb-0">
          The two-wheeler is loaded via a gentle hydraulic ramp into our dedicated enclosed carrier and monitored via satellite GPS.
        </p>
      </div>

      <!-- Step 5 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">5</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-check-circle-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Doorstep Handover</h4>
        </div>
        <p class="small text-secondary mb-0">
          Your bike is carefully unloaded at your new home, unwrapped in your presence, reassembled, and verified against the initial condition sheet.
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
      <h2 class="service-title-md">Why Indian Motorcyclists Choose <span><?= @$company3 ?: 'V-Move' ?></span></h2>
      <p class="service-desc">
        We understand how much your bike means to you. Discover why thousands of riders and collectors rely on our dedicated two-wheeler logistics.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Specialized Enclosed Carriers</h4>
            <p class="small text-secondary mb-0">We never carry bikes on open luggage trucks exposed to highway stones and monsoon rain. All units move in sealed container bodies.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-speedometer2"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Zero Driven Mileage</h4>
            <p class="small text-secondary mb-0">Your bike is not ridden on highways or between terminals. Your odometer reading remains strictly unchanged from pickup to delivery.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-stars"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Superbike &amp; Cruiser Crating</h4>
            <p class="small text-secondary mb-0">For high-end superbikes like Harley-Davidson, Ducati, Kawasaki, and Triumph, we offer custom fumigated wooden crate cages.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-file-earmark-lock"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Comprehensive Transit Insurance</h4>
            <p class="small text-secondary mb-0">Full coverage transit policies from leading national insurers safeguard against theft, highway accidents, and transit contingencies.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-alarm-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Punctual Highway Transit</h4>
            <p class="small text-secondary mb-0">Our established interstate trunk routes operate on strict schedules, ensuring your bike reaches your new city without unexpected delays.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-currency-rupee"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Fixed Written Quotations</h4>
            <p class="small text-secondary mb-0">No extortionate unloading fees or sudden gate surcharges at destination. Every fee is stated in your written booking contract.</p>
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
      <h2 class="service-title-md">Frequently Asked Questions on <span>Bike Relocation</span></h2>
      <p class="service-desc">
        Find clear, direct answers about packing materials, document requirements, transit timelines, and safety precautions for two-wheeler shipping.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        <div class="accordion service-accordion" id="bikeShiftingFaq">
          
          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="bikeFaqHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bikeFaqCollapseOne" aria-expanded="true" aria-controls="bikeFaqCollapseOne">
                1. How should I prepare my motorcycle before handover for transport?
              </button>
            </h3>
            <div id="bikeFaqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="bikeFaqHeadingOne" data-bs-parent="#bikeShiftingFaq">
              <div class="accordion-body">
                To prepare your motorcycle: (1) Wash the bike cleanly so existing paint conditions or minor marks can be easily noted on the inspection sheet, (2) Keep the fuel tank nearly empty (less than 1 to 2 liters) to prevent highway spillage or fire safety violations, (3) Remove all personal belongings from under-seat compartments or side panniers, and (4) Keep one set of vehicle keys ready along with photocopies of your RC and insurance.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="bikeFaqHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeFaqCollapseTwo" aria-expanded="false" aria-controls="bikeFaqCollapseTwo">
                2. What documents are required for interstate bike transportation?
              </button>
            </h3>
            <div id="bikeFaqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="bikeFaqHeadingTwo" data-bs-parent="#bikeShiftingFaq">
              <div class="accordion-body">
                For interstate transportation in India, we require clear photocopies (or digital copies) of: (1) Vehicle Registration Certificate (RC book/smart card), (2) Valid Two-Wheeler Insurance Policy, (3) Valid Pollution Under Control (PUC) certificate, and (4) Government ID proof (Aadhaar or Driving License) of the vehicle owner. Original documents should always be kept safely with you.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="bikeFaqHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeFaqCollapseThree" aria-expanded="false" aria-controls="bikeFaqCollapseThree">
                3. How do you protect expensive superbikes and sports fairings?
              </button>
            </h3>
            <div id="bikeFaqCollapseThree" class="accordion-collapse collapse" aria-labelledby="bikeFaqHeadingThree" data-bs-parent="#bikeShiftingFaq">
              <div class="accordion-body">
                High-end superbikes and heavily faired sports motorcycles receive customized premium handling. We first encase the entire fairing and gas tank in thick closed-cell foam wrap, add heavy bubble wrap layers, and wrap with waterproof stretch film. Upon request, we construct customized wooden crate frames with padded interior supports so nothing touches the motorcycle bodywork during transit.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="bikeFaqHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeFaqCollapseFour" aria-expanded="false" aria-controls="bikeFaqCollapseFour">
                4. Can my bike be delivered directly to my new home address?
              </button>
            </h3>
            <div id="bikeFaqCollapseFour" class="accordion-collapse collapse" aria-labelledby="bikeFaqHeadingFour" data-bs-parent="#bikeShiftingFaq">
              <div class="accordion-body">
                Yes! We offer complete door-to-door bike transportation across all major Indian cities. We pick up your motorcycle directly from your current residence, transport it in dedicated enclosed carriers, and deliver it directly to your new home address at the scheduled date and time.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="bikeFaqHeadingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeFaqCollapseFive" aria-expanded="false" aria-controls="bikeFaqCollapseFive">
                5. How long does interstate bike relocation take?
              </button>
            </h3>
            <div id="bikeFaqCollapseFive" class="accordion-collapse collapse" aria-labelledby="bikeFaqHeadingFive" data-bs-parent="#bikeShiftingFaq">
              <div class="accordion-body">
                Delivery time depends primarily on transit distance. For intra-state or neighboring city routes (300 to 500 km), delivery typically takes 2 to 3 days. For major metro-to-metro interstate routes (1,000 to 2,000 km), transit takes approximately 4 to 7 business days. Your Move Manager provides real-time GPS tracking milestone updates throughout.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="bikeFaqHeadingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bikeFaqCollapseSix" aria-expanded="false" aria-controls="bikeFaqCollapseSix">
                6. What happens if my motorcycle sustains scratches or damage in transit?
              </button>
            </h3>
            <div id="bikeFaqCollapseSix" class="accordion-collapse collapse" aria-labelledby="bikeFaqHeadingSix" data-bs-parent="#bikeShiftingFaq">
              <div class="accordion-body">
                All consignments are covered under comprehensive transit insurance. At delivery, the motorcycle is unpacked and inspected against the initial pickup condition sheet. In the extremely unlikely event of transit damage, our claims coordinator assists you immediately with rapid claim processing and prompt reimbursement.
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
            <i class="bi bi-tag-fill"></i> Save Up to 15% on Advance Bike Bookings
          </span>
          <h2 class="service-cta-title">
            Planning to Transport Your <span>Motorcycle</span>?
          </h2>
          <p class="service-cta-desc mb-4 text-white-50">
            Book your two-wheeler relocation with <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong> today. Enjoy zero scratches, enclosed carrier safety, and transparent all-inclusive pricing.
          </p>
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-3">
            <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator"></i> Get Free Bike Quote
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
              <span class="small text-white">Doorstep Pickup &amp; Safe Unpacking</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Pre-Transit Condition Report</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Multi-Layer Foam &amp; Bubble Cushioning</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Enclosed Trucks &amp; Wheel Chocking</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>