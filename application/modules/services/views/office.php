<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Corporate & Office Relocation Services',
    'bc_desc' => 'Fast, systematic office moving with zero business downtime. IT infrastructure dismantling, server rack crating, confidential file archiving & modular workstation setup.',
    'breadcrumbs' => [
        ['name' => 'Office Shifting']
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
          <i class="bi bi-patch-check-fill"></i> Enterprise Commercial Moving Specialist
        </span>
        
        <h1 class="service-title-lg">
          Zero-Downtime <span>Corporate &amp; Office</span> Shifting Services
        </h1>
        
        <p class="service-desc service-desc-lead">
          In business, every hour of relocation delay equals lost revenue, disrupted client operations, and frustrated employees. At <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong>, we deliver surgical corporate relocations scheduled around your company's operational clock.
        </p>
        
        <p class="service-desc">
          From weekend and overnight office moves to anti-static ESD packaging for sensitive server racks, desktops, and networking equipment—our project managers, certified carpenters, and IT packaging squads handle everything. Your employees leave work on Friday afternoon and resume operations in your new office on Monday morning without a hitch.
        </p>

        <!-- Service Highlights Checklist -->
        <ul class="service-checklist">
          <li>
            <i class="bi bi-clock-history"></i>
            <span><strong>Weekend &amp; Overnight Execution:</strong> Seamless transitions executed outside business hours for zero operational downtime.</span>
          </li>
          <li>
            <i class="bi bi-cpu-fill"></i>
            <span><strong>Anti-Static IT Hardware Packaging:</strong> ESD bubble sheets, anti-static foam, and custom foam crates for servers and desktops.</span>
          </li>
          <li>
            <i class="bi bi-diagram-3-fill"></i>
            <span><strong>Color-Coded Floor &amp; Desk Tagging:</strong> Systematic inventory labeling ensuring every monitor, file, and chair reaches the right cubicle.</span>
          </li>
          <li>
            <i class="bi bi-file-earmark-lock2-fill"></i>
            <span><strong>Tamper-Proof Confidential Archiving:</strong> Numbered security zip-ties and lockable plastic totes for sensitive HR, legal, and financial files.</span>
          </li>
        </ul>

        <!-- Action Buttons -->
        <div class="d-flex flex-wrap align-items-center gap-3">
          <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-calculator"></i> Get Corporate Moving Plan
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
            <i class="bi bi-shield-check text-danger"></i>
            <span>Zero Workday Downtime SLA</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-file-earmark-text text-danger"></i>
            <span>Complete GST Invoice &amp; PO Billing</span>
          </div>
          <div class="d-inline-flex align-items-center gap-2 fw-semibold small text-dark">
            <i class="bi bi-person-check-fill text-danger"></i>
            <span>Dedicated Corporate Project Director</span>
          </div>
        </div>

      </div>

      <!-- Right Column: Visual Value Anchor Card (Image-Free Design) -->
      <div class="col-lg-5">
        <div class="service-hero-highlight-box">
          <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom">
            <div>
              <h3 class="h6 fw-bold mb-1">Corporate Relocation SLA</h3>
              <small class="text-secondary">Standard on every enterprise shifting contract</small>
            </div>
            <div class="service-rating-badge">
              <i class="bi bi-star-fill text-warning"></i>
              <span>4.9 / 5 (1,200+ Offices)</span>
            </div>
          </div>

          <div class="d-flex flex-column gap-3">
            
            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-hdd-network-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Server Room &amp; IT Rack Moving</h5>
                <p class="small text-secondary mb-0">Custom foam-lined wooden crating for server blades, patch panels, switches, and UPS batteries.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-grid-1x2-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Modular Cubicle &amp; Desk Setup</h5>
                <p class="small text-secondary mb-0">Skilled office carpenters dismantle, transport, and reconstruct modular partition workstations.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-shield-lock-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Confidential Records Security</h5>
                <p class="small text-secondary mb-0">Tamper-evident seals on file crates protecting client confidentiality and regulatory compliance.</p>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="service-feature-mini-icon">
                <i class="bi bi-kanban-fill"></i>
              </div>
              <div>
                <h5 class="h6 fw-bold mb-1">Assigned Project Manager</h5>
                <p class="small text-secondary mb-0">On-site coordination with your facility leads, building management, and IT administration.</p>
              </div>
            </div>

          </div>

          <!-- Quick Quote Action Box -->
          <div class="bg-light border rounded-3 p-3 mt-4 text-center">
            <h5 class="h6 fw-bold mb-1">Request an On-Site Office Survey</h5>
            <p class="small text-secondary mb-3">Our corporate moving auditor will inspect your facility and deliver an SLA-backed relocation proposal.</p>
            <button type="button" class="btn btn-service-primary w-100 d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-lightning-charge-fill"></i> Request Corporate Survey
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
        <i class="bi bi-building service-stat-icon"></i>
        <div class="service-stat-number">1,200+</div>
        <p class="service-stat-label">Offices Relocated</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-clock-history service-stat-icon"></i>
        <div class="service-stat-number">99.9%</div>
        <p class="service-stat-label">Downtime Target Compliance</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-laptop service-stat-icon"></i>
        <div class="service-stat-number">25,000+</div>
        <p class="service-stat-label">Workstations Transferred</p>
      </div>

      <div class="service-stat-box">
        <i class="bi bi-stars service-stat-icon"></i>
        <div class="service-stat-number">4.9 / 5</div>
        <p class="service-stat-label">Corporate Client Rating</p>
      </div>

    </div>
  </div>
</section>

<!-- 3. Defensive Safety Standard (5-Tier IT & Corporate Moving Protocol) -->
<section class="service-section service-bg-surface border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">Commercial Moving Protocol</span>
      <h2 class="service-title-md">Our <span>5-Tier IT &amp; Corporate</span> Moving Protocol</h2>
      <p class="service-desc">
        We handle enterprise electronics, confidential archives, and executive suites with rigorous protocol-driven safeguards that eliminate transit loss and hardware damage.
      </p>
    </div>

    <div class="service-layers-grid">
      
      <!-- Layer 1 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-cpu-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Anti-Static ESD Wrapping</h4>
          <span class="service-layer-num ms-auto">01</span>
        </div>
        <p class="small text-secondary mb-0">
          Desktops, monitors, server cards, and switches are packed in anti-static bubble wrap to shield internal circuitry from electrostatic discharge.
        </p>
      </div>

      <!-- Layer 2 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-tags-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Color-Coded Floor Mapping</h4>
          <span class="service-layer-num ms-auto">02</span>
        </div>
        <p class="small text-secondary mb-0">
          Every employee desk, PC, and peripheral crate is tagged with color-coded barcodes corresponding to the new architectural floor plan.
        </p>
      </div>

      <!-- Layer 3 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-box-seam-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Heavy Server Crates</h4>
          <span class="service-layer-num ms-auto">03</span>
        </div>
        <p class="small text-secondary mb-0">
          Server rack units and data arrays are transferred in custom foam-cushioned wooden crates equipped with shock-impact indicators.
        </p>
      </div>

      <!-- Layer 4 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-grid-3x3-gap-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Modular Desk Engineering</h4>
          <span class="service-layer-num ms-auto">04</span>
        </div>
        <p class="small text-secondary mb-0">
          Certified carpenters systematically disassemble linear cubicles, glass partitions, and conference desks, tagging all fasteners and brackets.
        </p>
      </div>

      <!-- Layer 5 -->
      <div class="service-layer-box">
        <div class="d-flex align-items-center gap-2 mb-2">
          <div class="service-layer-icon">
            <i class="bi bi-shield-lock-fill"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Security Sealed File Bins</h4>
          <span class="service-layer-num ms-auto">05</span>
        </div>
        <p class="small text-secondary mb-0">
          Confidential HR, legal, and financial archives are locked in high-impact security crates with numbered tamper-evident seals.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- 4. Step-by-Step Relocation Process -->
<section class="service-section bg-white border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">Project Roadmap</span>
      <h2 class="service-title-md">A Precision <span>5-Step</span> Commercial Relocation</h2>
      <p class="service-desc">
        Our enterprise project management workflow ensures absolute alignment between your IT team, facility managers, building authorities, and our moving crews.
      </p>
    </div>

    <div class="service-process-timeline">
      
      <!-- Step 1 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">1</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-binoculars-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Site Audit &amp; Plan</h4>
        </div>
        <p class="small text-secondary mb-0">
          Our senior project manager surveys both premises, audits IT infrastructure, reviews elevator booking windows, and designs the relocation timeline.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">2</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-box2-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Pre-Move Tagging</h4>
        </div>
        <p class="small text-secondary mb-0">
          We deliver heavy-duty employee personal crates, label all workstations, and execute systematic server backup disconnects on scheduled Friday night.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">3</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-truck service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Overnight Transit</h4>
        </div>
        <p class="small text-secondary mb-0">
          Dedicated container fleets transfer furniture and hardware over the weekend under continuous GPS monitoring and security seals.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">4</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-tools service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Floor Setup</h4>
        </div>
        <p class="small text-secondary mb-0">
          Workstations and modular cubicles are reconstructed per layout, conference tables assembled, and server racks installed in the new data room.
        </p>
      </div>

      <!-- Step 5 -->
      <div class="service-process-card">
        <div class="d-flex align-items-center gap-2 mb-2">
          <span class="service-process-step-num">5</span>
          <div class="service-process-icon-wrap">
            <i class="bi bi-patch-check-fill service-process-icon"></i>
          </div>
          <h4 class="h6 fw-bold mb-0">Monday Readiness</h4>
        </div>
        <p class="small text-secondary mb-0">
          Desktops and peripherals are placed on respective employee desks, all debris removed, and facilities signed off for business on Monday morning.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- 5. Why Choose V-Move Advantage (Core Trust Highlights) -->
<section class="service-section service-bg-surface border-bottom">
  <div class="container">
    
    <div class="text-center service-section-header">
      <span class="service-pill-badge">The V-Move Enterprise Edge</span>
      <h2 class="service-title-md">Why Enterprises Trust <span><?= @$company3 ?: 'V-Move' ?></span></h2>
      <p class="service-desc">
        We handle relocations for IT powerhouses, banks, corporate headquarters, and growing startups with enterprise-grade professionalism.
      </p>
    </div>

    <div class="row g-4">
      
      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-calendar-check-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Guaranteed Zero Downtime</h4>
            <p class="small text-secondary mb-0">We work across Friday night, Saturday, and Sunday. Your business does not lose a single billable minute of regular employee productivity.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-shield-lock-fill"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Data Security &amp; NDA Compliance</h4>
            <p class="small text-secondary mb-0">Our full crew signs non-disclosure and security compliance agreements. Confidential physical files and servers move in locked security crates.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-file-earmark-ruled"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Full GST &amp; Corporate PO Billing</h4>
            <p class="small text-secondary mb-0">Proper corporate invoice with 100% input tax credit (ITC) eligibility, vendor registration compliance, and itemized billing documentation.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-person-workspace"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Dedicated On-Site Director</h4>
            <p class="small text-secondary mb-0">An experienced project manager coordinates with building facility managers, freight elevator schedules, and your internal committees.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-truck"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Scalable High-Volume Fleet</h4>
            <p class="small text-secondary mb-0">From 50-seater branch offices to 1,500-employee multi-floor tech campuses, our dedicated container fleet scales effortlessly.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="service-advantage-card h-100 d-flex align-items-start gap-3">
          <div class="service-advantage-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <div>
            <h4 class="h6 fw-bold mb-2">Comprehensive Transit Insurance</h4>
            <p class="small text-secondary mb-0">Complete commercial transit insurance coverage protects all IT assets, modular furniture, and office inventory with instant claim processing.</p>
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
      <h2 class="service-title-md">Frequently Asked Questions on <span>Corporate Shifting</span></h2>
      <p class="service-desc">
        Find clear answers about minimizing business downtime, IT hardware handling, file security, and workstation reassembly.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        
        <div class="accordion service-accordion" id="officeShiftingFaq">
          
          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="officeFaqHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#officeFaqCollapseOne" aria-expanded="true" aria-controls="officeFaqCollapseOne">
                1. How do you prevent disruption and downtime during an office move?
              </button>
            </h3>
            <div id="officeFaqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="officeFaqHeadingOne" data-bs-parent="#officeShiftingFaq">
              <div class="accordion-body">
                We schedule office relocations over the weekend or during overnight non-working hours. Packing typically starts on Friday evening, transport and setup take place on Saturday and Sunday, and full cleaning and desk testing conclude by Sunday night. Your staff resumes regular business on Monday morning without missing work hours.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="officeFaqHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#officeFaqCollapseTwo" aria-expanded="false" aria-controls="officeFaqCollapseTwo">
                2. How do you handle sensitive servers, IT racks, and employee computers?
              </button>
            </h3>
            <div id="officeFaqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="officeFaqHeadingTwo" data-bs-parent="#officeShiftingFaq">
              <div class="accordion-body">
                All IT equipment is packed by our trained electronic handling team using anti-static ESD bubble film and high-density foam edge protectors. Server racks are secured inside custom foam-lined wooden crating. Each desktop, monitor, keyboard, and power cable is placed inside color-coded employee crates matching their specific desk number.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="officeFaqHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#officeFaqCollapseThree" aria-expanded="false" aria-controls="officeFaqCollapseThree">
                3. Can your team dismantle and reassemble modular cubicles and conference tables?
              </button>
            </h3>
            <div id="officeFaqCollapseThree" class="accordion-collapse collapse" aria-labelledby="officeFaqHeadingThree" data-bs-parent="#officeShiftingFaq">
              <div class="accordion-body">
                Yes! Our crew includes certified commercial carpenters experienced with modular office systems (such as Godrej, Featherlite, Haworth, and Steelcase). We dismantle partition screens, raceways, modesty panels, and executive conference tables, transporting and reconstructing them according to your new layout blueprints.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="officeFaqHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#officeFaqCollapseFour" aria-expanded="false" aria-controls="officeFaqCollapseFour">
                4. What measures guarantee the security of confidential business files?
              </button>
            </h3>
            <div id="officeFaqCollapseFour" class="accordion-collapse collapse" aria-labelledby="officeFaqHeadingFour" data-bs-parent="#officeShiftingFaq">
              <div class="accordion-body">
                We supply lockable heavy-duty plastic document crates secured with serialized, tamper-evident security zip-ties. The serial numbers are recorded in an audit register signed by your facility manager before dispatch and verified prior to unsealing at the destination.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="officeFaqHeadingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#officeFaqCollapseFive" aria-expanded="false" aria-controls="officeFaqCollapseFive">
                5. Do you provide GST invoices and corporate purchase order (PO) billing?
              </button>
            </h3>
            <div id="officeFaqCollapseFive" class="accordion-collapse collapse" aria-labelledby="officeFaqHeadingFive" data-bs-parent="#officeShiftingFaq">
              <div class="accordion-body">
                Yes. We are a fully compliant corporate logistics partner. We provide standard GST tax invoices with 100% Input Tax Credit (ITC) eligibility, accept official corporate POs, and provide vendor registration documentation including MSME, PAN, and certificate of incorporation.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="officeFaqHeadingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#officeFaqCollapseSix" aria-expanded="false" aria-controls="officeFaqCollapseSix">
                6. How early should we plan a corporate office move?
              </button>
            </h3>
            <div id="officeFaqCollapseSix" class="accordion-collapse collapse" aria-labelledby="officeFaqHeadingSix" data-bs-parent="#officeShiftingFaq">
              <div class="accordion-body">
                For small offices (up to 30 workstations), 1 to 2 weeks of notice is sufficient. For large corporate facilities (50 to 500+ workstations), planning 3 to 4 weeks in advance allows our project directors to conduct detailed floor audits, coordinate elevator permits, and deliver employee packing crates ahead of moving weekend.
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
            <i class="bi bi-tag-fill"></i> Enterprise Moving SLA Guaranteed
          </span>
          <h2 class="service-cta-title">
            Planning an <span>Office Relocation</span> with Zero Downtime?
          </h2>
          <p class="service-cta-desc mb-4 text-white-50">
            Partner with <strong><?= @$company3 ?: 'V-Move Packers &amp; Movers' ?></strong> for precision commercial shifting, anti-static IT protection, and guaranteed Monday morning operational readiness.
          </p>
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-3">
            <button type="button" class="btn btn-service-primary d-inline-flex align-items-center justify-content-center gap-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-calculator"></i> Book Corporate Survey
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
              <span class="small text-white">Weekend &amp; Overnight Shifts</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Anti-Static IT Hardware Packaging</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">Dedicated Corporate Project Manager</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span class="small text-white">100% Comprehensive Transit Coverage</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>