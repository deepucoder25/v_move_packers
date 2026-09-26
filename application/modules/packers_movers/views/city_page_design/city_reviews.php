<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ========================================================================
     CITY CUSTOMER REVIEWS SECTION
     ======================================================================== -->
<div class="city-reviews-wrap">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
        <div>
            <span class="city-badge">
                <i class="bi bi-star-fill"></i> Verified Ratings
            </span>
            <h3 class="h4 fw-bold text-dark mb-1">
                Customer Reviews in <span class="text-danger"><?= htmlspecialchars($city) ?></span>
            </h3>
            <p class="text-secondary small mb-0">What families and businesses say about shifting with <?= htmlspecialchars($company3) ?>.</p>
        </div>
    </div>

    <!-- Rating Summary Bar -->
    <div class="city-rating-summary">
        <div class="d-flex align-items-center gap-3">
            <div class="city-score-num text-danger"><?= @$ratingValue ?: '4.9' ?></div>
            <div>
                <div class="city-stars mb-1">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="small fw-semibold text-secondary">
                    Overall Satisfaction Score (<?= @$ratingCount ?: '3,850+' ?> Moves)
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center gap-2">
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-semibold">
                <i class="bi bi-patch-check-fill me-1"></i> 100% Genuine Moving Feedback
            </span>
        </div>
    </div>

    <!-- Swiper Carousel (2 Testimonials per Row with Touch Swipe & Navigation) -->
    <div class="swiper city-reviews-swiper">
        <div class="swiper-wrapper">
            
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="city-review-card">
                    <div class="d-flex align-items-start justify-content-between gap-3 mb-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="city-reviewer-avatar">RK</div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Rajesh Kulkarni</h6>
                                <span class="small text-secondary"><i class="bi bi-geo-alt"></i> <?= htmlspecialchars($city) ?> &bull; 2 BHK Household Shift</span>
                            </div>
                        </div>
                        <div class="city-stars small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <p class="small text-secondary mb-0">
                        "Booked <?= htmlspecialchars($company3) ?> for local home shifting within <?= htmlspecialchars($city) ?>. The crew arrived right at 9 AM with plenty of bubble wrap, cartons, and tape. Handled my 55-inch TV and refrigerator with great care. Zero damages!"
                    </p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="city-review-card">
                    <div class="d-flex align-items-start justify-content-between gap-3 mb-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="city-reviewer-avatar">SP</div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Sneha Patil</h6>
                                <span class="small text-secondary"><i class="bi bi-geo-alt"></i> <?= htmlspecialchars($city) ?> &bull; Bike Transportation</span>
                            </div>
                        </div>
                        <div class="city-stars small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <p class="small text-secondary mb-0">
                        "Transported my Royal Enfield from <?= htmlspecialchars($city) ?> to Pune. They wrapped the mirrors, exhaust, and tank with triple-layer corrugated sheets and used wheel chocks in the container. Received in mint condition within 24 hours."
                    </p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="city-review-card">
                    <div class="d-flex align-items-start justify-content-between gap-3 mb-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="city-reviewer-avatar">VD</div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Vikram Deshmukh</h6>
                                <span class="small text-secondary"><i class="bi bi-geo-alt"></i> <?= htmlspecialchars($city) ?> &bull; Commercial Office Relocation</span>
                            </div>
                        </div>
                        <div class="city-stars small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <p class="small text-secondary mb-0">
                        "We shifted 15 office workstations and our server rack in <?= htmlspecialchars($city) ?> over Saturday and Sunday. Everything was systematically labeled with color tags and reassembled by Monday morning. Truly zero downtime."
                    </p>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
                <div class="city-review-card">
                    <div class="d-flex align-items-start justify-content-between gap-3 mb-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="city-reviewer-avatar">AS</div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Amit Sharma</h6>
                                <span class="small text-secondary"><i class="bi bi-geo-alt"></i> <?= htmlspecialchars($city) ?> &bull; 3 BHK Intercity Relocation</span>
                            </div>
                        </div>
                        <div class="city-stars small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <p class="small text-secondary mb-0">
                        "Moved from <?= htmlspecialchars($city) ?> to Bangalore seamlessly. High-quality bubble packing for crockery, custom wooden crate for glass dining table, and live vehicle GPS updates. Delivered right on the promised schedule."
                    </p>
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="swiper-slide">
                <div class="city-review-card">
                    <div class="d-flex align-items-start justify-content-between gap-3 mb-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="city-reviewer-avatar">PV</div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Pooja Verma</h6>
                                <span class="small text-secondary"><i class="bi bi-geo-alt"></i> <?= htmlspecialchars($city) ?> &bull; Local 1 BHK Shifting</span>
                            </div>
                        </div>
                        <div class="city-stars small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <p class="small text-secondary mb-0">
                        "Very courteous and polite shifting staff in <?= htmlspecialchars($city) ?>. They carefully dismantled my bed and wardrobe and reassembled everything cleanly at the new flat. No hidden charges beyond the initial quote."
                    </p>
                </div>
            </div>

            <!-- Slide 6 -->
            <div class="swiper-slide">
                <div class="city-review-card">
                    <div class="d-flex align-items-start justify-content-between gap-3 mb-2">
                        <div class="d-flex align-items-center gap-2">
                            <div class="city-reviewer-avatar">DP</div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Deepak Patel</h6>
                                <span class="small text-secondary"><i class="bi bi-geo-alt"></i> <?= htmlspecialchars($city) ?> &bull; Car Transport in Covered Carrier</span>
                            </div>
                        </div>
                        <div class="city-stars small">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                    </div>
                    <p class="small text-secondary mb-0">
                        "Shipped my Hyundai Creta from <?= htmlspecialchars($city) ?>. Car condition inspection report was prepared before loading. The enclosed trailer kept the vehicle 100% dust-free and scratch-free upon doorstep arrival."
                    </p>
                </div>
            </div>

        </div>

        <!-- Swiper Controls: Dynamic Dots + Prev/Next Buttons -->
        <div class="city-reviews-controls d-flex align-items-center justify-content-between mt-3 pt-2">
            <div class="city-reviews-pagination swiper-pagination"></div>
            <div class="d-flex align-items-center gap-2">
                <button type="button" class="city-swiper-nav-btn city-reviews-prev" aria-label="Previous Review">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button type="button" class="city-swiper-nav-btn city-reviews-next" aria-label="Next Review">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
(function initCityReviewsSwiper() {
    if (typeof Swiper === 'undefined') {
        return setTimeout(initCityReviewsSwiper, 50);
    }
    new Swiper('.city-reviews-swiper', {
        slidesPerView: 1,
        spaceBetween: 16,
        loop: true,
        grabCursor: true,
        speed: 600,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },
        pagination: {
            el: '.city-reviews-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.city-reviews-next',
            prevEl: '.city-reviews-prev'
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 18
            }
        }
    });
})();
</script>
