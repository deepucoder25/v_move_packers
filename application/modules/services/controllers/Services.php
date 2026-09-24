<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeShifting()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Best Home Shifting Services | Safe Household Moving - " . $company_name;
        $data['description'] = "Hire top-quality home shifting services from " . $company_name . ". We provide multi-layer packing, secure loading, and door-to-door relocation at budget rates.";
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Office Relocation & Corporate Shifting Services | " . $company_name;
        $data['description'] = "Seamless office shifting services by " . $company_name . ". Minimal business downtime, safe IT equipment moving, and organized corporate workspace relocation.";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Bike Transportation & Two-Wheeler Shifting | " . $company_name;
        $data['description'] = "Safe and prompt bike transportation services by " . $company_name . ". Specialized enclosed carriers, scratch-free packing, and doorstep two-wheeler delivery.";
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Car Carrier & Automobile Transportation Services | " . $company_name;
        $data['description'] = "Reliable car transportation services across India by " . $company_name . ". Covered car trailers, GPS tracking, and scratch-free, timely doorstep vehicle delivery.";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function packingMoving()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Professional Packing and Moving Services | " . $company_name;
        $data['description'] = "Premium packing and moving services by " . $company_name . ". High-grade packing supplies, trained loaders, and end-to-end relocation solutions nationwide.";
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Safe Loading and Unloading Services | " . $company_name;
        $data['description'] = "Expert loading and unloading services by " . $company_name . ". Trained crew, heavy lifting equipment, and damage-free handling of all your valuable goods.";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }
}
