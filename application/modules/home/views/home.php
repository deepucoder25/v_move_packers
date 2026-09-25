<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
// 1. About Us Section
$this->load->view('about_widget');

// 2. Services Section
$this->load->view('service_widget');

// 3. Process / How It Works Section
$this->load->view('process_widget');

// 4. Reviews / Testimonials Section
$this->load->view('review_widget');

// 5. Frequently Asked Questions Section
$this->load->view('faqs_widget');

// 6. Cities / Service Locations Section
$this->load->view('city_list');
?>
