<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => "How $company3 collects, uses, protects, and handles your personal information.",
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]); ?>

<!-- Privacy Policy Content Section -->
<section class="about-section bg-light">
  <div class="container">

    <!-- Section Heading -->
    <div class="text-center mb-4">
      <span class="about-tag">Data Protection &amp; Trust</span>
      <h2 class="about-heading">
        Privacy <span>Policy</span>
      </h2>
      <p class="about-desc about-subtitle-center">
        Your privacy is important to us. Learn how <?= $company3 ?> collects, uses, and safeguards your relocation details, contact information, and survey data.
      </p>
    </div>

    <!-- Effective Date Callout -->
    <div class="legal-callout d-flex flex-wrap align-items-center justify-content-between gap-2 mb-4">
      <div>
        <i class="bi bi-shield-check text-success me-1"></i>
        <strong>Effective Date:</strong> January 1, 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> Recent
      </div>
      <div>
        <span class="badge bg-light text-dark border">Compliance with IT Act, 2000 (India)</span>
      </div>
    </div>

    <div class="row g-4 g-lg-5">

      <!-- Left Column: Table of Contents (Sticky on Desktop) -->
      <div class="col-lg-4">
        <div class="legal-toc-card">
          <div class="legal-toc-title">
            <i class="bi bi-list-nested text-primary"></i> Table of Contents
          </div>
          <ul class="legal-toc-list">
            <li><a href="#sec1" class="legal-toc-link">1. Information We Collect</a></li>
            <li><a href="#sec2" class="legal-toc-link">2. How We Use Your Data</a></li>
            <li><a href="#sec3" class="legal-toc-link">3. Survey &amp; Inventory Data</a></li>
            <li><a href="#sec4" class="legal-toc-link">4. Information Sharing &amp; Third Parties</a></li>
            <li><a href="#sec5" class="legal-toc-link">5. Payment Security &amp; Encryption</a></li>
            <li><a href="#sec6" class="legal-toc-link">6. Data Retention &amp; Safeguards</a></li>
            <li><a href="#sec7" class="legal-toc-link">7. Cookies &amp; Tracking</a></li>
            <li><a href="#sec8" class="legal-toc-link">8. Your Rights &amp; Choices</a></li>
            <li><a href="#sec9" class="legal-toc-link">9. Grievance Officer &amp; Contact</a></li>
          </ul>

          <hr class="my-3 text-muted">

          <div class="small text-muted mb-3">
            Need urgent assistance or have privacy inquiries?
          </div>
          <a <?= $phonehtml ?> class="btn-about-outline w-100 justify-content-center mb-2">
            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
          </a>
        </div>
      </div>

      <!-- Right Column: Policy Content Cards -->
      <div class="col-lg-8">

        <!-- Clause 1 -->
        <div class="legal-card" id="sec1">
          <div class="legal-card-header">
            <span class="legal-card-num">1</span>
            <h3 class="legal-card-title">Information We Collect</h3>
          </div>
          <p>
            When you request a moving estimate, schedule a pre-move survey, or book shifting services with <strong><?= $company3 ?></strong>, we collect relevant information necessary to process and coordinate your relocation:
          </p>
          <ul>
            <li><strong>Personal Contact Details:</strong> Full name, telephone number, WhatsApp contact, and email address.</li>
            <li><strong>Relocation Logistics Details:</strong> Pickup address, delivery destination address, moving dates, floor numbers, and elevator availability.</li>
            <li><strong>Inventory Information:</strong> List of household furniture, electronic appliances, delicate glassware, vehicles (make/model/chassis number for car/bike transport), and declared valuations for transit insurance.</li>
            <li><strong>Technical Data:</strong> IP address, device type, browser specifications, and referring URL collected automatically to maintain site performance and prevent fraud.</li>
          </ul>
        </div>

        <!-- Clause 2 -->
        <div class="legal-card" id="sec2">
          <div class="legal-card-header">
            <span class="legal-card-num">2</span>
            <h3 class="legal-card-title">How We Use Your Data</h3>
          </div>
          <p>
            We process your personal information solely for lawful operational and customer support objectives, including:
          </p>
          <ul>
            <li>Calculating accurate, itemized moving estimates and customized shifting plans.</li>
            <li>Assigning dedicated packing crews, container trucks, and move coordinators for scheduled service dates.</li>
            <li>Facilitating transit insurance coverage declarations with authorized insurance underwriters.</li>
            <li>Sending milestone notifications, real-time shipment status updates, and digital GST invoices.</li>
            <li>Responding to customer feedback, queries, and claim settlement requests.</li>
          </ul>
        </div>

        <!-- Clause 3 -->
        <div class="legal-card" id="sec3">
          <div class="legal-card-header">
            <span class="legal-card-num">3</span>
            <h3 class="legal-card-title">Pre-Move Survey &amp; Inventory Records</h3>
          </div>
          <p>
            To provide precise quotations, our team may conduct in-person pre-move physical surveys or virtual video surveys via WhatsApp. Photographic or video records of furniture condition, pre-existing dents, or delicate items are collected strictly to:
          </p>
          <ul>
            <li>Determine appropriate quantities of 5-ply cartons, bubble wrap, thermocol, and wooden crating.</li>
            <li>Ensure proper truck size and container volume allocation.</li>
            <li>Verify item condition before packing for transparent transit insurance inspection.</li>
          </ul>
          <p class="mb-0">
            Survey images and inventory sheets are securely archived and never shared with unauthorized external entities.
          </p>
        </div>

        <!-- Clause 4 -->
        <div class="legal-card" id="sec4">
          <div class="legal-card-header">
            <span class="legal-card-num">4</span>
            <h3 class="legal-card-title">Information Sharing &amp; Third Parties</h3>
          </div>
          <div class="legal-callout mb-3">
            <strong>Zero-Sale Guarantee:</strong> <?= $company3 ?> does NOT sell, rent, or trade your contact information to third-party telemarketers or marketing agencies.
          </div>
          <p>
            Information is disclosed strictly on a need-to-know basis to fulfill your moving contract:
          </p>
          <ul>
            <li><strong>Transit Insurance Providers:</strong> Consignment valuation details and item lists shared exclusively to issue your transit insurance certificate.</li>
            <li><strong>Government &amp; Toll Authorities:</strong> Vehicle transport documentation, E-Way bills, and consignment notes (Lorry Receipt / LR) required by transport authorities under Indian motor vehicle regulations.</li>
            <li><strong>Legal Compliance:</strong> When strictly mandated by court orders, statutory law enforcement agencies, or applicable judicial processes.</li>
          </ul>
        </div>

        <!-- Clause 5 -->
        <div class="legal-card" id="sec5">
          <div class="legal-card-header">
            <span class="legal-card-num">5</span>
            <h3 class="legal-card-title">Payment Security &amp; Encryption</h3>
          </div>
          <p>
            We take your financial privacy seriously. When paying booking advances or completing invoice settlements digitally:
          </p>
          <ul>
            <li>All online transactions are processed through RBI-approved, PCI-DSS compliant payment gateways with 256-bit SSL encryption.</li>
            <li><?= $company3 ?> does <strong>never</strong> store sensitive credit card numbers, CVVs, debit card PINs, or net banking passwords on our internal servers.</li>
            <li>Bank UPI transfers (Google Pay, PhonePe, Paytm, BHIM) and NEFT/RTGS payments go directly into our verified corporate bank accounts.</li>
          </ul>
        </div>

        <!-- Clause 6 -->
        <div class="legal-card" id="sec6">
          <div class="legal-card-header">
            <span class="legal-card-num">6</span>
            <h3 class="legal-card-title">Data Retention &amp; Safeguards</h3>
          </div>
          <p>
            We maintain technical, administrative, and physical safeguards designed to protect personal data against unauthorized access, loss, or alteration. Moving invoices and consignment records are retained for statutory accounting and tax compliance periods as required under Indian commercial law, after which they are securely purged.
          </p>
        </div>

        <!-- Clause 7 -->
        <div class="legal-card" id="sec7">
          <div class="legal-card-header">
            <span class="legal-card-num">7</span>
            <h3 class="legal-card-title">Cookies &amp; Web Analytics</h3>
          </div>
          <p>
            Our website uses standard session cookies to remember your estimate form inputs and ensure seamless page navigation. These cookies do not access your local computer storage or personal hard drive files. You can configure your browser to block cookies, although certain automated quote calculation features may require cookies to function properly.
          </p>
        </div>

        <!-- Clause 8 -->
        <div class="legal-card" id="sec8">
          <div class="legal-card-header">
            <span class="legal-card-num">8</span>
            <h3 class="legal-card-title">Your Rights &amp; Choices</h3>
          </div>
          <p>
            As a valued customer, you have the right to:
          </p>
          <ul>
            <li>Request a copy of the personal information stored in your customer account.</li>
            <li>Request corrections or updates to inaccurate contact or delivery address records.</li>
            <li>Opt out of non-essential promotional communications or service newsletters at any time.</li>
          </ul>
        </div>

        <!-- Clause 9 -->
        <div class="legal-card" id="sec9">
          <div class="legal-card-header">
            <span class="legal-card-num">9</span>
            <h3 class="legal-card-title">Grievance Redressal &amp; Contact</h3>
          </div>
          <p>
            If you have questions, concerns, or requests regarding this Privacy Policy or how your data is handled, please contact our designated Privacy &amp; Grievance Officer:
          </p>
          <div class="bg-light border rounded p-3 mb-3">
            <p class="mb-1"><strong>Company:</strong> <?= $company3 ?></p>
            <p class="mb-1"><strong>Helpline Phone:</strong> <?= $phone ?></p>
            <p class="mb-1"><strong>Support Email:</strong> <a href="mailto:<?= $mail ?>" class="text-decoration-none"><?= $mail ?></a></p>
            <p class="mb-0"><strong>Operating Jurisdiction:</strong> Maharashtra, India</p>
          </div>
          <p class="small text-muted mb-0">
            We endeavor to investigate and resolve all formal privacy queries within 7 business days.
          </p>
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
            <h4>Have Questions About Your Privacy or Booking?</h4>
            <p>Our relocation team is available 24/7 to provide transparent answers, verified estimates, and friendly moving support.</p>
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