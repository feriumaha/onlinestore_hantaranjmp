<?php
class Detail_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function detailproduct($product_id){
        $get = $this->db->query("SELECT * FROM products, product_photo WHERE products.product_id = '$product_id' AND product_photo.product_id = '$product_id' ");
        return $get->result();
    }

}
?>