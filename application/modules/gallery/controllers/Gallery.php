<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        @$this->load->database();
    }

    function photo_gallery()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Photo Gallery - Relocation & Transport Operations | " . $company_name;
        $data['description'] = "Browse photos of our household packing process, containerized trucks, warehouse storage, and safe vehicle carrier loading at " . $company_name . ".";
        
        $photos = [];
        try {
            if (isset($this->db) && $this->db->conn_id && $this->db->table_exists('gallery')) {
                $this->db->where('status', 1);
                $this->db->order_by('auto_id', 'DESC');
                $query = $this->db->get('gallery');
                if ($query) {
                    $photos = $query->result();
                }
            }
        } catch (Throwable $e) {
            $photos = [];
        }
        $data['photos'] = $photos;
        
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Video Gallery - Live Shifting & Transport Footage | " . $company_name;
        $data['description'] = "Watch live moving videos from " . $company_name . " showing our expert packing techniques, car carrier loading, and safe relocation operations in action.";
        
        $videos = [];
        try {
            if (isset($this->db) && $this->db->conn_id && $this->db->table_exists('video_gallery')) {
                $this->db->where('status', 1);
                $this->db->order_by('auto_id', 'DESC');
                $query = $this->db->get('video_gallery');
                if ($query) {
                    $videos = $query->result();
                }
            }
        } catch (Throwable $e) {
            $videos = [];
        }
        $data['videos'] = $videos;
        
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
}