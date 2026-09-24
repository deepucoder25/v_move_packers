<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Car Transportation',
    'bc_desc' => 'Car Transportation Services',
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
    ]
]);
?>
