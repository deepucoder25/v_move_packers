<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Dynamic Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us',
    'bc_desc' => 'Get in touch with our relocation specialists for free instant quotes, on-site surveys, and 24/7 moving assistance across India.',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<!-- ========================================================================
     1. Main Contact Hub (Inquiry Form + Direct Contact Information Sidebar)
     ======================================================================== -->
<section class="cnt-section cnt-bg-surface">
    <div class="container">
        <div class="row g-4 g-xl-5 align-items-start">
            
            <!-- Left Column: The Interactive Contact Form Card -->
            <div class="col-12 col-lg-7">
                <div class="cnt-form-card">
                    <div class="cnt-form-header">
                        <span class="cnt-badge">
                            <i class="bi bi-lightning-charge-fill"></i> Fast Callback Within 15 Mins
                        </span>
                        <h2 class="cnt-form-title">Send Us a <span>Message</span></h2>
                        <p class="cnt-form-desc">
                            Planning a home move, vehicle transfer, or corporate relocation? Fill out your details below and our team will get back to you with competitive quotes and custom solutions.
                        </p>
                    </div>

                    <!-- The AJAX Form -->
                    <form id="contactform" class="ajax-form" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">

                        <!-- Pill Input Fields with Icons and Floating Labels -->
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <div class="form-floating cnt-floating-wrap has-icon">
                                    <i class="bi bi-person cnt-field-icon"></i>
                                    <input type="text" name="name" class="form-control cnt-pill-control" id="cnt_name" placeholder="Full Name*" required>
                                    <label for="cnt_name">Full Name*</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-floating cnt-floating-wrap has-icon">
                                    <i class="bi bi-telephone cnt-field-icon"></i>
                                    <input type="tel" name="phone" class="form-control cnt-pill-control" id="cnt_phone" placeholder="Phone no.*" required maxlength="10">
                                    <label for="cnt_phone">Phone no.* (10 Digits)</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating cnt-floating-wrap has-icon">
                                    <i class="bi bi-envelope cnt-field-icon"></i>
                                    <input type="email" name="email" class="form-control cnt-pill-control" id="cnt_email" placeholder="Email Address (Optional)">
                                    <label for="cnt_email">Email Address (Optional)</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating cnt-floating-wrap has-icon is-textarea">
                                    <i class="bi bi-chat-left-text cnt-field-icon"></i>
                                    <textarea name="message" class="form-control cnt-pill-control cnt-pill-textarea" id="cnt_message" placeholder="Message / Moving details..."></textarea>
                                    <label for="cnt_message">Message / Moving details (Items, Pickup & Delivery City)...</label>
                                </div>
                            </div>
                        </div>

                        <!-- Pill Submit & Clear Buttons -->
                        <div class="cnt-submit-wrap d-flex align-items-center gap-3">
                            <button type="submit" class="cnt-pill-submit-btn">
                                <span>SUBMIT REQUEST</span>
                                <i class="bi bi-send-fill"></i>
                            </button>
                            <button type="reset" class="cnt-pill-clear-btn" id="cntClearBtn">
                                <i class="bi bi-arrow-counterclockwise"></i>
                                <span>CLEAR</span>
                            </button>
                        </div>

                        <!-- Result Container -->
                        <div id="contactformresults" class="mt-3"></div>

                        <!-- Form Trust Markers -->
                        <div class="cnt-form-trust-note pt-2">
                            <span><i class="bi bi-shield-check text-success"></i> 100% Privacy Protected</span>
                            <span class="mx-1 d-none d-sm-inline">•</span>
                            <span><i class="bi bi-check-circle-fill text-success"></i> Zero Obligation Quote</span>
                            <span class="mx-1 d-none d-sm-inline">•</span>
                            <span><i class="bi bi-telephone-check-fill text-success"></i> No Spam Policy</span>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Column: Contact Direct Information Sidebar -->
            <div class="col-12 col-lg-5">
                <div class="cnt-info-sidebar">

                    <!-- Card 1: 24/7 Telephone Hotline -->
                    <div class="cnt-info-card">
                        <div class="cnt-info-icon-wrap">
                            <i class="bi bi-telephone-inbound-fill"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="cnt-info-title">24/7 Relocation Helpline</div>
                            <a <?= @$phonehtml ?> class="cnt-info-value"><?= @$phone ?: '+91 9728546183' ?></a>
                            <p class="cnt-info-desc">Speak directly with our move manager for instant cost estimates and slot booking.</p>
                            <a <?= @$phonehtml ?> class="cnt-card-action-btn">
                                <i class="bi bi-telephone-fill"></i> Call Now
                            </a>
                        </div>
                    </div>


                    <!-- Card 3: Official Email Desk -->
                    <div class="cnt-info-card">
                        <div class="cnt-info-icon-wrap">
                            <i class="bi bi-envelope-check-fill"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="cnt-info-title">Official Email Desk</div>
                            <a href="<?= @$mailhtml ?>" class="cnt-info-value text-break"><?= @$mail ?: 'info@vshiftpackersandmovers.in' ?></a>
                            <p class="cnt-info-desc">For corporate shifting proposals, GST invoices, and vendor partnerships.</p>
                        </div>
                    </div>

                    <!-- Card 4: Registered Office & Central Hub -->
                    <div class="cnt-info-card">
                        <div class="cnt-info-icon-wrap">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="cnt-info-title">Registered Head Office</div>
                            <span class="cnt-info-value fs-6 fw-semibold text-secondary">
                                <?= @$address ?: 'Shop No.17, Building No.2, Deeplaxmi Rajaram Residency, Kalher, Bhiwandi, Mumbai - 421302' ?>
                            </span>
                            <p class="cnt-info-desc mt-1 mb-2">Operating 24 Hours / 365 Days across India.</p>
                            <a href="#contactMapSection" class="cnt-card-action-btn">
                                <i class="bi bi-map-fill"></i> View Location Map
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- ========================================================================
     4. Interactive Map & Depot Location Section
     ======================================================================== -->
<section class="cnt-section cnt-bg-white border-top border-bottom" id="contactMapSection">
    <div class="container">
        <div class="text-center mb-4 mb-md-5">
            <span class="cnt-badge">
                <i class="bi bi-geo-alt-fill"></i> Locate Our Office
            </span>
            <h2 class="cnt-section-title">Visit Our <span>Headquarters &amp; Logistics Hub</span></h2>
            <p class="cnt-section-desc">
                Located conveniently along the prime Bhiwandi-Mumbai logistics corridor for swift fleet mobilization.
            </p>
        </div>

        <div class="cnt-map-wrapper">
            <!-- Google Maps Embed -->
            <iframe 
                class="cnt-map-iframe"
                src="https://maps.google.com/maps?q=Deeplaxmi+Rajaram+Residency+Kalher+Bhiwandi+Mumbai&t=&z=14&ie=UTF8&iwloc=&output=embed"
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                title="Office Location Map">
            </iframe>

            <!-- Floating Office Details Overlay Box -->
            <div class="cnt-map-floating-box">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <i class="bi bi-shield-check text-danger fs-5"></i>
                    <h4 class="h6 fw-bold mb-0 text-dark"><?= @$company_name ?: 'V Move Packers & Movers' ?></h4>
                </div>
                <p class="small text-secondary mb-3">
                    <?= @$address ?: 'Shop No.17, Building No.2, Deeplaxmi Rajaram Residency, Kalher, Bhiwandi, Mumbai, Pin Code- 421302' ?>
                </p>
                <div class="d-flex align-items-center justify-content-between pt-2 border-top">
                    <span class="badge bg-success-subtle text-success border border-success-subtle">
                        <i class="bi bi-clock-fill me-1"></i> Open 24x7
                    </span>
                    <a href="https://maps.google.com/?q=Deeplaxmi+Rajaram+Residency+Kalher+Bhiwandi+Mumbai" target="_blank" rel="noopener noreferrer" class="cnt-card-action-btn">
                        <i class="bi bi-cursor-fill"></i> Get Directions
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     5. Contact & Booking FAQs Accordion
     ======================================================================== -->
<section class="cnt-section cnt-bg-surface">
    <div class="container">
        <div class="text-center mb-4 mb-md-5">
            <span class="cnt-badge">
                <i class="bi bi-patch-question-fill"></i> Clear Answers
            </span>
            <h2 class="cnt-section-title">Frequently Asked <span>Questions</span></h2>
            <p class="cnt-section-desc">
                Everything you need to know about our response times, survey scheduling, quotation accuracy, and tracking support.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-9">
                <div class="accordion cnt-accordion" id="contactPageFaq">

                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="cntFaqHead1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cntFaqCollapse1" aria-expanded="true" aria-controls="cntFaqCollapse1">
                                How quickly will your team respond after I submit the contact form?
                            </button>
                        </h3>
                        <div id="cntFaqCollapse1" class="accordion-collapse collapse show" aria-labelledby="cntFaqHead1" data-bs-parent="#contactPageFaq">
                            <div class="accordion-body">
                                Our move coordination desk operates 24/7. Once you submit the contact form, a dedicated relocation expert will review your requirement and call or WhatsApp you within <strong>10 to 15 minutes</strong> with initial cost estimations and scheduling availability.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="cntFaqHead2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cntFaqCollapse2" aria-expanded="false" aria-controls="cntFaqCollapse2">
                                Is the pre-move physical or video survey completely free of charge?
                            </button>
                        </h3>
                        <div id="cntFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="cntFaqHead2" data-bs-parent="#contactPageFaq">
                            <div class="accordion-body">
                                <strong>Yes, 100% complimentary with zero booking obligation.</strong> We provide both in-person home/office surveys or quick video assessments over WhatsApp to audit the exact volume of furniture, fragile items, and vehicle logistics before issuing a written guaranteed quotation.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="cntFaqHead3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cntFaqCollapse3" aria-expanded="false" aria-controls="cntFaqCollapse3">
                                Can I schedule moving on weekends, public holidays, or late evenings?
                            </button>
                        </h3>
                        <div id="cntFaqCollapse3" class="accordion-collapse collapse" aria-labelledby="cntFaqHead3" data-bs-parent="#contactPageFaq">
                            <div class="accordion-body">
                                Absolutely. We understand work schedules and housing society regulations. We operate 365 days a year, including Saturdays, Sundays, public holidays, and night-shift packing/loading to match your building lift timings and convenient dates.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="cntFaqHead4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cntFaqCollapse4" aria-expanded="false" aria-controls="cntFaqCollapse4">
                                What basic details should I provide to get an accurate cost estimate?
                            </button>
                        </h3>
                        <div id="cntFaqCollapse4" class="accordion-collapse collapse" aria-labelledby="cntFaqHead4" data-bs-parent="#contactPageFaq">
                            <div class="accordion-body">
                                To give you the most accurate price, we look at: (1) Pickup and delivery city/locality, (2) Floor level and lift availability at both locations, (3) Approximate moving date, and (4) Broad inventory breakdown (e.g., 1BHK, 2BHK, 3BHK, bike, car, or office workstations).
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="cntFaqHead5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cntFaqCollapse5" aria-expanded="false" aria-controls="cntFaqCollapse5">
                                How do I track my goods while the vehicle is in transit?
                            </button>
                        </h3>
                        <div id="cntFaqCollapse5" class="accordion-collapse collapse" aria-labelledby="cntFaqHead5" data-bs-parent="#contactPageFaq">
                            <div class="accordion-body">
                                You receive a dedicated Move Coordinator and direct contact numbers for the transport driver. In addition, our GPS-monitored fleet allows our dispatch team to provide milestone location alerts at scheduled intervals until doorstep arrival.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="cntFaqHead6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cntFaqCollapse6" aria-expanded="false" aria-controls="cntFaqCollapse6">
                                What if I need to reschedule or change my moving date?
                            </button>
                        </h3>
                        <div id="cntFaqCollapse6" class="accordion-collapse collapse" aria-labelledby="cntFaqHead6" data-bs-parent="#contactPageFaq">
                            <div class="accordion-body">
                                Date modifications are hassle-free. Just notify your assigned coordinator at least 24 to 48 hours prior to the planned packing date, and we will adjust our crew and vehicle dispatch to your preferred date at zero cancellation or penalty fee.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================
     6. Urgent / Emergency Move High-Impact CTA Banner
     ======================================================================== -->
<section class="cnt-section-sm cnt-bg-white">
    <div class="container">
        <div class="cnt-cta-card">
            <div class="row align-items-center g-4">
                <div class="col-12 col-lg-8">
                    <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-3 py-2 rounded-pill fw-bold text-uppercase mb-3">
                        <i class="bi bi-clock-fill me-1"></i> Need Same-Day or Emergency Shifting?
                    </span>
                    <h2 class="cnt-cta-title">Ready for a Stress-Free Relocation? <span>Call Us Right Now!</span></h2>
                    <p class="cnt-cta-desc mb-0">
                        Our rapid deployment crew is standing by across Mumbai, Pune, Delhi NCR, Bangalore, and nationwide routes. Get immediate pricing and instant vehicle dispatch.
                    </p>
                </div>
                <div class="col-12 col-lg-4 text-lg-end">
                    <div class="d-flex flex-column flex-sm-row flex-lg-column gap-2 justify-content-lg-end">
                        <a <?= @$phonehtml ?> class="btn btn-light btn-lg rounded-pill fw-bold text-dark px-4 py-3 shadow-sm d-inline-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-telephone-fill text-danger"></i> <?= @$phone ?: '+91 9728546183' ?>
                        </a>
                        <a href="<?= @$whatsapphtml ?: 'https://wa.me/919728546183' ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-lg rounded-pill fw-bold text-white px-4 py-3 shadow-sm d-inline-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-whatsapp"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script for Reset Button handling to clear error highlights & messages -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const clearBtn = document.getElementById("cntClearBtn");
    const contactForm = document.getElementById("contactform");
    if (clearBtn && contactForm) {
        clearBtn.addEventListener("click", function () {
            // Remove error highlights
            contactForm.querySelectorAll(".input-error-highlight").forEach(el => el.classList.remove("input-error-highlight"));
            contactForm.querySelectorAll(".field-error-msg").forEach(el => el.remove());
            const resultsBox = document.getElementById("contactformresults");
            if (resultsBox) {
                resultsBox.innerHTML = "";
            }
        });
    }
});
</script>