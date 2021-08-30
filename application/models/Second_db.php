

   <?php

class Second_db extends CI_model
{
	public function latesPower1()
	{
        // Load database
        $db2 = $this->load->database('database2', TRUE);
		return $db2->query("SELECT * FROM `score` ORDER BY `score_time` DESC LIMIT 1");
	}

     public function latesPower($getdata)
    {
        $db2 = $this->load->database('database2', TRUE);
		$result = $db2->query("SELECT * FROM `score` ORDER BY `score_time` DESC LIMIT 1");
        
        while (!connection_aborted()) {
            $array = $result->result_array();
            $row = $result->row();
            $hasil =  count($array) == 0 ? ["t" => 0, "h" => 0, "a" => 0] : ["t" => strtotime($row->score_time), "h" => $row->score_home, "a" => $row->score_away];
            if ($hasil['t'] > $getdata->last) {
                return $hasil;
                break;
            }
            sleep(1); // Not to break the server. Short pause before next check.
        }
    }
}
