<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Review Modal (Designed with theme tokens & CSS variables) -->
<div class="modal fade review-custom-modal" id="rvwmdl" tabindex="-1" role="dialog" aria-labelledby="rvwmdlTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="review-modal-header d-flex align-items-start justify-content-between">
                <div>
                    <div class="review-modal-badge">
                        <i class="bi bi-patch-check-fill"></i>
                        <span>Customer Feedback</span>
                    </div>
                    <h4 id="rvwmdlTitle" class="review-modal-title">Share Your Experience</h4>
                    <p class="review-modal-sub">Tell us how your relocation went with <?= htmlspecialchars($company3 ?? 'V Move Packers and Movers') ?>.</p>
                </div>
                <button type="button" class="review-modal-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <!-- Modal Form Body -->
            <form method="post" id="reviewsform" class="review-modal-body" enctype="multipart/form-data">
                <div class="row g-3">
                    <!-- Full Name -->
                    <div class="col-md-6">
                        <div class="review-field-group">
                            <i class="bi bi-person-fill review-input-icon"></i>
                            <input type="text" class="review-form-control" id="revName" name="name" placeholder="Full Name *" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <div class="review-field-group">
                            <i class="bi bi-envelope-fill review-input-icon"></i>
                            <input type="email" class="review-form-control" id="revEmail" name="email" placeholder="Email Address *" required>
                        </div>
                    </div>

                    <!-- City / Moving Route -->
                    <div class="col-md-6">
                        <div class="review-field-group">
                            <i class="bi bi-geo-alt-fill review-input-icon"></i>
                            <input type="text" class="review-form-control" id="revTitle" name="title" placeholder="City / Area (e.g. Mumbai, Pune)">
                        </div>
                    </div>

                    <!-- Rating Stars -->
                    <div class="col-md-6">
                        <div class="review-rating-card">
                            <span class="review-rating-label">Rating *</span>
                            <div class="review-rating-stars-wrap" id="rvwStarPicker">
                                <i class="bi bi-star-fill review-star-item active" data-val="1"></i>
                                <i class="bi bi-star-fill review-star-item active" data-val="2"></i>
                                <i class="bi bi-star-fill review-star-item active" data-val="3"></i>
                                <i class="bi bi-star-fill review-star-item active" data-val="4"></i>
                                <i class="bi bi-star-fill review-star-item active" data-val="5"></i>
                            </div>
                            <span class="review-rating-badge" id="rvwStarText" title="5/5 - Excellent">5/5 &#9733;</span>
                            <input type="hidden" name="stars" id="rvwStarsInput" value="5">
                        </div>
                    </div>

                    <!-- Review Description -->
                    <div class="col-12">
                        <div class="review-field-group review-textarea-group">
                            <i class="bi bi-chat-left-quote-fill review-input-icon"></i>
                            <textarea class="review-form-control" id="revDesc" name="desc" placeholder="Write your genuine moving experience, packing quality, staff behaviour, transit time..." required></textarea>
                        </div>
                    </div>

                    <!-- Photos -->
                    <div class="col-12">
                        <div class="review-file-card d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <div class="review-file-icon-circle">
                                    <i class="bi bi-camera-fill text-danger"></i>
                                </div>
                                <div>
                                    <span class="d-block fw-bold text-dark small mb-0">Add Relocation Photos</span>
                                    <small class="text-muted" style="font-size: 0.75rem;">Optional (JPG, PNG - Max 5MB)</small>
                                </div>
                            </div>
                            <label for="revImage" class="review-upload-btn">
                                <i class="bi bi-cloud-arrow-up-fill me-1"></i> Choose Photos
                            </label>
                            <input type="file" name="img" class="d-none" id="revImage" accept="image/*" onchange="document.getElementById('fileNameDisplay').textContent = this.files[0] ? this.files[0].name : '';">
                        </div>
                        <div id="fileNameDisplay" class="small text-success fw-semibold mt-1 ms-2"></div>
                    </div>

                    <!-- Actions -->
                    <div class="col-12">
                        <div id="result"></div>
                        <div class="d-flex align-items-center justify-content-between pt-2">
                            <button type="reset" class="review-btn-reset" id="rvwResetBtn">
                                <i class="bi bi-arrow-counterclockwise me-1"></i> Reset
                            </button>
                            <button id="submitbtn" type="submit" class="review-btn-submit">
                                <span>Submit Review</span>
                                <i class="bi bi-send-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const starPicker = document.getElementById('rvwStarPicker');
    const starsInput = document.getElementById('rvwStarsInput');
    const starText = document.getElementById('rvwStarText');
    const stars = starPicker ? starPicker.querySelectorAll('.review-star-item') : [];
    const ratingLabelsDetailed = {
        1: '1/5 - Poor',
        2: '2/5 - Fair',
        3: '3/5 - Good',
        4: '4/5 - Very Good',
        5: '5/5 - Excellent'
    };

    function updateStarsDisplay(val) {
        stars.forEach(star => {
            const sVal = parseInt(star.getAttribute('data-val'), 10);
            if (sVal <= val) {
                star.classList.add('active');
            } else {
                star.classList.remove('active');
            }
        });
        if (starText) {
            starText.textContent = val + '/5 \u2605';
            starText.setAttribute('title', ratingLabelsDetailed[val] || (val + '/5'));
        }
    }

    stars.forEach(star => {
        star.addEventListener('click', function () {
            const val = parseInt(this.getAttribute('data-val'), 10);
            if (starsInput) starsInput.value = val;
            updateStarsDisplay(val);
        });

        star.addEventListener('mouseenter', function () {
            const val = parseInt(this.getAttribute('data-val'), 10);
            updateStarsDisplay(val);
        });
    });

    if (starPicker) {
        starPicker.addEventListener('mouseleave', function () {
            const currentVal = parseInt(starsInput ? starsInput.value : 5, 10);
            updateStarsDisplay(currentVal);
        });
    }

    const resetBtn = document.getElementById('rvwResetBtn');
    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            const resultDiv = document.getElementById('result');
            if (resultDiv) resultDiv.innerHTML = '';
            const fileNameDisplay = document.getElementById('fileNameDisplay');
            if (fileNameDisplay) fileNameDisplay.textContent = '';
            if (starsInput) starsInput.value = 5;
            setTimeout(function () {
                updateStarsDisplay(5);
            }, 50);
        });
    }

    const rvwForm = document.getElementById('reviewsform');
    if (rvwForm) {
        rvwForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const submitBtn = document.getElementById('submitbtn');
            const resultDiv = document.getElementById('result');
            const formData = new FormData(rvwForm);

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Submitting...';
            }
            if (resultDiv) {
                resultDiv.innerHTML = '<div class="alert alert-info py-2 px-3 small my-2"><span class="spinner-border spinner-border-sm me-2"></span>Posting your review, please wait...</div>';
            }

            fetch('<?= site_url("reviews/review") ?>', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span>Submit Review</span> <i class="bi bi-send-fill"></i>';
                }
                if (data.err === 0) {
                    if (resultDiv) {
                        resultDiv.innerHTML = '<div class="alert alert-success py-2 px-3 small my-2"><i class="bi bi-check-circle-fill me-1"></i> ' + (data.msg || 'Success! Thank you for your review!') + '</div>';
                    }
                    rvwForm.reset();
                    const fileNameDisplay = document.getElementById('fileNameDisplay');
                    if (fileNameDisplay) fileNameDisplay.textContent = '';
                    if (starsInput) starsInput.value = 5;
                    updateStarsDisplay(5);
                    setTimeout(function () {
                        window.location.reload();
                    }, 1600);
                } else {
                    if (resultDiv) {
                        resultDiv.innerHTML = '<div class="alert alert-danger py-2 px-3 small my-2"><i class="bi bi-exclamation-triangle-fill me-1"></i> ' + (data.msg || 'Unable to submit review. Please try again.') + '</div>';
                    }
                }
            })
            .catch(err => {
                console.error(err);
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span>Submit Review</span> <i class="bi bi-send-fill"></i>';
                }
                if (resultDiv) {
                    resultDiv.innerHTML = '<div class="alert alert-danger py-2 px-3 small my-2"><i class="bi bi-exclamation-triangle-fill me-1"></i> An error occurred while submitting your review. Please try again.</div>';
                }
            });
        });
    }
});
</script>
