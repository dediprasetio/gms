<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Main_api extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        // Load Authorization Token Library
        $this->load->library('Authorization_Token');
        //Load main model
        $this->load->model('main_model', 'm_main');
    }

    /************************************************************************
                                VALIDATE TOKEN
    *************************************************************************/
    function validateToken(){
        //VALIDATE JWT TOKEN
        $validate_token = $this->authorization_token->validateToken();
        if($validate_token['status'] == true){
            return ['status' => TRUE, 'message' => 'Token Authenticated'];
        }else{
            return ['status' => FALSE, 'message' => 'Invalid token'];
        }
        exit;//New Jwt Validate
        // return $validate_token;exit;

        //OLD JWT VALIDATE
        //GET TOKEN BASE ON SESSION ID
        $checkToken = $this->m_main->view_where('tb_user_log', array(
            'session_id'    => $validate_token->session_id,
            // 'ip_address'    => $this->input->ip_address()
        ));
        $result = $checkToken->row();
        if(!empty($result)){
            $refresh_time = $result->refresh_time;
            $time_difference = strtotime(date('Y-m-d h:i:s'))-strtotime($refresh_time);
    
            //VALIDATE REFRESH TIME TOKEN
            if( $time_difference >= TOKEN_EXPIRES_TIME_DIFF )
            {
                return ['status' => FALSE, 'message' => 'Token Time Expire.'];
            }else{
                if($this->input->ip_address() == $validate_token->ip_client){
                    $refresh_time = $this->refreshTime($validate_token->session_id);
                    return ['status' => TRUE, 'message' => 'Token Authenticated'];
                }else{
                    return ['status' => FALSE, 'message' => 'Invalid token'];
                }
            }

        }else{
            return ['status' => FALSE, 'message' => $validate_token->session_id];
        }
    }

    /************************************************************************
                        REFRESH TIME BASE ON SESSION ID
    *************************************************************************/
    function refreshTime($session_id){
        try{
            $refresh_token = $this->m_main->update(array('session_id' => $session_id), array('refresh_time' => date("Y-m-d h:i:s")), 'tb_user_log');
            return ['status' => TRUE, 'message' => 'Token Has Been Refreshed'];
        }catch(Exception $e){
            return ['status' => FALSE, 'message' => $e->getMessage()];
        }
    }
    
}
