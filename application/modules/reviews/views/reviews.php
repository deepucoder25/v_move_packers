<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<main class="main">
<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Reviews & Testimonials',
    'bc_desc' => 'Read what our verified customers have to say about our moving services',
    'breadcrumbs' => [
        ['name' => 'Reviews']
    ]
]);
?>

<?php
$review_list = [];
if (!empty($reviews)) {
    if (is_object($reviews) && method_exists($reviews, 'result')) {
        $review_list = $reviews->result();
    } elseif (is_array($reviews)) {
        foreach ($reviews as $rev) {
            $review_list[] = is_object($rev) ? $rev : (object) $rev;
        }
    }
}
$company_name = !empty($company3) ? $company3 : ($this->comp['company3'] ?? 'V Move Packers and Movers');
?>

    <section class="reviews-service-page reviews-feature-content-section py-4">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 pb-2 mb-3 reviews-header-wrap">
                <div>
                    <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill fw-semibold mb-2 d-inline-flex align-items-center gap-1">
                        <i class="bi bi-patch-check-fill text-success"></i> 100% Verified Customer Reviews
                    </span>
                    <h2 class="m-0 reviews-header-title fw-bold text-dark">
                        <i class="bi bi-chat-left-quote me-2 text-danger"></i>Customer Experiences
                    </h2>
                </div>
                <div class="d-flex align-items-center gap-2 flex-wrap">
                    <button type="button" class="btn btn-danger rounded-pill px-4 shadow-sm reviews-write-btn" data-bs-toggle="modal" data-bs-target="#rvwmdl">
                        <i class="bi bi-pencil-square me-1"></i> Write a Review
                    </button>
                </div>
            </div>
            
            <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i><?= $this->session->flashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
            
            <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i><?= $this->session->flashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
            
            <div class="reviews-single-reviewr mt-3 pb-4">
                <div class="row">
                <?php
                if (empty($review_list)) {
                ?>
                    <div class="col-12 text-center py-5">
                        <div class="p-5 bg-white rounded-4 shadow-sm border" style="max-width: 500px; margin: 0 auto;">
                            <i class="bi bi-chat-square-quote text-muted fs-1 mb-3 d-block"></i>
                            <h4 class="fw-bold mb-2">No Reviews Yet</h4>
                            <p class="text-secondary small mb-3">No customer reviews published yet. Be the first to share your relocation experience!</p>
                        </div>
                    </div>
                <?php
                } else {
                    foreach ($review_list as $r) {
                        $posted_date = !empty($r->posted_date) ? $r->posted_date : date('Y-m-d H:i:s');
                        $pdate = explode(" ", $posted_date)[0];
                        
                        $email = !empty($r->email) ? $r->email : 'client@gmail.com';
                        $email_parts = explode("@", $email);
                        $u_part = $email_parts[0] ?? 'user';
                        $d_part = $email_parts[1] ?? 'mail.com';
                        $fem = substr($u_part, 0, 3);
                        $lem = '@' . $d_part;
                        $st = str_repeat("*", max(3, strlen($u_part) - 3));
                        $em = $fem . $st . $lem;

                        $name = !empty($r->name) ? trim($r->name) : 'Customer';
                        $name_parts = explode(' ', $name);
                        $initials = strtoupper(substr($name_parts[0], 0, 1) . (isset($name_parts[1]) ? substr($name_parts[1], 0, 1) : ''));
                        if (empty($initials)) $initials = 'VM';
                        
                        $stars_count = isset($r->stars) ? max(1, min(5, (int)$r->stars)) : 5;
                        $r_title = !empty($r->r_title) ? $r->r_title : 'Verified Shifting';
                ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="review-box-card h-100 d-flex flex-column" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                <meta itemprop="name" content="<?= htmlspecialchars($r_title) ?>" />
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                    <meta itemprop="name" content="<?= htmlspecialchars($company_name) ?>" />
                                </div>
                                
                                <!-- Top Row: Avatar, Reviewer, Verified Badge & Rating -->
                                <div class="d-flex align-items-start justify-content-between gap-2 mb-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="review-box-avatar"><?= htmlspecialchars($initials) ?></div>
                                        <div>
                                            <h6 class="review-box-author-name mb-0" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                                <span itemprop="name"><?= htmlspecialchars($name) ?></span>
                                            </h6>
                                            <span class="review-box-verified-badge">
                                                <i class="bi bi-patch-check-fill"></i> Verified Shift
                                            </span>
                                        </div>
                                    </div>
                                    <div class="review-box-rating-pill">
                                        <div class="review-box-stars">
                                            <?php for ($i = 0; $i < $stars_count; $i++) { ?>
                                                <i class="bi bi-star-fill"></i>
                                            <?php } ?>
                                        </div>
                                        <span class="review-box-score"><?= $stars_count ?>.0</span>
                                        <span class="d-none" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                            <span itemprop="ratingValue"><?= $stars_count ?></span>
                                        </span>
                                    </div>
                                </div>
                                
                                <!-- Review Body -->
                                <div class="review-box-body mb-3 flex-grow-1">
                                    <div class="review-box-quote-icon mb-1">
                                        <i class="bi bi-quote"></i>
                                    </div>
                                    <p class="review-box-text mb-0" itemprop="reviewBody">
                                        <?= nl2br(htmlspecialchars($r->r_desc ?? '')) ?>
                                    </p>
                                </div>
                                
                                <!-- Photos (if uploaded) -->
                                <?php if (!empty($r->r_img)) { 
                                    $images = explode(',', $r->r_img);
                                ?>
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <?php foreach($images as $img) { 
                                            if(trim($img) !== '') {
                                        ?>
                                            <img src="<?= base_url(trim($img)) ?>" alt="Relocation Photo" class="review-box-thumbnail" onclick="openImageModal(this.src)">
                                        <?php } } ?>
                                    </div>
                                <?php } ?>
                                
                                <!-- Admin Reply (if present) -->
                                <?php if (!empty($r->admin_reply)) { ?>
                                    <div class="review-box-admin-reply mb-3">
                                        <div class="d-flex align-items-center gap-1 mb-1">
                                            <i class="bi bi-shield-fill-check text-primary"></i>
                                            <span class="review-box-admin-name"><?= htmlspecialchars($company_name) ?> Response</span>
                                        </div>
                                        <p class="review-box-admin-text mb-0"><?= nl2br(htmlspecialchars($r->admin_reply)) ?></p>
                                    </div>
                                <?php } ?>
                                
                                <!-- Footer: Location Route & Date -->
                                <div class="review-box-footer mt-auto pt-3 d-flex align-items-center justify-content-between text-muted">
                                    <div class="d-flex align-items-center gap-1 review-box-location">
                                        <i class="bi bi-geo-alt-fill text-danger"></i>
                                        <span><?= htmlspecialchars($r_title) ?></span>
                                    </div>
                                    <div class="d-flex align-items-center gap-1 review-box-date">
                                        <i class="bi bi-calendar3"></i>
                                        <span><?= date('M d, Y', strtotime($posted_date)) ?></span>
                                    </div>
                                    <meta itemprop="datePublished" content="<?= $pdate ?>">
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
                </div>

                <!-- Styled Pagination -->
                <?php if (!empty($pagination)): ?>
                <div class="mt-4 w-100 d-flex justify-content-center">
                    <?= $pagination ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<!-- Full Screen Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0 pb-0 justify-content-end">
        <button type="button" class="btn-close bg-white rounded-circle p-2" data-bs-dismiss="modal" aria-label="Close" style="opacity: 1;"></button>
      </div>
      <div class="modal-body text-center p-0">
        <img id="fullImage" src="" class="img-fluid rounded shadow-lg" style="max-height: 85vh; object-fit: contain; max-width: 100%;">
      </div>
    </div>
  </div>
</div>

<script>
function openImageModal(src) {
    var fullImg = document.getElementById('fullImage');
    if (fullImg) fullImg.src = src;
    var modalEl = document.getElementById('imageModal');
    if (modalEl && typeof bootstrap !== 'undefined') {
        var myModal = new bootstrap.Modal(modalEl);
        myModal.show();
    }
}
</script>

<?php $this->load->view('reviews/reviewmodal'); ?>

</main>
