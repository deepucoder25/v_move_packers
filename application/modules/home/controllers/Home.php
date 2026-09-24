<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "404 Page Not Found | " . $company_name;
        $data['description'] = "The page you are looking for does not exist on " . $company_name . ". Explore our trusted home shifting, office relocation, and vehicle transport services.";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Best Packers and Movers in India | " . $company_name;
        $data['description'] = "Looking for reliable packers and movers? " . $company_name . " provides safe household shifting, office relocation, and car or bike transport across India at affordable rates.";

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()

    {

        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
