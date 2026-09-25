<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions',
    'bc_desc' => "Clear, upfront details about our shifting charges, transit safety, packing standards, and schedules at $company3.",
    'breadcrumbs' => [
        ['name' => 'FAQs']
    ]
]); ?>

<!-- FAQs Content Section -->
<section class="about-section bg-light" itemscope itemtype="https://schema.org/FAQPage">
  <div class="container">

    <!-- Section Heading -->
    <div class="text-center mb-4">
      <span class="about-tag">Answers &amp; Insights</span>
      <h2 class="about-heading">
        Frequently Asked <span>Questions</span>
      </h2>
      <p class="about-desc about-subtitle-center">
        Relocating doesn't have to be complicated. Here are answers to the most common questions our customers ask about estimates, safety measures, insurance, and moving day coordination.
      </p>
    </div>

    <!-- Main Grid: Accordion Left + Support Card Right -->
    <div class="row g-4 g-lg-5">

      <!-- Left Column: Accordion List -->
      <div class="col-lg-8">
        <div class="accordion faq-accordion" id="faqAccordionMain">

          <!-- FAQ Item 1 -->
          <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqH1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqC1" aria-expanded="true" aria-controls="faqC1">
                <span class="faq-q-number">01</span>
                <span itemprop="name">How are packing and moving charges calculated?</span>
              </button>
            </h3>
            <div id="faqC1" class="accordion-collapse collapse show" aria-labelledby="faqH1" data-bs-parent="#faqAccordionMain" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body" itemprop="text">
                Our moving estimates are calculated based on transparent factors: the volume and weight of your belongings, travel distance between pickup and destination, required packaging tier (standard vs. 5-ply export grade), elevator availability at both locations, and optional comprehensive transit insurance. We provide written, itemized quotes with zero hidden charges.
              </div>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqH2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC2" aria-expanded="false" aria-controls="faqC2">
                <span class="faq-q-number">02</span>
                <span itemprop="name">What packing materials do you use for fragile goods and electronics?</span>
              </button>
            </h3>
            <div id="faqC2" class="accordion-collapse collapse" aria-labelledby="faqH2" data-bs-parent="#faqAccordionMain" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body" itemprop="text">
                We use multi-layered defensive materials: heavy-duty 5-ply corrugated cartons, shock-absorbing bubble wrap, thermocol edge protectors, moisture-resistant stretch film, and custom wooden crating for expensive LED screens, glass tabletops, and crockery. Every delicate carton is clearly labelled with "FRAGILE" caution tape.
              </div>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqH3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC3" aria-expanded="false" aria-controls="faqC3">
                <span class="faq-q-number">03</span>
                <span itemprop="name">Is transit insurance compulsory and what does it cover?</span>
              </button>
            </h3>
            <div id="faqC3" class="accordion-collapse collapse" aria-labelledby="faqH3" data-bs-parent="#faqAccordionMain" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body" itemprop="text">
                While transit insurance is optional, we strongly recommend it for intercity moves. It covers declared household goods against unforeseen highway risks such as vehicle accidents, fire, theft, or severe weather disturbances. Our dedicated move manager assists with full documentation and prompt settlement assistance.
              </div>
            </div>
          </div>

          <!-- FAQ Item 4 -->
          <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqH4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC4" aria-expanded="false" aria-controls="faqC4">
                <span class="faq-q-number">04</span>
                <span itemprop="name">How many days in advance should I schedule my move?</span>
              </button>
            </h3>
            <div id="faqC4" class="accordion-collapse collapse" aria-labelledby="faqH4" data-bs-parent="#faqAccordionMain" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body" itemprop="text">
                For local city moves, booking 2 to 3 days in advance is sufficient. For interstate moves or month-end weekend slots (which fill up quickly), we recommend scheduling 5 to 7 days ahead. This ensures dedicated container vehicle allocation and priority crew scheduling.
              </div>
            </div>
          </div>

          <!-- FAQ Item 5 -->
          <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqH5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC5" aria-expanded="false" aria-controls="faqC5">
                <span class="faq-q-number">05</span>
                <span itemprop="name">Do you dismantle and reassemble beds and modular furniture?</span>
              </button>
            </h3>
            <div id="faqC5" class="accordion-collapse collapse" aria-labelledby="faqH5" data-bs-parent="#faqAccordionMain" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body" itemprop="text">
                Yes, our trained carpenters handle standard dismantling and reassembly of hydraulic king/queen beds, dining tables, modular wardrobes, and study desks. All hardware bolts and fittings are carefully bagged, tagged, and taped directly to the corresponding furniture piece to prevent loss.
              </div>
            </div>
          </div>

          <!-- FAQ Item 6 -->
          <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqH6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC6" aria-expanded="false" aria-controls="faqC6">
                <span class="faq-q-number">06</span>
                <span itemprop="name">Can I transport my car or bike along with household goods?</span>
              </button>
            </h3>
            <div id="faqC6" class="accordion-collapse collapse" aria-labelledby="faqH6" data-bs-parent="#faqAccordionMain" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body" itemprop="text">
                Yes! We offer specialized car carriers and enclosed vehicle containers with wheel stoppers and safety strapping. Two-wheelers receive multi-layer bubble wrapping and handlebar protection. We also conduct a pre-transit vehicle inspection report recording fuel level, odometer reading, and exterior condition.
              </div>
            </div>
          </div>

          <!-- FAQ Item 7 -->
          <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqH7">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC7" aria-expanded="false" aria-controls="faqC7">
                <span class="faq-q-number">07</span>
                <span itemprop="name">Are there any hidden costs or surprise surcharges on moving day?</span>
              </button>
            </h3>
            <div id="faqC7" class="accordion-collapse collapse" aria-labelledby="faqH7" data-bs-parent="#faqAccordionMain" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body" itemprop="text">
                No. At <?= $company3 ?>, our written estimates clearly state all costs: packing labour, loading/unloading, transport fuel, toll charges, and taxes. Unless you add extra items not declared during the initial survey, the quoted price is the final amount payable.
              </div>
            </div>
          </div>

          <!-- FAQ Item 8 -->
          <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqH8">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC8" aria-expanded="false" aria-controls="faqC8">
                <span class="faq-q-number">08</span>
                <span itemprop="name">How can I track my consignment during inter-city transit?</span>
              </button>
            </h3>
            <div id="faqC8" class="accordion-collapse collapse" aria-labelledby="faqH8" data-bs-parent="#faqAccordionMain" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body" itemprop="text">
                Every customer is assigned a dedicated Move Coordinator. You can reach out directly via phone or WhatsApp for real-time truck position updates, milestone checkpoints, and accurate estimated times of arrival (ETA) at your destination.
              </div>
            </div>
          </div>

          <!-- FAQ Item 9 -->
          <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqH9">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC9" aria-expanded="false" aria-controls="faqC9">
                <span class="faq-q-number">09</span>
                <span itemprop="name">What items are prohibited from being transported?</span>
              </button>
            </h3>
            <div id="faqC9" class="accordion-collapse collapse" aria-labelledby="faqH9" data-bs-parent="#faqAccordionMain" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body" itemprop="text">
                For legal and safety regulations, we do not transport hazardous materials (inflammable chemicals, petrol, diesel, crackers), filled LPG cylinders (must be empty and certified), cash, bullion, diamond jewelry, personal passports, or firearms. Customers are advised to transport personal valuables separately.
              </div>
            </div>
          </div>

          <!-- FAQ Item 10 -->
          <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqH10">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC10" aria-expanded="false" aria-controls="faqC10">
                <span class="faq-q-number">10</span>
                <span itemprop="name">What should I prepare before the moving crew arrives?</span>
              </button>
            </h3>
            <div id="faqC10" class="accordion-collapse collapse" aria-labelledby="faqH10" data-bs-parent="#faqAccordionMain" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body" itemprop="text">
                Please defrost your refrigerator at least 24 hours prior, drain water from your washing machine, keep personal documents, cash, and jewelry in your personal bag, and secure society gate passes or elevator booking permissions to ensure a smooth moving day.
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Column: Support Box -->
      <div class="col-lg-4">
        <div class="faq-support-sidebar">
          <div class="faq-support-icon">
            <i class="bi bi-headset"></i>
          </div>
          <h4>Need Direct Help?</h4>
          <p>
            Have a specific requirement or moving query? Speak directly with our relocation specialists for instant assistance.
          </p>

          <a <?= $phonehtml ?> class="btn-about-primary w-100 justify-content-center mb-2">
            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
          </a>

          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn-about-wa w-100 justify-content-center mb-3">
            <i class="bi bi-whatsapp"></i> Chat on WhatsApp
          </a>

          <button type="button" class="btn-about-outline w-100 justify-content-center mb-4" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-calculator"></i> Get Free Quote
          </button>

          <div class="border-top pt-3">
            <div class="faq-trust-mini-item">
              <i class="bi bi-patch-check-fill text-success"></i>
              <span>100% Free Pre-Move Survey</span>
            </div>
            <div class="faq-trust-mini-item">
              <i class="bi bi-file-earmark-text-fill text-primary"></i>
              <span>Itemized Written Estimates</span>
            </div>
            <div class="faq-trust-mini-item">
              <i class="bi bi-shield-check text-primary"></i>
              <span>Transit Insurance Available</span>
            </div>
            <div class="faq-trust-mini-item">
              <i class="bi bi-clock-history text-secondary"></i>
              <span>24/7 Dedicated Move Coordinator</span>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Shared Call to Action Box -->
<section class="about-section bg-surface pt-0">
  <div class="container">
    <div class="about-simple-cta">
      <div class="row align-items-center g-3">
        <div class="col-lg-8">
          <div class="about-cta-text">
            <h4>Ready to Plan Your Relocation?</h4>
            <p>Get in touch with our moving experts for an upfront, transparent estimate and customized moving schedule.</p>
          </div>
        </div>
        <div class="col-lg-4 text-lg-end">
          <div class="about-btn-group justify-content-lg-end">
            <a <?= $phonehtml ?> class="btn-about-primary">
              <i class="bi bi-telephone-fill"></i> Call Now
            </a>
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn-about-wa">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>