<?php
class Adminproduct_models extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getproductlist(){
        $get = $this->db->query("SELECT * FROM products, product_photo WHERE product_photo.product_id = products.product_id AND product_photo.status = '1' ");
        return $get->result();
    }

    public function deleteproduct($id){
        $delete = $this->db->query("DELETE FROM products WHERE products.product_id='$id'");
        $delete2 = $this->db->query("DELETE FROM product_photo WHERE product_photo.product_id='$id'");
    }
}
?>