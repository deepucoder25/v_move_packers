<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "About Us - Trusted Packers and Movers | " . $this->comp['company3'];
        $data['description'] = "Learn about " . $this->comp['company3'] . ", India's trusted relocation experts. Discover our history, expert moving team, modern fleet, and commitment to safe shifting.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us - Reliable Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Discover why thousands trust " . $this->comp['company3'] . " for hassle-free home shifting, vehicle transportation, transparent pricing, and 24/7 customer support.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Frequently Asked Questions (FAQs) | " . $this->comp['company3'];
        $data['description'] = "Find answers to common questions about moving charges, transit insurance, packing quality, track shipment, and household shifting timeline at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $data['title'] = "Customer Reviews & Success Stories | " . $this->comp['company3'];
        $data['description'] = "Read verified customer reviews and experiences with " . $this->comp['company3'] . ". See why our home moving and vehicle transport services are top-rated.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "Read the Privacy Policy of " . $this->comp['company3'] . ". We strictly protect your personal information and inquiry data during relocation bookings.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | " . $this->comp['company3'];
        $data['description'] = "Read the service terms and conditions of " . $this->comp['company3'] . " governing household shifting, vehicle transport, billing, and transit insurance.";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}

