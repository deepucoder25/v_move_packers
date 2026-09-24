<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packing and Moving Services',
    'bc_desc' => 'Packing and Moving Services',
    'breadcrumbs' => [
        ['name' => 'Packing and Moving']
    ]
]);
?>