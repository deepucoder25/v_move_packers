<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        @$this->load->database();
    }

    private function createReviewsTable()
    {
        try {
            $CI =& get_instance();
            if (isset($CI->db) && is_object($CI->db) && !empty($CI->db->conn_id)) {
                $driver = strtolower($CI->db->dbdriver ?? '');
                if (strpos($driver, 'sqlite') !== false) {
                    $sql = "CREATE TABLE IF NOT EXISTS reviews (
                        r_id INTEGER PRIMARY KEY AUTOINCREMENT,
                        b_id INTEGER DEFAULT 0,
                        name VARCHAR(100),
                        email VARCHAR(100),
                        r_title VARCHAR(100),
                        r_desc TEXT,
                        r_img VARCHAR(250),
                        stars INTEGER DEFAULT 5,
                        views INTEGER DEFAULT 0,
                        status INTEGER DEFAULT 1,
                        posted_date DATETIME,
                        timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        r_type VARCHAR(100) DEFAULT '',
                        admin_reply TEXT,
                        city TEXT
                    )";
                    $CI->db->query($sql);
                } else {
                    $sql = "CREATE TABLE IF NOT EXISTS `reviews` (
                        `r_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                        `b_id` INT DEFAULT 0,
                        `name` VARCHAR(100) DEFAULT '',
                        `email` VARCHAR(100) DEFAULT '',
                        `r_title` VARCHAR(100) DEFAULT '',
                        `r_desc` TEXT,
                        `r_img` VARCHAR(250) DEFAULT '',
                        `stars` INT DEFAULT 5,
                        `views` INT DEFAULT 0,
                        `status` INT DEFAULT 1,
                        `posted_date` DATETIME,
                        `timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        `r_type` VARCHAR(100) DEFAULT '',
                        `admin_reply` TEXT,
                        `city` TEXT
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
                    $CI->db->query($sql);
                }
            }
        } catch (Throwable $t) {
            // Table creation skipped
        }
    }

    private function loadReviews()
    {
        try {
            $CI =& get_instance();
            if (isset($CI->db) && is_object($CI->db) && !empty($CI->db->conn_id)) {
                if ($CI->db->table_exists('reviews')) {
                    $CI->db->where('status', 1);
                    $CI->db->order_by('r_id', 'DESC');
                    $query = $CI->db->get('reviews');
                    if ($query && $query->num_rows() > 0) {
                        return $query->result_array();
                    }
                }
            }
        } catch (Throwable $t) {
            // Database missing or connection error - handled gracefully like in blog module
        }

        return [];
    }

    function index()
    {
        $this->load->library('pagination');
        $this->load->helper('text');

        $all_reviews = $this->loadReviews();
        $total_rows = count($all_reviews);
        $per_page = 9;
        $offset = $this->input->get('per_page') ? (int) $this->input->get('per_page') : 0;

        // Pagination Config
        $config['base_url'] = site_url('reviews');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        $config['full_tag_open'] = '<ul class="pagination justify-content-center" style="margin-top: 30px;">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="javascript:void(0)" class="page-link" style="background:#002446; border-color:#002446; color:#fff;">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $paginated_reviews = array_slice($all_reviews, $offset, $per_page);

        $company_name = $this->comp['company3'] ?? 'V Move Packers and Movers';
        $data['company3'] = $company_name;
        $data['reviews'] = $paginated_reviews;
        $data['total'] = $total_rows;
        $data['pagination'] = $this->pagination->create_links();
        $data['title'] = "Customer Reviews & Ratings | " . $company_name;
        $data['description'] = "Read authentic customer reviews, ratings, and feedback for " . $company_name . ". Verified experiences of household moving and vehicle transport services.";
        $data['module'] = "reviews";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    function submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            @$this->load->database();

            $email = $this->input->post('email');

            try {
                $CI =& get_instance();
                if (isset($CI->db) && is_object($CI->db) && !empty($CI->db->conn_id)) {
                    if (!$CI->db->table_exists('reviews')) {
                        $this->createReviewsTable();
                    }
                    if ($CI->db->table_exists('reviews')) {
                        $CI->db->where('email', $email);
                        $existing = $CI->db->get('reviews');
                        if ($existing && $existing->num_rows() > 0) {
                            $this->session->set_flashdata('error', 'You have already submitted a review with this email address.');
                            redirect('reviews');
                            return;
                        }
                    }
                }
            } catch (Throwable $t) {
                // Ignore DB check error
            }

            $uploaded_images = [];
            if (isset($_FILES['review_images']) && !empty($_FILES['review_images']['name'][0])) {
                $upload_path = FCPATH . 'assets/images/reviews/';
                if (!is_dir($upload_path)) {
                    @mkdir($upload_path, 0777, true);
                }

                $files = $_FILES['review_images'];
                $count = count($files['name']);

                for ($i = 0; $i < $count; $i++) {
                    $tmp_name = $files['tmp_name'][$i];
                    $name = $files['name'][$i];
                    $error = $files['error'][$i];
                    $size = $files['size'][$i];

                    if ($error === UPLOAD_ERR_OK) {
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $mime = finfo_file($finfo, $tmp_name);
                        finfo_close($finfo);

                        $allowed_mimes = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];
                        if (in_array($mime, $allowed_mimes)) {
                            $new_name = uniqid('rev_') . '.jpg';
                            $dest = $upload_path . $new_name;

                            if ($size > 150000) {
                                $info = @getimagesize($tmp_name);
                                if ($info) {
                                    $image = null;
                                    if ($mime == 'image/jpeg' || $mime == 'image/jpg') $image = @imagecreatefromjpeg($tmp_name);
                                    elseif ($mime == 'image/png') $image = @imagecreatefrompng($tmp_name);
                                    elseif ($mime == 'image/webp') $image = @imagecreatefromwebp($tmp_name);

                                    if ($image) {
                                        if ($mime == 'image/png' || $mime == 'image/webp') {
                                            $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
                                            imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
                                            imagealphablending($bg, TRUE);
                                            imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
                                            imagedestroy($image);
                                            $image = $bg;
                                        }

                                        $width = imagesx($image);
                                        $height = imagesy($image);
                                        if ($width > 800) {
                                            $new_width = 800;
                                            $new_height = floor($height * (800 / $width));
                                            $tmp_img = imagecreatetruecolor($new_width, $new_height);
                                            imagecopyresampled($tmp_img, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                                            $image = $tmp_img;
                                        }
                                        @imagejpeg($image, $dest, 60);
                                        imagedestroy($image);
                                        $uploaded_images[] = 'assets/images/reviews/' . $new_name;
                                    }
                                }
                            } else {
                                $ext = pathinfo($name, PATHINFO_EXTENSION);
                                $new_name = uniqid('rev_') . '.' . $ext;
                                $dest = $upload_path . $new_name;
                                if (@move_uploaded_file($tmp_name, $dest)) {
                                    $uploaded_images[] = 'assets/images/reviews/' . $new_name;
                                }
                            }
                        }
                    }
                }
            }

            $r_img_val = implode(',', $uploaded_images);

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'r_title' => $this->input->post('city') ? $this->input->post('city') : 'Verified Shifting',
                'r_desc' => $this->input->post('review'),
                'stars' => (int) $this->input->post('rating'),
                'status' => 1,
                'b_id' => 0,
                'r_img' => $r_img_val,
                'views' => 0,
                'posted_date' => date('Y-m-d H:i:s')
            );

            try {
                $CI =& get_instance();
                if (isset($CI->db) && is_object($CI->db) && !empty($CI->db->conn_id)) {
                    if (!$CI->db->table_exists('reviews')) {
                        $this->createReviewsTable();
                    }
                    if ($CI->db->table_exists('reviews')) {
                        $CI->db->insert('reviews', $data);
                    }
                }
            } catch (Throwable $t) {
                // Handled gracefully
            }

            $this->session->set_flashdata('success', 'Thank you! Your review has been submitted successfully.');
            redirect('reviews');
        }
    }

    public function review()
    {
        header('Content-Type: application/json');

        $name = trim($this->input->post('name'));
        $email = trim($this->input->post('email'));
        $title = trim($this->input->post('title'));
        $stars = (int) $this->input->post('stars');
        $desc = trim($this->input->post('desc'));

        if (empty($name) || empty($email) || empty($desc)) {
            echo json_encode(['err' => 1, 'msg' => 'Please fill in all required fields (Name, Email, and Review).']);
            return;
        }

        if ($stars < 1 || $stars > 5) {
            $stars = 5;
        }

        $img_name = '';
        if (isset($_FILES['img']) && !empty($_FILES['img']['name'])) {
            $upload_path = FCPATH . 'assets/uploads/reviewimg/';
            if (!is_dir($upload_path)) {
                @mkdir($upload_path, 0777, true);
            }
            $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
            $img_name = time() . '_' . rand(1000, 9999) . '.' . $ext;
            @move_uploaded_file($_FILES['img']['tmp_name'], $upload_path . $img_name);
        }

        $data = array(
            'name' => $name,
            'email' => $email,
            'r_title' => !empty($title) ? $title : 'Verified Shifting',
            'r_desc' => $desc,
            'stars' => $stars,
            'r_img' => $img_name,
            'status' => 1,
            'b_id' => 0,
            'views' => 0,
            'posted_date' => date('Y-m-d H:i:s')
        );

        try {
            $CI =& get_instance();
            if (isset($CI->db) && is_object($CI->db) && !empty($CI->db->conn_id)) {
                if (!$CI->db->table_exists('reviews')) {
                    $this->createReviewsTable();
                }
                if ($CI->db->table_exists('reviews')) {
                    // Prevent duplicate submissions within 30 seconds
                    $recent = $CI->db->where('email', $email)
                                     ->where('r_desc', $desc)
                                     ->where('posted_date >=', date('Y-m-d H:i:s', time() - 30))
                                     ->get('reviews');

                    if ($recent && $recent->num_rows() > 0) {
                        echo json_encode(['err' => 0, 'msg' => 'Success! Thank you for your review! We appreciate your feedback.']);
                        return;
                    }

                    $CI->db->insert('reviews', $data);
                }
            }
        } catch (Throwable $t) {
            // Handled gracefully without crash
        }

        echo json_encode(['err' => 0, 'msg' => 'Success! Thank you for your review! We appreciate your feedback.']);
    }
}