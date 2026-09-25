<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<main class="main">
    <!-- Breadcrumbs Section -->
    <?php $this->load->view('about/dynamic_breadcrumbs', [
        'bc_h1' => 'Our Blog & News',
        'bc_desc' => 'Expert packing checklists, home shifting tips, vehicle transport guides, and industry insights.',
        'breadcrumbs' => [
            ['name' => 'Blog']
        ]
    ]);
    ?>

    <section class="blog-section">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-4 mb-md-5">
                <span class="blog-header-badge">
                    <i class="bi bi-journal-bookmark-fill"></i> Relocation Insights
                </span>
                <h2 class="fw-bold fs-1 mb-2 text-dark">
                    Our Latest <span class="blog-title-highlight">News &amp; Blog</span>
                </h2>
                <p class="text-secondary" style="max-width: 600px; margin: 0 auto;">
                    Stay updated with proven moving guides, packing checklists, and relocation tips from seasoned logistics professionals.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <?php
                $schemaData = [];
                
                if (!empty($blogs)):
                    foreach ($blogs as $b_arr):
                        $b = (object) $b_arr;
                        $custom_slug = !empty($b->slug) ? $b->slug : rtrim(str_replace("--", "-", urlencode(str_replace(" ", "-", str_replace(",", " ", $b->title)))), "-");
                        $link = strtolower(site_url('blog/' . $custom_slug));

                        // Image resolution with safe fallback
                        $image_path = FCPATH . 'uploads/blogs/' . $b->image;
                        $default_img = base_url('assets/img/blog_default.jpg');
                        $img = (!empty($b->image) && file_exists($image_path)) ? base_url("uploads/blogs/{$b->image}") : $default_img;

                        // Safe date parsing
                        $has_valid_date = !empty($b->created_at) && $b->created_at !== '0000-00-00 00:00:00' && strtotime($b->created_at) > 100000;
                        $created_at = $has_valid_date ? $b->created_at : date('Y-m-d H:i:s');
                        $day = date('d', strtotime($created_at));
                        $month = date('M', strtotime($created_at));

                        $schemaData[] = [
                            "@context" => "https://schema.org",
                            "@type" => "BlogPosting",
                            "headline" => $b->title,
                            "image" => $img,
                            "datePublished" => $created_at,
                            "author" => [
                                "@type" => "Person",
                                "name" => "Admin"
                            ],
                            "publisher" => [
                                "@type" => "Organization",
                                "name" => isset($company3) ? $company3 : 'V Move Packers & Movers',
                                "logo" => [
                                    "@type" => "ImageObject",
                                    "url" => base_url('assets/img/logo/logo.png')
                                ]
                            ],
                            "description" => substr(strip_tags($b->description ?? ''), 0, 160) . '...'
                        ];
                        ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <article class="card h-100 blog-card">
                                <div class="blog-card-img-wrap">
                                    <a href="<?= $link ?>" class="d-block w-100 h-100" tabindex="-1" aria-hidden="true">
                                        <img src="<?= $img ?>" class="blog-card-img"
                                            alt="<?= htmlspecialchars($b->title) ?>"
                                            onerror="this.onerror=null; this.src='<?= $default_img ?>';">
                                    </a>
                                    <div class="blog-date-badge">
                                        <i class="bi bi-calendar3 me-1"></i> <?= $day ?> <?= $month ?>
                                    </div>
                                </div>
                                <div class="blog-card-body d-flex flex-column flex-grow-1">
                                    <div class="blog-meta-row">
                                        <span class="blog-meta-item">
                                            <i class="bi bi-person-circle blog-icon-primary"></i> By Admin
                                        </span>
                                        <span class="blog-meta-item">
                                            <i class="bi bi-patch-check-fill text-success"></i> Verified
                                        </span>
                                    </div>
                                    <h3 class="h5 mb-2">
                                        <a href="<?= $link ?>" class="blog-title-link"><?= htmlspecialchars($b->title) ?></a>
                                    </h3>
                                    <p class="blog-card-excerpt mb-4 flex-grow-1">
                                        <?= htmlspecialchars(substr(strip_tags($b->description ?? ''), 0, 120)) ?>...
                                    </p>
                                    <div class="pt-2 border-top">
                                        <a href="<?= $link ?>" class="blog-btn-primary">
                                            <span>Read Article</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center py-5">
                        <div class="p-5 bg-white rounded-4 shadow-sm border" style="max-width: 500px; margin: 0 auto;">
                            <i class="bi bi-journal-x text-muted fs-1 mb-3 d-block"></i>
                            <h4 class="fw-bold mb-2">No Articles Found</h4>
                            <p class="text-secondary small mb-0">No moving tips published yet. Check back soon for fresh updates!</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Styled Pagination -->
            <?php $pagination_links = $this->pagination->create_links(); ?>
            <?php if (!empty($pagination_links)): ?>
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <?= $pagination_links ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<script type="application/ld+json">
<?= json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>