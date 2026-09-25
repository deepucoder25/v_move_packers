<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="contact-form-header">
                <!-- Wavy Color Layers Background -->
                <div class="header-wavy-bg" aria-hidden="true">
                    <svg class="header-wavy-svg" viewBox="0 0 500 130" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="waveGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#5a0009" />
                                <stop offset="50%" stop-color="#940111" />
                                <stop offset="100%" stop-color="#c41026" />
                            </linearGradient>
                            <linearGradient id="waveGrad2" x1="0%" y1="100%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#d4132b" stop-opacity="0.55" />
                                <stop offset="50%" stop-color="#e82e46" stop-opacity="0.35" />
                                <stop offset="100%" stop-color="#7a010d" stop-opacity="0.75" />
                            </linearGradient>
                            <linearGradient id="waveGrad3" x1="100%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" stop-color="#ffffff" stop-opacity="0.28" />
                                <stop offset="60%" stop-color="#ffffff" stop-opacity="0.08" />
                                <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <!-- Base Wave -->
                        <path class="wave-layer wave-1" d="M0,0 L500,0 L500,95 C380,125 260,75 140,105 C70,120 30,95 0,100 Z" fill="url(#waveGrad1)"></path>
                        <!-- Intersecting Layered Wave 2 -->
                        <path class="wave-layer wave-2" d="M0,0 L500,0 L500,80 C410,110 310,60 200,95 C110,120 50,75 0,85 Z" fill="url(#waveGrad2)"></path>
                        <!-- Highlight Wave 3 -->
                        <path class="wave-layer wave-3" d="M0,0 L500,0 L500,65 C370,95 270,45 160,78 C80,100 30,60 0,70 Z" fill="url(#waveGrad3)"></path>
                    </svg>
                    <!-- Bottom Wave Transition Curve to White Form Body -->
                    <svg class="header-bottom-curve" viewBox="0 0 500 24" preserveAspectRatio="none">
                        <path d="M0,8 C120,24 240,0 360,18 C420,24 470,12 500,16 L500,24 L0,24 Z" fill="#ffffff"></path>
                    </svg>
                </div>

                <div class="contact-header-content d-flex align-items-center justify-content-between w-100">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-shield-check-fill text-warning fs-5"></i>
                        <span id="qteModalLabel" class="modal-quote-heading">Get a Free Moving Quote</span>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <form id="quotemodal" class="ajax-form p-4" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <p class="modal-quote-subtitle mb-3">Fill out this quick form &amp; get instant competitive rates within 15 minutes.</p>
                <div class="row g-3">
                    <!-- Name Input -->
                    <div class="col-md-6">
                        <div class="form-floating form-icon-floating">
                            <i class="bi bi-person-fill floating-icon"></i>
                            <input type="text" class="form-control" id="modalQuoteName" name="name" placeholder="Your Name *" required>
                            <label for="modalQuoteName">Your Name *</label>
                        </div>
                    </div>

                    <!-- Mobile Number Input -->
                    <div class="col-md-6">
                        <div class="form-floating form-icon-floating">
                            <i class="bi bi-telephone-fill floating-icon"></i>
                            <input type="tel" class="form-control" id="modalQuotePhone" name="phone" placeholder="Mobile Number *" required>
                            <label for="modalQuotePhone">Mobile Number *</label>
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div class="col-md-12">
                        <div class="form-floating form-icon-floating">
                            <i class="bi bi-envelope-fill floating-icon"></i>
                            <input type="email" class="form-control" id="modalQuoteEmail" name="email" placeholder="Your Email Address">
                            <label for="modalQuoteEmail">Your Email Address</label>
                        </div>
                    </div>

                    <!-- Moving From -->
                    <div class="col-6">
                        <div class="form-floating form-icon-floating">
                            <i class="bi bi-geo-alt-fill floating-icon"></i>
                            <input type="text" class="form-control" id="modalQuoteFrom" name="mfrom" placeholder="Moving From (City)">
                            <label for="modalQuoteFrom">Moving From (City)</label>
                        </div>
                    </div>

                    <!-- Moving To -->
                    <div class="col-6">
                        <div class="form-floating form-icon-floating">
                            <i class="bi bi-pin-map-fill floating-icon"></i>
                            <input type="text" class="form-control" id="modalQuoteTo" name="mto" placeholder="Moving To (City)">
                            <label for="modalQuoteTo">Moving To (City)</label>
                        </div>
                    </div>

                    <!-- Message Textarea -->
                    <div class="col-12">
                        <div class="form-floating form-icon-floating textarea-floating">
                            <i class="bi bi-chat-left-text-fill floating-icon"></i>
                            <textarea class="form-control" id="modalQuoteMessage" name="message" placeholder="Describe your relocation needs..." style="height: 100px;"></textarea>
                            <label for="modalQuoteMessage">Describe your relocation needs...</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-end gap-2 mt-4 contact-quote-gap">
                    <button type="reset" class="btn btn-modal-reset" onclick="document.getElementById('resultquotemodal').innerHTML = '';">Reset</button>
                    <button id="submitbquotemodal" type="submit" class="btn btn-modal-submit">
                        <span>Get Free Quote</span>
                        <i class="bi bi-send-fill ms-1"></i>
                    </button>
                </div>
 
                <div id="resultquotemodal" class="mt-2"></div>
            </form>
        </div>
    </div>
</div>