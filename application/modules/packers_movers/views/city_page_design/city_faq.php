<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ========================================================================
     CITY FREQUENTLY ASKED QUESTIONS SECTION
     ======================================================================== -->
<div class="city-faq-wrap">
    <div class="mb-4">
        <span class="city-badge">
            <i class="bi bi-question-circle-fill"></i> Common Inquiries
        </span>
        <h3 class="h4 fw-bold text-dark mb-1">
            Frequently Asked Questions in <span class="text-danger"><?= htmlspecialchars($city) ?></span>
        </h3>
        <p class="text-secondary small mb-0">Helpful details about moving rates, packing processes, and transit safety in <?= htmlspecialchars($city) ?>.</p>
    </div>

    <div class="accordion city-faq-accordion" id="cityFaqAccordion">
        <!-- FAQ 1 -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="cityFaqHead1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol1" aria-expanded="true" aria-controls="cityFaqCol1">
                    How much do packers and movers charge for shifting in <?= htmlspecialchars($city) ?>?
                </button>
            </h4>
            <div id="cityFaqCol1" class="accordion-collapse collapse show" aria-labelledby="cityFaqHead1" data-bs-parent="#cityFaqAccordion">
                <div class="accordion-body">
                    Moving rates in <strong><?= htmlspecialchars($city) ?></strong> depend on home size, volume of goods, floor height, and distance. Local 1 BHK shifting usually ranges from ₹4,500 to ₹9,000, 2 BHK ranges from ₹7,500 to ₹15,000, and 3 BHK ranges from ₹12,000 to ₹22,000. All prices include labour, multi-layer packing materials, and transport.
                </div>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="cityFaqHead2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol2" aria-expanded="false" aria-controls="cityFaqCol2">
                    Do you offer a free pre-move home survey in <?= htmlspecialchars($city) ?>?
                </button>
            </h4>
            <div id="cityFaqCol2" class="accordion-collapse collapse" aria-labelledby="cityFaqHead2" data-bs-parent="#cityFaqAccordion">
                <div class="accordion-body">
                    Yes! We provide 100% complimentary physical home inspections or quick video consultations over WhatsApp across all neighborhoods of <strong><?= htmlspecialchars($city) ?></strong>. Our move supervisor calculates the volume of packing required and delivers an accurate, fixed written estimate.
                </div>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="cityFaqHead3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol3" aria-expanded="false" aria-controls="cityFaqCol3">
                    How do you protect furniture and appliances during monsoon weather in <?= htmlspecialchars($city) ?>?
                </button>
            </h4>
            <div id="cityFaqCol3" class="accordion-collapse collapse" aria-labelledby="cityFaqHead3" data-bs-parent="#cityFaqAccordion">
                <div class="accordion-body">
                    We use a 5-layer weather-shield packing protocol for moves in <strong><?= htmlspecialchars($city) ?></strong>. This includes high-density air bubble wrap, edge guards, heavy corrugated sheets, waterproof stretch film, and closed weather-proof container vehicles to keep your electronics and wooden furniture 100% dry and dust-free.
                </div>
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="cityFaqHead4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol4" aria-expanded="false" aria-controls="cityFaqCol4">
                    Can your team handle apartment lift timing restrictions and narrow society lanes in <?= htmlspecialchars($city) ?>?
                </button>
            </h4>
            <div id="cityFaqCol4" class="accordion-collapse collapse" aria-labelledby="cityFaqHead4" data-bs-parent="#cityFaqAccordion">
                <div class="accordion-body">
                    Yes, our local operations crew in <strong><?= htmlspecialchars($city) ?></strong> is familiar with residential building bylaws, society security permissions, and loading bay limits. For tight alleyways, we deploy dedicated shuttle tempos and hydraulic trollies to ensure seamless door-to-door transit without blocking gates.
                </div>
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="cityFaqHead5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol5" aria-expanded="false" aria-controls="cityFaqCol5">
                    Do you provide motorcycle and car transportation from <?= htmlspecialchars($city) ?>?
                </button>
            </h4>
            <div id="cityFaqCol5" class="accordion-collapse collapse" aria-labelledby="cityFaqHead5" data-bs-parent="#cityFaqAccordion">
                <div class="accordion-body">
                    Certainly. We operate specialized two-wheeler and four-wheeler carriers equipped with wheel chocks, safety ramps, and heavy-duty tie-downs. We offer door pickup in <strong><?= htmlspecialchars($city) ?></strong> and direct delivery across all states in India with zero transit scratches.
                </div>
            </div>
        </div>

        <!-- FAQ 6 -->
        <div class="accordion-item">
            <h4 class="accordion-header" id="cityFaqHead6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityFaqCol6" aria-expanded="false" aria-controls="cityFaqCol6">
                    Is transit insurance provided for relocations starting in <?= htmlspecialchars($city) ?>?
                </button>
            </h4>
            <div id="cityFaqCol6" class="accordion-collapse collapse" aria-labelledby="cityFaqHead6" data-bs-parent="#cityFaqAccordion">
                <div class="accordion-body">
                    Yes, we provide comprehensive door-to-door transit insurance coverage for all household goods, commercial consignments, and vehicles dispatched from <strong><?= htmlspecialchars($city) ?></strong>, giving you total financial protection and complete peace of mind.
                </div>
            </div>
        </div>
    </div>
</div>
