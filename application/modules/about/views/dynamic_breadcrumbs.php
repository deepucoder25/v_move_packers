<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Build Schema for Breadcrumbs
$schema_items = [];
$schema_items[] = [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Home',
    'item' => site_url()
];

$position = 2;
if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    foreach ($breadcrumbs as $crumb) {
        $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
        $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name
        ];
        if ($url) {
            $item['item'] = $url;
        }
        $schema_items[] = $item;
        $position++;
    }
} else if (isset($bc_current) && !empty($bc_current)) {
    $schema_items[] = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $bc_current
    ];
}

$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];

// Determine title if not explicitly passed as bc_h1
$heading = '';
if (isset($bc_h1) && !empty($bc_h1)) {
    $heading = $bc_h1;
} elseif (isset($bc_title_white) || isset($bc_title_orange)) {
    $heading = trim((@$bc_title_white ? $bc_title_white . ' ' : '') . (@$bc_title_orange ? $bc_title_orange : ''));
} elseif (isset($bc_current) && !empty($bc_current)) {
    $heading = $bc_current;
} elseif (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    $last_crumb = end($breadcrumbs);
    $heading = isset($last_crumb['name']) ? $last_crumb['name'] : (isset($last_crumb['title']) ? $last_crumb['title'] : '');
}
?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Breadcrumbs Section -->
<section class="dynamic-bc-section">
    <div class="container">
        <div class="dyn-bc-wrapper">
            <div class="dyn-bc-left">
                <?php if (!empty($heading)): ?>
                    <h1 class="dyn-bc-title"><?= $heading ?></h1>
                <?php endif; ?>
                <?php if (isset($bc_desc) && !empty($bc_desc)): ?>
                    <p class="dyn-bc-desc"><?= $bc_desc ?></p>
                <?php endif; ?>
            </div>
            <nav class="dyn-bc-nav" aria-label="breadcrumb">
                <a href="<?= site_url() ?>" class="dyn-bc-link">
                    <i class="bi bi-house-door me-1"></i>Home
                </a>
                <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)): ?>
                    <?php foreach ($breadcrumbs as $crumb): ?>
                        <span class="dyn-bc-sep"><i class="bi bi-chevron-right"></i></span>
                        <?php if (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)'): ?>
                            <a href="<?= $crumb['url'] ?>" class="dyn-bc-link"><?= isset($crumb['name']) ? $crumb['name'] : $crumb['title'] ?></a>
                        <?php else: ?>
                            <span class="dyn-bc-current"><?= isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '') ?></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php elseif (isset($bc_current) && !empty($bc_current)): ?>
                    <span class="dyn-bc-sep"><i class="bi bi-chevron-right"></i></span>
                    <span class="dyn-bc-current"><?= $bc_current ?></span>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</section>