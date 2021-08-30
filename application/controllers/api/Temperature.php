
<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Main_api.php';

class Temperature extends Main_api
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('authentication');
        $this->load->model('temperature_model', 'm_temperature');
    }

    function index(){
        $validate_token = $this->validateToken();
        if ($validate_token['status'] == true) {

            //CHECK HTTP METHOD
            $method = $this->input->server('REQUEST_METHOD');
            if ($method == "GET") {
                $chiller = $this->m_temperature->temperatureBySite('T133')->result_array();
                $dataArray = array(
                    'status'    => 'success',
                    'data'      => $chiller
                );
                $this->output
                    ->set_status_header(200, 'OK')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));

            } else {
                $dataArray = array(
                    'status'    => 'Error',
                    'message'   => 'Please makesure HTTP method'
                );
                $this->output
                    ->set_status_header(405, 'Method not allowed')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            }
        } else {
            $dataArray = array(
                'status'    => 'Error',
                'message'   => $validate_token['message']
            );
            $this->output
                ->set_status_header(405, 'Method not allowed')
                ->set_content_type('application/json')
                ->set_output(json_encode($dataArray));
        }
    }
}