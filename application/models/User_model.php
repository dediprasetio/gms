<?php

class User_model extends CI_model
{

    public function user_by_email($username)
    {
        return $this->db->query("SELECT
        tu.id_user,
        tu.name,
        tu.email,
        tu.position_short_name,
        tu.foto,
        tu.password,
        tu.level,
        tup.position_name
    FROM tb_user tu
    JOIN tb_user_position tup ON tup.position_short_name = tu.position_short_name
    WHERE tu.email = '$username'
    AND status_user = 1");
    }
}
