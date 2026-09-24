<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose Us',
    'bc_desc' => "Why Choose $company3",
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>