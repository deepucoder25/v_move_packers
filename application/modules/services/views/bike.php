<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Bike Transportation',
    'bc_desc' => "Bike Transportation ",
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
    ]
]);
?>