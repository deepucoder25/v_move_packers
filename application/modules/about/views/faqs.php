<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions',
    'bc_desc' => "Frequently Asked Questions",
    'breadcrumbs' => [
        ['name' => 'Frequently Asked Questions']
    ]
]);
?>