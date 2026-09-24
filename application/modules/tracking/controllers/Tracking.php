<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tracking extends MX_Controller {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $company_name = $this->comp['company3'];
        $data['company_name'] = $company_name;
        $data['title'] = "Live Shipment Tracking - Real-Time Consignment Status | " . $company_name;
        $data['description'] = "Track your shipment in real time with " . $company_name . ". Enter your tracking ID or LR consignment number to get instant live location and delivery updates.";
        $data['module'] = "tracking";
        $data['view_file'] = "tracking";
        echo Modules::run('template/layout2', $data);
    }

    public function track() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('trackingNumber', 'Tracking ID', 'required|trim');

        if ($this->form_validation->run() == true) {
            $this->load->model('tracking_mdl');
            $data = $this->tracking_mdl->trackings();

            if ($data) {
                $response = [
                    'status' => 'success',
                    'main' => [
                        'tracking_id' => !empty($data[0]['tracking_id']) ? $data[0]['tracking_id'] : (!empty($data[0]['lr_no']) ? $data[0]['lr_no'] : $data[0]['gr_no']),
                        'lr_no' => !empty($data[0]['lr_no']) ? $data[0]['lr_no'] : $data[0]['gr_no'],
                        'c_name' => $data[0]['c_name'],
                        'ship_from' => $data[0]['ship_from'],
                        'ship_to' => $data[0]['ship_to'],
                        'ship_type' => $data[0]['ship_type'],
                        'ex_del_date' => $data[0]['ex_del_date']
                    ],
                    'timeline' => []
                ];
                foreach ($data as $row) {
                    $response['timeline'][] = [
                        'type' => $row['type'],
                        'date' => $row['date'],
                        'time' => $row['time'],
                        'place' => $row['place'],
                        'remarks' => $row['remarks']
                    ];
                }
                echo json_encode($response);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Tracking number not found']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => validation_errors()]);
        }
    }
}
