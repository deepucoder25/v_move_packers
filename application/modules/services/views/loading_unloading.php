<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Loading and Unloading Services',
    'bc_desc' => 'Loading and Unloading Services',
    'breadcrumbs' => [
        ['name' => 'Loading and Unloading']
    ]
]);
?>