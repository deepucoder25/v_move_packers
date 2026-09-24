<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    function __construct(){
        parent::__construct();
        @$this->load->database();
    }

    private function slugify($text) {
        $text = strtolower($text);
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }

    private function loadBlogs() {
        try {
            if (isset($this->db) && $this->db->conn_id) {
                if ($this->db->table_exists('blog')) {
                    $this->db->order_by('b_id', 'DESC');
                    $query = $this->db->get('blog');
                    if ($query && $query->num_rows() > 0) {
                        return $query->result_array();
                    }
                }
            }
        } catch (Throwable $t) {
            // Database missing or connection error
        }
        
        $path = FCPATH . 'admin_data/blogs.json';
        if (file_exists($path)) {
            return json_decode(file_get_contents($path), true) ?: [];
        }
        return [];
    }

    function index() {
        redirect('blog/view');
    }

    function view(){
        $this->load->library('pagination');
        $this->load->helper('text'); 

        $all_blogs = $this->loadBlogs();
        $total_rows = count($all_blogs);
        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        $data['blogs'] = array_slice($all_blogs, $offset, $per_page);
        $data['total'] = $total_rows;
        $data['recent_posts'] = array_slice($all_blogs, 0, 5);

        $data['title'] = "Packing & Moving Tips, Guides & News | " . $this->comp['company3'];
        $data['description'] = "Read expert relocation advice, house shifting tips, vehicle moving guides, and industry updates on the official blog of " . $this->comp['company3'] . ".";
        $data['module'] = "blog";
        $data['view_file'] = "blog"; 

        echo Modules::run('template/layout2', $data);
    }

    function read($slug = '') {
        $this->load->helper('text');

        $all_blogs = $this->loadBlogs();
        $selected_blog = null;
        
        $search_slug = str_replace('_', '-', $slug);

        foreach ($all_blogs as $b) {
            $custom_slug = $b['slug'] ?? '';
            $auto_slug = $this->slugify($b['title'] ?? '');
            $b_id = $b['b_id'] ?? ($b['id'] ?? '');

            if (
                (!empty($custom_slug) && strtolower($custom_slug) == strtolower($search_slug)) || 
                (strtolower($auto_slug) == strtolower($search_slug)) ||
                ($b_id == $search_slug)
            ) {
                $selected_blog = (object) $b;
                break;
            }
        }

        if ($selected_blog) {
            $data['query'] = [$selected_blog];
            $data['recent_posts'] = array_slice($all_blogs, 0, 5);
            
            $data['title'] = ucfirst($selected_blog->title) . " | " . $this->comp['company3'];
            $data['description'] = word_limiter(strip_tags($selected_blog->description ?? ''), 150);
            
            $image_file = $selected_blog->image ?? '';
            if ($image_file && file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) {
                $data['img'] = base_url('assets/uploads/blog/' . $image_file);
            } elseif ($image_file && file_exists(FCPATH . 'assets/uploads/blog/thumb/' . $image_file)) {
                $data['img'] = base_url('assets/uploads/blog/thumb/' . $image_file);
            } elseif ($image_file && file_exists(FCPATH . 'uploads/blogs/' . $image_file)) {
                $data['img'] = base_url('uploads/blogs/' . $image_file);
            } else {
                $data['img'] = base_url('assets/images/about/packers_movers.jpg');
            }
            
            $data['module'] = "blog";
            $data['view_file'] = "view"; 

            echo Modules::run('template/layout2', $data);
        } else {
            show_404();
        }
    }
}
