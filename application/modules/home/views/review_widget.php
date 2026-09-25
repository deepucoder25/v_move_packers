<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<!-- ==========================================================================
     REVIEWS SECTION WIDGET (Unified Heading + Verified Customer Testimonials)
     ========================================================================== -->
<section class="home-section reviews-section" id="reviews-section">
  <div class="container">
    
    <!-- Unified Section Header -->
    <div class="sec-header text-center">
      <div class="sec-badge">
        <i class="bi bi-star-fill text-warning"></i>
        <span>CUSTOMER TESTIMONIALS</span>
      </div>
      <h2 class="sec-title">
        Trusted By Over 15,000+ <span class="sec-title-accent">Happy Families &amp; Businesses</span>
      </h2>
      <div class="sec-divider">
        <span class="sec-divider-line"></span>
        <span class="sec-divider-icon"><i class="bi bi-chat-heart-fill"></i></span>
        <span class="sec-divider-line"></span>
      </div>
      <p class="sec-subtitle">
        Real feedback from verified homeowners, corporate clients, and car owners who relocated seamlessly with <?= $company3 ?>.
      </p>
    </div>

    <!-- Aggregate Social Proof Header Card -->
    <div class="reviews-aggregate-card mb-5">
      <div class="row align-items-center g-3">
        <div class="col-12 col-md-4 text-center text-md-start">
          <div class="aggregate-score-box d-flex align-items-center justify-content-center justify-content-md-start gap-3">
            <span class="big-rating-number"><?= $ratingValue ?></span>
            <div>
              <div class="stars-gold mb-1">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <p class="aggregate-subtext mb-0">Based on <strong><?= $ratingCount ?>+</strong> Verified Reviews</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-8">
          <div class="aggregate-chips-row d-flex flex-wrap justify-content-center justify-content-md-end gap-2">
            <span class="trust-chip"><i class="bi bi-shield-check text-success"></i> 100% Genuine Reviews</span>
            <span class="trust-chip"><i class="bi bi-patch-check-fill text-primary"></i> Verified Movers</span>
            <span class="trust-chip"><i class="bi bi-trophy-fill text-warning"></i> 99.4% Satisfaction</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Reviews Swiper Slider (Single Row with Touch Swipe & Drag) -->
    <div class="reviews-slider-wrapper position-relative">
      <div class="swiper reviews-swiper">
        <div class="swiper-wrapper">
          
          <!-- Review 1: Household Move -->
          <div class="swiper-slide">
            <div class="review-card" itemscope itemtype="https://schema.org/Review">
              <div class="review-card-top">
                <div class="reviewer-meta d-flex align-items-center gap-3">
                  <div class="reviewer-avatar">
                    <span>RS</span>
                  </div>
                  <div>
                    <h4 class="reviewer-name" itemprop="author">Rajesh Sharma</h4>
                    <p class="reviewer-location"><i class="bi bi-geo-alt"></i> Delhi to Bangalore (Interstate Move)</p>
                  </div>
                </div>
                <div class="review-rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p class="review-text" itemprop="reviewBody">
                &ldquo;We relocated our 3BHK flat from Delhi to Bangalore across 2,000 km. The packing crew was extraordinary—they used 5 layers of bubble wrap for our 65-inch OLED TV and delicate glassware. Not a single chip or scratch upon delivery. True professionals!&rdquo;
              </p>
              <div class="review-card-footer d-flex align-items-center justify-content-between">
                <span class="review-service-pill"><i class="bi bi-house-door-fill"></i> 3BHK Household Shifting</span>
                <span class="review-date text-muted"><i class="bi bi-check-circle-fill text-success"></i> Verified Customer</span>
              </div>
            </div>
          </div>

          <!-- Review 2: Car Transportation -->
          <div class="swiper-slide">
            <div class="review-card" itemscope itemtype="https://schema.org/Review">
              <div class="review-card-top">
                <div class="reviewer-meta d-flex align-items-center gap-3">
                  <div class="reviewer-avatar">
                    <span>PV</span>
                  </div>
                  <div>
                    <h4 class="reviewer-name" itemprop="author">Pooja Verma</h4>
                    <p class="reviewer-location"><i class="bi bi-geo-alt"></i> Mumbai to Gurgaon (Car Shifting)</p>
                  </div>
                </div>
                <div class="review-rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p class="review-text" itemprop="reviewBody">
                &ldquo;I was nervous about shipping my new SUV interstate. The enclosed car carrier with wheel chocks and hydraulic ramps was top class. The driver kept me updated with live GPS coordinates, and the vehicle was handed over right at my society gate on the exact promised date.&rdquo;
              </p>
              <div class="review-card-footer d-flex align-items-center justify-content-between">
                <span class="review-service-pill"><i class="bi bi-car-front-fill"></i> Enclosed Car Transport</span>
                <span class="review-date text-muted"><i class="bi bi-check-circle-fill text-success"></i> Verified Customer</span>
              </div>
            </div>
          </div>

          <!-- Review 3: Local Home Shift -->
          <div class="swiper-slide">
            <div class="review-card" itemscope itemtype="https://schema.org/Review">
              <div class="review-card-top">
                <div class="reviewer-meta d-flex align-items-center gap-3">
                  <div class="reviewer-avatar">
                    <span>AK</span>
                  </div>
                  <div>
                    <h4 class="reviewer-name" itemprop="author">Amit Kulkarni</h4>
                    <p class="reviewer-location"><i class="bi bi-geo-alt"></i> Local City Shifting (Pune)</p>
                  </div>
                </div>
                <div class="review-rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p class="review-text" itemprop="reviewBody">
                &ldquo;Completed my entire 2BHK shifting within 5 hours! They brought proper wardrobe boxes, dismantled our king-size bed, packed the refrigerator cleanly, and reassembled everything at the new flat. Zero headache and completely affordable rate!&rdquo;
              </p>
              <div class="review-card-footer d-flex align-items-center justify-content-between">
                <span class="review-service-pill"><i class="bi bi-truck"></i> Local 2BHK Move</span>
                <span class="review-date text-muted"><i class="bi bi-check-circle-fill text-success"></i> Verified Customer</span>
              </div>
            </div>
          </div>

          <!-- Review 4: Corporate Office Relocation -->
          <div class="swiper-slide">
            <div class="review-card" itemscope itemtype="https://schema.org/Review">
              <div class="review-card-top">
                <div class="reviewer-meta d-flex align-items-center gap-3">
                  <div class="reviewer-avatar">
                    <span>VM</span>
                  </div>
                  <div>
                    <h4 class="reviewer-name" itemprop="author">Vikram Malhotra</h4>
                    <p class="reviewer-location"><i class="bi bi-geo-alt"></i> Corporate IT Shifting (Hyderabad)</p>
                  </div>
                </div>
                <div class="review-rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p class="review-text" itemprop="reviewBody">
                &ldquo;<?= $company3 ?> moved our 45-person IT office over the weekend. All server racks, desktop monitors, and conference setup were transported with anti-static packaging and re-cabled before Monday morning. Our team started work at 9 AM without a hitch!&rdquo;
              </p>
              <div class="review-card-footer d-flex align-items-center justify-content-between">
                <span class="review-service-pill"><i class="bi bi-building"></i> 45-Seat Office Move</span>
                <span class="review-date text-muted"><i class="bi bi-check-circle-fill text-success"></i> Verified Customer</span>
              </div>
            </div>
          </div>

          <!-- Review 5: Bike & Home Relocation in Ambernath -->
          <div class="swiper-slide">
            <div class="review-card" itemscope itemtype="https://schema.org/Review">
              <div class="review-card-top">
                <div class="reviewer-meta d-flex align-items-center gap-3">
                  <div class="reviewer-avatar">
                    <span>RG</span>
                  </div>
                  <div>
                    <h4 class="reviewer-name" itemprop="author">Ramesh Gaikwad</h4>
                    <p class="reviewer-location"><i class="bi bi-geo-alt"></i> Ambernath to Pune (Bike &amp; Home Move)</p>
                  </div>
                </div>
                <div class="review-rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p class="review-text" itemprop="reviewBody">
                &ldquo;Booked <?= $company3 ?> in Ambernath for moving my household and Royal Enfield bike. Their team in Ambernath West arrived promptly on time, used heavy corrugated sheets and bubble wrap, and delivered without even a speck of scratch. Truly top movers in Ambernath!&rdquo;
              </p>
              <div class="review-card-footer d-flex align-items-center justify-content-between">
                <span class="review-service-pill"><i class="bi bi-bicycle"></i> Bike &amp; Home Move</span>
                <span class="review-date text-muted"><i class="bi bi-check-circle-fill text-success"></i> Verified Customer</span>
              </div>
            </div>
          </div>

          <!-- Review 6: Secure Warehousing & Storage -->
          <div class="swiper-slide">
            <div class="review-card" itemscope itemtype="https://schema.org/Review">
              <div class="review-card-top">
                <div class="reviewer-meta d-flex align-items-center gap-3">
                  <div class="reviewer-avatar">
                    <span>SI</span>
                  </div>
                  <div>
                    <h4 class="reviewer-name" itemprop="author">Sneha Iyer</h4>
                    <p class="reviewer-location"><i class="bi bi-geo-alt"></i> Mumbai to Bangalore (Storage + Move)</p>
                  </div>
                </div>
                <div class="review-rating-stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
              </div>
              <p class="review-text" itemprop="reviewBody">
                &ldquo;Used their secure storage warehouse for 2 months during flat renovation before our interstate relocation. The 24/7 CCTV surveillance, moisture-proof wrapping, and transparent inventory checklist gave us 100% peace of mind. Excellent experience!&rdquo;
              </p>
              <div class="review-card-footer d-flex align-items-center justify-content-between">
                <span class="review-service-pill"><i class="bi bi-box-seam"></i> Safe Warehouse Storage</span>
                <span class="review-date text-muted"><i class="bi bi-check-circle-fill text-success"></i> Verified Customer</span>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Controls Down Below (Previous Button, Pagination Bullets, Next Button) -->
      <div class="reviews-bottom-controls d-flex align-items-center justify-content-center gap-3">
        <button type="button" class="reviews-swiper-btn reviews-swiper-prev" aria-label="Previous Review">
          <i class="bi bi-chevron-left"></i>
        </button>

        <div class="reviews-swiper-pagination swiper-pagination"></div>

        <button type="button" class="reviews-swiper-btn reviews-swiper-next" aria-label="Next Review">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </div>

  </div>
</section>

<script>
(function init() {
  if (typeof Swiper === 'undefined') return setTimeout(init, 50);
  new Swiper('.reviews-swiper', {
    slidesPerView: 1,
    spaceBetween: 16,
    loop: true,
    grabCursor: true,
    speed: 650,
    autoplay: { delay: 5000, disableOnInteraction: false, pauseOnMouseEnter: true },
    pagination: { el: '.reviews-swiper-pagination', clickable: true },
    navigation: { nextEl: '.reviews-swiper-next', prevEl: '.reviews-swiper-prev' },
    breakpoints: {
      576: { slidesPerView: 1.15, spaceBetween: 18 },
      768: { slidesPerView: 2, spaceBetween: 20 },
      992: { slidesPerView: 3, spaceBetween: 24 }
    }
  });
})();
</script>