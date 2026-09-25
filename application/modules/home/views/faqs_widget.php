<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<!-- ==========================================================================
     FAQS SECTION WIDGET (Unified Heading + Modern Responsive Accordion Grid)
     ========================================================================== -->
<section class="home-section faqs-section" id="faqs-section" itemscope itemtype="https://schema.org/FAQPage">
  <div class="container">
    
    <!-- Unified Section Header -->
    <div class="sec-header text-center">
      <div class="sec-badge">
        <i class="bi bi-question-circle-fill"></i>
        <span>FREQUENTLY ASKED QUESTIONS</span>
      </div>
      <h2 class="sec-title">
        Got Questions About Moving? <span class="sec-title-accent">We Have All The Answers</span>
      </h2>
      <div class="sec-divider">
        <span class="sec-divider-line"></span>
        <span class="sec-divider-icon"><i class="bi bi-chat-dots-fill"></i></span>
        <span class="sec-divider-line"></span>
      </div>
      <p class="sec-subtitle">
        Find clear, upfront details about our shifting charges, transit insurance, packing quality, and delivery timelines across India.
      </p>
    </div>

    <!-- Main Grid: Help Card on Left + Accordion on Right -->
    <div class="row g-4 g-lg-5">
      
      <!-- Left Column: Support Box -->
      <div class="col-12 col-lg-4">
        <div class="faq-support-card">
          <!-- Top Icon + Live Status Pill -->
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="faq-support-icon">
              <i class="bi bi-headset"></i>
            </div>
            <span class="faq-status-pill">
              <span class="status-pulse-dot"></span> 24/7 Available
            </span>
          </div>

          <h3 class="faq-support-title">Have More Questions?</h3>
          <p class="faq-support-desc">
            Cannot find the answer you are looking for? Our friendly relocation experts are available 24/7 to assist with quotes and shifting schedules.
          </p>
          
          <div class="faq-support-actions">
            <!-- Call Button -->
            <a <?= $phonehtml ?> class="btn-faq-action btn-faq-call" aria-label="Call <?= $phone ?>">
              <span class="action-icon-wrap">
                <i class="bi bi-telephone-fill"></i>
              </span>
              <div class="action-content">
                <span class="action-sub">Toll-Free Helpline</span>
                <strong class="action-main"><?= $phone ?></strong>
              </div>
              <i class="bi bi-chevron-right action-arrow"></i>
            </a>
            
            <!-- WhatsApp Button -->
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="btn-faq-action btn-faq-whatsapp" aria-label="Chat on WhatsApp">
              <span class="action-icon-wrap">
                <i class="bi bi-whatsapp"></i>
              </span>
              <div class="action-content">
                <span class="action-sub">Quick WhatsApp Query</span>
                <strong class="action-main">Instant Chat Support</strong>
              </div>
              <i class="bi bi-chevron-right action-arrow"></i>
            </a>
          </div>

          <!-- Trust Points Box -->
          <div class="faq-trust-box mt-3">
            <div class="faq-trust-item mb-2">
              <i class="bi bi-patch-check-fill text-success"></i>
              <span>Zero Obligation Free Quotation</span>
            </div>
            <div class="faq-trust-item">
              <i class="bi bi-shield-check text-primary"></i>
              <span>100% Safe Transit Assurance</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Accordion -->
      <div class="col-12 col-lg-8">
        <div class="accordion accordion-custom" id="homeFaqAccordion">
          
          <!-- Item 1 -->
          <div class="accordion-item faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqHeading1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                <span class="faq-number">01</span>
                <span class="faq-q-text" itemprop="name">How are packing and moving charges calculated?</span>
              </button>
            </h3>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body faq-body" itemprop="text">
                <p class="mb-0">
                  Relocation rates depend on several factors: the distance between origin and destination, volume and weight of your belongings, packing material quality (standard vs. 5-ply export grade), floor level and elevator availability, and optional transit insurance. We offer transparent itemized pricing with zero surprise surcharges.
                </p>
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqHeading2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                <span class="faq-number">02</span>
                <span class="faq-q-text" itemprop="name">Is transit insurance compulsory and what does it cover?</span>
              </button>
            </h3>
            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body faq-body" itemprop="text">
                <p class="mb-0">
                  While optional, we strongly recommend comprehensive transit insurance for interstate shifting. It covers unexpected occurrences during highway transit such as vehicle collisions, fire, theft, or severe weather damage. Our team assists with complete declaration and prompt claim settlement support if needed.
                </p>
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="accordion-item faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqHeading3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                <span class="faq-number">03</span>
                <span class="faq-q-text" itemprop="name">How many days in advance should I book my move?</span>
              </button>
            </h3>
            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body faq-body" itemprop="text">
                <p class="mb-0">
                  For local within-city shifting, 2 to 3 days advance notice is sufficient. For interstate moves or weekend dates (which fill up quickly), we recommend booking 5 to 7 days ahead to secure your preferred departure slot, dedicated container truck, and pre-move survey coordinator.
                </p>
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="accordion-item faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqHeading4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                <span class="faq-number">04</span>
                <span class="faq-q-text" itemprop="name">What packing materials do you use for delicate household goods?</span>
              </button>
            </h3>
            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body faq-body" itemprop="text">
                <p class="mb-0">
                  We use multi-layered defensive materials: heavy-duty 5-ply corrugated cartons, shock-absorbing bubble wrap, thermocol corner protectors, moisture-resistant stretch film, and custom wooden crating for expensive paintings, LED televisions, and glassware.
                </p>
              </div>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="accordion-item faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqHeading5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                <span class="faq-number">05</span>
                <span class="faq-q-text" itemprop="name">Can I track my moving truck and consignment in real time?</span>
              </button>
            </h3>
            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body faq-body" itemprop="text">
                <p class="mb-0">
                  Yes! All our interstate carrier trucks are equipped with live GPS tracking. Your dedicated Move Coordinator will provide regular location milestones and estimated time of arrival (ETA) throughout the transit journey.
                </p>
              </div>
            </div>
          </div>

          <!-- Item 6 -->
          <div class="accordion-item faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            <h3 class="accordion-header" id="faqHeading6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                <span class="faq-number">06</span>
                <span class="faq-q-text" itemprop="name">Do you dismantle and reassemble furniture like beds and wardrobes?</span>
              </button>
            </h3>
            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#homeFaqAccordion" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
              <div class="accordion-body faq-body" itemprop="text">
                <p class="mb-0">
                  Yes, standard furniture dismantling and reassembly is included in our comprehensive shifting package. Our team carefully handles king/queen size hydraulic beds, dining tables, modular wardrobes, and desks at your pickup and reassembles them at your new home.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>