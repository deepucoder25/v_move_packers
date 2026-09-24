<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Office Relocation',
    'bc_desc' => 'Office Relocation Services',
    'breadcrumbs' => [
        ['name' => 'Office Relocation']
    ]
]);
?>