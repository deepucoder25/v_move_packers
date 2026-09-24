<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Home Relocation',
    'bc_desc' => 'Home Relocation Services',
    'breadcrumbs' => [
        ['name' => 'Home Relocation']
    ]
]);
?>
