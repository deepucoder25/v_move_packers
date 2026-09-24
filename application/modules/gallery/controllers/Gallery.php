<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        @$this->load->database();
    }

    function photo_gallery()
    {
        $data['title'] = "Photo Gallery - Relocation & Transport | " . $this->comp['company3'];
        $data['description'] = "Browse photos of our household packing process, containerized trucks, warehouse storage, and safe vehicle carrier loading at " . $this->comp['company3'] . ".";
        
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
        $data['title'] = "Video Gallery - Live Moving Operations | " . $this->comp['company3'];
        $data['description'] = "Watch videos of our packing techniques, car loading, heavy item shifting, and professional relocation operations at " . $this->comp['company3'] . ".";
        
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