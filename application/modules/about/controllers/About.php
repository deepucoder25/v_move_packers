<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "About Us - Trusted Packers and Movers | " . $company_name;
        $data['description'] = "Learn about " . $company_name . ", India's trusted relocation experts. Discover our history, expert moving crew, modern fleet, and commitment to safe shifting.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Why Choose Us - Reliable Relocation Services | " . $company_name;
        $data['description'] = "Discover why thousands trust " . $company_name . " for hassle-free home shifting, vehicle transportation, transparent pricing, and 24/7 customer support.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Frequently Asked Questions (FAQs) - Relocation Guide | " . $company_name;
        $data['description'] = "Find answers to common moving FAQs regarding household shifting charges, transit insurance, packing quality, and vehicle transport at " . $company_name . ".";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }


    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Privacy Policy - Customer Data Protection | " . $company_name;
        $data['description'] = "Read the Privacy Policy of " . $company_name . ". We strictly protect your personal information, moving estimates, and booking inquiry data.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Terms & Conditions - Service Agreement | " . $company_name;
        $data['description'] = "Read the service terms and conditions of " . $company_name . " governing household shifting, vehicle transport, billing policies, and transit insurance.";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}

