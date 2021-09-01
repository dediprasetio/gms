
<?php
defined('BASEPATH') or exit('No direct script access allowed');
include APPPATH . 'controllers/api/Main_api.php';

class Power extends Main_api
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('authentication');
        $this->load->model('power_model', 'm_power');
        $this->load->model('second_db');
    }

    function index()
    {$i = 0;
        while ($i < 10)
        {
            echo "Hi There!";
            flush();
            sleep(2);
            $i++;
        }
        exit;
        // set_time_limit(30); // Set the appropriate time limit
        // ignore_user_abort(false); // Stop when polling breaks
        // $getdata = json_decode(file_get_contents('php://input'));
        // echo json_encode(connection_aborted(1));exit;
        // (C) LOOP - CHECK FOR SCORE UPDATES
        // Will keep looping until a score update or timeout
        // $result = $this->second_db->latesPower($getdata);
        // echo json_encode($result);
        // exit;
        //VALIDATE TOKEN
        ignore_user_abort(true);
set_time_limit(0);
        $validate_token = $this->validateToken();
        if ($validate_token['status']) {

            //CHECK HTTP METHOD
            $method = $this->input->server('REQUEST_METHOD');
            if ($method == "GET") {

                $getdata = json_decode(file_get_contents('php://input'));

                // echo json_encode($this->input->get('timestamp'));exit;
                while (true) {
                    if(connection_status() != CONNECTION_NORMAL){
                        break;
                    }
                    $this->db->close();
                    $this->load->database(); 
                    $mySensor = $this->m_power->latesPower('R');
                    $data = $mySensor->row();
                    $last_ajax_call = !empty($this->input->get('timestamp')) ? $this->input->get('timestamp') : null;
                    // clearstatcache();
                    $a = array(
                        'status'    => 'bukan',
                        'ajax_call' => $last_ajax_call,
                        'effective_date' => $data->effective_date
                    );
                    if ($last_ajax_call == null || $last_ajax_call < $data->effective_date) {
                        $a = array(
                            'status'    => 'iya',
                            'ajax_call' => $last_ajax_call,
                            'effective_date' => $data->effective_date
                        );
                    }
                    if ($last_ajax_call == null || strtotime($last_ajax_call) < strtotime($data->effective_date)) {
                        echo json_encode(array(
                            'last_ajax' => $this->input->get('timestamp'),
                            'data'  => $data,
                            'effective_date'    => $data->effective_date,
                            'hasil' => $a
                        ));
                        // leave this loop step
                        break;
                    } else {
                        // wait for 1 sec (not very sexy as this blocks the PHP/Apache process, but that's how it goes)
                        sleep(1);
                        // continue;
                    }
                    // echo json_encode($last_ajax_call); exit;
                    // echo json_encode(array(
                    //     'status'    => 'baru',
                    //     'timestamp' =>date('Y-m-d H:i:s')
                    // ));
                    $this->db->close();
                }

                // $_phase = ['R', 'S', 'T'];

                // foreach ($_phase as $_sensor) {

                //     //GET DATA LISTRIK
                //     $mySensor = $this->m_power->getDataListrikBySensor($_sensor);
                //     if ($mySensor->num_rows() > 0) {
                //         $row = $mySensor->row();
                //         $phase  = "PHASE_" . $row->sensor; //initialize phase
                //         $data["listrik"][$phase]["id"]          = $row->id;
                //         $data["listrik"][$phase]["Voltage"]     = $row->Voltage;
                //         $data["listrik"][$phase]["Current"]     = $row->Current;
                //         $data["listrik"][$phase]["Power"]       = $row->Power;
                //         $data["listrik"][$phase]["Energy"]      = $row->Energy;
                //         $data["listrik"][$phase]["Frequency"]   = $row->Frequency;
                //         $data["listrik"][$phase]["PF"]          = $row->PF;
                //     }

                //     //GET DATA LISTRIK ROWS
                //     $mySensorRows = $this->m_power->getDataListrikBySensorRows($_sensor);
                //     foreach ($mySensorRows->result_array() as $rows) {
                //         $data["datarow"][$phase]["voltage"][] = number_format($rows['Voltage'], 2, '.', ',');
                //         $data["datarow"][$phase]["Current"][] = number_format($rows['Current'], 2, '.', ',');
                //         $data["datarow"][$phase]["labels"][] = $rows['labels'];
                //     }
                //     $data["datarow"][$phase]["voltage"] = array_reverse($data["datarow"][$phase]["voltage"]);
                //     $data["datarow"][$phase]["Current"] = array_reverse($data["datarow"][$phase]["Current"]);
                //     $data["datarow"][$phase]["labels"] = array_reverse($data["datarow"][$phase]["labels"]);
                // }

                // $myData = array(
                //     'status_code'   => 200,
                //     'status'        => 'Success',
                //     'data'          => $data
                // );

                // echo json_encode($myData);
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

    function all_power(){
        // header('Content-Type: application/x-www-form-urlencoded');
        // echo json_encode( $this->input->request_headers());exit;
        $validate_token = $this->validateToken();
        if ($validate_token['status'] == true) {

            //CHECK HTTP METHOD
            $method = $this->input->server('REQUEST_METHOD');
            if ($method == "POST") {

                $getdata = json_decode(file_get_contents('php://input'));

                $_phase = ['R', 'S', 'T'];

                foreach ($_phase as $_sensor) {

                    //GET DATA LISTRIK
                    $mySensor = $this->m_power->getDataListrikBySensor($_sensor);
                    if ($mySensor->num_rows() > 0) {
                        $row = $mySensor->row();
                        $phase  = "PHASE_" . $row->sensor; //initialize phase
                        $data["listrik"][$phase]["id"]          = $row->id;
                        $data["listrik"][$phase]["Voltage"]     = $row->Voltage;
                        $data["listrik"][$phase]["Current"]     = $row->Current;
                        $data["listrik"][$phase]["Power"]       = $row->Power;
                        $data["listrik"][$phase]["Energy"]      = $row->Energy;
                        $data["listrik"][$phase]["Frequency"]   = $row->Frequency;
                        $data["listrik"][$phase]["PF"]          = $row->PF;
                    }

                    //GET DATA LISTRIK ROWS
                    if($getdata->initialize == 0){
                        $mySensorRows = $this->m_power->getDataListrikBySensorRows($_sensor);
                        $data["datarow"][$phase] = $mySensorRows->result_array();
                    }else{
                        $mySensorRows = $this->m_power->getDataListrikBySensorOne($_sensor);
                        $data["datarow"][$phase] = $mySensorRows->result_array();
                    }
                }

                $myData = array(
                    'status_code'   => 200,
                    'status'        => 'Success',
                    'data'          => $data
                );

                echo json_encode($myData);
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
