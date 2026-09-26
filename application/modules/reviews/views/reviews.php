<main class="main">
<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Reviews',
    'bc_desc' => 'Read what our customers have to say',
    'breadcrumbs' => [
        ['name' => 'Reviews']
    ]
]);
?>

    <div class="reviews-service-page reviews-feature-content-section">
        <div ng-app="reviewsApp" ng-controller="reviewsctrl">
            <br />
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 pb-2 mb-3 reviews-header-wrap">
                    <h3 class="m-0 reviews-header-title">
                        <i class="bi bi-chat-left-quote me-2 text-danger"></i>Customer Experiences
                    </h3>
                    <button type="button" class="btn rounded-pill px-4 shadow-sm reviews-write-btn" data-bs-toggle="modal" data-bs-target="#rvwmdl">
                        <i class="bi bi-pencil-square me-1"></i> Write a Review
                    </button>
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
                
                <div class="reviews-single-reviewr mt-4 pb-4">
                    <div class="row">
                    <?php
                    if ($reviews->num_rows() == 0) {
                        echo "<div class='col-12'><p class='no-reviews-text text-center'>No reviews yet...</p></div>";
                    } else {
                        foreach ($reviews->result() as $r) {
                            $pdate = explode(" ", $r->posted_date)[0];
                            $size = strlen(explode("@", $r->email)[0]) - 4;
                            $lem = substr($r->email, -12);
                            $fem = substr($r->email, 0, 4);
                            $st = str_repeat("*", max(0, $size));
                            $em = $fem . $st . $lem;

                            $name_parts = explode(' ', trim($r->name));
                            $initials = strtoupper(substr($name_parts[0], 0, 1) . (isset($name_parts[1]) ? substr($name_parts[1], 0, 1) : ''));
                            if (empty($initials)) $initials = 'VM';
                    ?>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="review-box-card h-100 d-flex flex-column" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                    <meta itemprop="name" content="<?= htmlspecialchars(!empty($r->r_title) ? $r->r_title : 'Relocation Service') ?>" />
                                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                        <meta itemprop="name" content="<?= htmlspecialchars($company3) ?>" />
                                    </div>
                                    
                                    <!-- Top Row: Avatar, Reviewer, Verified Badge & Rating -->
                                    <div class="d-flex align-items-start justify-content-between gap-2 mb-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="review-box-avatar"><?= htmlspecialchars($initials) ?></div>
                                            <div>
                                                <h6 class="review-box-author-name mb-0" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                                    <span itemprop="name"><?= htmlspecialchars($r->name) ?></span>
                                                </h6>
                                                <span class="review-box-verified-badge">
                                                    <i class="bi bi-patch-check-fill"></i> Verified Shift
                                                </span>
                                            </div>
                                        </div>
                                        <div class="review-box-rating-pill">
                                            <div class="review-box-stars">
                                                <?php for ($i = 0; $i < $r->stars; $i++) { ?>
                                                    <i class="bi bi-star-fill"></i>
                                                <?php } ?>
                                            </div>
                                            <span class="review-box-score"><?= $r->stars ?>.0</span>
                                            <span class="d-none" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                                <span itemprop="ratingValue"><?= $r->stars ?></span>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <!-- Review Body -->
                                    <div class="review-box-body mb-3 flex-grow-1">
                                        <div class="review-box-quote-icon mb-1">
                                            <i class="bi bi-quote"></i>
                                        </div>
                                        <p class="review-box-text mb-0" itemprop="reviewBody">
                                            <?= nl2br(htmlspecialchars($r->r_desc)) ?>
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
                                                <span class="review-box-admin-name"><?= htmlspecialchars($company3) ?> Response</span>
                                            </div>
                                            <p class="review-box-admin-text mb-0"><?= nl2br(htmlspecialchars($r->admin_reply)) ?></p>
                                        </div>
                                    <?php } ?>
                                    
                                    <!-- Footer: Location Route & Date -->
                                    <div class="review-box-footer mt-auto pt-3 d-flex align-items-center justify-content-between text-muted">
                                        <div class="d-flex align-items-center gap-1 review-box-location">
                                            <i class="bi bi-geo-alt-fill text-danger"></i>
                                            <span><?= htmlspecialchars(!empty($r->r_title) ? $r->r_title : 'Local Shifting') ?></span>
                                        </div>
                                        <div class="d-flex align-items-center gap-1 review-box-date">
                                            <i class="bi bi-calendar3"></i>
                                            <span><?= date('M d, Y', strtotime($r->posted_date)) ?></span>
                                        </div>
                                        <meta itemprop="datePublished" content="<?= $pdate ?>">
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    </div>
                    <div class="mt-4 w-100 d-flex justify-content-center">
                        <div class="pagination">
                            <?php echo $this->pagination->create_links() ?>
                        </div>
                    </div>
                </div>
            </div>
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
    document.getElementById('fullImage').src = src;
    var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
}
</script>

<?php $this->load->view('reviews/reviewmodal'); ?>

</main>
