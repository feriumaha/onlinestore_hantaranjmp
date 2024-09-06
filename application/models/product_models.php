<?php
class Product_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getproduct(){
        $getproduct = $this->db->query("SELECT * FROM products, product_photo WHERE product_photo.product_id = products.product_id AND product_photo.status = '1' ");
        return $getproduct->result();
    }

}
?>