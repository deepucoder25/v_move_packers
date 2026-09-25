<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms & Conditions',
    'bc_desc' => "Service guidelines, booking terms, liability limitations, and payment policies for $company3.",
    'breadcrumbs' => [
        ['name' => 'Terms & Conditions']
    ]
]); ?>

<!-- Terms & Conditions Content Section -->
<section class="about-section bg-light">
  <div class="container">

    <!-- Section Heading -->
    <div class="text-center mb-4">
      <span class="about-tag">Service Agreement</span>
      <h2 class="about-heading">
        Terms &amp; <span>Conditions</span>
      </h2>
      <p class="about-desc about-subtitle-center">
        Please review our service agreement before confirming your booking. These guidelines ensure transparency, safety, and mutual accountability throughout your relocation with <?= $company3 ?>.
      </p>
    </div>

    <!-- Effective Date Callout -->
    <div class="legal-callout d-flex flex-wrap align-items-center justify-content-between gap-2 mb-4">
      <div>
        <i class="bi bi-file-text-fill text-primary me-1"></i>
        <strong>Agreement Scope:</strong> Standard Domestic Shifting &amp; Transport Contract
      </div>
      <div>
        <span class="badge bg-light text-dark border">Effective: 2026 Season</span>
      </div>
    </div>

    <div class="row g-4 g-lg-5">

      <!-- Left Column: Table of Contents (Sticky on Desktop) -->
      <div class="col-lg-4">
        <div class="legal-toc-card">
          <div class="legal-toc-title">
            <i class="bi bi-list-nested text-primary"></i> Clauses Index
          </div>
          <ul class="legal-toc-list">
            <li><a href="#term1" class="legal-toc-link">1. Scope of Relocation Services</a></li>
            <li><a href="#term2" class="legal-toc-link">2. Quotations &amp; Price Validity</a></li>
            <li><a href="#term3" class="legal-toc-link">3. Booking &amp; Cancellation Policy</a></li>
            <li><a href="#term4" class="legal-toc-link">4. Customer Pre-Move Obligations</a></li>
            <li><a href="#term5" class="legal-toc-link">5. Prohibited &amp; Hazardous Goods</a></li>
            <li><a href="#term6" class="legal-toc-link">6. Transit Insurance &amp; Liability</a></li>
            <li><a href="#term7" class="legal-toc-link">7. Payment Schedule &amp; Invoicing</a></li>
            <li><a href="#term8" class="legal-toc-link">8. Delivery &amp; Joint Inspection</a></li>
            <li><a href="#term9" class="legal-toc-link">9. Force Majeure &amp; Transit Delays</a></li>
            <li><a href="#term10" class="legal-toc-link">10. Legal Jurisdiction</a></li>
          </ul>

          <hr class="my-3 text-muted">

          <div class="small text-muted mb-3">
            Have questions about terms or booking?
          </div>
          <a <?= $phonehtml ?> class="btn-about-outline w-100 justify-content-center mb-2">
            <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
          </a>
        </div>
      </div>

      <!-- Right Column: Terms Content Cards -->
      <div class="col-lg-8">

        <!-- Term 1 -->
        <div class="legal-card" id="term1">
          <div class="legal-card-header">
            <span class="legal-card-num">1</span>
            <h3 class="legal-card-title">Scope of Relocation Services</h3>
          </div>
          <p>
            <strong><?= $company3 ?></strong> provides professional logistics, household relocation, commercial office shifting, vehicle transportation (cars and two-wheelers), warehousing, and packing-moving services across local and interstate routes in India.
          </p>
          <p class="mb-0">
            Our standard moving service includes packing with multi-layered protective materials, loading into dedicated or consolidated container trucks, highway transit, unloading, and basic dismantling/reassembly of standard modular furniture.
          </p>
        </div>

        <!-- Term 2 -->
        <div class="legal-card" id="term2">
          <div class="legal-card-header">
            <span class="legal-card-num">2</span>
            <h3 class="legal-card-title">Quotations &amp; Price Validity</h3>
          </div>
          <p>
            All price estimates provided by <?= $company3 ?> are calculated strictly on the basis of the item inventory and site specifications declared by the customer during physical or virtual surveys:
          </p>
          <ul>
            <li>Written quotations remain valid for <strong>30 calendar days</strong> from the date of issue.</li>
            <li>If additional items, extra packing materials, multiple pickup/drop locations, or long carrying distances (over 50 meters from truck parking) are added on moving day, revised rates will apply as per mutual agreement.</li>
            <li>Elevator non-availability or hoisting through balconies requiring specialized cranes or pulleys involves additional manual charges.</li>
          </ul>
        </div>

        <!-- Term 3 -->
        <div class="legal-card" id="term3">
          <div class="legal-card-header">
            <span class="legal-card-num">3</span>
            <h3 class="legal-card-title">Booking Deposit &amp; Cancellation Policy</h3>
          </div>
          <p>
            A nominal booking token advance is required to secure your moving vehicle, crew schedule, and packing date:
          </p>
          <ul>
            <li><strong>Rescheduling:</strong> Customers can reschedule their moving date free of charge if notified at least <strong>48 hours prior</strong> to scheduled packing.</li>
            <li><strong>Cancellations:</strong> In the event of booking cancellation made 48 hours prior to moving day, the advance deposit is refundable minus a 10% administrative processing fee. Cancellations made less than 24 hours prior are non-refundable due to vehicle reservation costs.</li>
          </ul>
        </div>

        <!-- Term 4 -->
        <div class="legal-card" id="term4">
          <div class="legal-card-header">
            <span class="legal-card-num">4</span>
            <h3 class="legal-card-title">Customer Pre-Move Obligations</h3>
          </div>
          <p>
            To facilitate a punctual and damage-free moving experience, customers must complete the following preparations prior to our packing crew's arrival:
          </p>
          <ul>
            <li><strong>Refrigerators &amp; Freezers:</strong> Defrost completely at least 24 hours prior to prevent moisture leakage inside packing cartons.</li>
            <li><strong>Washing Machines:</strong> Disconnect hoses and drain all residual water.</li>
            <li><strong>Personal Valuables:</strong> Remove all cash, gold, jewelry, laptops, legal property documents, and passports. These must NOT be packed inside moving cartons.</li>
            <li><strong>Permissions &amp; Gate Passes:</strong> Secure necessary residential society gate passes, elevator reservation approvals, and parking permits from local housing associations.</li>
          </ul>
        </div>

        <!-- Term 5 -->
        <div class="legal-card" id="term5">
          <div class="legal-card-header">
            <span class="legal-card-num">5</span>
            <h3 class="legal-card-title">Prohibited &amp; Hazardous Goods</h3>
          </div>
          <div class="legal-callout mb-3">
            <strong>Strict Warning:</strong> Under Indian transport safety laws, the following items are strictly prohibited from being packed or loaded onto our moving trucks:
          </div>
          <div class="prohibited-tag-grid mb-3">
            <span class="prohibited-tag"><i class="bi bi-x-circle-fill"></i> Currency Notes &amp; Cash</span>
            <span class="prohibited-tag"><i class="bi bi-x-circle-fill"></i> Gold &amp; Diamond Jewelry</span>
            <span class="prohibited-tag"><i class="bi bi-x-circle-fill"></i> Passports &amp; Certificates</span>
            <span class="prohibited-tag"><i class="bi bi-x-circle-fill"></i> Filled LPG Gas Cylinders</span>
            <span class="prohibited-tag"><i class="bi bi-x-circle-fill"></i> Petrol, Diesel &amp; Kerosene</span>
            <span class="prohibited-tag"><i class="bi bi-x-circle-fill"></i> Fireworks &amp; Crackers</span>
            <span class="prohibited-tag"><i class="bi bi-x-circle-fill"></i> Firearms &amp; Ammunition</span>
            <span class="prohibited-tag"><i class="bi bi-x-circle-fill"></i> Corrosive Acids &amp; Chemicals</span>
            <span class="prohibited-tag"><i class="bi bi-x-circle-fill"></i> Perishable Food Items</span>
          </div>
          <p class="small text-muted mb-0">
            <?= $company3 ?> reserves the right to inspect and refuse any carton suspected of containing prohibited hazardous goods. The customer bears sole legal liability for any undeclared prohibited items.
          </p>
        </div>

        <!-- Term 6 -->
        <div class="legal-card" id="term6">
          <div class="legal-card-header">
            <span class="legal-card-num">6</span>
            <h3 class="legal-card-title">Transit Insurance &amp; Liability Limitations</h3>
          </div>
          <p>
            Comprehensive transit insurance protects declared goods against highway collisions, fire, overturned vehicles, or catastrophic transit accidents:
          </p>
          <ul>
            <li>Insurance is issued by authorized third-party underwriters based on the item valuation declaration signed by the customer.</li>
            <li>Claims for visible external transit damage must be endorsed on the Consignment Note (LR copy) at the time of delivery and reported in writing within <strong>48 hours</strong> of unloading.</li>
            <li><?= $company3 ?> is not liable for internal mechanical, electrical, or software malfunctions of electronic equipment unless external physical damage to the protective packaging is evident.</li>
          </ul>
        </div>

        <!-- Term 7 -->
        <div class="legal-card" id="term7">
          <div class="legal-card-header">
            <span class="legal-card-num">7</span>
            <h3 class="legal-card-title">Payment Schedule &amp; Invoicing</h3>
          </div>
          <p>
            Our payment milestones are structured transparently:
          </p>
          <ul>
            <li><strong>Token Advance:</strong> Nominal booking deposit to confirm vehicle and packing slot.</li>
            <li><strong>Loading Stage:</strong> 80% of the total estimate payable upon completion of packing and loading at the origin.</li>
            <li><strong>Final Settlement:</strong> Remaining 20% balance payable upon vehicle arrival at destination prior to final unloading and unpacking handover.</li>
            <li>Accepted payment methods include UPI (Google Pay, PhonePe, Paytm), IMPS/NEFT bank transfer, and cash. Official GST tax invoices are provided for all transactions.</li>
          </ul>
        </div>

        <!-- Term 8 -->
        <div class="legal-card" id="term8">
          <div class="legal-card-header">
            <span class="legal-card-num">8</span>
            <h3 class="legal-card-title">Delivery &amp; Joint Inspection</h3>
          </div>
          <p>
            Upon arrival at destination:
          </p>
          <ul>
            <li>The customer or their authorized representative must be present to supervise unloading and verify total package counts against the original packing inventory list.</li>
            <li>Upon satisfactory completion, the customer must sign the delivery acknowledgment on the Consignment Note (Lorry Receipt / LR).</li>
          </ul>
        </div>

        <!-- Term 9 -->
        <div class="legal-card" id="term9">
          <div class="legal-card-header">
            <span class="legal-card-num">9</span>
            <h3 class="legal-card-title">Force Majeure &amp; Transit Delays</h3>
          </div>
          <p>
            While <?= $company3 ?> strives for 100% on-time delivery, we shall not be held liable for transit delays caused by circumstances beyond reasonable operational control, including natural disasters (floods, landslides, severe storms), highway blockades, regional transport strikes, state border checkpost delays, or national emergencies.
          </p>
        </div>

        <!-- Term 10 -->
        <div class="legal-card" id="term10">
          <div class="legal-card-header">
            <span class="legal-card-num">10</span>
            <h3 class="legal-card-title">Legal Jurisdiction &amp; Dispute Resolution</h3>
          </div>
          <p>
            Any disputes, claims, or controversies arising out of or relating to this moving agreement shall first be addressed amicably through our customer support management. In the event of unresolved legal disputes, all proceedings shall be subject strictly to the exclusive jurisdiction of the competent courts of <strong>Maharashtra, India</strong>.
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
            <h4>Ready to Book Your Relocation with Full Peace of Mind?</h4>
            <p>Get upfront pricing, customized moving schedules, and verified care from <?= $company3 ?>.</p>
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