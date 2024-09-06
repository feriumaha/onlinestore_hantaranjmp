<?php
class Addproduct_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function uploadproduct($product_id, $product_name, $price, $detail, $shopee_link, $bukalapak_link, $tokopedia_link, $lazada_link, $metadata){
        $upload_data = $this->db->query("INSERT INTO products (product_id, product_name, price, detail, shopee_link, bukalapak_link, tokopedia_link, lazada_link, metadata) 
                                        VALUES ('".$product_id."','".$product_name."','".$price."','".$detail."','".$shopee_link."','".$bukalapak_link."','".$tokopedia_link."','".$lazada_link."','".$metadata."')");
    }

    public function uploadphotoproduct($file_names, $product_id, $product_id, $status){
        $uplaod_photo = $this->db->query("INSERT INTO product_photo (product_id, file_name, status) VALUES ('".$product_id."','".$file_names."','".$status."')");
    }
}
?>