<?php
class Admineditproduct_models extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function data($product_id)
    {
        $get = $this->db->query("SELECT * FROM products, product_photo WHERE products.product_id = '$product_id' AND product_photo.product_id = '$product_id'");
        return $get->result();
    }

    public function addphoto($file_name, $product_id)
    {
        $uplaod_photo = $this->db->query("INSERT INTO product_photo (product_id, file_name) VALUES ('".$product_id."','".$file_name."')");
    }

    public function delete_photo($file_name)
    {
        $check = $this->db->query("DELETE FROM product_photo WHERE product_photo.file_name = '$file_name'");
    }

    public function updatedata($product_id, $product_name, $price, $detail, $shopee_link, $bukalapak_link, $tokopedia_link, $lazada_link, $metadata)
    {
        $update = $this->db->query("UPDATE products SET products.product_name = '$product_name', products.price = '$price', products.detail = '$detail', products.shopee_link = '$shopee_link', products.bukalapak_link = '$bukalapak_link', products.tokopedia_link = '$tokopedia_link', products.lazada_link = '$lazada_link', products.metadata = '$metadata' WHERE products.product_id = '$product_id'");
    }
}
?>