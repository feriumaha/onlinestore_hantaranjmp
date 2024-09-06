<?php
class Admingrabphonenumber_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function grabdata()
    {
        $getdata = $this->db->query("SELECT * FROM grab_data");
        return $getdata->result();
    }
}
?>