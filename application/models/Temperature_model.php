<?php

class Temperature_model extends CI_model
{
	public function temperatureBySite($site)
	{
		return $this->db->query("SELECT
                                    CONCAT ('ac-',dt.data_tool_id) uniq_id,
                                    dt.name,
                                    dt.value,
                                    tt.tool_brand,
                                    tts.status
                                FROM
                                data_tool dt,
                                tb_tool tt,
                                tb_tool_status tts
                                WHERE dt.tool_code = tt.tool_code
                                AND dt.tool_code = tts.tool_code
                                AND dt.site_code = '$site'
                                AND tt.tool_category_code = 'AC'
                                AND dt.value BETWEEN tts.bottom_value AND tts.upper_value");
	}
}