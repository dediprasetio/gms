<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Main_api.php';

class User extends Main_api
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('authentication');
    }

    function index()
    {
        echo  'User routes';
    }

    function login()
    {
        header("Access-Control-Allow-Methods: POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
        
        # XSS Filtering (https://www.codeigniter.com/user_guide/libraries/security.html)
        $_POST = $this->security->xss_clean($_POST);
        
        //CHECK HTTP METHOD
        $method = $this->input->server('REQUEST_METHOD');
        if ($method == "POST") {
            $data = json_decode(file_get_contents('php://input'));
            $verivy_login = $this->authentication->verify($data->username, $data->password);

            //PERIFY LOGIN
            if ($verivy_login['status'] == 'Authenticated') {
                //RESPONSE
                $this->output
                    ->set_status_header(200)
                    ->set_content_type('application/json')
                    ->set_output(json_encode($verivy_login));
            } else {
                $dataArray = array(
                    'status'    => $verivy_login['status'],
                    'message'   => $verivy_login['messages']
                );
                $this->output
                    ->set_status_header(400, 'Message')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            }
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
    }

    function set_session()
    {
        //CHECK HTTP METHOD
        $method = $this->input->server('REQUEST_METHOD');
        if ($method == "POST") {
            $data = json_decode(file_get_contents('php://input'));
            try {
                $user_session = array(
                    'id'                    => $data->data->id,
                    'name'                  => $data->data->name,
                    'email'                 => $data->data->email,
                    'level'                 => $data->data->level,
                    'foto'                  => $data->data->foto,
                    'position_short_name'   => $data->data->position_short_name,
                    'position_name'         => $data->data->position_name,
                    'authorized'            => true
                );
                $this->session->set_userdata($user_session);
                $this->output
                    ->set_status_header(200, 'OK')
                    ->set_content_type('application/json');
            } catch (Exception $e) {
                $dataArray = array(
                    'status'    => 'Error',
                    'message'   => $e->getMessage()
                );
                $this->output
                    ->set_status_header(500, 'Method not allowed')
                    ->set_content_type('application/json')
                    ->set_output(json_encode($dataArray));
            }
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
    }
}
