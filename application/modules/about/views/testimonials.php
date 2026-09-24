<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Testimonials',
    'bc_desc' => "Testimonials $company3",
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]);
?>