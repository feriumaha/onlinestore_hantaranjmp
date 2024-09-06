<?php
class Overview_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function count_product(){
        $query = $this->db->get('products');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    public function count_admin(){
        $query = $this->db->get('admin');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    public function getadmin(){
        $get = $this->db->query("SELECT * FROM admin");
        return $get->result();
    }

    public function getslide(){
        $getslide = $this->db->query("SELECT * FROM slideshow");
        return $getslide->result();
    }

    public function updatedm($id_fb, $code_fb, $fb_pixel, $id_google, $code_google, $google_ads){
        $update1 = $this->db->query("UPDATE script_digitalmarketing SET code = '$code_fb' WHERE script_digitalmarketing.idscript = '$id_fb'");
        $update2 = $this->db->query("UPDATE script_digitalmarketing SET code = '$code_google' WHERE script_digitalmarketing.idscript = '$id_google'");
    }

    public function addamin($username, $pass){
        $add = $this->db->query("INSERT INTO admin (username, password) VALUES ('".$username."','".$pass."') ");
    }

    public function deladmin($admin_id){
        $del = $this->db->query("DELETE FROM admin WHERE admin_id = '$admin_id' ");
    }

    public function uploadslide($file_name){
        $upload = $this->db->query("INSERT INTO slideshow (file_name) VALUES ('".$file_name."') ");
    }

    public function delslide($slideshow_id){
        $del = $this->db->query("DELETE FROM slideshow WHERE slideshow_id = '$slideshow_id' ");
    }
}
?>