<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => "Privacy Policy",
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]);
?>