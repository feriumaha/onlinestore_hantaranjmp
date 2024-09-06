<?php 
class Welcome_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getslide(){
        $getslide = $this->db->query("SELECT * FROM slideshow");
        return $getslide->result();
    }

    public function getproduct(){
        $getproduct = $this->db->query("SELECT * FROM products, product_photo WHERE product_photo.product_id = products.product_id AND product_photo.status = '1' LIMIT 6");
        return $getproduct->result();
    }
}
?>