<?php
class Authentication
{
    private $CI;

    function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->database();
        $this->CI->load->model('User_model', 'm_user');
        $this->CI->load->model('main_model', 'm_main');
    }

    public function verify($username, $password)
    {
        //IP CLIENT
        $ip_client = $this->CI->input->ip_address();
        $get_user         = $this->CI->m_user->user_by_email($username);
        //CHECK IF EXIST USERNAME
        if ($get_user->num_rows() == 1) {
            $data_user          = $get_user->row();
            $password_request   = $this->password_combine($password);
            $password_user      = $data_user->password;
            
            //PERIFY PASSWORD
            if ($this->password_verify($password_request, $password_user)) {
                //ARRAY USER DATA
                $user_data = array(
                    'id'                    => $data_user->id_user,
                    'email'                 => $data_user->email,
                    'name'                  => $data_user->name,
                    'position_short_name'   => $data_user->position_short_name,
                    'position_name'         => $data_user->position_name,
                    'level'                 => $data_user->level,
                    'foto'                  => $data_user->foto
                );

                
                // Load Authorization Token Library
                $this->CI->load->library('Authorization_Token');
                $session_id = md5(uniqid(rand(), true));

                // Generate Token
                $jwt_payload = array(
                    'session_id'    => $session_id,
                    'email'         => $data_user->email,
                    'ip_client'     => $ip_client,
                    'date'          => date("Y-m-d h:i:s")
                );

                $user_token = $this->CI->authorization_token->generateToken($jwt_payload);


                //RETURN ARRAY SUCCESS DATA
                $my_data = array(
                    'status'        => 'Authenticated',
                    'messages'      => 'Login succesfull.',
                    'user'          => $user_data,
                    'token'         => $user_token
                );

                //INSERT LOGIN HISTORY & TOKEN
                $this->insert_history($data_user->email, $session_id, $ip_client);

            } else {
                $my_data = array(
                    'status'    => 'Error',
                    'messages'      => 'Incorrect password, please make sure you are using the correct password.',
                    'user_data'     => array()
                );
            }
        } else {
            $my_data = array(
                'status'        => 'Error',
                'messages'      => 'Incorrect username, please make sure the username is registered and active.',
                'user_data'     => array()
            );
        }
        return $my_data;
    }

    //HASH PASSWORD & COMBINE
    public function password_combine($string)
    {
        $hashing        =  hash('sha512', $string . config_item('encryption_key'));
        $password       =  substr($hashing, 0, 50) . AUTH_KEY . substr($hashing, 51, 75);
        $final_base64   =  base64_encode($password);
        return $final_base64;
    }

    //HASH PASSWORD BCRYPT
    public function hashing($string)
    {
        return password_hash($string, PASSWORD_BCRYPT);
    }

    //PERIFY PASSWORD BCRIPT
    public function password_verify($password_request, $password_existing)
    {
        if (password_verify($password_request, $password_existing)) {
            return true;
        } else {
            return false;
        }
    }

    //INSERT HISTORY LOGIN
    function insert_history($email, $session_id, $ip_address)
    {
        $DataUpdateLogin = array(
            'email'                 => $email,
            'session_id'            => $session_id,
            // 'token'                 => $token,
            // 'refresh_token'         => $refresh_token,
            // 'token_expire_status'   => $token_expire_status,
            // 'token_expire_date'     => $token_expire_date,
            'ip_address'            => $ip_address,
            'created_at'            => date("Y-m-d h:i:s")
        );
        $my_data =  $this->CI->m_main->insert($DataUpdateLogin, 'tb_user_log');
        return $my_data;
    }

    //CHECK LOGIN
    public function check_login()
    {
        if (!empty($this->CI->session->userdata('name'))) {
            return 'Y';
        } else {
            return 'N';
        }
    }

    // ================================================================================================
    //                                     Encripted SSL
    // ================================================================================================
    
    /*
    -----------Sample-----------
    $array = array(
        'user' => 'Sirius'
    );
    $encrypted = json_encode($this->decrypted_ssl($encrypted));exit;
    $decrypted = json_encode(base64_encode('string'));exit;
    */

    public function encrypted_ssl($dataArray)
    {

        // FIRST CONVERT THE $userDataArray INTO JSON STRING
        $userDataJSON   = json_encode($dataArray);

        // NEXT CREATE A PASSWORD AND METHOD TO USE FOR ENCRYPTION...
        $pass           = AUTH_PASSWORD;
        $method         = 'aes-128-cbc';
        $initVector     = AUTH_VECTOR;

        // NOW ENCRYPT THE DATA...
        $encrypted      = openssl_encrypt($userDataJSON, $method, $pass, false, $initVector);

        return $encrypted;
    }

    public function decrypted_ssl($dataArray)
    {

        // FIRST CONVERT THE $userDataArray INTO JSON STRING
        $userDataJSON   = json_encode($dataArray);

        // NEXT CREATE A PASSWORD AND METHOD TO USE FOR ENCRYPTION...
        $pass           = AUTH_PASSWORD;
        $method         = 'aes-128-cbc';
        $initVector     = AUTH_VECTOR;

        // ATTEMPT TO DECRYPT THE DATA
        $decrypted      = openssl_decrypt($userDataJSON, $method, $pass, false, $initVector);

        return json_decode($decrypted);
    }
}
