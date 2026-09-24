<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    function index()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "All India Packers and Movers Services | " . $company_name;
        $data['description'] = "Explore verified packers and movers across India with " . $company_name . ". We provide safe household shifting, vehicle transport, and corporate relocation nationwide.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "State-Wise Packers and Movers Network in India | " . $company_name;
        $data['description'] = "Find reliable packers and movers by state across India with " . $company_name . ". Door-to-door household shifting and vehicle carrier services in every state.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $company_name = $this->comp['company3'];
        $data = array(
            "company_name" => $company_name,
            "state" => $state,
            "title" => "Best Packers and Movers in $state | " . $company_name,
            "description" => "Hire top-rated packers and movers in $state with " . $company_name . ". Affordable home shifting, office relocation, and bike or car transport across $state.",
            "keywords" => "$state packers and movers, movers in $state, home shifting $state, " . $company_name . " in $state",
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    { 
        $seo = array(
            // "Siliguri" => array(
            //     "title" => "",
            //     "desc" => ""
            // ),
        );
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        $company_name = $this->comp['company3'];
        return array(
            'title' => "Best Packers and Movers in $city, $state | " . $company_name,
            "desc" => "Hire top-rated packers and movers in $city, $state. " . $company_name . " offers safe household shifting, vehicle transport, and verified movers at affordable rates."
        );
    }
    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        $statelink=strtolower($state);
        $company_name = $this->comp['company3'];
        $data = array(
            "company_name" => $company_name,
            "city" => $city,
            "state" => $state,
            //'img' => base_url('assets') . "/img/state/google/$statelink.png",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Movers Packers $city, Movers near me $city, Packers and movers in $city, Moving companies near me $city, Movers $city, Packers and movers near me $city",
            "Removal companies in $city, Moving services in $city, Cheap movers in $city, Local movers in $city, Local moving companies in $city",
            "$city best moving companies, House movers $city, Packers movers $city, Moving services near $city, House removals $city, Cheap moving companies in $city",
            "Professional movers in $city, House movers near $city, Cheap movers $city, Best packers and movers in $city, Affordable movers $city, International movers from $city, International moving companies in $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }
   
}
