<?php
class Excel_export_model extends CI_Model{
    function fetch_data(){
        $this->db->order_by("grab_id", "DESC");
        $query = $this->db->get("grab_data");
        return $query->result();
    }
}