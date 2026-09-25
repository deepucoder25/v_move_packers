<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<main class="main">
    <!-- Breadcrumbs Section -->
    <?php 
    $post_title = @$query[0]->title ?: 'Blog Details';
    $this->load->view('about/dynamic_breadcrumbs', [
        'bc_h1' => $post_title,
        'bc_desc' => 'Expert relocation advice published by ' . (@$company3 ?: 'V-Move Packers & Movers') . '.',
        'breadcrumbs' => [
            ['name' => 'Blog', 'url' => site_url('blog')],
            ['name' => $post_title]
        ]
    ]); 
    ?>

    <!-- Blog Single Post Details Section -->
    <section class="blog-details-section">
        <div class="container my-2">
            <div class="row g-4 g-lg-5">
                <!-- Main Article Content (Left Column) -->
                <div class="col-12 col-lg-8">
                    <article class="blog-details-card">
                        <!-- Featured Image with Fail-safe Fallback -->
                        <?php 
                        $image_path = FCPATH . 'uploads/blogs/' . @$query[0]->image;
                        $default_img = base_url('assets/img/blog_default.jpg');
                        $img = (!empty(@$query[0]->image) && file_exists($image_path)) ? base_url('uploads/blogs/' . @$query[0]->image) : $default_img;
                        
                        // Safe date handling
                        $has_valid_date = !empty(@$query[0]->created_at) && @$query[0]->created_at !== '0000-00-00 00:00:00' && strtotime(@$query[0]->created_at) > 100000;
                        $created_at = $has_valid_date ? @$query[0]->created_at : date('Y-m-d H:i:s');
                        $post_date = date('M d, Y', strtotime($created_at));
                        ?>
                        <div class="blog-details-img-wrap">
                            <img src="<?= $img ?>" alt="<?= htmlspecialchars($post_title) ?>" class="blog-details-img" onerror="this.onerror=null; this.src='<?= $default_img ?>';">
                        </div>
                        
                        <!-- Meta Information Bar -->
                        <div class="blog-details-meta">
                            <div class="d-flex flex-wrap align-items-center gap-3 text-secondary small">
                                <span class="d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-calendar3 blog-icon-primary"></i> <?= $post_date ?>
                                </span>
                                <span class="d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-person-circle blog-icon-primary"></i> By Admin
                                </span>
                                <span class="d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-patch-check-fill text-success"></i> Verified Guide
                                </span>
                            </div>
                            <div>
                                <button type="button" class="blog-btn-share" data-bs-toggle="modal" data-bs-target="#shareModal">
                                    <i class="bi bi-share-fill"></i> Share Post
                                </button>
                            </div>
                        </div>

                        <!-- Article Title -->
                        <h1 class="blog-details-title"><?= htmlspecialchars($post_title) ?></h1>

                        <!-- Article Body -->
                        <div class="blog-content-wrapper">
                            <?php 
                            $article_body = !empty(@$query[0]->content) ? @$query[0]->content : @$query[0]->description;
                            echo nl2br($article_body);
                            ?>
                        </div>

                        <!-- Post Footer Tag / Action -->
                        <div class="mt-5 pt-4 border-top d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <a href="<?= site_url('blog') ?>" class="btn btn-outline-secondary rounded-pill px-4 py-2 small fw-bold d-inline-flex align-items-center gap-2">
                                <i class="bi bi-arrow-left"></i> Back to All Articles
                            </a>
                            <button type="button" class="blog-btn-share" data-bs-toggle="modal" data-bs-target="#shareModal">
                                <i class="bi bi-share-fill"></i> Share with Friends
                            </button>
                        </div>
                    </article>
                </div>

                <!-- Right Sidebar Column -->
                <div class="col-12 col-lg-4">
                    <aside class="blog-sidebar blog-sidebar-sticky">
                        
                        <!-- Recent Posts Widget -->
                        <div class="blog-widget">
                            <h5 class="blog-widget-title">Recent Posts</h5>
                            <div class="recent-posts-list">
                                <?php if (!empty($recent_posts)): ?>
                                    <?php foreach ($recent_posts as $post_arr): $post = (object)$post_arr; ?>
                                        <?php
                                        $image_file = $post->image ?? '';
                                        $full_path = FCPATH . 'uploads/blogs/' . $image_file;
                                        $thumbPath = (!empty($image_file) && file_exists($full_path)) ? base_url('uploads/blogs/' . $image_file) : $default_img;
                                        $custom_slug = !empty($post->slug) ? $post->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $post->title)))), "-");
                                        
                                        $post_valid_date = !empty($post->created_at) && $post->created_at !== '0000-00-00 00:00:00' && strtotime($post->created_at) > 100000;
                                        $r_date = $post_valid_date ? date('M d, Y', strtotime($post->created_at)) : date('M d, Y');
                                        ?>
                                        <a href="<?= site_url('blog/'.$custom_slug) ?>" class="blog-recent-item">
                                            <div class="flex-shrink-0">
                                                <img src="<?= $thumbPath ?>" alt="<?= htmlspecialchars($post->title) ?>" class="blog-recent-img" onerror="this.onerror=null; this.src='<?= $default_img ?>';">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="blog-recent-title"><?= htmlspecialchars($post->title) ?></h6>
                                                <span class="blog-recent-date">
                                                    <i class="bi bi-clock me-1"></i> <?= $r_date ?>
                                                </span>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-secondary small mb-0">No recent articles available.</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Need Moving Help? CTA Widget -->
                        <div class="blog-cta-widget">
                            <div class="blog-cta-icon-box">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h4 class="blog-cta-title">Need Moving Help?</h4>
                            <p class="blog-cta-desc">
                                Get a quick and free estimate for your relocation directly from our verified moving experts.
                            </p>
                            <button type="button" class="blog-btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-file-earmark-text-fill"></i> Get a Free Quote
                            </button>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden">
            <div class="modal-header border-bottom-0 pb-0 pt-4 px-4">
                <h5 class="modal-title fw-bold text-dark" id="shareModalLabel">
                    <i class="bi bi-share text-danger me-2"></i> Share This Post
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-secondary small mb-3">Share this helpful relocation article with friends and colleagues:</p>
                <div class="d-grid gap-2 social-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=YOUR_URL" target="_blank" rel="noopener noreferrer" class="btn text-white py-2 rounded-3 fw-bold blog-bg-fb d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-facebook fs-5"></i> Share on Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=YOUR_URL" target="_blank" rel="noopener noreferrer" class="btn text-white py-2 rounded-3 fw-bold blog-bg-tw d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-twitter-x fs-5"></i> Share on X (Twitter)
                    </a>
                    <a href="https://api.whatsapp.com/send?text=YOUR_URL" target="_blank" rel="noopener noreferrer" class="btn text-white py-2 rounded-3 fw-bold blog-bg-wa d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-whatsapp fs-5"></i> Share on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    var currentUrl = window.location.href;
    document.querySelectorAll('.social-buttons a').forEach(function(btn) {
        var shareUrl = btn.getAttribute('href');
        btn.setAttribute('href', shareUrl.replace('YOUR_URL', encodeURIComponent(currentUrl)));
    });
});
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?= addslashes(htmlspecialchars($post_title)) ?>",
    "image": "<?= $img ?>",
    "datePublished": "<?= $created_at ?>",
    "author": {
        "@type": "Person",
        "name": "Admin"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?= isset($company3) ? $company3 : 'V Move Packers & Movers' ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= base_url('assets/img/logo/logo.png') ?>"
        }
    },
    "description": "<?= addslashes(substr(strip_tags(@$query[0]->description ?? ''), 0, 160)) ?>"
}
</script>