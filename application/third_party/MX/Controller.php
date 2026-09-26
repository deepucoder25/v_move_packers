<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 9728546183';
        $this->comp['phonehtml'] = 'href="tel:+919728546183"';
        $this->comp['supportmail'] = 'support@mycompany.com';
        $this->comp['replyToMail'] = 'support@mycompany.com';
        $this->comp['mail'] = 'info@vshiftpackersandmovers.in';
        $this->comp['mailhtml'] = "mailto:info@vshiftpackersandmovers.in";
        $this->comp['company3'] = 'V Move Packers and Movers';
        $this->comp['companydomain'] = 'mycompany.com';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";
        $this->comp['whatsapphtml'] = "https://wa.me/919728546183";

        // Default Head Office Address (Ulhasnagar)
        $this->comp['address'] = "Shop No.1, Ground Floor, Siddhivinayak Apt, Holy Family School, Kailash Colony, Ulhasnagar, Maharashtra 421005";
        $this->comp['address1'] = "Shop No.1, Ground Floor, Siddhivinayak Apt";
        $this->comp['address2'] = "Holy Family School, Kailash Colony, Ulhasnagar, Maharashtra 421005";
        $this->comp['addressRegion'] = "Ulhasnagar";
        $this->comp['postalCode'] = "421005";
        $this->comp['companystate'] = "Maharashtra";
        $this->comp['themeColor'] = "#942339";

        // City Specific Address Override (Matches Google Map listing for the city)
        $request_uri = strtolower($_SERVER['REQUEST_URI'] ?? '');
        if (strpos($request_uri, 'ghatkopar') !== false) {
            $this->comp['address'] = "Shop No. 09. RB Mehta Rd, Sindhu Wadi Ghatkopar East, Mumbai Maharashtra 400077, Mumbai, Maharashtra 400066";
            $this->comp['address1'] = "Shop No. 09. RB Mehta Rd, Sindhu Wadi Ghatkopar East, Mumbai";
            $this->comp['address2'] = "Maharashtra 400077, Mumbai, Maharashtra 400066";
            $this->comp['addressRegion'] = "Ghatkopar East, Mumbai";
            $this->comp['postalCode'] = "400066";
        } elseif (strpos($request_uri, 'badlapur') !== false) {
            $this->comp['address'] = "Shop no. 13, Gauri Sankalp, near GAURI E, Shirgaon, AMBARNATH, Badlapur, Maharashtra 421503";
            $this->comp['address1'] = "Shop no. 13, Gauri Sankalp, near GAURI E, Shirgaon";
            $this->comp['address2'] = "AMBARNATH, Badlapur, Maharashtra 421503";
            $this->comp['addressRegion'] = "Badlapur";
            $this->comp['postalCode'] = "421503";
        } elseif (strpos($request_uri, 'kharghar') !== false) {
            $this->comp['address'] = "Shop No.22, Bhagwati Greens Central Park, Central Park Road, Owe Village, Sector 35E, Kharghar, Navi Mumbai, Panvel, Maharashtra 410210";
            $this->comp['address1'] = "Shop No.22, Bhagwati Greens Central Park";
            $this->comp['address2'] = "Central Park Road, Owe Village, Sector 35E, Kharghar, Navi Mumbai, Panvel 410210";
            $this->comp['addressRegion'] = "Kharghar, Navi Mumbai";
            $this->comp['postalCode'] = "410210";
        }

        $this->comp['experience'] = "20+";
        $this->comp['startYear'] = "2004";

        $this->comp['happyClients'] = "5000+";
        $this->comp['successfulMoves'] = "10000+";
        $this->comp['yearsExperience'] = "20+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['statesCovered'] = "20+";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "39850";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
