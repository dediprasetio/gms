<?php

class Freezer_model extends CI_model
{
	public function freezerBySite($site)
	{
		return $this->db->query("SELECT
                                    CONCAT ('freezer-',dt.data_tool_id) uniq_id,
                                    dt.name,
                                    dt.tool_code,
                                    dt.value,
                                    tt.tool_category_code,
                                    tt.tool_brand
                                FROM
                                data_tool dt,
                                tb_tool tt
                                WHERE dt.tool_code = tt.tool_code
                                AND dt.site_code = '$site'
                                AND tt.tool_category_code = 'FR'");
	}
}