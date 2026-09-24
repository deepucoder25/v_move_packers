<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class City_services extends MX_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('text');
    }

    private function format_city($city_slug) {
        $city = str_replace("_", " ", $city_slug);
        return urldecode(ucwords(str_replace("-", " ", $city)));
    }

    function home_shifting($city_slug)
    {
        $city = $this->format_city($city_slug);
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Best Home Shifting Services in $city | " . $company_name;
        $data['description'] = "Looking for reliable home shifting in $city? " . $company_name . " provides secure packing, trained movers, and affordable door-to-door household relocation.";
        $data['module'] = "city_services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office_shifting($city_slug)
    {
        $city = $this->format_city($city_slug);
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Corporate & Office Relocation Services in $city | " . $company_name;
        $data['description'] = "Professional office shifting services in $city by " . $company_name . ". Minimal downtime, safe transport of IT systems & office furniture at best rates.";
        $data['module'] = "city_services";
        $data['view_file'] = "office_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function car_transport($city_slug)
    {
        $city = $this->format_city($city_slug);
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Safe Car Carrier & Transportation in $city | " . $company_name;
        $data['description'] = "Secure car carrier and transportation services in $city by " . $company_name . ". Enclosed carriers, GPS tracking, and scratch-free vehicle delivery across India.";
        $data['module'] = "city_services";
        $data['view_file'] = "car_transport";
        echo Modules::run('template/layout2', $data);
    }

    function bike_transport($city_slug)
    {
        $city = $this->format_city($city_slug);
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Reliable Two-Wheeler & Bike Shifting in $city | " . $company_name;
        $data['description'] = "Hire trusted two-wheeler and bike shifting services in $city from " . $company_name . ". Multi-layer bubble wrap, insured transit, and timely doorstep delivery.";
        $data['module'] = "city_services";
        $data['view_file'] = "bike_transport";
        echo Modules::run('template/layout2', $data);
    }
}
