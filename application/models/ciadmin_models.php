<?php
class Ciadmin_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password){
        $sql = $this->db->query("SELECT * FROM admin WHERE admin.username = '$username' AND admin.password = md5('$password')");
        return $sql;
    }
}
?>